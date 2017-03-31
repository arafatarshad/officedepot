<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Item;
use Input; 
class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=DB::select("SELECT id,name,image,description from category");
        $sub_categories=DB::select("SELECT a.id,a.name,a.description,a.image,a.category_id from sub_category a JOIN category b ON a.category_id=b.id");
        $items=DB::select("SELECT a.id,a.name,a.description,a.image,a.sub_category_id from item a JOIN sub_category b ON a.sub_category_id=b.id WHERE a.valid=1");
        
        return view("index",['categories'=>$categories,'sub_categories'=>$sub_categories,'items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }


    public function ReadMore($name){
        // dd($name);
        $data=DB::select("SELECT a.* FROM item a JOIN sub_category b ON a.sub_category_id=b.id JOIN category c on b.category_id=c.id AND c.name='$name' AND a.valid=1");
        $categories=DB::select("SELECT id,name,image,description from category");
        $sub_categories=DB::select("SELECT a.id,a.name,a.description,a.image,a.category_id from sub_category a JOIN category b ON a.category_id=b.id");
        $items=DB::select("SELECT a.id,a.name,a.description,a.image,a.sub_category_id from item a JOIN sub_category b ON a.sub_category_id=b.id WHERE a.valid=1");

        return view("knowmore",['categories'=>$categories,'sub_categories'=>$sub_categories,'items'=>$items,"data"=>$data]); 
    }
    public function ItemList($name){
        $id=DB::select("SELECT id from sub_category where name = '$name'")[0]->id;         
        $data=DB::select("SELECT * from item where sub_category_id=$id AND valid=1");
        // dd($items);

        $categories=DB::select("SELECT id,name,image,description from category");
        $sub_categories=DB::select("SELECT a.id,a.name,a.description,a.image,a.category_id from sub_category a JOIN category b ON a.category_id=b.id");
        $items=DB::select("SELECT a.id,a.name,a.description,a.image,a.sub_category_id from item a JOIN sub_category b ON a.sub_category_id=b.id WHERE a.valid=1");

        return view("itemlist",['categories'=>$categories,'sub_categories'=>$sub_categories,'items'=>$items,"data"=>$data]);
    }

    public function Contact(){
        $categories=DB::select("SELECT id,name,image,description from category");
        $sub_categories=DB::select("SELECT a.id,a.name,a.description,a.image,a.category_id from sub_category a JOIN category b ON a.category_id=b.id");
        $items=DB::select("SELECT a.id,a.name,a.description,a.image,a.sub_category_id from item a JOIN sub_category b ON a.sub_category_id=b.id WHERE a.valid=1");

        return view("contact",['categories'=>$categories,'sub_categories'=>$sub_categories,'items'=>$items]); 
    }
    public function Search(Request $request){
        // dd($request->all());
        $term=$request->term;
        $data=DB::select("SELECT * from item where name LIKE '%$term%' AND valid=1");
        // dd($items);

        $categories=DB::select("SELECT id,name,image,description from category");
        $sub_categories=DB::select("SELECT a.id,a.name,a.description,a.image,a.category_id from sub_category a JOIN category b ON a.category_id=b.id");
        $items=DB::select("SELECT a.id,a.name,a.description,a.image,a.sub_category_id from item a JOIN sub_category b ON a.sub_category_id=b.id WHERE a.valid=1");

        return view("searchlist",['categories'=>$categories,'sub_categories'=>$sub_categories,'items'=>$items,"data"=>$data]);
    }
    public function siteMap($name){ 
        $categories=DB::select("SELECT id,name,image,description from category");
        $sub_categories=DB::select("SELECT a.id,a.name,a.description,a.image,a.category_id from sub_category a JOIN category b ON a.category_id=b.id");
        $items=DB::select("SELECT a.id,a.name,a.description,a.image,a.sub_category_id from item a JOIN sub_category b ON a.sub_category_id=b.id WHERE a.valid=1");
        $data=DB::select("SELECT * from site_map WHERE link_name='$name'");
        return view("sitemap",['categories'=>$categories,'sub_categories'=>$sub_categories,'items'=>$items,'data'=>$data]);
    }
    public function editImage(){ 
        $categories=DB::select("SELECT id,name,image,description from category");
        $sub_categories=DB::select("SELECT a.id,a.name,a.description,a.image,a.category_id from sub_category a JOIN category b ON a.category_id=b.id");
        $items=DB::select("SELECT a.id,a.name,a.description,a.image,a.sub_category_id from item a JOIN sub_category b ON a.sub_category_id=b.id WHERE a.valid=1");
        $data=DB::select("SELECT * from item WHERE valid=1");
        return view("edit_page",['categories'=>$categories,'sub_categories'=>$sub_categories,'items'=>$items,'data'=>$data]);
    }
    public function changeItem(Request $request){ 

        $this->validate($request, [
            'name' => 'required|max:255',
            'image' => 'mimes:jpg,png,jpeg',
            ]);
        $id=intval($request->id);
        $item=Item::find($id);
        if (isset($request->name) && $request->name!="") {
            $item->name=$request->name;
        }

        if($request->hasFile('image')) {
            // dd("sdasd");
            $file = Input::file('image');
            $ext=$file->getClientOriginalExtension();
            $imagename = time() . uniqid() .$ext;
            $file->move(base_path() . '/public/img',$imagename);
        }
        dd($request->all());
    }

}

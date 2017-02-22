<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get("/","MainPageController@index");
Route::get("/read_more/{name}","MainPageController@ReadMore");
Route::get("/items/{name}","MainPageController@ItemList");
Route::get("/contact","MainPageController@Contact");
Route::post("/search","MainPageController@Search");

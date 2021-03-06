	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Ofcdepot</title>

		<!-- Bootstrap Core CSS -->
		<link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset ('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">  
		<link href="{{ asset ('css/main.css') }}" rel="stylesheet"> 

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body >
	<!-- header  -->
	<div class="row padding_x_10 padding_y_20 index_header" >  
		<img src="{{asset('img/logo.png')}}" alt="" class="pull-left">
		<form action="{{URL::to('/')}}/search" method="POST">

			<div class="input-group" style="width:200px;float: right;"> 
				<input type="text" name="term" class="form-control input-sm" placeholder="Search" required="" />
				{{ csrf_field() }}
				<span class="input-group-btn">
					<button class="btn btn-info btn-sm" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</span> 
			</div>
		</form>
		<span style="float: right;padding-right: 10px;padding-top: 5px"><a href="{{URL::to('/')}}/contact">Contact </a>| </span>     
	</div>
	<!-- navigation  -->
	<div class="row padding_x_10 border_top border_bottom" style="margin-bottom: 20px;-webkit-box-shadow: 3px -2px 30px 0px rgba(50, 50, 50, 0.23);
	-moz-box-shadow:    3px -2px 30px 0px rgba(50, 50, 50, 0.23);
	box-shadow:         3px -2px 30px 0px rgba(50, 50, 50, 0.23);"> 
	<ul class="index_nav nav navbar-nav" id="menu">
		@if(isset($categories) && !empty($categories))
		@foreach($categories as $category)
		<li class="dropdown">
			<a href="#"  class="nav_link">{{$category->name}}</a>

			@if($category->id==8)
			<div class="dropdown_2columns">
				@elseif($category->id==7)
				<div class="dropdown_4columns">
					@else
					<div class="dropdown_5columns">
						@endif
						@if(isset($sub_categories) && !empty($sub_categories))
						@foreach($sub_categories as $sub_category)
						@if($sub_category->category_id==$category->id)
						<div class="col_1"> 
							<ul>
								<li><a href="{{URL::to('/')}}/items/{{$sub_category->name}}" class="sub_category_item">{{$sub_category->name}}</a></li>
								@if(isset($items) && !empty($items))
								<ul class="items">
									@foreach($items as $item)
									@if($item->sub_category_id==$sub_category->id)
									<li>{{$item->name}}</li>  	
									@endif
									@endforeach
								</ul>
								@endif
							</ul>   
						</div> 
						@endif
						@endforeach
						@endif
					</div>
				</li>
				@endforeach
				@endif
			</ul>
		</div>

		<div class="row padding_x_10 item_row">
			<a href="{{URL::to('/')}}">Home</a> /</a>
			@if(isset($data) && !empty($data))
			<h3 style="color: #F69E70">{{sizeof($data)}} items found</h3>
			@foreach($data as $row)
			<div class="row single-item-row">
				<button class="btn btn-danger item_edit_btn" name="{{$row->id}}"  data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil"></i></button>
				<input type="hidden" value="{{$row->name}}" class="item_name">
				@if($row->image!="" || !is_null($row->image))
				<img src="{{asset('img/'.$row->image)}}" class="item-img" >
				@else 
				<img src="http://placehold.it/300x250" class="item-img" >
				@endif	

				<div class="item-description">
					<h4 class="item-name">{{ $row->name}}</h4>
					<h4 class="item-number"> {{ "Item# OD".$row->id}}</h4> 
				</div> 
			</div>
			@endforeach
			@else
			<h1 class="not-found">Sorry, No result Found</h1>
			@endif
		</div>




		<div class="row index_footer text-center" style="margin-bottom: 20px;-webkit-box-shadow: 3px -2px 30px 0px rgba(50, 50, 50, 0.23);
		-moz-box-shadow:    3px -2px 30px 0px rgba(50, 50, 50, 0.23);
		box-shadow:         3px -2px 30px 0px rgba(50, 50, 50, 0.23);">
		<h6>Copyright &copy 2017, All rights Reserved to Office Depot</h6>
	</div>
	<!-- jQuery -->
	<script src="{{ asset ('js/jquery.js') }}"></script>
	<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
	<!-- <script src="{{ asset ('/assets/js/cross-domain-request.js') }}"></script> -->
	<!-- Script to Activate the Carousel -->



	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Change Item</h4>
				</div>
				<div class="modal-body">
					<form action="{{URL::to('/')}}/change_item" method="POST" enctype="multipart/form-data"> 
					 {{ csrf_field() }}
						<div class="row">
							<label>Item Name</label>
							<input type="text" name="name" id="modal_name"> 
						</div>
						<div class="row">
							<label>Item Image</label>
							<input type="file" name="image" > 
						</div>
						<input type="hidden" name="id" id="modal_id">
					</div>
					<div class="modal-footer">

						<input type="submit" class="btn btn-success">

					</form> 
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	<script>
		$(document).ready(function(){ 
			$('.nav_link').on('click',function(){ 
				$('.nav_panel').css('display','block');
			});
			$('.item_edit_btn').on("click",function(){

				var id=$(this).attr("name");
				var name=$(this).siblings(".item_name").val();
				// alert(name); 
				$("#modal_id").val(id);
				$("#modal_name").val(name);
			});
		});
	</script>
</body>

</html>

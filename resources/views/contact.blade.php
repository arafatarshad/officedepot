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
	<style>

		input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
			color: #aca49c;
			font-size: 0.875em;
		}

		input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
			color: #bbb5af;
		}

		input::-moz-placeholder, textarea::-moz-placeholder {
			color: #aca49c;
			font-size: 0.875em;
		}

		input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
			color: #bbb5af;
		}

		input::placeholder, textarea::placeholder {
			color: #aca49c;
			font-size: 0.875em;
		}

		input:focus::placeholder, textarea::focus:placeholder {
			color: #bbb5af;
		}

		input::-ms-placeholder, textarea::-ms-placeholder {
			color: #aca49c;
			font-size: 0.875em;
		}

		input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
			color: #bbb5af;
		}

		/* on hover placeholder */

		input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
			color: #e2dedb;
			font-size: 0.875em;
		}

		input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
			color: #cbc6c1;
		}

		input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
			color: #e2dedb;
			font-size: 0.875em;
		}

		input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
			color: #cbc6c1;
		}

		input:hover::placeholder, textarea:hover::placeholder {
			color: #e2dedb;
			font-size: 0.875em;
		}

		input:hover:focus::placeholder, textarea:hover:focus::placeholder {
			color: #cbc6c1;
		}

		input:hover::placeholder, textarea:hover::placeholder {
			color: #e2dedb;
			font-size: 0.875em;
		}

		input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
			color: #cbc6c1;
		}

		body {
			font-family: 'Lato', sans-serif;
			/*background: #e2dedb;*/
			color: #b3aca7;
		}

		header {
			position: relative;
			margin: 100px 0 25px 0;
			font-size: 2.3em;
			text-align: center;
			letter-spacing: 7px;
		}

		#form {
			position: relative;
			width: 500px;
			margin: 50px auto 100px auto;
		}

		input {
			font-family: 'Lato', sans-serif;
			font-size: 0.875em;
			width: 500px;
			height: 50px;
			padding: 0px 15px 0px 15px;

			background: transparent;
			outline: none;
			color: #726659;

			border: solid 1px #b3aca7;
			border-bottom: none;

			transition: all 0.3s ease-in-out;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
		}

		input:hover {
			background: #b3aca7;
			color: #e2dedb;
		}

		textarea {
			width: 500px;
			max-width: 500px;
			height: 110px;
			max-height: 110px;
			padding: 15px;

			background: transparent;
			outline: none;

			color: #726659;
			font-family: 'Lato', sans-serif;
			font-size: 0.875em;

			border: solid 1px #b3aca7;

			transition: all 0.3s ease-in-out;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
		}

		textarea:hover {
			background: #b3aca7;
			color: #e2dedb;
		}

		#submit {
			width: 500px;

			padding: 0;
			margin: -5px 0px 0px 0px;

			font-family: 'Lato', sans-serif;
			font-size: 0.875em;
			color: #b3aca7;

			outline:none;
			cursor: pointer;

			border: solid 1px #b3aca7;
			border-top: none;
		}

		#submit:hover {
			color: #e2dedb;
		}
	</style>
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

		<!-- carousel  -->
		<div class="row padding_x_10" >
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;padding-right: 5px;position: relative;"> 
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li> 
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox" >
					<div class="item active" style="width: inherit;">
						<img src="{{asset('img/HOMEPAGE-2.png')}}" alt="Chania" style="width: inherit;">
					</div>

					<div class="item" style="width: inherit;">
						<img src="{{asset('img/HOMEPAGE-3.png')}}" alt="Chania" style="width: inherit;">
					</div>

					<div class="item" style="width: inherit;">
						<img src="{{asset('img/HOMEPAGE-1.png')}}" alt="Flower" style="width: inherit;">
					</div> 
				</div> 
			</div>
		</div>
		<div class="row padding_x_10">
			<hr>
		</div>
		<div class="row padding_x_10" style="margin-bottom: 20px">
			<header>
				<h1>Office Depot Inc.</h1>
				<h4>House # 4,Road # 5,Block - B</h4>
				<h4>Gulshan, Dhaka -1207</h4>
				<h4>Phone : 55 902323, 02 456789</h4>
				<h3>Talk To us </h3>
			</header>
			<form id="form" class="topBefore">

				<input id="name" type="text" placeholder="NAME" required="">
				<input id="email" type="text" placeholder="E-MAIL" required="">
				<textarea id="message" type="text" placeholder="MESSAGE" required=""></textarea>
				<input id="submit" type="submit" value="GO!">

			</form>
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
	<script>
		$(document).ready(function(){ 
			$('.nav_link').on('click',function(){ 
				$('.nav_panel').css('display','block');
			});
		});
	</script>
</body>

</html>

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
	<style type="text/css">
		.carousel-inner img{
			height:350px !important;
			border-bottom: 15px solid #FF0000;
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
						<img src="{{asset('img/HOMEPAGE-2.jpg')}}" style="width: inherit;">
					</div>

					<div class="item" style="width: inherit;">
						<img src="{{asset('img/HOMEPAGE-3.jpg')}}" style="width: inherit;">
					</div>

					<div class="item" style="width: inherit;">
						<img src="{{asset('img/HOMEPAGE-1.jpg')}}"  style="width: inherit;">
					</div> 
				</div> 
			</div>
		</div>
		<div class="row padding_x_10">
			<hr>
		</div>
		<div class="row padding_x_10" style="margin-bottom: 20px">
			<h1 style="font-size: 32px;">Supporting All Your <span style="color: red"> Work Place Needs . . <span></h1>
		</div>
		<div class="row padding_x_10" style="margin-bottom: 80px">
			<div class="row border_top border_bottom intro-row">
				@for($i=0;$i<4;$i++)
				@if($i==3)
				<div class="thumb-description">
					@else
					<div class="thumb-description nav_border_right">
						@endif
						<h3>{{$categories[$i]->name}}</h3>
						<div class="hr_name"><hr></div> 
						<img src="{{asset('img/'.$categories[$i]->image)}}" class="img-responsive"> 
						<br>
						<a href="{{URL::to('/')}}/read_more/{{$categories[$i]->name}}">Read More > </a>
					</div>

					@endfor
				</div>
				<div class="row border_top border_bottom intro-row">
					@for($i=4;$i<8;$i++)
					@if($i==7)
					<div class="thumb-description">
						@else
						<div class="thumb-description nav_border_right">
							@endif	<h3>{{$categories[$i]->name}}</h3>
							<div class="hr_name"><hr></div> 
							<img src="{{asset('img/'.$categories[$i]->image)}}" class="img-responsive"> 
							<br>
							<a href="{{URL::to('/')}}/read_more/{{$categories[$i]->name}}">Read More > </a>
						</div>

						@endfor 
					</div>	
				</div>



				<div class="row padding_x_10" style="margin-bottom: 20px;padding: 0 20%">
					<table style="width:100%;"  >
						<tr>
							<th style="width: 20%">
								Company Information  
								<div class="hr_name"><hr></div>
							</th>	
							<th style="width: 20%">  Customer Service
								<div class="hr_name"><hr></div>
							</th>
							<th style="width: 20%"> 
								Additional Service
								<div class="hr_name"><hr></div>
							</th> 
						</tr>
						<tr>
							<td>
								<a href="{{URL::to('/')}}/site_map/who_we_are">
									Who we are?
								</a>
							</td>
							<td>
								<a href="{{URL::to('/')}}/site_map/customer_service">
									Customer Service
								</a>
							</td>
							<td> 
								<a href="{{URL::to('/')}}/site_map/security_service">
									Security Service
								</a>
							</td>
						</tr> 
						<tr>
							<td>
								<a href="{{URL::to('/')}}/site_map/who_buy_from_us">
									Who Buy From Us
								</a></td>
								<td>		
									<a href="{{URL::to('/')}}/site_map/our_clients">
										Our Clients
									</a>
								</td>
								<td> 
									<a href="{{URL::to('/')}}/site_map/catering_service">
										Catering and Office Meal Services
									</a>
								</td>
							</tr> 
							<tr>
								<td><a href="{{URL::to('/')}}/contact">
									Company Details
								</a></td>
								<td>
									<a href="{{URL::to('/')}}/site_map/delivery_information">
										Delivery Information
									</a>
								</td>
								<td>
									<a href="{{URL::to('/')}}/site_map/cleaning_service">
										Housekeeping and Cleaning Services
									</a>
								</td>
							</tr> 
							<tr>
								<td></td>
								<td>
									<a href="{{URL::to('/')}}/site_map/return_policy">Return Policy
									</a>
								</td>
								<td> 
								<a href="{{URL::to('/')}}/site_map/courier_service">
										Courier Services
									</a>
								</td>
							</tr> 							
						</table>
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

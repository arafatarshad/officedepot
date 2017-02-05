<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Agri Biznes</title>

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
		<div class="input-group" style="width:200px;float: right;">
			<input type="text" class="form-control input-sm" placeholder="Buscar" />
			<span class="input-group-btn">
				<button class="btn btn-info btn-sm" type="button">
					<i class="glyphicon glyphicon-search"></i>
				</button>
			</span>
		</div>
		<span style="float: right;padding-right: 10px;padding-top: 5px">Contact | </span>    
	</div>
	<!-- navigation  -->
	<div class="row padding_x_10 border_top border_bottom" style="margin-bottom: 20px;-webkit-box-shadow: 3px -2px 30px 0px rgba(50, 50, 50, 0.23);
	-moz-box-shadow:    3px -2px 30px 0px rgba(50, 50, 50, 0.23);
	box-shadow:         3px -2px 30px 0px rgba(50, 50, 50, 0.23);"> 
	<ul class="index_nav nav navbar-nav" id="menu">
		<li class="dropdown">
			<a href="#" data-toggle="dropdown" class="nav_link">Office Supplies</a>  
			<div class="dropdown-menu multi-column">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span6">
							<ul class="dropdown-menu">
								<li><a href="#">Col 1 - Opt 1</a></li>
								<li><a href="#">Col 1 - Opt 2</a></li>
							</ul>
						</div>
						<div class="span6">
							<ul class="dropdown-menu">
								<li><a href="#">Col 2 - Opt 1</a></li>
								<li><a href="#">Col 2 - Opt 2</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
		<li class="">
			<a href="#" class="nav_link">Office Supplies</a> 
		</li>
		<li class="">
			<a href="#" class="nav_link">Office Supplies</a> 
		</li>
		<li class="">
			<a href="#" class="nav_link">Office Supplies</a> 
		</li>
		<li class="">
			<a href="#" class="nav_link">Office Supplies</a> 
		</li>
		<li class="">
			<a href="#" class="nav_link">Office Supplies</a> 
		</li>
		<li class="nav_border_right nav_link">
			<a href="#">Office Supplies</a> 
		</li>			
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
				<img src="{{asset('img/HOMEPAGE-1.png')}}" alt="Chania" style="width: inherit;">
			</div>

			<div class="item" style="width: inherit;">
				<img src="{{asset('img/HOMEPAGE-1.png')}}" alt="Chania" style="width: inherit;">
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
	<h1 style="font-size: 32px;">Supporting All Your <span style="color: red"> Work Place Needs . . <span></h1>
</div>





<div class="row padding_x_10" style="margin-bottom: 80px">
	<div class="row border_top border_bottom intro-row">
		<div class="thumb-description nav_border_right">
			<h3>Office Supplies</h3>
			<div class="hr_name"><hr></div>
			<img src="{{asset('img/homethumb.png')}}" alt="">
			<br>
			<a href="">Read More > </a>
		</div>
		<div class="thumb-description nav_border_right">
			<h3>Office Supplies</h3>
			<div class="hr_name"><hr></div>
			<img src="{{asset('img/homethumb.png')}}" alt="">
			<br>
			<a href="">Read More > </a>
		</div>
		<div class="thumb-description nav_border_right">
			<h3>Office Supplies</h3>
			<div class="hr_name"><hr></div>
			<img src="{{asset('img/homethumb.png')}}" alt="">
			<br>
			<a href="">Read More > </a>
		</div>
		<div class="thumb-description">
			<h3>Office Supplies</h3>
			<div class="hr_name"><hr></div>
			<img src="{{asset('img/homethumb.png')}}" alt="">
			<br>
			<a href="">Read More > </a>
		</div> 
	</div>
	<div class="row border_top border_bottom intro-row">
		<div class="thumb-description nav_border_right">
			<h3>Office Supplies</h3>
			<div class="hr_name"><hr></div>
			<img src="{{asset('img/homethumb.png')}}" alt="">
			<br>
			<a href="">Read More > </a>
		</div>
		<div class="thumb-description nav_border_right">
			<h3>Office Supplies</h3>
			<div class="hr_name"><hr></div>
			<img src="{{asset('img/homethumb.png')}}" alt="">
			<br>
			<a href="">Read More > </a>
		</div>
		<div class="thumb-description nav_border_right">
			<h3>Office Supplies</h3>
			<div class="hr_name"><hr></div>
			<img src="{{asset('img/homethumb.png')}}" alt="">
			<br>
			<a href="">Read More > </a>
		</div>
		<div class="thumb-description">
			<h3>Office Supplies</h3>
			<div class="hr_name"><hr></div>
			<img src="{{asset('img/homethumb.png')}}" alt="">
			<br>
			<a href="">Read More > </a>
		</div> 
	</div>	
</div>



<div class="row padding_x_10" style="margin-bottom: 40px">
	<table style="width:100%">
		<tr>
			<th style="width: 20%"> Site Information <br>	
				<div class="hr_name"><hr></div>
			</th>	
			<th style="width: 20%"> Company Information <br>	
				<div class="hr_name"><hr></div>
			</th>
			<th style="width: 20%"> Customer Service <br>	
				<div class="hr_name"><hr></div>
			</th>
			<th style="width: 20%"> Additional Service<br>	
				<div class="hr_name"><hr></div>
			</th>
			<th style="width: 20%"> Information Guide <br>	
				<div class="hr_name"><hr></div>
			</th>
		</tr>
		<tr>
			<td>Site Map</td>
			<td>Who are we</td>
			<td>Customer Service</td>
			<td>Necter Business</td>
			<td>Envelope Type and Size guide</td>
		</tr> 
		<tr>
			<td>Site Map</td>
			<td>Who are we</td>
			<td>Customer Service</td>
			<td>Necter Business</td>
			<td>Envelope Type and Size guide</td>
		</tr> 
		<tr>
			<td>Site Map</td>
			<td>Who are we</td>
			<td>Customer Service</td>
			<td>Necter Business</td>
			<td>Envelope Type and Size guide</td>
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

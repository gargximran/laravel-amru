

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Amru Bazar</title>

	<!-- Favicon -->
	
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/fav.png')}}">
	<!-- fonts file -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<!--- Font Awesome CSS 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 

	<!-- main bootstrap file -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/bootstrap.min.css')}}"> 

	<!-- jqeruy ui css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/jquery-ui.css')}}"> 

               <!-- SweetAlert2 -->
			   <link rel="stylesheet" href="{{asset('public/assets/css/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
			   <!-- Toastr -->
			   <link rel="stylesheet" href="{{asset('public/assets/css/toastr.min.css')}}">
	<!-- owl carousel pluging css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}"> 

	<!-- animate css 
	<link rel="stylesheet" type="text/css" href="css/animate.css')}}"> -->

	<!-- bootstrap v3 css 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}"> -->

	<!-- Optional theme 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css')}}"> -->

	<!-- multiple select css 
	<link rel="stylesheet" type="text/css" href="css/choosen.css"> -->

	<!-- the main css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css')}}"> 

	<!-- responsive css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css')}}"> 	
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css')}}"> 

</head>
<body>
    



<!-- topbar middle start -->
<section class="topbar-bottom for-pc">
	<div class="container">
		
		<!-- row start -->
		<div class="row">
			
			<!--- logo start -->
			<div class="col-md-3">
				<a href="{{url('/')}}">
					<img src="{{asset('public/frontend/images/logo.png')}}" class="img-fluid"  style="height: 60px">
				</a>
			</div>
			<!--- logo end -->

			<!-- search option start -->
			<div class="col-md-6">
				<div class="topbar-bottom-search">
				<form action="{{url('/search')}}" method="post">
					@csrf
						<div class="form-group">
							<input type="search" class="form-control" name="search" placeholder="Search For Products">
						</div>

						<div class="form-group search-button">
							<input type="submit" class="form-control" value="Search" name="">
						</div>
					</form>
				</div>
			</div>
			<!-- search option end -->

			<!-- cart wishlist start -->
			<div class="col-md-3">
				<div class="cart-wishlist">
					<ul>
						<li>
							<a href="">
								<img src="{{asset('public/frontend/images/wishlist.png')}}" class="img-fluid">
							</a>
						</li>

						<li class="cart">
							<a href="{{url('/checkout')}}">
								<img src="{{asset('public/frontend/images/cart.png')}}" class="img-fluid">

								<!-- cart number start -->
								<div class="cart-number">
									<p id="carttotal">@if(Cart::count()>0) {{Cart::count()}} @else 0 @endif</p>

								</div>
								<!-- cart number end-->

							</a>
						</li>
						<li>
						<a href="{{url('/customer/profile')}}">
								<img src="{{asset('public/frontend/images/user.png')}}" class="img-fluid">
							</a>
						</li>

					</ul>
				</div>
			</div>
			<!-- cart wishlist end -->

		</div>
		<!-- row end -->

	</div>
</section>
<!-- topbar middle end -->




<!-- topbar mobile start -->
<section class="topbar-mob">
	<div class="container">
		<div class="row">

			<!-- cart wishlist start -->
			<div class="col-4">
				<div class="cart-wishlist">
					<ul>
						<li>
							<a href="">
								<img src="{{asset('public/frontend/images/wishlist.png')}}" class="img-fluid">
							</a>
						</li>

						<li class="cart">
							<a href="{{url('/checkout')}}">
								<img src="{{asset('public/frontend/images/cart.png')}}" class="img-fluid">

								<!-- cart number start -->
								<div class="cart-number">
									<p id="carttotal">@if(Cart::count()>0) {{Cart::count()}} @else 0 @endif</p>

								</div>
								<!-- cart number end-->

							</a>
						</li>
						

					</ul>
				</div>
			</div>
			<!-- cart wishlist end -->
			
			<!-- logo start -->
			<div class="col-4 topbar-mob-img">
				<a href="{{url('/')}}">
					<img src="{{asset('public/frontend/images/logo.png')}}" class="img-fluid">
				</a>
			</div>
			<!-- logo end -->

			<!-- search option start -->
			<div class="col-4 navbar-mob-right">
			    <ul>
			        <li class="search-mob">
			            <i class="fas fa-search "></i>
			        </li>
			        <li class="menu-dropdown-mob for-mob">
			            <i class="fas fa-bars show-nav"></i>
                	    <i class="fas fa-times hide-nav"></i>
			        </li>
			    </ul>
				
			</div>
			<!-- search option end -->

		</div>
	</div>

	<!-- search mobile -->
	<div class="topbar-bottom-search">
		<form action="{{url('/search')}}" method="post">
					@csrf
			<div class="form-group">
				<input type="search" class="form-control" name="search" placeholder="Search For Products">
			</div>

			<div class="form-group search-button">
				<input type="submit" class="form-control" value="Search" name="">
			</div>
		</form>
	</div>
	<!-- search end -->
</section>


<section class="topbar-bottom-mob">

	<!-- show item start -->
	<div class="show-item p1">
		<h2>phone</h2>
		<p>01755-060693</p>
	</div>
	<!-- show item end -->

	<!-- show item start -->
	<div class="show-item p2">
		<h2>E-Mail</h2>
		<p>info@amrubazarbd.com</p>
	</div>
	<!-- show item end -->

	<!-- show item start -->
	<div class="show-item p3">
		<h2>Location</h2>
		<p>Dobadia bazar Uttar khan
			Uttara Dhaka 1230
			1230 Dhaka, Bangladesh</p>
	</div>
	<!-- show item end -->

	<!-- show item start -->
	<div class="show-item p4">
		<h2>Tk</h2>
		<p>Bangladesh</p>
	</div>
	<!-- show item end -->

	<!-- show item start -->
	<div class="show-item p5">
		<a href="{{url('/customer/profile')}}">login or register</a>
	</div>
	<!-- show item end -->

	<div class="container">

		<div class="row">
			<div class="col-1"></div>
			<!-- phone start -->
			<div class="col-2 show-item-mob" id="p1">
				<img src="{{asset('public/frontend/images/phone.png')}}" class="img-fluid">
			</div>
			<!-- phone end -->

			<!-- email start -->
			<div class="col-2 show-item-mob" id="p2">
				<img src="{{asset('public/frontend/images/email.png')}}" class="img-fluid">
			</div>
			<!-- email end -->

			<!-- map start -->
			<div class="col-2 show-item-mob" id="p3">
				<img src="{{asset('public/frontend/images/map.png')}}" class="img-fluid">
			</div>
			<!-- map end -->

			<!-- dollar start -->
			<div class="col-2 show-item-mob" id="p4">
				<img src="{{asset('public/frontend/images/dollar.png')}}" class="img-fluid">
			</div>
			<!-- dollar end -->

			<!-- user start -->
			<div class="col-2 show-item-mob" id="p5">
				<img src="{{asset('public/frontend/images/user.png')}}" class="img-fluid">
			</div>
			<!-- user end -->
			<div class="col-1"></div>
		</div>

	</div>

</section>
<!-- topbar mobile end -->


<!-- navbar start -->

@yield('navbar')
<!-- navbar end -->

<!-- navbar drop down start -->
<section class="navbar-dropdown for-pc">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li class="nav-mega-menu">
						<a href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-mega-menu">
						<a href="{{url('/pre-order')}}">Pre-Order</a>

						<!-- drop down mega menu start -->
				
						<!-- drop down mega menu end -->

					</li>
					<li class="nav-mega-menu">
						<a href="{{url('/offer')}}">offer</a>

						<!-- drop down mega menu start -->
						<!--<div class="navbar-megamenu">-->
						<!--	<div class="row">-->
						<!--		<div class="col-md-12">-->
						<!--			<a href="">item one</a>-->
						<!--		</div>-->
						<!--		<div class="col-md-12">-->
						<!--			<a href="">item two</a>-->
						<!--		</div>-->
						<!--		<div class="col-md-12">-->
						<!--			<a href="">item three</a>-->
						<!--		</div>-->
						<!--		<div class="col-md-12">-->
						<!--			<a href="">item four</a>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!-- drop down mega menu end -->

					</li>
					<li class="nav-mega-menu">
						<a href="">career</a>

						<!-- drop down mega menu start -->
				
						<!-- drop down mega menu end -->

					</li>
				
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- navbar drop down end -->






<!-- navbar drop down for mob start -->
<section class="menu-dropdown-mob for-mob">

	<!-- fixed menu start -->
	<div class="fixed-menu-mob">
		<ul>
			<li>
				<a href="{{url('/')}}">
					<img src="{{asset('public/frontend/images/logo.png')}}" class="img-fluid">
				</a>
			</li>
			<li>
				@foreach($viewCat as $category)
				@if($category->has('subcategories'))
				<div class="row nav-mega-menu">
					<div class="col-8">
						<a >{{$category->category_name}}</a>
					</div>
					<div class="col-4 nav-mega-menu-icon">
						@foreach($category->subcategories as $subcategory)
						@endforeach
						@if( $category->subcategories->count() > 0 ) 
						<i class="fas fa-chevron-down" id="{{$category->id}}"></i>
						@endif
                    	       
						
					</div>
				</div>

				<div class="row mega-menu-mob {{$category->id}}">
					@foreach($category->subcategories as $subcategory)
					<div class="col-md-12">
						<a href="{{url('/products/'.$subcategory->sub_slug)}}">{{$subcategory->sub_name}}</a>
					</div>
					@endforeach
					
				</div>
				@endif
			@endforeach
			
		</ul>
	</div>
	<!-- fixed menu end -->

</section>
<!-- navbar drop down for mob start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


@yield('mainContent')




<footer>
	<div class="container">
		<div class="row">
			
			<!-- widget one start -->
			<div class="col-md-4">
				<div class="widget">
					<img src="{{asset('public/frontend/images/logo.png')}}" class="img-fluid">
				</div>
				<div class="row widget-bottom-row">
					<div class="col-md-2">
						<img src="{{asset('public/frontend/images/widget_icon.png')}}" class="img-fluid">
					</div>
					<div class="col-md-10">
						<h2>01755-060693</h2>
						<p>Dobadia bazar Uttar khan
							Uttara Dhaka 1230
							1230 Dhaka, Bangladesh</p>
						<ul>
							<li>
								<a href="">
									<img src="{{asset('public/frontend/images/twitter.png')}}" class="img-fluid">
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/Amrubazarbd">
									<img src="{{asset('public/frontend/images/facebook.png')}}" class="img-fluid">
								</a>
							</li>
							{{-- <li>
								<a href="">
									<img src="{{asset('public/frontend/images/icon-3.png')}}" class="img-fluid">
								</a>
							</li>
							<li>
								<a href="">
									<img src="{{asset('public/frontend/images/printrest.png')}}" class="img-fluid">
								</a>
							</li>
							<li>
								<a href="">
									<img src="{{asset('public/frontend/images/icon-4.png')}}" class="img-fluid">
								</a>
							</li> --}}
						</ul>
					</div>
				</div>
			</div>
			<!-- widget one end -->

			<!-- widget two start -->
			<div class="col-md-4">
				<div class="widget-two">
					<h2>Categories</h2>
					<div class="row">
					 	<div class="col-md-6 col-6">
					 		<a href="">
					 			<i class="fas fa-angle-right"></i> food items
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
					 		<a href="">
					 			<i class="fas fa-angle-right"></i> Grocery
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
					 		<a href="">
					 			<i class="fas fa-angle-right"></i> Accesories
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
					 		<a href="">
					 			<i class="fas fa-angle-right"></i> Soft Drinks
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
					 		<a href="">
					 			<i class="fas fa-angle-right"></i> Milk Product
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
					 		<a href="">
					 			<i class="fas fa-angle-right"></i> Meat
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
					 		<a href="">
					 			<i class="fas fa-angle-right"></i> Cow Meat & Product
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
					 		<a href="">
					 			<i class="fas fa-angle-right"></i> Chicken Item
					 		</a>
					 	</div>
					</div>
					 
				</div>
			</div>
			<!-- widget two end -->

			<!-- widget three start -->
			<div class="col-md-4">
				<div class="widget-two">
					<h2>quick links</h2>
					 
					<div class="row">
					 	<div class="col-md-6 col-6">
					 		<a href="{{route('amru.about')}}">
					 			<i class="fas fa-angle-right"></i> About Us
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
						 <a href="{{route('amru.contact')}}">
					 			<i class="fas fa-angle-right"></i> Contact Us
					 		</a>
					 	</div>
					 	<div class="col-md-6 col-6">
					 		<a href="https://www.facebook.com/Amrubazarbd/">
					 			<i class="fas fa-angle-right"></i> Facebook
					 		</a>
					 	</div>
					 	
					</div>

				</div>
			</div>
			<!-- widget three end -->

		</div>
	</div>
</footer>


<!-- footer bottom start -->
<section class="footer-bottom">
	<div class="container">
		<div class="row">
			
			<!-- left part start -->
			<div class="col-md-6">
				<p>©SSTTech. All rights reserved 2020</p>
			</div>
			<!-- left part end -->


		</div>
	</div>
</section>
<!-- footer bottom end -->


	<!-- jquery lib file -->
	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}

	<!-- jqeury ui js -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- jqeury ui js 
	<script src="js/jquery.fullpage.min.js"></script> -->

	<!-- bootstrap v3 -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- the main bootstrap file -->
	<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}" ></script>

	<!-- owl carousel js file -->
	<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script> 

	<!-- mice number js file -->
	<script src="{{asset('public/frontend/js/nicenumber.js')}}"></script>  

	<script type="text/javascript" src="{{asset('public/frontend/js/step.js')}}"></script>

	<!-- jqeruy ui -->
	<script type="text/javascript" src="{{asset('public/frontend/js/jquery-ui.js')}}"></script>

 
 	<!-- tinymce
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->

	<!-- barfiller js 
	<script type="text/javascript" src="js/jquery.barfiller.js"></script> -->

	<!-- wow js file 
  	<script type="text/javascript" src="js/wow.min.js"></script> -->

	<!-- tag input js 
	<script type="text/javascript" src="js/bootstrap-tagsinput.js"></script> -->

	<!-- multiple choose 
	<script type="text/javascript" src="js/choosen.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
	<script type="text/javascript" src="js/prism.js"></script> -->

	<!-- zoom image code -->
	<script type="text/javascript" src="{{asset('public/frontend/js/zoomsl.min.js')}}"></script>

	
	<!-- the main js file -->
	<script type="text/javascript" src="{{asset('public/frontend/js/main.js')}}" ></script>


</body>
</html>
@extends('frontend.frontend_master')
@section('mainContent')
<style>
    .about{
	padding: 100px 0;
}
.about-img img{
	width: 100%;
}
.about h2{
	margin: 15px 0;
}
.about p{
	text-align: justify;
}
</style>
<!-- about us section start -->
<section class="about">
	<div class="container">
		<div class="row">
			<!-- left part start -->
			<div class="col-md-6 about-img">
				<img src="{{asset('public/frontend/images/about_us.jpg')}}" class="img-fluid">
			</div>
			<!-- left part end -->
			<!-- right part start -->
			<div class="col-md-6">
				<h2>About Us</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
			</div>
			<!-- right part end -->
		</div>
	</div>
</section>
<!-- about us section end -->
@endsection
<section class="navbar-pc">
	<div class="container">
		<div class="row">
			<div class="nav-carousel owl-carousel owl-theme">
				
				<!-- navbar item start -->
				@foreach ($subcategories as $item)					
				
				<div class="item">
					<a href="{{url('/products/'.$item->sub_slug)}}">
						<div class="col-md-12">
							<img src="{{asset('public/images/'.$item->sub_image)}}" class="img-fluid">
						</div>
					
					</a><br>
					<p>{{$item->sub_name}}</p>
				</div>
				<!-- navbar item end -->

				@endforeach

			</div>
		</div>
	</div>
</section>
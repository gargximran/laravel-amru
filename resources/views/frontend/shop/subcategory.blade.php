@extends('frontend.frontend_master')
@section('mainContent')
   <!-- page indicator section start -->
<section class="page-indicator">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li><a href="">food & more</a></li>
					<li><a href="">organic items</a></li>
					<li><a href="">food</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- page indicator section end -->



<!-- shop page main section start -->
<section class="shop section-padding">
	<div class="container">

		<!-- top row start -->
		<div class="row">
			<!-- left part start -->
	
			<!-- left part end -->


			<!-- right part start -->
			<div class="col-md-9">
				<div class="shop-right">
					
					<!-- shop right top start -->
					<div class="shop-right-top">
						<div class="row">
							
							<!-- left part start -->
							<div class="col-md-9 shop-right-top-left">
								<ul>
									{{-- <li>sort by : </li>
									<li class="click-sort sort-2" id="sort-2">price</li>
									<li class="click-sort sort-3" id="sort-3">rating</li>
									<li class="click-sort sort-4" id="sort-4">popularity</li>
									<li class="click-sort sort-5" id="sort-5">newest</li> --}}
								</ul>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<!-- <div class="col-md-3 shop-right-top-right">
								<ul>
									<li><i class="fas fa-list"></i></li>
									<li><i class="fas fa-th-large active-type"></i></li>
								</ul>
							</div> -->
							<!-- right part end -->

						</div>
					</div>
					<!-- shop right top end -->

					<!-- shop product start -->
					<div class="shop-product">

						<!-- grid wise -->
						<div class="row col-wise">
							
                            <!-- product item start -->
                            @foreach ($subcategorys as $product)
                                
                          
							<div class="col-md-3 col-6 product-hover">
								<div class="product-item-01">
									<a href="{{url('/products/'.$product->sub_slug)}}">

									<!-- main thumbnail -->
									<img src="{{asset('public/images/'.$product->sub_image)}}" class="img-fluid">
									<!-- main thumbnail -->
                                </a>
									<!-- go product details -->
                                <a href="{{url('/products/'.$product->sub_slug)}}">
										<p>{{$product->sub_name}}</p>
										
									</a>
									<!-- go product details -->
								
                                </div>
                              
                            </div>
                            @endforeach
							<!-- product item end -->



						</div>
						<!-- grid wise -->

						<!-- list wise -->
						<div class="row list-wise">
							<h2>No Product Found</h2>
						</div>
						<!-- list wise -->

					</div>
					<!-- shop product end -->

				</div>

				<!-- shop page pagination start -->
				{{-- <div class="shop-pagination">
					<div class="row">
						<div class="col-md-12">
							<ul>
								<li class="click-paginate paginate-1 active-pagination" id="paginate-1">
									<a href="">1</a>
								</li>
								<li class="click-paginate paginate-2" id="paginate-2">
									<a href="">2</a>
								</li>
								<li class="click-paginate paginate-3" id="paginate-3">
									<a href="">3</a>
								</li>
								<li>
									...
								</li>
								<li class="click-paginate paginate-4" id="paginate-4">
									<a href="">10</a>
								</li>
							</ul>
						</div>
					</div>
				</div> --}}
				<!-- shop page pagination end -->

			</div>
			<!-- right part end -->
		</div>
		<!-- top row end -->

		<!-- latest product title row start -->
		{{-- <div class="row latest-product-title">
			<div class="col-md-12">
				<h2>latest <span>product</span> </h2>
			</div>
		</div> --}}
		<!-- latest product title row end -->

		<!-- latest product row start -->
		<div class="row">
			<!-- slider start -->
			<div class="latest-product-carousel owl-carousel owl-theme">

                <!-- product item start -->
             
                
    			<!-- product item end -->


    		</div>
    		<!-- slider end -->
		</div>
		<!-- latest product row end -->

	</div>
</section>
<!-- shop page main section end --> 
@endsection
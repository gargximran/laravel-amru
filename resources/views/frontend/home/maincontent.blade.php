@extends('frontend.frontend_master')
@section('navbar')
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
@endsection
@section('mainContent')
    

<!-- banner section start -->
<section class="banner">
	<div class="container">
		<div class="row banner-row">
			
			<!-- carousel start -->
			<div class="banner-carousel owl-carousel owl-theme">
   		 		
				<!-- banner item start -->
   		 		<div class="item">
   		 			<div class="col-md-12">
   		 				<div class="row">
   		 					<!-- left part start -->
							<div class="col-md-6">
								<div class="banner-left">
									<h1>Fresh fruit & grocery</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									<a href="">we are the best</a>
								</div>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<div class="col-md-6">
								<div class="banner-right">
									<img src="{{asset('public/frontend/images/banner.png')}}" class="img-fluid">
								</div>
							</div>
							<!-- right part end -->
   		 				</div>
   		 			</div>
   		 		</div>
   		 		<!-- banner item end -->

   		 		<!-- banner item start -->
   		 		<div class="item">
   		 			<div class="col-md-12">
   		 				<div class="row">
   		 					<!-- left part start -->
							<div class="col-md-6">
								<div class="banner-left">
									<h1>Fresh fruit & grocery</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									<a href="">we are the best</a>
								</div>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<div class="col-md-6">
								<div class="banner-right">
									<img src="{{asset('public/frontend/images/banner.png')}}" class="img-fluid">
								</div>
							</div>
							<!-- right part end -->
   		 				</div>
   		 			</div>
   		 		</div>
   		 		<!-- banner item end -->

   		 		<!-- banner item start -->
   		 		<div class="item">
   		 			<div class="col-md-12">
   		 				<div class="row">
   		 					<!-- left part start -->
							<div class="col-md-6">
								<div class="banner-left">
									<h1>Fresh fruit & grocery</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									<a href="">we are the best</a>
								</div>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<div class="col-md-6">
								<div class="banner-right">
									<img src="{{asset('public/frontend/images/banner.png')}}" class="img-fluid">
								</div>
							</div>
							<!-- right part end -->
   		 				</div>
   		 			</div>
   		 		</div>
   		 		<!-- banner item end -->

   		 	</div>
			<!-- carousel end -->

		</div>
	</div>
</section>
<!-- banner section end -->


<!-- product section start -->
<section class="home-product section-padding">
	<div class="container-fluid">
		
		<!-- row start -->
		<div class="row">
			
			<!-- left part start -->
			<div class="col-md-3">
				<div class="home-product-left-image">
					<img src="{{asset('public/frontend/images/banner-product-left-01.png')}}" class="img-fluid">
				</div>

				<!-- support 24/7 start -->
				<div class="home-product-left">
					<div class="home-product-left-info">
						<div class="row">
							<div class="col-md-2">
								<img src="{{asset('public/frontend/images/247.png')}}" class="img-fluid">
							</div>

							<div class="col-md-10">
								<h2>Support 24/7</h2>
								<p>Contact us 24 hours a day, 7 days a week</p>
							</div>
						</div>
					</div>
				</div>
				<!-- support 24/7 end -->

				<!-- fast shipping start -->
				<div class="home-product-left fast-shipping">
					<div class="home-product-left-info">
						<div class="row">
							<div class="col-md-2">
								<img src="{{asset('public/frontend/images/shipping.png')}}" class="img-fluid">
							</div>

							<div class="col-md-10">
								<h2>Fast shipping</h2>
								<p>We will deliver your goods to  anywhere in the world</p>
							</div>
						</div>
					</div>
				</div>
				<!-- fast shipping end -->

				<!-- refund start -->
				<div class="home-product-left">
					<div class="home-product-left-info">
						<div class="row">
							<div class="col-md-2">
								<img src="{{asset('public/frontend/images/refund.png')}}" class="img-fluid">
							</div>

							<div class="col-md-10">
								<h2>Refund Guarantee</h2>
								<p>We will refund your money if the goods are of poor quality</p>
							</div>
						</div>
					</div>
				</div>
				<!-- refund end -->

			</div>
			<!-- left part end -->

			<!-- middle part start -->
			<div class="col-md-8">
				
				<!-- home page product category row start -->
				<div class="row">
					<div class="home-page-product-cart-carousel owl-carousel owl-theme">

                        @foreach ($categories as $category)
						<!-- category item start -->
    					<div class="item">
                        <a href="{{URL::to('/category/'.$category->category_slug)}}">
								<div class="col-md-12">
									<img src="{{asset('public/images/'.$category->category_image)}}" class="img-fluid">
								</div>
							</a>
    					</div>
						<!-- category item end -->
						@endforeach

    				</div>
				</div>
				<!-- home page product category row end -->

				<!-- filtering item row start -->
				<div class="row home-product-filtering">
					<div class="col-md-12">
						<ul>
							<span class="select-filter active-filter f1" id="f1">
								<li class="filter-category  one" id="one">new arrivals</li>
							</span>
							<span class="select-filter f2" id="f2">
								<li class="filter-category two" id="two">Best Sell</li>
							</span>
							<!--<span class="select-filter  f3" id="f3">-->
							<!--	<li class="filter-category three" id="three">best seller</li>-->
							<!--</span>-->
						</ul>
					</div>
				</div>
				<!-- filtering item row end -->

				<!-- filter wise product show start new arrivals-->
				<div class="row filter-product-list  one">
					
					<!-- product item start -->
					@foreach($lastedproducts as $product)
	                <div class="col-md-3 col-6 product-hover">
						<div class="product-item-01">
							<div class="product-hover-item">
							 @if($product->discount !=Null)
								<p>{{$product->discount}}%</p>
								@endif
								<a href="">
									<img src="{{asset('public/frontend/images/wishlist.png')}}" class="img-fluid" >
								</a>
								
							<a class="show-product-popup" id="{{$product->id}}">
                                	<i class="fas fa-eye"></i> 
                                	</a>
							</div>

							<!-- main thumbnail -->
							<div class="main-thumbnail">
							    <img src="{{asset('public/images/'.$product->images)}}" class="img-fluid" style="height: 176px;width: 174px;padding-top: 7px;">
							</div>
							<!-- main thumbnail -->

							<!-- go product details -->
                            <a href="{{url('/product/'.$product->slug)}}">
								<p>{{$product->pro_name}}</p>
								<span>{{$product->sell_price}} Tk</span> <span> @if($product->discount !=Null) <del>{{$product->price}}</del>Tk @endif</span>
							</a>
							<!-- go product details -->
							
							<div class="product-item-cart">
								<a  type="button" class="cartadd" data-id="{{$product->id}}">
									<img src="http://amru.ssttechbd.com/public/frontend/images/bag.png"> add to bag
								</a>
							</div>
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
                        </div>
                    </div>
                    @endforeach
            
                    @foreach($lastedproducts as $product) 
                    <!-- product quick view popup start -->
                    <div class="product-quick-view {{$product->id}}">
                    	<div class="container">
                    		<div class="row">
                    			<div class="col-md-12 product-quick-view-main-box" >
                    				<i class="fas fa-times hide-quick-view"></i>
                    				<div class="row">
                    					
                    					<!-- left part start -->
                    					<div class="col-md-6">
                    						<div class="product-main-img">
                    						<a href="product-details.php">
            									<img src="{{asset('public/images/'.$product->images)}}" class="img-fluid to-img1 ">
            									@if($product->image1)
            									<img src="{{asset('public/images/'.$product->image1)}}" class="img-fluid to-img2 block__pic">
            									@endif
            										@if($product->image2)
            									<img src="{{asset('public/images/'.$product->image2)}}" class="img-fluid to-img3 block__pic">
            									@endif
                    						</a>
                    						</div>
                    
                    						<!-- bottom image select start -->
                        					<div class="row product-bottom-img-row produc-quick-view-img">
    											<div class="col-md-4 col-4">
    												<img src="{{asset('public/images/'.$product->images)}}" class="img-fluid for-img1">
    												<i class="fas fa-caret-up caret-one"></i>
    											</div>
    												@if($product->image1)
    											<div class="col-md-4 col-4">
    												<img src="{{asset('public/images/'.$product->image1)}}" class="img-fluid for-img2" >
    												<i class="fas fa-caret-up caret-two"></i>
    											</div>
    												@endif
    													@if($product->image2)
    											<div class="col-md-4 col-4">
    												<img src="{{asset('public/images/'.$product->image2)}}" class="img-fluid for-img3">
    												<i class="fas fa-caret-up caret-three"></i>
    											</div>
    												@endif
                        					</div>
                        					<!-- bottom image select end -->
                    					</div>
                    					<!-- left part end -->
                    
                    					<!-- right part start -->
                    					<div class="col-md-6">
                    						<div class="product-quick-view-right">
                    							<h2 class="quick-view-heading" id="qck_name">{{$product->pro_name}}</h2>
                    
                    							<!-- review start -->
                    							<div class="row">
                    								<div class="col-md-6 product-quick-view-right-left">
                    									<ul>
                    										<li>
                    											<a href=""><i class="fas fa-star"></i></a>
                    										</li>
                    										<li>
                    											<a href=""><i class="fas fa-star"></i></a>
                    										</li>
                    										<li>
                    											<a href=""><i class="fas fa-star"></i></a>
                    										</li>
                    										<li>
                    											<a href=""><i class="fas fa-star"></i></a>
                    										</li>
                    										<li>
                    											<a href=""><i class="fas fa-star"></i></a>
                    										</li>
                    									</ul>
                    								</div>
                    								<div class="col-md-6">
                    									<p>122 reviews</p>
                    								</div>
                    							</div>
                    							<!-- review end -->
                    
                    							<!-- avaiablity and stock start -->
                    							<div class="row available">
                    								<div class="col-md-6">
                    									<h2>availablity : </h2>
                    								</div>
                    								<div class="col-md-6">
                    									<h2>in stock</h2>
                    								</div>
                    							</div>
                    							<!-- avaiablity and stock end -->
                    
                    							<!-- price row start -->
                    							<div class="row">
                    								<div class="col-md-12">
														<h2 class="quick-view-heading" >{{$product->sell_price}} tk/{{$product->qty_type}}</h2>
														<span> @if($product->discount !=Null) <del>{{$product->price}}</del>Tk @endif</span>
                    								</div>
                    							</div>
                    							<!-- price row end -->
                    							
                    							<!-- qty start -->
                    							<div class="row">
                    							    {{-- <div class="col-md-6">
                    							        <form>
                    							            <div class="form-group">
                    							                <div class="nice-number">
                    							                    <input type="number" value="1" style="width: 2ch;">
                    							             </div>
                    							            </div>
                    							        </form>
                    							    </div> --}}
                    							    <div class="col-md-12">
                    							        <div class="product-item-cart">
                            								<a  type="button" class="cartadd" data-id="{{$product->id}}">
                            									<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
                            								</a>
                            							</div>
                    							    </div>
                    							</div>
                    							<!-- qty end -->
                    						
                    							<!-- description row start -->
                    							<div class="row">
                    								<div class="col-md-12">
                    									<h2 >description</h2>
                    								</div>
                    								<div class="col-md-12">
                    								<p>{!! $product->short_description !!}</p>
                    								</div>
                    							</div>
                    							<!-- description row end -->
                    
                    						</div>
                    					</div>
                    					<!-- right part end -->
                    
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <!-- product quick view popup  end -->
                    @endforeach
                    
				</div>
				<!-- filter wise product show end new arrivals-->

				<!-- filter wise product show start new popular-->
				<div class="row filter-product-list hide-item two">
					
					<!-- product item start -->
					@foreach($bestSell as $bestSellProduct)
						@php
						    $id=$bestSellProduct->productId;
						    $mostSellProducts=DB::table('products')->where('id',$id)->where('pubstatus','active')->get()
						@endphp
						
						@foreach($mostSellProducts as $bestproduct)
    					<div class="col-md-3 col-6 product-hover">
    						<div class="product-item-01">
    							<div class="product-hover-item">
    								@if($bestproduct->discount !=Null)
    								    <p>{{$bestproduct->discount}}%</p>
    								@endif
    								<a href="">
    									<img src="{{asset('public/frontend/images/wishlist.png')}}" class="img-fluid">
    								</a>
    								<a class="show-product-popup" id="{{$bestproduct->id}}">
                                    	<i class="fas fa-eye"></i> 
                                    	</a>
    							</div>
    
    							<!-- main thumbnail -->
    							<div class="main-thumbnail">
    							    <img src="{{asset('public/images/'.$bestproduct->images)}}" class="img-fluid">
    							</div>
    							
    							<!-- main thumbnail -->
    
    							<!-- go product details -->
    							<a href="{{url('/product/'.$bestproduct->slug)}}">
    								<p>{{$bestproduct->pro_name}}</p>
    								<span>{{$bestproduct->sell_price}} Tk</span><span> @if($bestproduct->discount !=Null) <del>{{$bestproduct->price}}</del>Tk @endif</span>
    							</a>
    							<!-- go product details -->
    							
    							<div class="product-item-cart">
    								<a type="button" class="cartadd" data-id="{{$bestproduct->id}}">
    									<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
    								</a>
    							</div>
    							<ul>
    								<li><i class="fas fa-star"></i></li>
    								<li><i class="fas fa-star"></i></li>
    								<li><i class="fas fa-star"></i></li>
    								<li><i class="fas fa-star"></i></li>
    								<li><i class="fas fa-star"></i></li>
    							</ul>
    						</div>
    					</div>
    					@endforeach
    					<!-- product item end -->
    					
    					@foreach($mostSellProducts as $bestproduct)
    		        	<!-- product quick view popup start -->
                        <div class="product-quick-view {{$bestproduct->id}}">
                        	<div class="container">
                        		<div class="row">
                        			<div class="col-md-12 product-quick-view-main-box" >
                        				<i class="fas fa-times hide-quick-view"></i>
                        				<div class="row">
                        					<!-- left part start -->
                        					<div class="col-md-6">
                        						<div class="product-main-img">
                        						<a href="product-details.php">
                        									<img src="{{asset('public/images/'.$bestproduct->images)}}" class="img-fluid to-img1 ">
                        									@if($bestproduct->image1)
                        									<img src="{{asset('public/images/'.$bestproduct->image1)}}" class="img-fluid to-img2">
                        									@endif
                        										@if($bestproduct->image2)
                        									<img src="{{asset('public/images/'.$bestproduct->image2)}}" class="img-fluid to-img3">
                        									@endif
                        										</a>
                        						</div>
                        
                        						<!-- bottom image select start -->
                        					<div class="row product-bottom-img-row produc-quick-view-img">
            									<div class="col-md-4 col-4">
            										<img src="{{asset('public/images/'.$bestproduct->images)}}" class="img-fluid for-img1">
            										<i class="fas fa-caret-up caret-one"></i>
            									</div>
            										@if($bestproduct->image1)
            									<div class="col-md-4 col-4">
            										<img src="{{asset('public/images/'.$bestproduct->image1)}}" class="img-fluid for-img2" >
            										<i class="fas fa-caret-up caret-two"></i>
            									</div>
            										@endif
            											@if($bestproduct->image2)
            									<div class="col-md-4 col-4">
            										<img src="{{asset('public/images/'.$bestproduct->image2)}}" class="img-fluid for-img3">
            										<i class="fas fa-caret-up caret-three"></i>
            									</div>
            										@endif
                        						</div>
                        						<!-- bottom image select end -->
                        					</div>
                        					<!-- left part end -->
                        
                        					<!-- right part start -->
                        					<div class="col-md-6">
                        						<div class="product-quick-view-right">
                        							<h2 class="quick-view-heading" id="qck_name">{{$bestproduct->pro_name}}</h2>
                        
                        							<!-- review start -->
                        							<div class="row">
                        								<div class="col-md-6 product-quick-view-right-left">
                        									<ul>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        									</ul>
                        								</div>
                        								<div class="col-md-6">
                        									<p>122 reviews</p>
                        								</div>
                        							</div>
                        							<!-- review end -->
                        
                        							<!-- avaiablity and stock start -->
                        							<div class="row available">
                        								<div class="col-md-6">
                        									<h2>availablity : </h2>
                        								</div>
                        								<div class="col-md-6">
                        									<h2>in stock</h2>
                        								</div>
                        							</div>
                        							<!-- avaiablity and stock end -->
                        
                        							<!-- price row start -->
                        							<div class="row">
                        								<div class="col-md-12">
                        									<h2 class="quick-view-heading" >{{$bestproduct->sell_price}} tk/{{$bestproduct->qty_type}}</h2>
                        								</div>
                        							</div>
                        							<!-- price row end -->
                        							
                        							<!-- qty start -->
                        							<div class="row">
                        							    {{-- <div class="col-md-6">
                        							        <form>
                        							            <div class="form-group">
                        							                <div class="nice-number">
                        							                    <input type="number" value="1" style="width: 2ch;">
                        							             </div>
                        							            </div>
                        							        </form>
                        							    </div> --}}
                        							    <div class="col-md-12">
                        							        <div class="product-item-cart">
                                								<a  type="button" class="cartadd" data-id="{{$product->id}}">
                                									<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
                                								</a>
                                							</div>
                        							    </div>
                        							</div>
                        							<!-- qty end -->
                        						
                        							<!-- description row start -->
                        							<div class="row">
                        								<div class="col-md-12">
                        									<h2 >description</h2>
                        								</div>
                        								<div class="col-md-12">
                        								<p>{!! $bestproduct->short_description !!}</p>
                        								</div>
                        							</div>
                        							<!-- description row end -->
                        
                        						</div>
                        					</div>
                        					<!-- right part end -->
                        
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        <!-- product quick view popup  end -->
                        @endforeach
                    
                    @endforeach
					
					

					
					
				</div>


			</div>
			<!-- middle part end -->

			<!-- right part start -->
			<div class="col-md-1">
				<div class="home-product-right-image">
					<img src="{{asset('public/frontend/images/01_Home_amrubazar_scroll.png')}}" class="img-fluid">
				</div>
			</div>
			<!-- right part end -->

		</div>
		<!-- row END -->

	</div>
</section>
<!-- product section end -->


<!-- feature banner start -->
<section class="feature-banner" style="background-image: url('public/frontend/images/slider2.jpg'); " >
	<div class="container">
		<div class="row">
			<div class="col-md-12"></div>
		</div>
	</div>
</section>
<!-- feature banner end -->


<!-- feature product start  -->
<section class="featre-product section-padding">
	<div class="container">
		<div class="row">
			
			<!-- left part start -->
			<div class="col-md-8">
				<div class="row">
					
					<!-- feature-item start -->
					@foreach($offerProduct as $offferProduct)
				<!--  -->
					  <div class="col-md-3 col-6 product-hover">
								<div class="product-item-01">
									<div class="product-hover-item">
										@if($offferProduct->discount !=Null)
										<p>{{$offferProduct->discount}}%</p>
										@endif
										<a href="">
											<img src="{{asset('public/frontend/images/wishlist.png')}}" class="img-fluid">
					<a class="show-product-popup" id="{{$offferProduct->id}}">
					<i class="fas fa-eye"></i> </a>
									</div>

									<!-- main thumbnail -->
									<img src="{{asset('public/images/'.$offferProduct->images)}}" class="img-fluid" style="height: 176px;width: 174px;padding-top: 7px;">
									<!-- main thumbnail -->

									<!-- go product details -->
                                <a href="{{url('/product/'.$offferProduct->slug)}}">
										<p>{{$offferProduct->pro_name}}</p>
										<span>{{$offferProduct->sell_price}} Tk</span><span> @if($offferProduct->discount !=Null) <del>{{$offferProduct->price}}</del>Tk @endif</span>
									</a>
									<!-- go product details -->
									
									<div class="product-item-cart">
										<a  type="button" class="cartadd" data-id="{{$offferProduct->id}}">
											<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
										</a>
									</div>
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
                                </div>
                            </div>    
					@endforeach
					@foreach($offerProduct as $offferProduct)
    		        	<!-- product quick view popup start -->
                        <div class="product-quick-view {{$offferProduct->id}}">
                        	<div class="container">
                        		<div class="row">
                        			<div class="col-md-12 product-quick-view-main-box" >
                        				<i class="fas fa-times hide-quick-view"></i>
                        				<div class="row">
                        					<!-- left part start -->
                        					<div class="col-md-6">
                        						<div class="product-main-img">
                        						<a href="product-details.php">
                        									<img src="{{asset('public/images/'.$offferProduct->images)}}" class="img-fluid to-img1 ">
                        									@if($offferProduct->image1)
                        									<img src="{{asset('public/images/'.$offferProduct->image1)}}" class="img-fluid to-img2">
                        									@endif
                        										@if($offferProduct->image2)
                        									<img src="{{asset('public/images/'.$offferProduct->image2)}}" class="img-fluid to-img3">
                        									@endif
                        										</a>
                        						</div>
                        
                        						<!-- bottom image select start -->
                        					<div class="row product-bottom-img-row produc-quick-view-img">
            									<div class="col-md-4 col-4">
            										<img src="{{asset('public/images/'.$offferProduct->images)}}" class="img-fluid for-img1">
            										<i class="fas fa-caret-up caret-one"></i>
            									</div>
            										@if($offferProduct->image1)
            									<div class="col-md-4 col-4">
            										<img src="{{asset('public/images/'.$offferProduct->image1)}}" class="img-fluid for-img2" >
            										<i class="fas fa-caret-up caret-two"></i>
            									</div>
            										@endif
            											@if($offferProduct->image2)
            									<div class="col-md-4 col-4">
            										<img src="{{asset('public/images/'.$offferProduct->image2)}}" class="img-fluid for-img3">
            										<i class="fas fa-caret-up caret-three"></i>
            									</div>
            										@endif
                        						</div>
                        						<!-- bottom image select end -->
                        					</div>
                        					<!-- left part end -->
                        
                        					<!-- right part start -->
                        					<div class="col-md-6">
                        						<div class="product-quick-view-right">
                        							<h2 class="quick-view-heading" id="qck_name">{{$offferProduct->pro_name}}</h2>
                        
                        							<!-- review start -->
                        							<div class="row">
                        								<div class="col-md-6 product-quick-view-right-left">
                        									<ul>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        										<li>
                        											<a href=""><i class="fas fa-star"></i></a>
                        										</li>
                        									</ul>
                        								</div>
                        								<div class="col-md-6">
                        									<p>122 reviews</p>
                        								</div>
                        							</div>
                        							<!-- review end -->
                        
                        							<!-- avaiablity and stock start -->
                        							<div class="row available">
                        								<div class="col-md-6">
                        									<h2>availablity : </h2>
                        								</div>
                        								<div class="col-md-6">
                        									<h2>in stock</h2>
                        								</div>
                        							</div>
                        							<!-- avaiablity and stock end -->
                        
                        							<!-- price row start -->
                        							<div class="row">
                        								<div class="col-md-12">
															<h2 class="quick-view-heading" >{{$offferProduct->sell_price}} tk/{{$offferProduct->qty_type}} </h2>
															<span> @if($offferProduct->discount !=Null) <del>{{$offferProduct->price}}</del>Tk @endif</span>
                        								</div>
                        							</div>
                        							<!-- price row end -->
                        							
                        							<!-- qty start -->
                        							<div class="row">
                        							    {{-- <div class="col-md-6">
                        							        <form>
                        							            <div class="form-group">
                        							                <div class="nice-number">
                        							                    <input type="number" value="1" style="width: 2ch;">
                        							             </div>
                        							            </div>
                        							        </form>
                        							    </div> --}}
                        							    <div class="col-md-12">
                        							        <div class="product-item-cart">
                                								<a  type="button" class="cartadd" data-id="{{$offferProduct->id}}">
                                									<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
                                								</a>
                                							</div>
                        							    </div>
                        							</div>
                        							<!-- qty end -->
                        						
                        							<!-- description row start -->
                        							<div class="row">
                        								<div class="col-md-12">
                        									<h2 >description</h2>
                        								</div>
                        								<div class="col-md-12">
                        								<p>{!! $bestproduct->short_description !!}</p>
                        								</div>
                        							</div>
                        							<!-- description row end -->
                        
                        						</div>
                        					</div>
                        					<!-- right part end -->
                        
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                        <!-- product quick view popup  end -->
                        @endforeach
					<!-- feature-item end -->

			


				</div>
			</div>
			<!-- left part end -->

			<!-- right part start -->
						<!-- right part start -->
		
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12 feature-thumbnail">
						<div class="product-item-02">
							<div class="product-hover-item">
										<p>-{{$highOffer->discount}}%</p>
										
					<!--					<a class="show-product-popup" id="{{$highOffer->id}}">-->
					<!--<i class="fas fa-eye"></i> </a>-->
	                                    	
									</div>
							<!-- main thumbnail -->
							<img src="{{asset('public/images/'.$highOffer->images)}}" class="img-fluid">
							<!-- main thumbnail -->

							<!-- go product details -->
							<a href="{{url('/product/'.$product->slug)}}">
								<p>{{$highOffer->pro_name}}</p>
								<span>{{$highOffer->sell_price}} Tk</span><span> @if($highOffer->discount !=Null) <del>{{$highOffer->price}}</del>Tk @endif</span>
							</a>
							<!-- go product details -->

							<div class="feature-product-hover">
								<a type="button" class="cartadd" data-id="{{$highOffer->id}}">
									<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<!-- right part end -->
			<!-- right part end -->

		</div>
	</div>
</section>
<!-- feature product end  -->


<!-- sign up section start -->
<section class="signup-newsletter">
	<div class="container">
		<div class="row">
			
			<!--left part start -->
			<div class="col-md-6">
				<h2>Sign up for Newsletter</h2>
			</div>
			<!--left part end-->

			<!--right part start -->
			<div class="col-md-6">
				<form action="" method="" class="signup-news-form">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Enter your e-mail address" name="">
					</div>
					<div class="form-group">
						<a href="" class="signup-newsletter-button">
							<img src="{{asset('public/frontend/images/signup_newsletter.png')}}" class="img-fluid">
						</a>
					</div>
				</form>
			</div>
			<!--right part end-->

		</div>
	</div>
</section>
<!-- product quick view popup start -->

<!-- product quick view popup  end -->
<script>
	$(document).ready(function(){
	    
    $(".show-product-popup").click(function(){
        var productQuickView = $(this).attr('id');
        
        if( productQuickView != 'all' ){

            $('.' + productQuickView).css({
                "opacity" : "1",
                "visibility" : "unset",
            })
            $(".product-quick-view-main-box").slideDown();
            $('html,body').css({
                "overflow" : "hidden",
            })

            $(document).click(function(divclose){
                if( $(divclose.target).closest(".show-product-popup").length == 0 && $(divclose.target).closest(".product-quick-view-main-box").length == 0 && $(divclose.target).closest(".product-main-img img").length == 0 ){
                    $(".product-quick-view").css({
                        "opacity" : "0",
                        "visibility" : "hidden",
                    })
                    $(".product-quick-view-main-box").slideUp();
                    $('html,body').css({
                    "overflow" : "auto",
                })
                }
            })

            $(".hide-quick-view").click(function(){
                $(".product-quick-view").css({
                    "opacity" : "0",
                    "visibility" : "hidden",
                })
                $(".product-quick-view-main-box").slideUp();
                $('html,body').css({
                    "overflow" : "auto",
                })
            })

        }

    })
})
</script>
<!-- sign up section end -->
<!-- sign up section end -->
<script src="http://amru.ssttechbd.com/public/assets/js/sweetalert2/sweetalert2.min.js"></script>
<script src="http://amru.ssttechbd.com/public/assets/js/toastr/toastr.min.js"></script>

<script>
	$(document).ready(function(){
		toastr.options = {
					"closeButton": false,
					"debug": false,
					"newestOnTop": false,
					"progressBar": true,
					"positionClass": "toast-top-right",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "2000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
					}
	  $('.cartadd').on('click',function(){
		var id=$(this).data('id');
		  // alert(id);
		  $.ajax({
			type: 'get',
			url: "{{url('/addCart/product/')}}/"+id,
			dataTpe:'json',
			success:function(result){
				toastr["success"]("Product Add To Cart Succcessfully !!");
				// var carttotla=<?php $t=Session::get('ttqty'); echo $t; ?>;


				document.getElementById("carttotal").innerHTML = result.cart
			}
		  });
		 });

		
	});
	</script>
	{{-- <script>
		$(document).ready(function(){
		$('.inc').onclcik(function(event){
			alert('ok')
		});
	});
	</script> --}}
@endsection
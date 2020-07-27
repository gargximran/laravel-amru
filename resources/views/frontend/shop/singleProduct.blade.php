@extends('frontend.frontend_master')
@section('mainContent')
<!-- product details section start -->
<section class="product-details section-padding">
	<div class="container">
		
		<!-- top part start -->
		<div class="row">
			<!-- left part start -->
			<div class="col-md-4">
				<div class="product-main-img">
					<img src="{{asset('public/images/'.$product->images)}}" class="img-fluid to-img1 block__pic">
					@if($product->image1 != Null)
					<img src="{{asset('public/images/'.$product->image1)}}" class="img-fluid to-img2 block__pic">
					@endif
					@if($product->image2 != Null)
					<img src="{{asset('public/images/'.$product->image2)}}" class="img-fluid to-img3 block__pic">
					@endif
				</div>

				<!-- bottom image select start -->
				<div class="row product-bottom-img-row">
					<div class="col-md-4 col-4">
						<img src="{{asset('public/images/'.$product->images)}}" class="img-fluid for-img1">
						<i class="fas fa-caret-up caret-one"></i>
					</div>
					<div class="col-md-4 col-4">
					    @if($product->image1 != Null)
						<img src="{{asset('public/images/'.$product->image1)}}" class="img-fluid for-img2" >
						<i class="fas fa-caret-up caret-two"></i>
							@endif
					</div>
					<div class="col-md-4 col-4">
					     @if($product->image2 != Null)
						<img src="{{asset('public/images/'.$product->image2)}}" class="img-fluid for-img3">
						<i class="fas fa-caret-up caret-three"></i>
							@endif
					</div>
				</div>
				<!-- bottom image select end -->

			</div>
			<!-- left part end -->

			<!-- right part start -->
			<div class="col-md-8">
				<div class="product-details-right">
					<p>Food Item</p>

					<!-- title and price row start -->
					<div class="row">
						<div class="col-md-6 col-6">
							<h2>{{$product->pro_name}}</h2>
						</div>
						<div class="col-md-6 col-6 product-details-right-price">
							<h2>{{$product->sell_price}} Tk</h2>
						</div>
					</div>
					<!-- title and price row end -->

					<!-- review row start -->
					<div class="row">
						<div class="col-md-3 col-4 product-detail-rating">
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
						<div class="col-md-9 col-8 product-detail-review">
							<p>4.7 <i class="fas fa-caret-right"></i></p>
						</div>
					</div>
					<!-- review row end -->

					<!-- description row start -->
					<div class="row description-row">
						<div class="col-md-12">
						{!! $product->short_description !!}
						</div>
					</div>
					<!-- description row end -->

					<!-- quantity row start -->
					<div class="row quantity-row">
						<div class="col-md-1 col-1">
							<h2>qty</h2>
						</div>
						<div class="col-md-11 col-11 product-detail-count">
							<div class="nice-number">
								<label>{{$product->qty_type}}</label>
								<input type="number" value="1" style="width: 2ch;">
							</div>
						</div>
					</div>
					<!-- quantity row end -->

					<!-- add to cart and wishlist row start -->
					<div class="row product-detail-cart">
						<div class="col-md-12 product-detail-cart">
							<ul>
								<li>
									<button class="btn cart" data-id="{{$product->id}}">add to cart</button>
								{{-- <a href="" type="button" class=" cart"  ></a> --}}
								</li>
								<li>
									<a href=""><img src="{{asset('public/frontend/images/wishlist.png')}}"></a>
								</li>
							</ul>
							
						</div>
					</div>
					<!-- add to cart and wishlist row end -->

				</div>
			</div>
			<!-- right part end -->
		</div>
		<!-- top part end -->

		<!-- middle part start -->
		<div class="row product-details-middle">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2 col-6 to-description active-detail">
						<h2>description</h2>
					</div>
					<div class="col-md-2 col-6 to-review">
						<h2>review </h2>
						{{-- <h2>review (3)</h2> --}}
					</div>
				</div>
			</div>
		</div>
		<!-- middle part end -->

		<!-- description row start -->
		<div class="row for-description-row">
			<div class="col-md-2">
				<h2>Overview</h2>
			</div>
			<div class="col-md-10">
				
				<!-- description item start -->
				<div class="description-item">
					
									<p>{!! $product->description !!}</p></p>
				</div>


			</div>
		</div>
		<!-- description row end -->

		<!-- review row start -->
		<div class="row for-review-row">
			<div class="col-md-2">
				<h2>review</h2>
			</div>
			<div class="col-md-10">
				
				<!-- review item start -->
				<div class="description-item">
											{{-- <h2>New era of music <span>3 March 2017</span> </h2>
											<p>Life is hectic, it’s true. There are so many things that demand your time and attention. Between work, kids, family and 
						household chores, there is precious little time left over for you. So, it is completely understandable why things like 
						salon reservations get pushed to the end of your priority list. But is it at the end of the “to do” list where 
						your next hair trim belongs?</p> --}}
					{{-- <ul>
						<li>
							<i class="fas fa-star"></i>
						</li>
						<li>
							<i class="fas fa-star"></i>
						</li>
						<li>
							<i class="fas fa-star"></i>
						</li>
						<li>
							<i class="fas fa-star"></i>
						</li>
						<li>
							<i class="fas fa-star"></i>
						</li>
					</ul> --}}
				</div>
				<!-- review item end -->

				
				<!-- review item end -->

				<!-- review item start -->
			
				<!-- review item end -->

			</div>
		</div>
		<!-- review row end -->

		<!-- latest product title row start -->
		<div class="row latest-product-title">
			<div class="col-md-12">
				<h2>latest <span>product</span> </h2>
			</div>
		</div>
		<!-- latest product title row end -->

		<!-- latest product row start -->
		<div class="row">
			<!-- slider start -->
			<div class="latest-product-carousel owl-carousel owl-theme">

			    @foreach ($lastedproducts as $lastedproduct)
                
                
    			<div class="item">
    				<div class="col-md-12 col-12 product-hover-2">
						<div class="product-item-02">

							<!-- main thumbnail -->
								<img src="{{asset('public/images/'.$lastedproduct->images)}}" class="img-fluid">
							<!-- main thumbnail -->
                            	<a class="show-product-popup" id="{{$lastedproduct->id}}" data-id="{{$lastedproduct->id}}" data-name="{{$lastedproduct->pro_name}}"
										 data-qty_type="{{$lastedproduct->qty_type}}" data-sell_price="{{$lastedproduct->sell_price}}" 
										 data-image2="{{$lastedproduct->image2}}" data-image1="{{$lastedproduct->image1}}" data-image="{{$lastedproduct->images}}" data-short_description="{{$lastedproduct->short_description}}">
	                                    	<i class="fas fa-eye"></i> </a>
							<!-- go product details -->
							<a href="{{url('/product/'.$lastedproduct->slug)}}">
								<p>{{$lastedproduct->pro_name}}</p>
							
								<span>{{$lastedproduct->sell_price}} Tk</span>
							</a>
							<!-- go product details -->

							<div class="feature-product-hover">
								<a type="button" class="cart" data-id="{{$lastedproduct->id}}">
									<img src="{{asset('public/frontend/images/cart.png')}}"> add to bag
								</a>
							</div>

						</div>
					</div>
                </div>
                @endforeach

    		</div>
    		<!-- slider end -->
		</div>
		<!-- latest product row end -->

	</div>
</section>
<!-- product quick view popup start -->
<div class="product-quick-view profile_view_1">
	<div class="container">
		<div class="row">
			<div class="col-md-12 product-quick-view-main-box" >
				<i class="fas fa-times hide-quick-view"></i>
				<div class="row">
					<!-- left part start -->
					<div class="col-md-6">
						<div class="product-main-img">
							<a href="product-details.php" >
								<span id="qck_image_main"></span>
								<span id="qck_images1"></span>
								<span id="qck_images2"></span>
								
							</a>
						</div>

						<!-- bottom image select start -->
						<div class="row product-bottom-img-row produc-quick-view-img">
							<div class="col-md-4 col-4">
							   <span id="qck_images_main"></span>
								<i class="fas fa-caret-up caret-one"></i>
							</div>
							<div class="col-md-4 col-4">
								<span id="qck_images_1"></span>
								<i class="fas fa-caret-up caret-two"></i>
							</div>
							<div class="col-md-4 col-4">
								<span id="qck_images_2"></span>
								<i class="fas fa-caret-up caret-three"></i>
							</div>
						</div>
						<!-- bottom image select end -->
					</div>
					<!-- left part end -->

					<!-- right part start -->
					<div class="col-md-6">
						<div class="product-quick-view-right">
							<h2 class="quick-view-heading" id="qck_name"></h2>

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
									<h2 class="quick-view-heading" ><span id="qckviewsellprice"></span> tk/<span id="qckqtytype"></span></h2>
								</div>
							</div>
							<!-- price row end -->
							<div class="product-item-cart">
								<a  type="button" class="cart" data-id="{{$product->id}}">
									<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
								</a>
							</div>
							<!-- description row start -->
							<div class="row">
								<div class="col-md-12">
									<h2 >description</h2>
								</div>
								<div class="col-md-12">
								<p id="qck_short_description"></p>
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
<script>
	$(document).ready(function(){
    $(".show-product-popup").click(function(){
        var productQuickView = $(this).attr('id');
        
            var id=$(this).data('id');
            var name=$(this).data('name');
            
            var sell_price=$(this).data('sell_price');
            var qtytype=$(this).data('qty_type');
			var image=$(this).data('image');
			var image1=$(this).data('image1');
            var image2=$(this).data('image2');
			var short_description=$(this).data('short_description');
			
            $('#title_qck').val(id);
            $('#qck_name').html(name);
            $('#qckviewsellprice').html(sell_price);
			$('#qckqtytype').html(qtytype);
			$('#qck_short_description').html(short_description);
            
            $('#qck_image_main').html("<img src={{ URL::to('/public/images/')}}/" + image + " width='70' class='img-fluid to-img1 block__pic' />");
			$('#qck_images_main').html("<img src={{ URL::to('/public/images/')}}/" + image + "  class='img-fluid for-img1' />");
			if(image1 !='null'){
			$('#qck_images1').html("<img src={{ URL::to('/public/images/')}}/" + image1 + " width='70' class='img-fluid to-img2 block__pic' />");
			$('#qck_images_1').html("<img src={{ URL::to('/public/images/')}}/" + image1 + " class='img-fluid for-img2' />");
			}
			if(image2 !='null'){
			$('#qck_images2').html("<img src={{ URL::to('/public/images/')}}/" + image2 + " width='70' class='img-fluid to-img3 block__pic' />");
            $('#qck_images_2').html("<img src={{ URL::to('/public/images/')}}/" + image2 + " class='img-fluid for-img3' />");
			}
        if( productQuickView != 'all' ){

            $(".product-quick-view").css({
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
<script src="{{asset('public/assets/js/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('public/assets/js/toastr/toastr.min.js')}}"></script>
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
	  $('.cart').on('click',function(){
		var id=$(this).data('id');
		//  alert(id);
		  $.ajax({
			type: 'get',
			url: '<?php echo url('/addCart/product/');?>/'+id,
			dataTpe:'json',
			success:function(returnValue){
				
				document.getElementById("carttotal").innerHTML = returnValue.cart
				toastr["success"]("Product Add To Cart Succcessfully !!");
			}
		  });
		 });
	   
	});
	</script>
@endsection
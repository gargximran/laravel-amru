@extends('frontend.frontend_master')
@section('mainContent')
<!-- checkout main section start -->
<!-- checkout main section start -->
<section class="checkout section-padding">
	<div class="container">
		<!-- progress row start -->
		<div class="row">
			<div class="col-md-12">
				<div class="progress-bar">
					<div class="step">
						
						<div class="bullet">
							<span>1</span>
							<div class="check">
								<i class="fas fa-check"> </i>
							</div>
						</div>
						<p>review order</p>
					</div>
					
					<div class="step">
						
						<div class="bullet">
							<span>2</span>
							<div class="check">
								<i class="fas fa-check"> </i>
							</div>
						</div>
						<p>shipping details</p>
					</div>
				</div>
			</div>
		</div>
		<!-- progress row end -->
		<!-- form item row start -->
		<div class="row">
			<div class="col-md-12">
				<div class="form-outer">
				
					
				    <div class="form">
						<!-- billing address start -->
						<div class="page slidepage review-order">
							
							
							<div class="row">
								<div class="col-md-12">
									<p>review order</p>
								</div>
							</div>
							<!-- review order row start -->
							@php $totalamount=0; @endphp
							@if($cartProduct)
							
                            @foreach($cartProduct as $item)    
                       <?php $totalamount += $item->price * $item->quantity ?>
							<div class="row border cartSingeSection">
								<div class="col-md-12">
									<div class="row">
								
										<!-- thumbnail start -->
										<div class="col-md-1">
											<img src="{{asset('public/images/'.$item->options->image)}}"  class="img-fluid">
										</div>
										<!-- thumbnail end -->

										<!-- info start -->
										<div class="col-md-2 review-product-info">
											<h2>{{$item->name}}</h2>
											<p>{{$item->price}} taka</p>
										
										</div>
										<!-- info end -->

										<!-- total item start -->
									
										<div class="col-md-4 text-center">
										
											
										<form action="{{url('/cart/update')}}" method="POST" >
											<!-- @csrf -->
												<!-- <input type="number" class="cartqty" data-id="{{$item->id}}" value="{{$item->qty}}" name="update_qty" >  -->

												<div class="nice-number">
													<button type="button" class="decrement">-</button>
													<input type="number" class="cartqty" data-id="{{$item->id}}" value="{{$item->qty}}" name="update_qty" style="width: 3ch;">
													<button type="button" class="inc">+</button>
												</div>
												<input type="hidden" name="row_Id" value="{{$item->rowId}}">
												<input type="hidden" value="{{$item->price}}" class="price_product" name="subtotalprice" id="price_product{{$item->id}}">
												@csrf
											</form>
										</div>
								
										{{-- subtotal --}}
										
										<!-- total item end -->

										<!-- updated price start -->
										<div class="col-md-3 updated-price">
										<p class="productTotalPrice" id="subPrice{{$item->id}}">{{$item->qty*$item->price}} Taka</p>
										</div>
										<div class="col-md-2 text-center">
										
												
											<button  class="btn btn-xs deleteButton" data-delete-id="{{$item->rowId}}"  > <i class="fa fa-trash"></i></button>	
											
										</div>
										<!-- updated price end -->

									</div>
								</div>
                            </div>
                            @endforeach
                            @endif
							<!-- review order row end -->
							
						
							
							
							<!-- sub total start -->
							<div class="row border">
								<div class="col-md-12">
									<h2>subtotal : </h2>
								</div>
							</div>
							
							<div class="row border text-right">
								<div class="col-md-12">
									<p>free delivery</p>
								</div>
								<div class="col-md-12">
									<h2 id="totalPricevalue">total : {{Cart::priceTotal()}} taka</h2>
									<input type="hidden" name="totalamountorder" id="totalPricevalueInput" value="{{$totalamount}}" >
								</div>
							</div>
							<!-- total end -->
							<!-- page change start -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group text-right">
										<p class="next-1 next">next step</p>
									</div>
								</div>
							</div>
							<!-- page change end -->
							
							
						</div>
						<!-- billing address end -->
						<!-- shipping details start -->
						<div class="page review-order">
							
							<form action="{{url('/chechout/orderProduct')}}" method="POST">
							@csrf
								<div class="row border">
								<div class="col-md-12">
									<p class="payment-details">payment details</p>
								</div>
								<div class="col-md-12">
									<label class="custom_checkbox">
										cash On delivery
										<br>
										
									  	<input type="radio" name="payment_type" value="cod" checked>
									  	<span class="checkmark"></span>
									</label>
								</div>
								<div class="col-md-12">
									<label class="custom_checkbox">Bkash
									  	<input type="radio" name="payment_type" value="bkash">
									  	<span class="checkmark"></span>
									</label>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>first name*</label>
										<input type="text" class="form-control validate" required="" value="{{$customer_data->first_name}}" name="first_name" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>last name*</label>
										<input type="text" class="form-control validate"  name="last_name">
									</div>
								</div>
							</div>
							
							<!-- company name start -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Address</label>
										<input type="text" class="form-control validate" required="" value="{{$customer_data->address}}" name="address">
									</div>
								</div>
							</div>
							<!-- company name end -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>email address</label>
										<input type="email" class="form-control validate" value="{{$customer_data->email}}" required="" name="email" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>phone*</label>
										<input type="text" class="form-control validate" value="{{$customer_data->phone}}" required="" name="phone" readonly>
									</div>
								</div>
							</div>
							<!-- address start -->
						
							<!-- address end -->
						
							<!-- page change start -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group nextBtn text-right">
										<p class="prev-2 prev" style="display:none">previous step</p>
										<p class="prev-1 prev">previous step</p>
										<input type="submit" class="form-control Submit" value="Place Order"></input>
									</div>
								</div>
							</div>
							<!-- page change end -->
							
							<!-- page change start -->
							<div class="row" style="display:none">
								<div class="col-md-12">
									<div class="form-group nextBtn text-right">
										<p class="prev-1 prev">previous step</p>
										<p class="next-2 next">next step</p>
									</div>
								</div>
							</div>
							<!-- page change end -->
							</form>
						</div>
						<!-- shipping details end -->
						
					</div>
				</div>
			</div>
		</div>
		<!-- form item row end -->
	</div>
</section>

<script type="text/javascript">






const slidePage = document.querySelector(".slidepage");
const firtNextBtn = document.querySelector(".nextBtn");
const submitBtn = document.querySelector(".Submit");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step");
const activebullet = document.querySelectorAll(".step .bullet");
//validate
// const validate = document.querySelector(".validate");
let max = 3;
let current = 1;
nextBtnSec.addEventListener("click", function(){
	slidePage.style.marginLeft = "-25%";
	bullet[ current - 1 ].classList.add("active");
	progressCheck[ current - 1 ].classList.add("active");
	progressText[ current - 1 ].classList.add("active");
	current += 1;
});
nextBtnThird.addEventListener("click", function(){
	slidePage.style.marginLeft = "-50%";
	bullet[ current - 1 ].classList.add("active");
	progressCheck[ current - 1 ].classList.add("active");
	progressText[ current - 1 ].classList.add("active");
	current += 1;
});
submitBtn.addEventListener("click", function(){
	bullet[ current - 1 ].classList.add("active");
	progressCheck[ current - 1 ].classList.add("active");
	progressText[ current - 1 ].classList.add("active");
	current += 1;
	setTimeout(function(){
	},800);
});
//next button
//prev button
prevBtnSec.addEventListener("click", function(){
	slidePage.style.marginLeft = "0%";
	bullet[ current - 2 ].classList.remove("active");
	progressCheck[ current - 2 ].classList.remove("active");
	progressText[ current - 2 ].classList.remove("active");
	current -= 1;
});
prevBtnThird.addEventListener("click", function(){
	slidePage.style.marginLeft = "-25%";
	bullet[ current - 2 ].classList.remove("active");
	progressCheck[ current - 2 ].classList.remove("active");
	progressText[ current - 2 ].classList.remove("active");
	current -= 1;
});
</script>

<!--//prev button-->
<!-- checkout main section end -->
 <script>







// in cart increese product quantiry per product
const increamentCartQuantiry = (id) => {
	$.ajax({
			type: 'get',
			url: '<?php echo url('/addCart/product/');?>/'+id,
			dataTpe:'json',
			success:function({ cart}){
				
				document.getElementById("carttotal").innerHTML =cart
			}
	});
}


// in cart decrese product quantity per product 
const decreementCartQuantity = (id, quantity, token)=>{
	$.post('{{route("updateCart")}}',{
				row_Id:id,
				update_qty:quantity,
				_token: token
			} ,
		
			function(result,status){
				document.getElementById("carttotal").innerHTML = result
			});
}



const cartInput = document.getElementsByClassName('cartqty')
const productSubTotalPrice = document.getElementsByClassName('productTotalPrice')
 const incrementButton = document.getElementsByClassName('inc');
 const decreementButton = document.getElementsByClassName('decrement')


 const addTotalPrice = ()=>{
	 let totalPP = 0;
	for(let subIndex in productSubTotalPrice){
		if(parseFloat(productSubTotalPrice[subIndex].innerHTML)){
			totalPP += parseFloat(productSubTotalPrice[subIndex].innerHTML)
		}
	}

	return totalPP;
 }

 const deleteButton = document.getElementsByClassName('deleteButton');
const singleCartItem = document.getElementsByClassName('cartSingeSection');
for(let deleteSinge in deleteButton){

	
	deleteButton[deleteSinge].onclick = (event)=>{
		const deleteid = event.target.dataset.deleteId
		let con =  confirm("Are you sure?");
		if(con){
			$.ajax({
			type:'get',
			url: "{{url('/customer/cartproduct/remove')}}"+'/'+deleteid,
			dataTpe:'json',
			success:function(cart){
				console.log(cart)
				document.getElementById("carttotal").innerHTML =cart
			}
	});
			singleCartItem[deleteSinge].remove();
			document.getElementById('totalPricevalue').innerHTML = `Total : ${addTotalPrice()}.00 Taka`


		}

		
	}
}

 for(let decBtnIndex in decreementButton){
	 decreementButton[decBtnIndex].onclick = (event)=>{
	
	
		decreementCartQuantity(event.target.form[3].value, parseFloat(event.target.form[1].value-1),event.target.form[5].value);
		let currentValue = parseFloat(event.target.form[1].value);
		event.target.form[1].value = currentValue -=1

		let subTotal = parseFloat(event.target.form[4].value)*parseFloat(event.target.form[1].value)
		productSubTotalPrice[decBtnIndex].innerHTML = subTotal+' Taka'

		document.getElementById('totalPricevalue').innerHTML = `Total : ${addTotalPrice()}.00 Taka`
		document.getElementById('totalPricevalueInput').value = addTotalPrice()

	 }
 }

 for(let incrementBtn in incrementButton){
	 incrementButton[incrementBtn].onclick = (event)=>{
		
	
		increamentCartQuantiry(event.target.form[1].dataset.id)
		
		let currentValue = parseFloat(event.target.form[1].value);
		event.target.form[1].value = currentValue + 1

		let subTotal = parseFloat(event.target.form[4].value)*parseFloat(event.target.form[1].value)
		productSubTotalPrice[incrementBtn].innerHTML = subTotal+' Taka'

		document.getElementById('totalPricevalue').innerHTML = `Total : ${addTotalPrice()}.00 Taka`
		document.getElementById('totalPricevalueInput').value = addTotalPrice()



		
		
	 }
 }



  </script>
@endsection
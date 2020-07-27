@extends('frontend.frontend_master')
@section('mainContent')
<!-- signup page start -->
<section class="signup">
	<div class="container">
		<div class="row signup-box">
			<div class="col-md-6 sign-up-left">
				<div class="absolute-div">
					<div class="row">
						<div class="col-md-6 offset-md-3 signup-text">
							<h2>sign up</h2>
						</div>
					</div>
					{!! Form::open(['route' => 'customer.registation','method' => 'POST','id' =>'registrationForm', 'onsubmit'=> 'return submitVerify();']) !!}
						<div class="form-group position-relative">
							<label>name</label><span style="color: red;">*</span>
						<input type="text" class="form-control" name="first_name" value="{{old('first_name')}}" placeholder="Khandakar Nahid">
						

							@if($errors->has('first_name'))

							<div class="validation">{{$errors->first('first_name')}}</div>
							@else
							<div class="validation"></div>
							@endif
						</div>
						<div class="form-group">
							<label>email</label><span style="color: red;">*</span>
							<input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="example@gmail.com">
						
							@if($errors->has('email'))

							<div class="validation">{{$errors->first('email')}}</div>
							@else

						<div class="validation"></div>
							@endif
						</div>
						<div class="form-group">
							<label>Phone</label><span style="color: red;">*</span>
							<input type="text" class="form-control"  value="{{old('phone')}}" name="phone" placeholder="01.......">
							
							@if($errors->has('phone'))

							<div class="validation">{{$errors->first('phone')}}</div>
						@else
						<div class="validation"></div>
							  @endif
						</div>
						<div class="form-group">
							<label>password</label><span style="color: red;">*</span>
							<input type="password" class="form-control" name="password" placeholder="******">
							
							@if($errors->has('password'))
							<div class="validation">{{$errors->first('password')}}</div>
							@else
							<div class="validation"></div>
							  @endif
						</div>
						<div class="form-group">
							<label>address</label><span style="color: red;">*</span>
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control" value="{{old('address')}}"  name="address" placeholder="address">
								
									@if($errors->has('address'))
									<div class="validation">{{$errors->first('address')}}</div>
										
									@else
							<div class="validation"></div>
							  @endif
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" value="{{old('city')}}" name="city" placeholder="City">
									
									@if($errors->has('city'))
									<div class="validation">{{$errors->first('city')}}</div>
										
									@else
							<div class="validation"></div>
							  @endif
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" value="{{old('division')}}" name="division" placeholder="Division">
									<div class="validation"></div>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" value="{{old('zip')}}" name="zip" placeholder="Zip">
									<div class="validation"></div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input id="submitRgistration" type="submit" class="btn" value="Sign Up" name="">
						</div>
						{!! Form::close() !!}
				</div>
				<div class="row signup-bottom">
					<div class="col-md-12">
						<ul>
							<li>
								<a href="">
									<img src="{{asset('public/frontend/images/logo.png')}}">
								</a>
							</li>
							<li>
								{{-- <a href="">
									<img src="{{asset('public/frontend/images/loginfb.png')}}">
								</a> --}}
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 sign-up-right">
				<div class="row">
					<div class="col-md-6 offset-md-3 signup-text">
						<h2>login</h2>
					</div>
				</div>
				<div class="row">
					@if(Session::has('exception'))
						<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('exception') }}</p>
					@endif
					<div class="col-md-12">
						{!! Form::open(['route' => 'customer.login','method' => 'POST']) !!}
							<div class="form-group">
								<label>email</label><span style="color: red;">*</span>
								
								<input type="email" class="form-control" name="login_email" placeholder="example@gmail.com" required>
							</div>
							<div class="form-group">
								<label>password</label><span style="color: red;">*</span>
								<input type="password" class="form-control" name="login_password" required >
							</div>
							<div class="form-group">
								<input type="submit" class="btn" value="Login" name="">
							</div>
							{!! Form::close() !!}
					</div>
				</div>
				<img src="{{asset('public/frontend/images/logo.png')}}" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!-- about us section end -->
@endsection
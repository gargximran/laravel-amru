@extends('frontend.frontend_master')
@section('mainContent')
<section class="contact-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="550" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=SST%20Tech%20Limited%2C%2034%20%E0%A6%B8%E0%A7%8B%E0%A6%A8%E0%A6%BE%E0%A6%B0%E0%A6%97%E0%A6%BE%E0%A6%81%20%E0%A6%9C%E0%A6%A8%E0%A6%AA%E0%A6%A5%2C%20%E0%A6%A2%E0%A6%BE%E0%A6%95%E0%A6%BE%201230&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:left;height:600px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
            </div>
			</div>
		</div>
	</div>
</section>


<!-- contact form start -->
<section class="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name*" name="">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email*" name="">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn" value="Send Message" name="">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- contact form end -->
@endsection
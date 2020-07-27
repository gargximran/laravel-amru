

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



	<!-- the main css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css')}}"> 

	<!-- responsive css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/responsive.css')}}"> 	


</head>
<body>
    


    <!-- login page start -->
<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-6 login-box">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<a href="{{url('/')}}">
							<img src="{{asset('public/frontend/images/logo.png')}}" class="img-fluid">
						</a>
					</div>
				</div>
                {!! Form::open(['route' => 'login','method' => 'POST']) !!}
					<div class="form-group">
						<label>email</label>
                        <input type="email" name="email" class="form-control" >
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
					</div>

					<div class="form-group">
						<label>password</label>
                        <input type="password" name="password" class="form-control" name="">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
					</div>

					<div class="form-group">
						<input type="submit" class="btn" value="submit" name="">
					</div>
                    {!! Form::close() !!}
				<div class="row login-bottom">
					<div class="col-md-12">
						<ul>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- login page end -->




</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
         
		
        <meta id="token" name="_token" content="{{ csrf_token() }}">
        <title>@yield('title') </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/fav.png')}}">
		
	
        <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
	
		<link rel="stylesheet" type="text/css" href="{{asset('public/assets/fontawesome/css/all.min.css')}}">
		
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/line/css/line-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('public/assets/css/morris.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/css/select2.min.css')}}">
	
        <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
   	

               <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('public/assets/css/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('public/assets/css/toastr.min.css')}}">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/customstyle.css')}}">
 
    </head>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			@include('admin.inc.header')
			
      		@include('admin.inc.sidebar')
              <script src="{{asset('public/admin/jquery/jquery.min.js')}}"></script>
			@yield('content')
			
        </div>
        <!-- /Main Wrapper -->
       

   
        

	
        <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/assets/js/select2.min.js')}}"></script>

        <script src="{{asset('public/assets/js/moment.min.js')}}"></script>
		<script src="{{asset('public/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('public/assets/js/jquery.slimscroll.min.js')}}"></script>
		<script src="{{asset('public/assets/js/app.js')}}"></script>
		<script src="{{asset('public/assets/summernote/summernote-bs4.min.js')}}"></script>
		<script>
          $(function () {
            // Summernote
            $('.textarea').summernote()
          })
        </script>

           
    </body>
</html>
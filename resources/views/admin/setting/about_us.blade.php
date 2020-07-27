@extends('admin.admin_master')
@section('title')
@endsection
@section('content')
	<!-- Page Wrapper -->
    <div class="page-wrapper">
			
        <!-- Page Content -->
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">About Settings</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                <form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Say Something</label>    
                                    <input type="hidden" name="id" value="{{$about_us->id}}">                         
                                    <textarea name="description" id="editor1" cols="30" rows="10" value="">{{$about_us->description}}</textarea>
                                </div>
                            </div>

                         
                        </div>
                        
                       
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                <img src="{{asset('public/images/'.$about_us->image)}}" alt="" height="80px" width="120">
                                 
                                    <input class="form-control" name="files" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        
    </div>
    <!-- /Page Wrapper -->
    <script src="{{asset('public/assets/ckeditor/ckeditor.js')}}"></script>
<script>
      $('document').ready(function(){
        $('#setting').addClass('noti-dot');
        $('#about_us').addClass('active');
    })
    $(function () {
      
      CKEDITOR.replace('editor1')
     
    })
  </script>
@endsection
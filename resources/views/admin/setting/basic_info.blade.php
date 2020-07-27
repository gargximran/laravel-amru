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
                                <h3 class="page-title">Company Settings</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                <form action="{{route('basic.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Company Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="AmruBazar " readonly>
                                    <input class="form-control" type="hidden" value="{{$basic_info->id}}" name="id">
                                </div>
                            </div>
                            {{-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Contact Person</label>
                                    <input class="form-control " value="Daniel Porter" type="text">
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Address</label>
                                <input class="form-control " name="address" value="{{$basic_info->address}}"  type="text">
                                </div>
                            </div>

                         
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                <input class="form-control" name="email" value="{{$basic_info->email}}"  type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" name="phone" value="{{$basic_info->phone}}"  type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input class="form-control" name="mobile" value="{{$basic_info->mobile}}" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input class="form-control" name="fax" value="{{$basic_info->fax}}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Website Url</label>
                                    <input class="form-control" value="http://amrubazarbd.com/" type="text" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                <img src="{{asset('public/images/'.$basic_info->logo)}}" alt="" height="80px" width="120">
                                 
                                    <input class="form-control" name="logo" type="file">
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
    <script>
      $('document').ready(function(){
        $('#setting').addClass('noti-dot');
        $('#basic_info').addClass('active');
    })
</script>
    <!-- /Page Wrapper -->
@endsection
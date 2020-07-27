@extends('admin.admin_master')
@section('title')
@endsection
@section('content')
<!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/assets/summernote/summernote-bs4.css')}}">
<div class="page-wrapper">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Banner/Slider</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Slider </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            
            <div class="col-lg-6">
                
                <div class="card">
                    
                    <div class="card-header">
                        <a href="#" class="btn add-btn" id="create_category" data-toggle="modal" data-target="#add_slider"><i class="fa fa-plus"></i> New  Slider</a>

                        <h4 class="card-title mb-0">Slider</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="example">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        
                                  
                                    <tr>
                                    <td><img src="{{asset('public/images/'.$slider->image)}}" height="100px" width="150px" alt=""></td>
                                        <td>{{$slider->title}}</td>
                                        <td>{!! $slider->short_description !!}</td>
                                        <td>{{$slider->status}}</td>
                                        <td>
                                            <a href="" class="btn btn-success  btn-sm" data-toggle="modal" data-target="#editslider">
                                          <i class="fa fa-edit"></i>
                                                    
                                        </a>
                                        <a href="{{url('/admin/slider/delete/'.$slider->id)}}" data-name="{{$slider->name}}" data-image="{{$slider->image}}" data-toggle="modal" data-target="#editbanner" class="btn btn-danger btn-sm">
                                            <i class="fas fa-times"></i>
                                                     
                                        </a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Banner</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0" id="all_banner">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banner as $item)
                                        
                                    
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td><img src="{{asset('public/images/'.$item->image)}}" alt="" height="100px" ></td>
                                        <td> 
                                        @if ($item->status=='active')
                                        <div class="badge badge-success">active</div>
                                        @else
                                        <div class="badge badge-danger">deactive</div>
                                        @endif
                                                        
                                            </a>
                                            <a href="{{url('/admin/item/view/'.$item->id)}}" data-name="{{$item->name}}" data-image="{{$item->image}}" data-toggle="modal" data-target="#update_banner" class="btn btn-primary a-btn-slide-text">
                                                <i class="fa fa-edit"></i>
                                                         
                                            </a>
                                              
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    </div>			
</div>
<div id="add_slider" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Categorey</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="" id="sliderform" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Title<span class="text-danger">*</span></label>
                        <input class="form-control" name="title" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="editor1">Short Description</label>
                            
                                 <textarea  name="short_description" rows="10" cols="50" class="textarea" 
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      
                    </div>
                    <div class="form-group">
                        <label>Image<span class="text-danger">*</span></label>
                        <input class="form-control" type="file"  name="file" required>
                    </div>
                    <div class="submit-section">
                       
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Submit" />
                        {{-- <button class="btn btn-primary submit-btn">Submit</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- edit banner -->
<div id="edit_slider" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="" id="editbanner" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label>Title<span class="text-danger">*</span></label>
                        <input class="form-control" id="slideritle" name="title" type="text" required>
                        <input type="hidden" name="id" id="slider_id">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                            
        <textarea  name="short_description" id="shorttex"  rows="10" cols="50" class="textarea" 
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      
                    </div>
                         <div class="form-group">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select class="select" name="status" required id="status">
                                                
                                                <option value="active">Actvie</option>
                                              
                                                <option value="deactive">Deactive</option>
                                                
                                            </select>
                         </div>
                        
                    <div class="form-group">
                        <span id="slider_image"></span><br>
                        <label>Image<span class="text-danger">*</span></label>
                        <input class="form-control" id="slider_image" type="file"  name="file" >
                    </div>
                    <div class="submit-section">
                       
                        <input type="submit" name="" id="" class="btn btn-warning" value="update" />
                        {{-- <button class="btn btn-primary submit-btn">Submit</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--edit Banner-->
<div id="update_banner" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Banner </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="" id="editbanner" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                       
                        <input type="hidden" name="id" id="banner_id">
                    </div>
                   
                         <div class="form-group">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select class="select" name="status" required id="status">
                                                
                                                <option value="active">Actvie</option>
                                              
                                                <option value="deactive">Deactive</option>
                                                
                                            </select>
                         </div>
                        
                    <div class="form-group">
                        <span id="slider_image"></span><br>
                        <label>Image<span class="text-danger">*</span></label>
                        <input class="form-control" id="banner_image" type="file"  name="banner_file" >
                    </div>
                    <div class="submit-section">
                       
                        <input type="submit" name="" id="" class="btn btn-warning" value="update" />
                        {{-- <button class="btn btn-primary submit-btn">Submit</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->
<script src="{{asset('public/assets/js/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('public/assets/js/toastr/toastr.min.js')}}"></script>
<script>
      $('document').ready(function(){
        $('#setting').addClass('noti-dot');
        $('#banner').addClass('active');
    })
</script>    
    
<script>

           function viewData(){
        $.ajax({
            type:"GET",
            dataType:"json",
            url:"{{url('/admin/slider/all')}}",
            success:function(response){
                var rows="";
                var i=1;
                $.each(response,function(key,value){
                    var j=i++;
                    
                    rows=rows+"<tr>";
                    rows=rows+"<td>"+j+ "</td>";
                    rows=rows+"<td>";
                    rows=rows+"<img src={{ URL::to('/public/images/') }}/"+value.image+" height='40px' width='40px' >"
                    rows=rows+ "</td>";                                      
                    rows=rows+"<td>"+value.title+"</td>";
                   
                    rows=rows+"<td>"+value.short_description+"</td>";
                    rows=rows+"<td>";
                    if(value.status=='active'){
                    rows=rows+ "<div class='badge badge-success'>"+'active'+"</div></td>";
                    }else{
                        rows=rows+ "<div class='badge badge-danger'>"+'inactive'+"</div></td>";
                    }                
                    rows=rows+"<td width='10%'>";
                    rows=rows+"<button  class='btn-success btn-xs imageSlider' data-toggle='modal' data-id='"+value.id+"' data-slideritle='"+value.title+"' data-image='"+value.image+"' data-short_description='"+value.short_description+"' data-status='"+value.status+"' ><i class='far fa-edit'></i></button>"
                    rows=rows+" <button  class='btn-danger btn-xs' onclick='deleteData("+value.id+")'><i class='fas fa-times'></i></buttpn>"
                    rows=rows+"</td></tr>";
                });
                $('#example tbody').html(rows);
            }
        })
    }
    viewData();

       $(function(){

            const Toast = Swal.mixin({
              toast: true,
              position: 'center',
              showConfirmButton: false,
              timer: 3000
            });

           $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
                
           
        $('#sliderform').on('submit',function(e){
            e.preventDefault();
            var data=new FormData(this);
        
            $.ajax({
            type:'POST',
            dataType:'json',
            data: data,
            
            contentType: false,
        
            cache: false,
            processData: false,
            url:"{{url('admin/slider/add')}}",
            success:function (response){
           
                 viewData();
                 Toast.fire({
                        type: 'success',
                        title: 'Thank You!!Sub-Category Add Successfully!!!!!!'
                      });
               
                 $('#add_slider').modal('hide');
                  $('#sliderform')[0].reset();
            
            },
            error:function(error){
                console.log(error)
            }
        });
        });
   });
          $(function(){
         $('#example').on('click','.imageSlider',function(){      


        $('#edit_slider').modal('show');
        var id=$(this).data('id')
         var image=$(this).data('image');
         var slideritle=$(this).data('slideritle');
         var description=$(this).data('short_description');
         var status=$(this).data('status');

        $('#slider_id').val(id);
        $('#slider_image').html("<img src={{ URL::to('/public/images/') }}/" + image + " width='70' class='img-thumbnail' />");
        
        $('#slideritle').val(slideritle);          
        // $('.').html();  
         $(".textarea").text(description);      
        $("select#status").val(status).change();
                
        
         
    });

});
             $(function(){

            const Toast = Swal.mixin({
              toast: true,
              position: 'top-right',
              showConfirmButton: false,
              timer: 3000
            });

           $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
        $('#editbanner').on('submit',function(e){
            e.preventDefault();
            var data=new FormData(this);
            $.ajax({
            type:'POST',
            dataType:'json',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            url:"{{url('/admin/slider/update')}}",
            success:function (response){
                // alert('ok');
                // console.log(response);
                 viewData();
                 Toast.fire({
                        type: 'success',
                        title: 'Slider Info Update Successfully!!!!!!'
                      });               

                          
                
                $('#edit_slider').modal('hide'); 
            },
            error:function(error){
                console.log(error)
            }
        });
        });
   });


         function deleteData(id){
        const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });
        if(!confirm('Are You Sure?')) return;
        $.ajax({
            type:"get",
            dataType:"json",
            url:"{{URL::to('/admin/slider/delete/')}}"+'/'+id,
            success:function(response){
                Toast.fire({
                        type: 'success',
                        title: 'category delete Successfully!!!'
                      });
                viewData();
            }

        })
   }
</script>
@endsection
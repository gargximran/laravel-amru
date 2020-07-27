@extends('admin.admin_master')
@section('title')
Admin- Category 
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('public/admin/datatables-bs4/css/dataTables.bootstrap4.css')}}">
<div class="page-wrapper">
   
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Categorey</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Categorey</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    
                    <a href="#" class="btn add-btn" id="create_category" data-toggle="modal" data-target="#add_category"><i class="fa fa-plus"></i> Add Category</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table  class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Category Name</th>
                               
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                <?php $i=1?>
                                @foreach ($categoris as $item)
                                <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset('public/images/'.$item->category_image)}}" alt="" height='40px' width='40px'> </td>
                                <td>{{$item->category_name}}</td>
                                <td>
                                    @if ($item->category_status=='active')
                                    <div class='badge badge-success'>active</div>
                                        @else 
                                        <div class='badge badge-danger'>Deactive</div>
                                    @endif

                                </td>
                                <td>
                                <button  class='btn-success btn-xs hello'  data-id='{{$item->id}}'data-name='{{$item->category_name}}'  data-image='{{$item->category_image}}' data-status='{{$item->category_status}}'><i class='far fa-edit'></i>
                                    <button  class='btn-danger btn-xs' onclick='deleteData({{$item->id}})'><i class='fas fa-times'></i>
                                </td>
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    
    <!-- Add Department Modal -->
    <div id="add_category" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Categorey</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" id="formModal" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Category Name <span class="text-danger">*</span></label>
                            <input class="form-control" id="category_name" name="category_name" type="text" required>
                            
                        </div>
                        <div class="form-group">
                            <label>Image<span class="text-danger">*</span></label>
                            <input class="form-control" type="file" id="category_image"  name="category_image" required="">
                        
                        </div>
                        <div class="submit-section">
                           
                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Department Modal -->
    
    <!-- Edit Department Modal -->
    <div id="editCategory" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update_category" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label> Name <span class="text-danger">*</span></label>
                            <input class="form-control" id="edit_name" name="edit_cat" type="text">
                             <input class="form-control" id="cat_id" name="id" type="hidden">
                        </div>
                      
                        {{-- <div class="form-group">
                            <label>Discount <span class="text-danger"></span></label>
                            <input class="form-control" id="discount" name="discount" type="text">
                             
                        </div> --}}
                        <div class="form-group">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select class="select" name="status" required id="edit_status">
                                                
                                                <option value="active">Actvie</option>
                                              
                                                <option value="deactive">Deactive</option>
                                                
                                            </select>
                         </div>
                        
                       
                           <div class="form-group">
                             <span id="store_image"></span> <br>
                            <label>Image<span class="text-danger">*</span></label>
                            <input class="form-control" type="file" id="edit_image"  name="category_image">
                        
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Department Modal -->

  <div id="confirmModal"  class="modal custom-modal fade" id="delete_department" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <span id="form_result"></span>
                    <div class="form-header">
                        <h3>Delete Category</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a   name="ok_button" id="ok_button" class="btn btn-primary continue-btn">Delete</a>
                                {{-- <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">Delete</button> --}}
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Department Modal -->
    
</div>
<!-- SweetAlert2 -->
<script src="{{asset('public/admin/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/admin/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('public/assets/js/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('public/assets/js/toastr/toastr.min.js')}}"></script>
<script type="text/javascript">
    $('document').ready(function(){
        $('#dot').addClass('noti-dot')
        $('#category').addClass('active');
    })
</script>
<script>

  
    
    function viewData(){
        $.ajax({
            type:"GET",
            dataType:"json",
            url:"{{url('/admin/category/getData')}}",
            success:function(response){
                var rows="";
                var i=1;
                $.each(response,function(key,value){
                    var j=i++;
                    
                    rows=rows+"<tr>";
                    rows=rows+"<td>"+j+ "</td>";
                    rows=rows+"<td>";
                    rows=rows+"<img src={{ URL::to('/public/images/') }}/"+value.category_image+" height='40px' width='40px' >"
                    rows=rows+ "</td>";                                      
                    rows=rows+"<td>"+value.category_name+"</td>";
                    // rows=rows+"<td>"+value.cat_discount+"</td>";
                    rows=rows+"<td>";
                    if(value.category_status=='active'){
                    rows=rows+ "<div class='badge badge-success'>"+'active'+"</div></td>";
                    }else{
                        rows=rows+ "<div class='badge badge-danger'>"+'inactive'+"</div></td>";
                    }                
                    rows=rows+"<td width='10%'>";
                    rows=rows+"<button  class='btn-success btn-xs hello'  data-id='"+value.id+"'data-name='"+value.category_name+"' data-image='"+value.category_image+"' data-status='"+value.category_status+"'><i class='far fa-edit'></i></button>"
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
        $('#formModal').on('submit',function(e){
            e.preventDefault();
            var data=new FormData(this);
     
            $.ajax({
            type:'POST',
            dataType:'json',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            url:"{{route('category.store')}}",
            success:function (response){
                // alert('ok');
                // console.log(response);
                 viewData();
                 Toast.fire({
                        type: 'success',
                        title: 'Thank You!!Category Add Successfully!!!!!!'
                      });
                 clearData();
                 $('#add_category').modal('hide');
                
                //  $('#category_name').val('');
            },
            error:function(error){
                console.log(error)
            }
        });
        });
   });
    function clearData(){
       $('#category_name').val('');
        $('#category_image').val('');
       
    }
    $(function(){
    $('#example').on('click','.hello',function(){
       


        $('#editCategory').modal('show');
        var id=$(this).data('id')
         var image=$(this).data('image');
         var category_name=$(this).data('name');
     

         var status=$(this).data('status');
          $('#store_image').html("<img src={{ URL::to('/public/images/') }}/" + image + " width='70' class='img-thumbnail' />");
        
         $('#edit_name').val(category_name);
          $('#title').html(category_name);
               
         $("select#edit_status").val(status).change();
         $('#cat_id').val(id);       
        
         
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
        $('#update_category').on('submit',function(e){
            e.preventDefault();
            var data=new FormData(this);
          //  alert('ok');
          
            $.ajax({
            type:'POST',
            dataType:'json',
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            url:"{{url('/admin/category/update')}}",
            success:function (response){
                // alert('ok');
                // console.log(response);
                 viewData();
                 Toast.fire({
                        type: 'success',
                        title: 'Category Update Successfully!!!!!!'
                      });               

                $('#image').val('');
                $('#category_name').val('');
                $('#editCategory').modal('hide'); 
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
            url:"{{URL::to('/admin/category/destroy/')}}"+'/'+id,
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
<script>
    $(function () {
      $("#example").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
@endsection
@extends('admin.admin_master')
@section('title')
Admin-Supplier
@endsection
@section('content')
<style>
    .btn-group-xs > .btn, .btn-xs {
      padding: .25rem .4rem;
      font-size: .875rem;
      line-height: .5;
      border-radius: 20px;
    }
    </style>
    
	<!-- Page Wrapper -->
    <div class="page-wrapper">
			
        <!-- Page Content -->
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Purchase</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Purchase</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_item"><i class="fa fa-plus"></i> New Item</a>
                        <div class="view-icons">
                            <a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                            <a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <!-- Search Filter -->
            <div class="row filter-row">
               
                <div class="col-sm-6 col-md-3">  
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating" name="search" id="search">
                        <label class="focus-label">Item Name</label>
                    </div>
                </div>
               
                <div class="col-sm-6 col-md-3">  
                    <a href="#" style="border-radius:20px;" class="btn btn-success btn-block"> Search </a>  
                </div>
            </div>
            <!-- Search Filter -->
            
            <div class="row staff-grid-row" id="sup">
               
                <div class="col-md-6 col-sm-6 col-12 col-lg-6 col-xl-6" >
                    {{-- <div class="profile-widget">
                            <div class="profile-img">
                                <a href="profile.html" class="avatar"><img src="{{asset('public/assets/image/avatar-02.jpg')}}" alt=""></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">John Doe</a></h4>
                            <div class="small text-muted">Web Designer</div>
                    </div> --}}
                </div>
            </div>
            </div>
        </div>
        <!-- /Page Content -->
        
        <!-- Add Employee Modal -->
        <div id="add_item" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> New Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="add_purchase_item" method="POST" action="">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                        <input class="form-control" id="item_name" name="item_name" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Image <span class="text-danger">*</span></label>
                                        <input class="form-control" id="image" name="image" type="file">
                                    </div>
                                </div>
                               
                            </div>
                           
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Employee Modal -->
        
        <!-- Edit Employee Modal -->
        <div id="edit_employee" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                        <input class="form-control" id="name" name="sup_name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone</label>
                                        <input class="form-control" id="phone" name="phone" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Address <span class="text-danger">*</span></label>
                                        <input class="form-control" id="sup_address" name="address" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                        <input class="form-control" id="email"  name="sup_email" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Image <span class="text-danger">*</span></label>
                                        <input class="form-control" id="sup_image" name="sup_image" type="file">
                                    </div>
                                </div>
                               
                            </div>
                           
                           
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Employee Modal -->
        
        <!-- Delete Employee Modal -->
        <div class="modal custom-modal fade" id="delete_employee" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Employee</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
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
        <!-- /Delete Employee Modal -->
        
    </div>
    <!-- /Page Wrapper -->

    <!-- SweetAlert2 -->
<script src="{{asset('public/assets/js/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('public/assets/js/toastr/toastr.min.js')}}"></script>
<script>
    $('documnet').ready(function(){
        $('#category').addClass('nav-item has-treeview menu-open');
        $('#category-new').addClass('nav-link active');
    })
</script>
<script>
    function viewData(){
            $.ajax({
            type:"GET",
            dataType:"json",
            url:"{{route('purchase.getItem')}}",
            success:function(response){
                var div="";
                var i=1;
                $.each(response,function(key,value){
                    var j=i++;
                    
                    div=div+"<div class='col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3'>";
                    div=div+"<div class='profile-widget'>"
                    div=div+"<div class='profile-img'>";
                    div=div+"<a href=localhost/amru/admin/purchase/cart/"+value.id+" class='avatar'>"
                    div=div+"<img src=http://localhost/amru/public/images/"+value.image+" height='81px' width='40px' >"
                       
                    div=div+"</a></div>";
                    div=div+" <h4 class='user-name m-t-10 mb-0 text-ellipsis'><a href='profile.html'>"+value.name+"</a></h4>";
                   
                    div=div+"<div class='small text-muted'>";
                //    div=div+"<button type='button' class='btn btn-primary btn-xs'  onclick='cartData("+value.id+")' ><i class='far fa-cart'></i></button>";
                 div=div+"<button type='button' class='btn btn-primary btn-xs'  onclick='editData("+value.id+")' ><i class='far fa-edit'></i></button>";

                    // div=div+"<button type='button'  class='primary-btn add-to-cart addtocart'  id='addCart' data-id='"+value.id+"'><i class='fa fa-shopping-cart'></i></button>";
                    div=div+" <button type='button' class='btn btn-danger btn-xs' onclick='deleteData("+value.id+")'><i class='fas fa-times'></i></buttpn>";
                    div=div+"</div></div></div>";
                });
                $('#sup').html(div);
            }
        })
    }
    viewData();



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
            $('#add_purchase_item').on('submit',function(e){
                e.preventDefault();
                var data=new FormData(this);
                $.ajax({
                    url:"{{route('purchase.store')}}",
                    method:'POST',
                    data:data,
                    dataType:'json',
                    contentType:false,
                    cache:false,
                    processData:false,
                    success:function (response){
                    
                        Toast.fire({
                                type: 'success',
                                title: 'Thank You!!Item Add Successfully!!!!!!'
                            });
                            clearData();
                            viewData();
                            $('#add_item').modal('hide');
                            $('#add_item').modal('reset');
                    
                    },
                    error:function(error){
                        console.log(error)
                    }
                })
            
            });

        });
    function clearData(){
        $('#item_name').val('');       
        $('#image').val('');
       
    }

    function  editData(id){
        // alert(id);
     var name=$(this).data('name');
       alert(name)
        // $('#edit_employee').modal('show');
    }

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
            url:"{{URL::to('/admin/purchase/delete/')}}"+'/'+id,
            success:function(response){
                Toast.fire({
                        type: 'success',
                        title: 'Item delete Successfully!!!'
                      });
                viewData();
            }

        })
    }


</script>

        {{-- <script>
            $(document).ready(function(){
            
            fetch_customer_data();
            
            function fetch_customer_data(query = '')
            {
            $.ajax({
            url:"{{ route('supplier.getdata') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('#sup').html(data.table_data);
                // $('#total_records').text(data.total_data);
            }
            })
            }
            
            $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_customer_data(query);
            });
            });
        </script> --}}
    
@endsection
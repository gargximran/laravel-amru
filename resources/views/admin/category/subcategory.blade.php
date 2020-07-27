@extends('admin.admin_master')
@section('title')
Admin-Subcategory
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('public/admin/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    			<!-- Page Wrapper -->
                <div class="page-wrapper">
			
                    <!-- Page Content -->
                    <div class="content container-fluid">
                    
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Sub-Category</h3>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Sub-Category</li>
                                    </ul>
                                </div>
                                <div class="col-auto float-right ml-auto">
                                    <a href="#" class="btn add-btn" id="btn_subcategory" data-toggle="modal" data-target="#add_subcategory"><i class="fa fa-plus"></i> Add Sub-Category</a>
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
                                                <th>Image </th>
                                                <th>Sub-Category</th>
                                                <th>Category</th>
                                                <th>Discount </th>
                                                <th>Status</th>
                                                <th >Action</th>
                                            </tr>
                                            <tbody>
                                                <?php $i=1?>
                                                @foreach ($subcategories as $item)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td><img src="{{asset('public/images/'.$item->sub_image)}}" alt="" height='40px' width='40px'> </td>
                                                    <td>{{$item->sub_name}}</td>
                                                    <td>{{$item->category_name}}</td>
                                                    <td>{{$item->sub_discount}}</td>
                                                    <td>
                                                        @if ($item->sub_status=='active')
                                                        <div class='badge badge-success'>active</div>
                                                            @else 
                                                            <div class='badge badge-danger'>Deactive</div>
                                                        @endif
                    
                                                    </td>
                                                    <td>
                                                    <button  class='btn-success btn-xs subact'  data-id='{{$item->id}}' data-subname='{{$item->sub_name}}' data-catslug='{{$item->cat_slug}}' data-discount='{{$item->sub_discount}}'  data-image='{{$item->sub_image}}' data-status='{{$item->sub_status}}'><i class='far fa-edit'></i>
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
    
                    <!-- Add subcategory Modal -->
                    <div id="add_subcategory" class="modal custom-modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Sub-Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                 
                                    <form id="formModal" name="form2" action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Sub-Category Name <span class="text-danger">*</span></label>
                                            <input name="sub_name" id="subcategory_name" class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Category <span class="text-danger">*</span></label>
                                            <select class="select" name="cat_id" required>
                                                
                                                <option>Select Category</option>
                                                @foreach ($categories as $item)
                                                <option value="{{$item->category_slug}}">{{$item->category_name}}</option>
                                                @endforeach
                                               
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Image<span class="text-danger">*</span></label>
                                            <input class="form-control" id="subcategory_image" type="file"  name="sub_image" required>
                                        </div>
                                        <div class="submit-section">
                                          
                                            <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Submit" />                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Add subcategory Modal -->
    
                    <!-- edit subcategory Modal -->
                     <div id="edit_subcategory" class="modal custom-modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Sub-Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                 
                                    <form id="update_subcategory" action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Sub-Category Name <span class="text-danger">*</span></label>
                                            <input name="sub_name" id="edit_sub_name" class="form-control" type="text">
                                             <input name="id" id="sub_id" type="hidden" class="form-control" >
                                        </div>
                                        <div class="form-group se">
                                            <label>Category <span class="text-danger">*</span></label>
                                            <select class="select" name="cat_id" id="subcat_id" required>
                                                
                                                <option>Select category</option>
                                                @foreach ($categories as $item)
                                                <option value="{{$item->category_slug}}">{{$item->category_name}}</option>
                                                @endforeach
                                               
                                                
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Discount <span class="text-danger"></span></label>
                                            <input name="discount" id="discount" class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select class="select" name="status" required id="edit_status">
                                                
                                                <option value="active">Actvie</option>
                                              
                                                <option value="deactive">Deactive</option>
                                                
                                            </select>
                                         </div>
                                        <div class="form-group">
                                            <span id="subcat_image"></span><br>
                                            <label>Image<span class="text-danger">*</span></label>
                                            <input class="form-control" type="file" id="sub_image"  name="sub_image" >
                                        </div>
                                        <div class="submit-section">
                                             <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Update" />
                                          </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /edit subcategory Modal -->
                
                </div>
                <script type="text/javascript">
                    $('document').ready(function(){
                        $('#dot').addClass('noti-dot')
                        $('#subcategory').addClass('active');
                    })
                </script>
                <!-- /Page Wrapper -->
<script src="{{asset('public/assets/js/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('public/admin/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/admin/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('public/assets/js/toastr/toastr.min.js')}}"></script>
<script>
     // $('#example').DataTable();
    // $('#save').show();
  
    
    function viewData(){
        $.ajax({
            type:"GET",
            dataType:"json",
            url:"{{url('/admin/subcategory/getData')}}",
            success:function(response){
                var rows="";
                var i=1;
                $.each(response,function(key,value){
                    var j=i++;
                    
                    rows=rows+"<tr>";
                    rows=rows+"<td>"+j+ "</td>";
                    rows=rows+"<td>";
                    rows=rows+"<img src={{ URL::to('/public/images/') }}/"+value.sub_image+" height='40px' width='40px' >"
                    rows=rows+ "</td>";                                      
                    rows=rows+"<td>"+value.sub_name+"</td>";
                      rows=rows+"<td>"+value.category_name+"</td>";
                    rows=rows+"<td>"+value.sub_discount+"</td>";
                    rows=rows+"<td>";
                    if(value.sub_status=='active'){
                    rows=rows+ "<div class='badge badge-success'>"+'active'+"</div></td>";
                    }else{
                        rows=rows+ "<div class='badge badge-danger'>"+'inactive'+"</div></td>";
                    }                
                    rows=rows+"<td width='10%'>";
                    rows=rows+"<button  class='btn-success btn-xs subact' data-toggle='modal' data-id='"+value.id+"'data-subname='"+value.sub_name+"' data-catslug='"+value.cat_slug+"' data-discount='"+value.sub_discount+"' data-image='"+value.sub_image+"' data-status='"+value.sub_status+"'><i class='far fa-edit'></i></button>"
                    rows=rows+" <button  class='btn-danger btn-xs' onclick='deleteData("+value.id+")'><i class='fas fa-times'></i></buttpn>"
                    rows=rows+"</td></tr>";
                });
                $('tbody').html(rows);
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
            url:"{{route('admin.subcategory.store')}}",
            success:function (response){
                // alert('ok');
                // console.log(response);
                 viewData();
                 Toast.fire({
                        type: 'success',
                        title: 'Thank You!!Sub-Category Add Successfully!!!!!!'
                      });
               
                 $('#add_subcategory').modal('hide');
                  $('#formModal')[0].reset();
              // $('#category_name').val('');
            },
            error:function(error){
                console.log(error)
            }
        });
        });
   });
    // function clearData(){
    //    $('#category_name').val('');
    //     $('#category_image').val('');
       
    // }
    $(function(){
    $('#example').on('click','.subact',function(){
       


        $('#edit_subcategory').modal('show');
        var id=$(this).data('id')
         var image=$(this).data('image');
         var sub_name=$(this).data('subname');
         var sub_discount=$(this).data('discount');
         var cat_slug=$(this).data('catslug');

         var status=$(this).data('status');
          $('#subcat_image').html("<img src={{ URL::to('/public/images/') }}/" + image + " width='70' class='img-thumbnail' />");
        
         $('#edit_sub_name').val(sub_name);
          $('#title').html(sub_name);
          $('#discount').val(sub_discount);  
          // $('.select option[value=Food]').attr('selected','selected');
         $("select#subcat_id").val(cat_slug).change();     
         $("select#edit_status").val(status).change();
         $('#sub_id').val(id);       
        
         
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
        $('#update_subcategory').on('submit',function(e){
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
            url:"{{url('/admin/subcategory/update')}}",
            success:function (response){
                // alert('ok');
                // console.log(response);
                 viewData();
                 Toast.fire({
                        type: 'success',
                        title: 'Category Update Successfully!!!!!!'
                      });               

                $('#sub_image').val('');
                
                $('#edit_subcategory').modal('hide'); 
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
            url:"{{URL::to('/admin/subcategory/destroy/')}}"+'/'+id,
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
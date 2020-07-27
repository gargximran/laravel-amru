@extends('admin.admin_master')
@section('title')
Admin- Category 
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('public/admin/datatables-bs4/css/dataTables.bootstrap4.css')}}">
<style>
    a.btn:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 a.btn {
     -webkit-transform: scale(0.8);
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }
</style>
<div class="page-wrapper">
   
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Purchase</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">All Product</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('admin.product')}}" class="btn add-btn" id="create_category"> New Product</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>SL</th>
                                {{-- <th>Image</th> --}}
                                <th>Name</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Sell Price</th>
                                <th>Status </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($products as $product)
                                
                         <tr>
                            <td>{{$i++}}</td>
                      
                            <td>{{$product->pro_name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->sub_name}}</td>
                            <td>{{$product->sell_price}}</td>
                            <td>
                                @if($product->pubstatus=='active')
                                <div class="badge badge-success">active</div>
                                @else
                                <div class="badge badge-dabger">deactive </div>
                                @endif
                                </td>
                            <td>
                               
                                <a href="{{url('/admin/product/edit/'.$product->id)}}" class="btn btn-success a-btn-slide-text">
                                  <i class="fa fa-edit"></i>      
                                </a>
                                <a href="{{url('/admin/product/view/'.$product->id)}}" class="btn btn-primary a-btn-slide-text">
                                   <i class="fa fa-eye"></i>         
                                </a>
                              <button class="btn btn-danger a-btn-slide-text" onclick='deleteData({{$product->id}})'>  
                                    <i class="fa fa-trash"></i>      
                                </button>    
                              
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    

<script type="text/javascript">
    $('document').ready(function(){
    $('#dot').addClass('noti-dot');
    $('#product_list').addClass('active');
});
</script>
<script src="{{asset('public/admin/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/admin/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('public/assets/js/sweetalert2/sweetalert2.min.js')}}"></script><
<!-- Toastr -->
<script src="{{asset('public/assets/js/toastr/toastr.min.js')}}"></script>
<script>
     // $('#example').DataTable();
    // $('#save').show();
  
    
    function viewData(){
        $.ajax({
            type:"GET",
            dataType:"json",
            url:"{{url('/admin/product/getData')}}",
            success:function(response){
                var rows="";
                var i=1;
                $.each(response,function(key,value){
                    // result=value.split(',');
                    var j=i++;
                    
                    rows=rows+"<tr>";
                    rows=rows+"<td>"+j+ "</td>";
                    // rows=rows+"<td>";
                    // // rows=rows+"<img src={{ URL::to('/public/images/') }}/"+value.pro_name+" height='40px' width='40px' >"
                    // rows=rows+ "</td>";                                      
                    rows=rows+"<td>"+value.pro_name+"</td>";
                    rows=rows+"<td>"+value.category_name+"</td>";
                    rows=rows+"<td>"+value.sub_name +"</td>";
                    rows=rows+"<td>"+value.sell_price+"</td>";
                    rows=rows+"<td>";
                    if(value.pubstatus=='active'){
                    rows=rows+ "<div class='badge badge-success'>"+'active'+"</div></td>";
                    }else{
                        rows=rows+ "<div class='badge badge-danger'>"+'inactive'+"</div></td>";
                    }                
                    rows=rows+"<td width='10%'>";
                    rows=rows+"<a href={{URL::to('/admin/product/edit/')}}/"+value.id+" class='btn btn-success a-btn-slide-text'> <i class='fa fa-edit'></i></a>" 
                    rows=rows+"<a href='{{URL::to('/admin/product/view/')}}/"+value.id+" class='btn btn-success a-btn-slide-text'> <i class='fa fa-eye'></i></a>"                   
                                
                    rows=rows+" <button  class='btn-danger btn-xs' onclick='deleteData("+value.id+")'><i class='fa fa-trash'></i></buttpn>"
                    rows=rows+"</td></tr>";
                });
                $('tbody').html(rows);
            }
        })
    }
    viewData();
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
            url:"{{URL::to('/admin/product/destroy/')}}"+'/'+id,
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
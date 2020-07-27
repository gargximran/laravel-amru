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
                    <h3 class="page-title">Stock product History</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Stock Product</li>
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>status</th>
                                <th>Product Qty </th>
                                <th>sell Qty</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1?>
                            @foreach ($stockProductBranch as $item)
                        
                         <tr>
                            <td>{{$i++}}</td>
                            <td><img src="{{asset('public/images/'.$item->images)}}" alt="" height="40px" width="50px"></td>
                            <td>{{$item->pro_name}}</td>
                            <td>{{$item->pubstatus}}</td>
                            <td><?php if($item->qty<=0){ echo "<span class='badge bg-inverse-danger'>out of qty</span>";}else{ echo $item->qty;}?></td>
                            <td><?php if($item->sell_qty<=0){ echo "<span class='badge bg-inverse-danger'>Not sold</span>";}else{ echo $item->sell_qty;}?></td>
                            <td>{{$item->qty-$item->sell_qty}}</td>
                            <td> <?php if($item->qty-$item->sell_qty >0){echo"<span class='badge bg-inverse-success'>available</span>";}else{ echo"<span class='badge bg-inverse-danger'>need Stock</span>";} ?>
                               
                                {{-- <a href="{{url('/admin/product/edit/'.$item->id)}}" class="btn btn-success a-btn-slide-text">
                                  <i class="fa fa-edit"></i>      
                                </a>
                                <a href="{{url('/admin/product/view/'.$item->id)}}" class="btn btn-primary a-btn-slide-text">
                                   <i class="fa fa-eye"></i>         
                                </a>
                              <button class="btn btn-danger a-btn-slide-text" onclick='deleteData({{$item->id}})'>  
                                    <i class="fa fa-trash"></i>      
                                </button>     --}}
                              
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
    
    
    <script src="{{asset('public/admin/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/admin/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
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
<script type="text/javascript">
    $('document').ready(function(){
    $('#stock').addClass('noti-dot');
    $('#stock_product').addClass('active');
});
</script>
@endsection


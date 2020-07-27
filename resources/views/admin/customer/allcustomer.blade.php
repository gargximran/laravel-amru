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
                    <h3 class="page-title">All Customer List</h3>
                  
                </div>
                {{-- <div class="col-auto float-right ml-auto">
                    <a href="{{route('purchase.index')}}" class="btn add-btn" id="create_category"> New Purchase</a>
                </div> --}}
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" id="purchaseProduct_table_list">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>                               
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @php
                               $i=1;
                           @endphp
                            @foreach ($allcustomer as $customer)
                                
                         <tr>
                            <td>{{$i++}}</td>
                            <td>{{$customer->first_name}} {{$customer->last_name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address}},{{$customer->city}}-{{$customer->division}}</td> 
                            <td>
                                @if ($customer->status=='active')
                                <div class='badge badge-success'>active</div>
                                    @else 
                                    <div class='badge badge-danger'>Deactive</div>
                                @endif

                            </td>
                            <td>
                               
                                {{-- <a href="{{url('/admin/customer/edit/'.$customer->id)}}" class=" btn-primary btn-sm" style="background-color: #28a745;
                                    border: 1px solid #28a745;
                                    border-radius: 6px;">
                                   <i class="fa fa-edit"></i>           
                                </a> --}}
                                {{-- <a href="{{url('/admin/customer/view/'.$customer->id)}}" class=" btn-success btn-sm">
                                            <i class="fa fa-eye"></i>
                                </a> --}}
                                <a href="{{url('/admin/customer/delete/'.$customer->id)}}" onclick="return confirm('Are you want to Sure!!!')" class=" btn-danger btn-sm">
                                   <i class="fa fa-trash"></i>          
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
    <!-- /Page Content -->
    
    <script src="{{asset('public/admin/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/admin/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
            $('document').ready(function(){
        $('#online').addClass('noti-dot');
        $('#confirmOrderlist').addClass('active');
    })
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
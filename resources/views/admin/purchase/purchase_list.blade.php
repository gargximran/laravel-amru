@extends('admin.admin_master')
@section('title')
Admin- Category 
@endsection
@section('content')
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
                        <li class="breadcrumb-item active">All Purchase</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{route('purchase.index')}}" class="btn add-btn" id="create_category"> New Purchase</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" id="purchaseProduct_table_list">
                        <thead>
                            <tr>
                              
                                <th>Supplier</th>
                                <th>Total</th>
                                <th>Payment</th>
                                <th>Due</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchase as $purchase)
                                
                         <tr>
                            <td>{{$purchase->suppleir_id}}</td>
                            <td>{{$purchase->total}}</td>
                            <td>{{$purchase->payment}}</td>
                            <td>{{$purchase->total-$purchase->paymen}}</td>
                            <td>
                                {{-- <a href="#" class="btn btn-primary btn-xs a-btn-slide-text">
                                    <i class="fa fa-exchange" aria-hidden="true"></i></span>
                                    <span><strong>Move</strong></span>            
                                </a> --}}
                                <a href="{{url('/admin/purchase/edit/'.$purchase->id)}}" class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>            
                                </a>
                                <a href="{{url('/admin/purchase/view/'.$purchase->id)}}" class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    <span><strong>View</strong></span>            
                                </a>
                                <a href="{{url('/admin/purchase/delete/'.$purchase->id)}}" class="btn btn-primary a-btn-slide-text">
                                   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    <span><strong>Delete</strong></span>            
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
{{-- <script>
    $('document').ready(function(){
        $('#purchaseProduct_table_list').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
            url: "{{ route('purchase.index') }}",
            },
            columns:[
        
            {
                data: 'suppleir_id',
                name: 'suppleir_id'
            },
            {
                data: 'payment',
                name: 'payment'
            },
            {
                data: 'total',
                name: 'total'
            },
            {
                data: 'discount',
                name: 'discount'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }
            ]
        });
 
        $('#create_category').click(function(){
            $('.modal-title').text('Add New Category');
            $('#add_category').show();
            $('#action').val('Add');
        });
      
        var  cat_id ; 
        $('#formModal').on('submit',function(event){   
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });       
            event.preventDefault();
            var data=new FormData(this);
            if($('#action').val()=='Add'){
                $.ajax({
                    url:"{{route('category.store')}}",
                    method:'POST',
                    dataType:'json',
                    data: data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data){
                        var html='';
                        if(data.errors){
                            html ='<div class="alert alert-danger">';
                            for(var count=0; count<data.errors.length; count++){
                                html +='<p>'+count.errors[count]+ '</p>';
                            }
                            html +='</div>';
                        }
                        if(data.success){
                            html ='<div class="alert alert-success">' +data.success +'</div>';
                            $('#formModal')[0].reset();
                            $('#purchaseProduct_table_list').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                })
            }
        });
        $(document).on('click', '.delete', function(){
              cat_id = $(this).attr('id');
                $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function(){
                $.ajax({               
                url:"{{URL::to('/admin/category/destroy/')}}"+'/'+cat_id,
                beforeSend:function(){
                    $('#ok_button').text('Deleting...');
                },
                success:function(data)
                {
                    setTimeout(function(){
                    
                    $('#purchaseProduct_table_list').DataTable().ajax.reload();
                    }, 2000);
                    $('#ok_button').text('Done');
                    $('#confirmModal').modal('hide');
                }
                })
            });

    })

</script> --}}
@endsection
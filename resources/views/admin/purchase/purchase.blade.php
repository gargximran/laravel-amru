@extends('admin.admin_master')
@section('title')
Admin-Purchase
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
    <style>
        #mysellicon{
            border-radius: 0px !important;
            background-color: white;
        }
        #mysellcontrol{
            border-radius: 0px !important;
            height: 38px !important;
        }

        .select2-container .select2-selection--single {
            height: 38px;
            border-radius: 0px !important;
        }
        th{
            background-color: #004a99;
            color: white;
            width: 149px;
        }
        .table td, .table th {
            padding: 5px;
            vertical-align: inherit;
        }
        .tablesellborder{
            border: 1px solid darkblue;
            padding: 0px;
            height: 300px;
        }
        #sellminusbtn{
            border-radius: 0px;
            padding: 1px 20px 21px 5px;
            width: 15px;
            height: 20px;
            font-size: 14px;
            margin-left: 0px;
            margin-right: 0px;
            border: none;
            background-color: lightseagreen;

        }
        #sellplusbtn{
            border-radius: 0px;
            padding: 1px 6px 21px 8px;
            width: 23px;
            height: 20px;
            margin-left: 0px;
            margin-right: 0px;
            border: none;
            background-color: lightseagreen;
            font-size: 14px;

        }
        #quantity{
            height: 28px;
            max-width: 43px;
        }
        .myquantity{
            background-color: lightseagreen;
            padding-left: 10px;
            border-radius: 30px;
            margin-right: 21px;
            margin-left: 2px;
        }
        /* .quantity{
            text-align: center;
            padding: 10px;

        } */
        .quantity>p{
            font-weight: bold;
            line-height: 10px;
            margin-bottom: 10px;
        }
        #mybold{
            font-size: 22px;
            font-weight: bolder;
            color: darkslategray;

        }
        #myamount{
            font-size: 17px;
            font-weight: 700;
            background-color: gray;
            padding: 10px 1px 10px 1px;
            color: antiquewhite;
        }
        .my_product_down{
            height: 516px;
        }
        .myproduct{
            height: 130px;
            /* background-color: antiquewhite; */
            border-radius: 6px;
        }
        .myproduct > img{
            padding: 25px 1px 1px 25px;
        }
        #product_quantity{
            position: fixed;
            background-color: darkorange;
            font-weight: bold;
            padding: 0px 4px 0px 4px;
            border-radius: 7px;
        }

        ::-webkit-scrollbar {
            width: 4px;
        }
        ::-webkit-scrollbar-thumb {
            -webkit-border-radius: 5px;
            border-radius: 5px;
            background: rgba(255,0,0,0.8);
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
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
                        <a href="{{url('/admin/purchase/item')}}" class="btn add-btn" ><i class="fa fa-plus"></i> New Item</a>
                        <div class="view-icons">
                            <a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                            <a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                
                     
                            <div class="col-sm-6 col-md-6">                      
                               
                            <form action="{{route('purchase.product')}}" method="POST" id="purchaseProduct">
                                @csrf
                                        <div class="table-responsive tablesellborder">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Price</th>
                                                        <th>Qty</th>
                                                        <th>Total</th>                                                    
                                                        <th class="text-right no-sort">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--Price section-->
                                        <div class="card-footer">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <p>Payment Type:</p>

                                                                <input type="radio" checked id="none" name="payment_type" value="none">
                                                                <label for="none">None</label><br>
                                                                
                                                                <input type="radio" id="cash" name="payment_type" value="cash">
                                                                <label for="cash">Cash</label><br>

                                                                <input type="radio" id="bkash" name="payment_type" value="bkash">
                                                                <label for="bkash">Bkash</label><br>

                                                                <input type="radio" id="bank" name="payment_type" value="bank">
                                                                <label for="bank">Bank</label>
                                                                
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">Payment Amount</label>
                                                                <input type="text" name="payment" >
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">Discount</label>
                                                                <input type="text" id="chDiscount" name="discount" >
                                                            </div>
                
                                                        </div>
                                                    </div>

                                                <div class="col-md-4">
                                                    <div class="quantity">
                                                        <p>Quantity:</p>
                                                        <span id="qtytotal"></span>
                                                        <p id="myamount "></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="quantity">
                                                        <p>Total Amount: </p>
                                                        <p id="myamount"><span id="total"><i class="fa fa-money"></i></span></p>
                                                        <input type="text" id="total_amount" name="total_amount">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-3">
                                                    <div class="quantity">
                                                        <p>Total Discount:<span id="mybold"></span></p>
                                                        <p id="myamount">  0.00</p>
                                                        </div>
                                                </div> --}}
                                                <div class="col-md-4">
                                                    <div class="quantity">
                                                        <p>Grand Total:<span id="mybold"></span></p>
                                                        <p id="myamount"><span id="result"></span></p>
                                                        <input type="hidden" name="discount_total" id="result">
                                                    </div>
                                                </div> 
                                            
                
                                                </div>
                                            </div>
                                        </div>
            
                                  
                                        <div class="col-md-12">
                                                <div class="mysubmit" style="text-align: center">
                                                    <button class="btn btn-primary" type="submit">SUBMIT</button>
                                                </div>
                                        </div>
                                        
                                    
                                    </form>
                       
                            </div>
                      
                            <div class="col-sm-6 col-md-6">
                                <!-- Search Filter -->
                                <form action="">
                                    <div class="row filter-row">
                                    
                                        <div class="col-sm-6 col-md-6">  
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" name="search" id="search">
                                                <label class="focus-label">Item Name</label>
                                            </div>
                                        </div>
                                    
                                        <div class="col-sm-3 col-md-3">  
                                            <a href="#" style="border-radius:20px;" class="btn btn-success btn-block"> Search </a>  
                                        </div>
                                
                                    </div>
                                </form>
                                <!-- Search Filter -->
                                
                                    <div class="row staff-grid-row" id="sup">
                                    
                                        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3" >
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
                    
                    div=div+"<div class='col-md-4 col-sm-6 col-12 col-lg-4 col-xl-4'>";
                    div=div+"<div class='profile-widget'>"
                    div=div+"<div class='profile-img'>";
                    div=div+"<a href=localhost/amru/admin/purchase/cart/"+value.id+" class='avatar'>"
                    div=div+"<img src=http://localhost/amru/public/images/"+value.image+" height='81px' width='40px' >"
                       
                    div=div+"</a></div>";
                    div=div+" <h4 class='user-name m-t-10 mb-0 text-ellipsis'><a href='profile.html'>"+value.name+"</a></h4>";
                   
                    div=div+"<div class='small text-muted'>";
                //    div=div+"<button type='button' class='btn btn-primary btn-xs'  onclick='cartData("+value.id+")' ><i class='far fa-cart'></i></button>";
                    div=div+"<button type='button'  class='primary-btn add-to-cart addtocart' onclick='addCart("+value.id+")'  data-id='"+value.id+"'><i class='fa fa-shopping-cart'></i></button>";
                    //  div=div+" <button type='button' class='btn btn-danger btn-xs' onclick='deleteData("+value.id+")'><i class='fas fa-times'></i></buttpn>";
                    div=div+"</div></div></div>";
                });
                $('#sup').html(div);
            }
        })
    }
    viewData();


    function viewItemCart(){
        $.ajax({
            type:'GET',
            dataType:"json",
            url:"{{URL::to('/admin/get/cartitem')}}",
            success:function(response){
                 var tr="";
                $.each(response,function(key,value){
                     tr +='<tr>'+
                '<td>'+value.name+'<input type="hidden" name="product_name[]" class="form-control" ><input type="text" name="item_id[]" value='+value.id+' class="form-control" ></td>'+
                '<td><input type="text" name="subprices[]" id="subprice"  class="form-control subprice"></td>'+
                '<td><input type="text" name="qtys[]"  class="form-control qty"   style="width:80px"></td>'+
                '<td><input type="text" name="subtotal[]"  class="form-control subtotalprice" readonly></td>'+               
                '<td> <button type="button" class="btn btn-danger btn-xs" onclick="removeItem('+value.id+')"><i class="fas fa-times"></i></buttpn></td>'+
                '</tr>';
                 $('tbody').html(tr);
                });
                
                //  $('tbody').html(tr);
            }
        })
    }
    viewItemCart();
  
     function addCart(id){
          
                $.ajax({
                    type: 'get',
                    url: "{{URL::to('/admin/purchase/cart')}}"+'/'+id,
                    dataTpe:'json',
                    success:function(){
                
                    alert('ok')
                    viewItemCart();
                    }
                });
    }
    
    function removeItem(id){
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
            url:"{{URL::to('/admin/purchase/remove/')}}"+'/'+id,
            success:function(response){
             
                      viewItemCart();
            }

        })
    }
</script>
<script>
       $('tbody').on("change keyup blur",".subprice",function(){
                var tr=$(this).parent().parent();
                var price=tr.find('.subprice').val();
                var qty=tr.find('.qty').val();
                 var amount=(price*qty);
                 console.log(price);
                // tr.find('.subtotalprice').val(amount);
                 total();
                // console.log(amount);
            });
            $('tbody').on("change keyup blur",".qty",function(){
                var tr=$(this).parent().parent();
                var price=tr.find('.subprice').val();
                var qty=tr.find('.qty').val();
                 var amount=(price*qty);
                 console.log(qty);
                 tr.find('.subtotalprice').val(amount);
                 total();
                //  qtytotal();
                 console.log(amount);
            });
            function total(){
                var total=0;
                $('.subtotalprice').each(function(i,e){
                    var amount=$(this).val()-0;
                total +=amount;
            });
            $('#total').html(total+".00 tk"); 
            $('#total_amount').val(total); 
            }



  </script>
  <script>
    $(document).on("change keyup blur", "#chDiscount", function() {
      
      var main = $('#total_amount').val();
      var disc = $('#chDiscount').val();
       var dec = (disc / 100).toFixed(2); 
      var mult = main * dec; 
      var discont = main - mult;
      $('#result').html(discont);
      $('#result').val(discont);
    console.log(discont)
    });
  </script>
@endsection
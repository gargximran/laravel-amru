@extends('admin.admin_master')
@section('content')
<div class="page-wrapper">
			
    <!-- Page Content -->
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Invoice</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-white">CSV</button>
                        <button class="btn btn-white">PDF</button>
                        <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 m-b-20">
                                <img src="assets/img/logo2.png" class="inv-logo" alt="">
                                 <ul class="list-unstyled">
                                    <li>AmruBazarBD</li>
                                    <li>3864 Quiet Valley Lane,</li>
                                    <li>Sherman Oaks, CA, 91403</li>
                                    <li>GST No:</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 m-b-20">
                                <div class="invoice-details">
                                    <h3 class="text-uppercase">Invoice #INV-0001</h3>
                                    <ul class="list-unstyled">
                                        <li>Date: <span>March 12, 2019</span></li>
                                        <li>Due date: <span>April 25, 2019</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
                                <h5>Invoice to:</h5>
                                 <ul class="list-unstyled">
                                    <li><h5><strong>Barry Cuda</strong></h5></li>
                                    <li><span>Global Technologies</span></li>
                                    <li>5754 Airport Rd</li>
                                    <li>Coosada, AL, 36020</li>
                                    <li>United States</li>
                                    <li>888-777-6655</li>
                                    <li><a href="#">barrycuda@example.com</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
                                <span class="text-muted">Payment Details:</span>
                                <ul class="list-unstyled invoice-payment-details">
                                    <li><h5>Total Due: <span class="text-right">$8,750</span></h5></li>
                                    <li>Bank name: <span>Profit Bank Europe</span></li>
                                    <li>Country: <span>United Kingdom</span></li>
                                    <li>City: <span>London E1 8BF</span></li>
                                    <li>Address: <span>3 Goodman Street</span></li>
                                    <li>IBAN: <span>KFH37784028476740</span></li>
                                    <li>SWIFT code: <span>BPT4E</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ITEM</th>
                                        <th class="d-none d-sm-table-cell">DESCRIPTION</th>
                                        <th>UNIT COST</th>
                                        <th>QUANTITY</th>
                                        <th class="text-right">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viewPurchase as $item)
                                        
                                   
                                    <tr>
                                        <td>1</td>
                                        <td>{{$item->purchase_item_id}}</td>
                                        <td class="d-none d-sm-table-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td class="text-right">{{$item->subtotal}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="row invoice-payment">
                                <div class="col-sm-7">
                                </div>
                                <div class="col-sm-5">
                                    <div class="m-b-20">
                                        <div class="table-responsive no-border">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th>Subtotal:</th>
                                                        <td class="text-right">$7,000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Discount: <span class="text-regular">(25%)</span></th>
                                                        <td class="text-right">$1,750</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total:</th>
                                                        <td class="text-right text-primary"><h5>$8,750</h5></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-info">
                                <h5>Other information</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero, eu finibus sapien interdum vel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    
</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->           
@endsection
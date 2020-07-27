@extends('admin.admin_master')
@section('content')
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/filescss/css/normalize.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('public/assets/filescss/css/demo.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/assets/filescss/css/component.css')}}" />
        <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
	<!-- Page Wrapper -->
    <div class="page-wrapper">
			
        <!-- Page Content -->
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Product</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.product_list')}}">All Product</a></li>
                            <li class="breadcrumb-item active">New product</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            
           
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body">                          
                            <form action="{{route('admin.product.storeProduct')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="pro_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">category</label>
                                            <div class="col-lg-9">
                                                <select class="select" name="cat_slug">
                                                    <option>Select</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->category_slug}}">{{$category->category_name}}</option>
                                                    @endforeach
                                                   
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Sub-category</label>
                                            <div class="col-lg-9">
                                                <select class="select" name="sub_cat_slug">
                                                    <option>Select</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row" >
                                            <label class="col-lg-3 col-form-label" >Sell-Price</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="sell_price" id="sellpriceproduct" class="form-control" style="width: 30%">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Discount(if)</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="discountProduct" id="disocuntadd" class="form-control" style="width: 30%">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Price</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="price" id="disprice" class="form-control" style="width: 30%" readonly>
                                            </div>
                                        </div>
                                          <div class="form-group row" >
                                            <label class="col-lg-3 col-form-label" > Pre-order Product?</label>
                                            <div class="col-lg-9">                                               
                                                <input type="checkbox" name="pre_order" value="pre_order">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Quentity:
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="qty" class="form-control" style="width: 30%">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Quentity-Type</label>
                                            <div class="col-lg-9" style="width: 30%">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="qty_type" id="active" value="pcs" checked>
                                                    <label class="form-check-label" for="active">
                                                    Pcs
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="qty_type" id="deactive" value="kg">
                                                    <label class="form-check-label" for="deactive">
                                                    Kg
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="qty_type" id="deactive" value="litter">
                                                    <label class="form-check-label" for="deactive">
                                                    Litter
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">status</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status" id="active" value="active" checked>
                                                    <label class="form-check-label" for="active">
                                                    Active
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status" id="deactive" value="deactive">
                                                    <label class="form-check-label" for="deactive">
                                                    Deactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="filecontent">
                                                <div class="box" style="padding-left: 17px;">
                                                    <label>Main Image</label>   
                                                    <input type="file" name="files" id="files" class="inputfile inputfile-4" required/>
                                                
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="filecontent">
                                                <div class="box" style="padding-left: 17px;">
                                                    <label>Image(optional)</label>   
                                                    <input type="file" name="files1" id="files" class="inputfile inputfile-4" />
                                                
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="filecontent">
                                                <div class="box" style="padding-left: 17px;">
                                                    <label> Image(optional)</label>   
                                                    <input type="file" name="files2" id="files" class="inputfile inputfile-4" />
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="">Short Description</label>
                                        <div class="form-group row">
                                           
                                            <div class="col-lg-12">
                                                <textarea id="editor1" name="short_description" rows="10" cols="80"> </textarea>
                                            </div>
                                        </div>
                                        <label for="">Description</label>
                                        <div class="form-group row">
                                           
                                            <div class="col-lg-12">
                                                <textarea id="editor" name="description" rows="10" cols="80"> </textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Password</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Repeat Password</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                              
                              
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        
    </div>
    <script type="text/javascript">
        $(document).ready(function ()
        {
                $('select[name="cat_slug"]').on('change',function(){
                var cat_slug = $(this).val();
            
                if(cat_slug)
                {
                    jQuery.ajax({
                        url :"{{URL::to('/admin/subcat')}}"+"/"+cat_slug,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                        
                            $('select[name="sub_cat_slug"]').empty();
                            jQuery.each(data, function(key,value){
                            $('select[name="sub_cat_slug"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="sub_cat_slug"]').empty();
                }
                });
        });
      </script>
    <!-- /Page Wrapper -->
    <script src="{{asset('public/assets/filescss/js/custom-file-input.js')}}"></script>
    <!-- CK Editor -->
<script src="{{asset('public/assets/ckeditor/ckeditor.js')}}"></script>
<script>
      $('document').ready(function(){
        $('#dot').addClass('noti-dot');
        $('#addProduct').addClass('active');
    })
    $(document).on("change keyup blur", "#disocuntadd", function() {
            var main = $('#sellpriceproduct').val();
            var disc = $('#disocuntadd').val();
            var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
            var mult = main*dec; // gives the value for subtract from main value
            var discont = main-mult;
            $('#disprice').val(discont);
        });
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      CKEDITOR.replace('editor')
    })
  </script>
@endsection
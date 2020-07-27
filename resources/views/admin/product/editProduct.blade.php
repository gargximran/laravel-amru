@extends('admin.admin_master')
@section('content')
  <link rel="stylesheet" href="{{asset('public/assets/summernote/summernote-bs4.css')}}">
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
                            <form action="{{route('product.update')}}" method="POST" enctype="multipart/form-data" id="edit_product">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" id="pro_name" class="form-control" value="{{$productById->pro_name}}"  name="pro_name">
                                                <input type="hidden" id="pro_name" class="form-control" value="{{$productById->id}}"  name="id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">category</label>
                                            <div class="col-lg-9">
                                                <select class="select" name="cat_slug" id="cat_slug">
                                                    <option>Select</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->category_slug}}" <?php if($category->slug==$productById->cat_slug){ echo "selected";} ?>>{{$category->category_name}}</option>
                                                    @endforeach
                                                   
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Sub-category</label>
                                            <div class="col-lg-9">
                                                <select class="select" name="sub_cat_slug">
                                                   
                                                    <option value="{{$productById->sub_cat_id}}">{{$productById->productsubcategories->sub_name}}</option>
                                                </select>
                                            </div>
                                        </div>
                             
                                        <div class="form-group row" >
                                            <label class="col-lg-3 col-form-label" >Price</label>
                                            <div class="col-lg-9">
                                                <input type="text" id="sellpriceproduct" value="<?php if($productById->price==Null || $productById->price==0){echo $productById->sell_price;}else{echo $productById->price;}?>" name="sell_price" class="form-control" style="width: 30%">
                                            </div>
                                        </div>
                                           <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Disocunt</label>
                                            <div class="col-lg-9">
                                                <input type="text" id="disocuntadd" name="discount" class="form-control" value="{{$productById->discount}}" style="width: 30%">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Discount Price</label>
                                            <div class="col-lg-9">
                                                <input type="text" id="disprice" name="price" class="form-control" value="<?php if($productById->discount>0){echo $productById->sell_price;} ?>" style="width: 30%" readonly>
                                            </div>
                                        </div>
                                       
                                        
                                        <div class="form-group row" >
                                            <label class="col-lg-3 col-form-label" > Pre-order Product?</label>
                                            <div class="col-lg-9">                                               
                                                <input type="checkbox" name="pre_order" <?php if($productById->pre_order=='pre_order'){ echo "checked";} ?> value="pre_order">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Quentity:
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" id="qty" value="{{$productById->qty}}" name="qty" class="form-control" style="width: 30%">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Quentity-Type</label>
                                            <div class="col-lg-9" style="width: 30%">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="qty_type" id="pcs" value="pcs" <?php if($productById->qty_type=='pcs'){echo "checked";} ?>>
                                                    <label class="form-check-label" for="pcs">
                                                    Pcs
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="qty_type" id="kg" value="kg" <?php if($productById->qty_type=='kg'){echo "checked";} ?>>
                                                    <label class="form-check-label" for="kg">
                                                    Kg
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="qty_type" id="litter" value="litter" <?php if($productById->qty_type=='litter'){echo "checked";} ?>>
                                                    <label class="form-check-label" for="litter">
                                                    Litter
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">status</label>
                                            <div class="col-lg-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status" id="active" value="active" <?php if($productById->pubstatus=='active'){echo "checked";} ?>>
                                                    <label class="form-check-label" for="active">
                                                    Active
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status" id="deactive" value="deactive" <?php if($productById->pubstatus=='deactive'){echo "checked";} ?>>
                                                    <label class="form-check-label" for="deactive">
                                                    Deactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="filecontent">
                                                <div class="box" style="padding-left: 17px;">
                                                    <img src="{{asset('public/images/'.$productById->images)}}" height="40px" width="50px"><br>
                                                    <label>Main Image</label>   
                                                    <input type="file" name="files" id="files" class="inputfile inputfile-4" />
                                                
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="filecontent">
                                                <div class="box" style="padding-left: 17px;">
                                                    @if($productById->image1 != Null)
                                                    <img src="{{asset('public/images/'.$productById->image1)}}" height="40px" width="50px">
                                                    @endif
                                                    <br>
                                                    <label>Image(optional)</label>   
                                                    <input type="file" name="files1" id="files" class="inputfile inputfile-4" />
                                                
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="filecontent">
                                                <div class="box" style="padding-left: 17px;">
                                                      @if($productById->image2 != Null)
                                                    <img src="{{asset('public/images/'.$productById->image2)}}" height="40px" width="50px">
                                                    @endif
                                                    <br>
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
                                                
                                                <textarea  name="short_description" id="shorttex"  rows="10" cols="50" class="textarea" 
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$productById->short_description}}</textarea>
                                            </div>
                                        </div>
                                        <label for="">Description</label>
                                        <div class="form-group row">
                                           
                                            <div class="col-lg-12">
                                               <textarea  name="description" id="shorttex"  rows="10" cols="50" class="textarea" 
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{$productById->description}}</textarea>
                                            </div>
                                        </div>
                                     
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


<script>
    $('document').ready(function(){
        $('#dot').addClass('noti-dot');
        $('#addProduct').addClass('active');
    })

  </script>
      <script type="text/javascript">
          $(document).on("change keyup blur", "#disocuntadd", function() {
            var main = $('#sellpriceproduct').val();
            var disc = $('#disocuntadd').val();
            var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
            var mult = main*dec; // gives the value for subtract from main value
            var discont = main-mult;
            $('#disprice').val(discont);
        });
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
@endsection
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title"> 
  <span>Main</span>
</li>
<li class="submenu">
  <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>

</li>

<li class="submenu">
  <a href="#"><i class="la la-user-plus"></i> <span>Users</span> <span class="menu-arrow"></span></a>
  <ul style="display: none;">
    <li><a href="chat.html">New User</a></li>
    <li><a href="events.html">User List</a></li>
  </ul>
</li>

<li class="menu-title"> 
  <span>E-comerce</span>
</li>
<li class="submenu">
  <a href="#"  id="dot"><i class="la la-user"></i> <span> Product</span> <span class="menu-arrow"><i class="fa fa-angle-right pull-right" aria-hidden="true"></i></span></a>
  <ul style="display: none;">
    <li><a href="{{URL::to('/admin/category')}}" id="category">Category</a></li>
    <li><a href="{{URL::to('/admin/sub_category')}}" id="subcategory">Sub-cateory</a></li>
    <li><a href="{{route('admin.product')}}" id="addProduct">Add Product</a></li>
  <li><a href="{{route('admin.product_list')}}" id="product_list">Product List</a></li>
    {{-- <li><a href="leaves.html">Brand</a></li> --}}
   
  </ul>
</li>
{{-- 
<li>
  <a href="{{route('supplier.index')}}"><i class="la la-user-secret"></i> <span>Supplier</span></a>
</li>
<li class="submenu">
  <a href="#"><i class="la la-rocket"></i> <span> Purchase</span> <span class="menu-arrow"></span></a>
  <ul style="display: none;">
    <li><a href="{{url('/admin/purchase/item')}}">Purchase Item</a></li>
    <li><a href="{{url('/admin/purchase')}}">New Purchase</a></li>
    <li><a href="{{route('purchase.purchaselist')}}">Purchase List</a></li>    
  </ul>
</li> --}}

<li class="submenu">
  <a href="#" id="online"><i class="la la-rocket"></i> <span> Online Order</span> <span class="menu-arrow"><i class="fa fa-angle-right pull-right" aria-hidden="true"></i></span></a>
  <ul style="display: none;">
    
    <li><a href="{{url('/admin/oder/request')}}" id="orderRequest">Order request</a></li>
    <!--<li><a href="projects.html">Weekly Order request</a></li>-->
    <li><a href="{{url('/admin/order/confirmlist')}}" id="confirmOrderlist">Confirm Order List</a></li>
    <li><a href="{{route('customer.all')}}" id="customer">Customer List</a></li>
  </ul>
</li>
<!--<li> -->
<!--  <a href="users.html"><i class="la la-user-plus"></i> <span>Product Review</span></a>-->
<!--</li>-->

<li> 
  <li class="submenu">
    <a href="#" id="setting"><i class="la la-rocket"></i> <span> Ecomerce-Setting</span> <span class="menu-arrow"><i class="fa fa-angle-right pull-right" aria-hidden="true"></i></span></a>
    <ul style="display: none;">
      <li><a href="{{url('/admin/basic/setup')}}" id="basic_info">Basic Info</a></li>
      <li><a href="{{url('/admin/banner/setup')}}" id="banner">Banner Info</a></li>      
      <li><a href="{{url('/admin/setting/about-us')}}" id="about_us">About Us</a></li> 
      <!--<li><a href="projects.html">Coupon</a></li>-->
      <!--<li><a href="projects.html">Offer</a></li>-->
      <!--<li><a href="projects.html">Discount</a></li>-->
      <!--<li><a href="projects.html">Vat</a></li>-->
      <!--<li><a href="tasks.html">Delivery Charge</a></li>-->
      
          
    </ul>
  </li>

<li class="menu-title"> 
  <span>Inventory</span>
</li>
<li class="submenu">
  <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Stock</span> <span class="menu-arrow"></span></a>
  <ul style="display: none;">
    <li><a href="{{URL::to('/admin/product/stock')}}" id="unsold"> Stock Product</a></li>
    <!--<li><a href="{{URL::to('/admin/stock/sold')}}" id="sold">sold Stock Product</a></li>-->
    <!--<li><a href="holidays.html">Damage</a></li>-->
    <!--<li><a href="holidays.html">Return Product</a></li>-->
    <!--<li><a href="holidays.html">Ware House Stock</a></li>-->
  </ul>
</li>

</ul>
</div>
  </div>
</div>
<!-- /Sidebar -->
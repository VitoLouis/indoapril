﻿<?php
session_start();
    include 'koneksi.php';
    
    ?>
    
<!doctype html>
<html class="no-js " lang="en">
<?php
    include 'header.php';
    ?>
<body class="theme-orange">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">        
        <div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
        <p>Please wait...</p>
        <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Nexa"></div>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div><!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="material-icons">search</i> </div>
    <input type="text" placeholder="Explore Nexa...">
    <div class="close-search"> <i class="material-icons">close</i> </div>
</div>
<!-- Top Bar -->
<?php
    include 'navbar.php';
    ?>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <?php
    include 'userinfo.php';
    ?>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <ul class="ml-menu">
                    <li><a href="index.php">Main Dashboard</a></li>
  
  
  
                    <li><a href="ec-dashboard.php">Ecommerce Dashboard</a></li>
                
                </ul>
            </li>
            
            
          
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                <ul class="ml-menu">
                    <li><a href="ec-dashboard.php">Dashboard</a></li>
                    <li class="active"><a href="ec-product.php">Product</a></li>
                    <li><a href="ec-product-List.php">Shopping cart</a></li>
                    <li><a href="ec-product-detail.php">Checkout</a></li>
                </ul>
            </li>
            
            </li>
           
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span> </a>
                <ul class="ml-menu">                        
                    <li><a href="normal-tables.html">Normal Tables</a></li>
                    <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                    <li><a href="editable-table.html">Editable Tables</a></li>
                    <li><a href="footable.html">Foo Tables</a></li>
                    <li><a href="table-color.html">Tables Color</a></li>
                    <li><a href="footable.html">Foo Tables</a></li>
                    <li><a href="table-color.html">Tables Color</a></li>
                </ul>
            </li>
            
            </li>
           
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a></li>
                    <li><a href="sign-up.html">Sign Up</a></li>
                    
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="events.html">Calendar</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="contact.html">Contact list</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
           
            </li>
            
            
    </div>
    <!-- #Menu --> 
</aside>    
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active in active slideRight" id="skins">
            <div class="slim_scroll">
                <h6>Flat Color</h6>
                <ul class="choose-skin">                   
                    <li data-theme="purple"><div class="purple"></div><span>Purple</span></li>
                    <li data-theme="blue"><div class="blue"></div><span>Blue</span></li>
                    <li data-theme="cyan"><div class="cyan"></div><span>Cyan</span></li>
                </ul>                    
                <h6>Multi Color</h6>
                <ul class="choose-skin">                        
                    <li data-theme="black"><div class="black"></div><span>Black</span></li>
                    <li data-theme="deep-purple"><div class="deep-purple"></div><span>Deep Purple</span></li>
                    <li data-theme="red"><div class="red"></div><span>Red</span></li>                        
                </ul>                    
                <h6>Gradient Color</h6>
                <ul class="choose-skin">                    
                    <li data-theme="green"><div class="green"></div><span>Green</span> </li>
                    <li data-theme="orange" class="active"><div class="orange"></div><span>Orange</span></li>
                    <li data-theme="blush"><div class="blush"></div><span>Blush</span></li>
                </ul>
            </div>                
        </div>
        <div role="tabpanel" class="tab-pane pullUp" id="chat">
            <div class="right_chat slim_scroll">
                <div class="search">
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search..." required autofocus>
                        </div>
                    </div>
                </div>
                <h6>Recent</h6>
                <ul class="list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Sophia</span>
                                    <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Grayson</span>
                                    <span class="message">All the Lorem Ipsum generators on the</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Isabella</span>
                                    <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="me">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">John</span>
                                    <span class="message">It is a long established fact that a reader</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alexander</span>
                                    <span class="message">Richard McClintock, a Latin professor</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>                        
                </ul>
                <h6>Contacts</h6>
                <ul class="list-unstyled">
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane slideLeft" id="settings">
            <div class="settings slim_scroll">
                <p class="text-left">General Settings</p>
                <ul class="setting-list">
                    <li><span>Report Panel Usage</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                    <li><span>Email Redirect</span>
                        <div class="switch">
                            <label><input type="checkbox"><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">System Settings</p>
                <ul class="setting-list">
                    <li><span>Notifications</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                    <li><span>Auto Updates</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">Account Settings</p>
                <ul class="setting-list">
                    <li><span>Offline</span>
                        <div class="switch">
                            <label><input type="checkbox"><span class="lever"></span></label>
                        </div>
                    </li>
                    <li><span>Location Permission</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <h2>TL Groups</h2>                    
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg"  alt="">
                    <div class="chat-info">
                        <a class="name" href="javascript:void(0);">Alexander</a>
                        <span class="datetime">6:12</span>                            
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg"  alt="">
                    <div class="chat-info"><a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg"  alt="">
                    <div class="chat-info"><a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group">
                <div class="form-line">
                    <input type="text" class="form-control date" placeholder="Enter your email...">
                </div>
                <span class="input-group-addon"> <i class="material-icons">send</i> </span>
            </div>
        </div>
    </div>
</div>



<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Product
                <small class="text-muted">Welcome to Indo April</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> IndoApril</a></li>
                    <li class="breadcrumb-item"><a href="ec-dashboard.php">eCommerce</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ul>
            </div>
        </div>
    </div>
        
    <div class="container-fluid">
        <div class="row clearfix">


        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM produk");
        while ($data = mysqli_fetch_array($query)){
        ?>
        
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card product_item">
                    <div class="body">
                        <div class="cp_img">
                            <img src="assets/images/ecommerce/<?php echo $data['GambarProduk']; ?>" alt="Product" class="img-fluid" />
                            <div class="hover">
                                <form method="post" action="ec-product-add.php">  
                                    <input type="hidden" name= "produk" value="<?php echo $data['ProductID'];?>"> 
                              
                            
                            <button class="btn btn-cart btn-sm waves-effect waves-light" type="submit" name="add" value="bro"><i class="mdi mdi-cart mr-1"></i> Add To Cart</button>
                           
                                    
                                </form>
                            </div>
                        </div>
                        <div class="product_details">
                            <h5><a href="ec-product-detail.php"> <?php echo $data['Nama_Product']; ?></a></h5>
                            <ul class="product_price list-unstyled">
                                <li class="old_price">Rp <?php echo $data['Harga_Beli']; ?></li>
                                <li class="new_price">Rp <?php echo $data['Harga_Jual']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div> 
            <?php 
        }
        ?>          
            </div>
           
        </div>
    </div>   
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>
</html>
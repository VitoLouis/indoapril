<?php
    session_start(); 
    include 'koneksi.php';
   
    ?>
<!doctype html>
<html class="no-js " lang="en">

    
    
<?php
    include 'header.php';
    ?>

<?php
    include 'ec-product-add.php';
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
            
            <li><a href="mail-inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span> </a></li>
           
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                <ul class="ml-menu">
                    <li><a href="ec-dashboard.php">Dashboard</a></li>
                    <li><a href="ec-product.php">Product</a></li>
                    <li class="active"><a href="ec-product-List.php">Shopping cart</a></li>
                    <li><a href="ec-product-detail.php">Product detail</a></li>
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
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                    <li><a href="404.html">Page 404</a></li>
                    <li><a href="500.html">Page 500</a></li>
                    <li><a href="page-offline.html">Page Offline</a></li>
                    <li><a href="locked.html">Locked Screen</a></li>
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
           
            
            <li class="header">LABELS</li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a></li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a></li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a></li>
        </ul>
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



<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Shopping Cart
                <small class="text-muted">Welcome to IndoApril</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                   
 

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th data-breakpoints="sm xs">Amount</th>
                                    <th data-breakpoints="sm xs">Quantity</th>
                                    <th data-breakpoints="sm xs">Total</th>
                                    <th data-breakpoints="sm xs">Action</th>
                                </tr>
                            </thead>
                            <tbody>
            
                            <?php 
                                if (!empty($_SESSION['shop'])){
                                    foreach ($_SESSION['shop'] as $id => $product) {

                                   
                                echo "<tr>"; 

                                echo "<td><img src='assets/images/ecommerce/product8.png' width='48' alt='Product img'></td>";
                                echo "<td> <h5> ".$product['name']." </h5> </td>"; 
                                echo "<td><span class='text-muted'> ".$product['price']."</span></td>";
                                echo "<td>".$product['jumlah']."</td>";
                                echo "<td><span class='col-green'>".$product['price'] * $product['jumlah'] . "</span></td>";
                                echo "<td>
                                <form method='POST' action='ec-product-delete-cart.php' onsubmit=\"return confirm('Hapus Pesanan?')\"> 
                                 <input type='hidden' name='id' value='".$id."'>
                                <button type='submit' class='btn btn-default waves-effect waves-float waves-red' name='delete'><i class='zmdi zmdi-delete'></i></button>
                                 </form>
                                       
                                    </td>";
                                echo "</tr>"; 
                            }
                        }
                            ?>
        
        
                                           
                            </tbody>
                        </table>
                    </div>        
                </div>
            </div>
        </div>
    </div>   
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/tables/footable.js"></script><!-- Custom Js --> 

</body>
</html>
﻿<?php
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
<nav class="navbar">
    <div class="col-12">
        
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.php">Nexa</a>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li><a href="mail-inbox.html" class="inbox-btn hidden-sm-down" data-close="true"><i class="zmdi zmdi-email"></i></a></li>
            <li class="dropdown menu-app hidden-sm-down"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-apps"></i> </a>
                <ul class="dropdown-menu slideDown">
                    <li class="body">
                        <ul class="menu">
                            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                            <li><a href="contact.html"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
                            <li><a href="chat.html"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                            <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">            
            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle xs-hide" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-coral"> <i class="material-icons">person_add</i> </div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-turquoise"> <i class="material-icons">add_shopping_cart</i> </div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle g-bg-cyan"> <i class="material-icons">delete_forever</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle g-bg-blue"> <i class="material-icons">mode_edit</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-slategray"> <i class="material-icons">comment</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-seagreen"> <i class="material-icons">cached</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-blue"> <i class="material-icons">settings</i> </div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p> <i class="material-icons">access_time</i> Yesterday </p>
                                </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All Notifications</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li><a href="javascript:void(0);">
                                <h4> Footer display issue <small>72%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Make new buttons <small>56%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Create new dashboard <small>68%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Solve transition issue <small>77%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Answer GitHub questions <small>87%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All Tasks</a></li>
                </ul>
            </li>
            
            <li><a href="sign-in.html" class="mega-menu xs-hide" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="assets/images/xs/avatar1.jpg" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown">John Doe</div>                
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
                <ul class="dropdown-menu slideUp">
                    <li><a href="profile.html"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li class="divider"></li>
                    <li><a href="sign-in.html"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
            <div class="email">john.doe@example.com</div>
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <ul class="ml-menu">
                    <li><a href="index.php">Main Dashboard</a></li>
                    <li><a href="dashboard-rtl.html">RTL Dashboard</a></li>
                    <li><a href="index2.html">Horizontal Menu</a></li>
                    <li><a href="blog-dashboard.html">Blog Dashboard</a></li>
                    <li><a href="ec-dashboard.php">Ecommerce Dashboard</a></li>
                    <li><a href="iot-dashboard.html">Iot Dashboard</a></li>                        
                </ul>
            </li>
            <li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a></li>
            <li><a href="mail-inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span> </a></li>
            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blogger</span> </a></li>
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                <ul class="ml-menu">
                    <li class="active"><a href="ec-dashboard.php">Dashboard</a></li>
                    <li><a href="ec-product.php">Product</a></li>
                    <li><a href="ec-product-List.php">Product List</a></li>
                    <li><a href="ec-product-detail.php">Product detail</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                <ul class="ml-menu">
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="helper-classes.html">Helper Classes</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="animations.html">Animations</a></li>
                    <li><a href="badges.html">Badges</a></li>
                    <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="collapse.html">Collapse</a></li>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="dialogs.html">Dialogs</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="labels.html">Labels</a></li>
                    <li><a href="list-group.html">List Group</a></li>
                    <li><a href="media-object.html">Media Object</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="notifications.html">Notifications</a></li>
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="preloaders.html">Preloaders</a></li>
                    <li><a href="progressbars.html">Progress Bars</a></li>
                    <li><a href="range-sliders.html">Range Sliders</a></li>
                    <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="waves.html">Waves</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> </a>
                <ul class="ml-menu">
                    <li><a href="basic-form-elements.html">Basic Form Elements</a></li>
                    <li><a href="advanced-form-elements.html">Advanced Form Elements</a></li>
                    <li><a href="form-examples.html">Form Examples</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-editors.html">Editors</a></li>
                    <li><a href="form-summernote.html">Summernote</a></li>
                    <li><a href="form-upload.html">File Upload</a></li>
                </ul>
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
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-image"></i><span>Medias</span> </a>
                <ul class="ml-menu">
                    <li><a href="image-gallery.html">Image Gallery</a></li>
                    <li><a href="carousel.html">Carousel</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> </a>
                <ul class="ml-menu">
                    <li><a href="echart.html">E Chart</a></li>
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="flot.html">Flot</a></li>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="sparkline.html">Sparkline</a></li>
                    <li><a href="jquery-knob.html">Jquery Knob</a></li>
                </ul>
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
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span> </a>
                <ul class="ml-menu">
                    <li><a href="google.html">Google Map</a></li>
                    <li><a href="yandex.html">YandexMap</a></li>
                    <li><a href="jvectormap.html">jVectorMap</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-trending-down"></i><span>Multi Level Menu</span> </a>
                <ul class="ml-menu">
                    <li><a href="javascript:void(0);"> <span>Menu Item</span> </a></li>
                    <li><a href="javascript:void(0);"> <span>Menu Item - 2</span> </a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"> <span>Level - 2</span> </a>
                        <ul class="ml-menu">
                            <li><a href="javascript:void(0);"> <span>Menu Item</span> </a></li>
                            <li><a href="javascript:void(0);" class="menu-toggle"> <span>Level - 3</span> </a>
                                <ul class="ml-menu">
                                    <li><a href="javascript:void(0);"> <span>Level - 4</span> </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="changelogs.html"><i class="zmdi zmdi-time-restore"></i><span>Changelogs</span> </a></li>
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

<!-- Main Content -->
<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>eCommerce Dashboard
                <small class="text-muted">Welcome to Nexa Application</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Nexa</a></li>
                    <li class="breadcrumb-item"><a href="ec-dashboard.php">eCommerce</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card ">
                    <div class="header">
                        <h2>USA<small >Sales Report</small></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">Today</span>
                                <h5 class="m-b-0">256</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">This Week</span>
                                <h5 class="m-b-0">621</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">This Month</span>
                                <h5 class="m-b-0">981</h5>                                
                            </div>
                        </div>
                        <div class="progress m-b-10">
                            <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>Average 18% <i class="zmdi zmdi-trending-up"></i></small>
                    </div>                    
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card ">
                    <div class="header">
                        <h2>India<small >Sales Report</small></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">Today</span>
                                <h5 class="m-b-0">195</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">This Week</span>
                                <h5 class="m-b-0">235</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">This Month</span>
                                <h5 class="m-b-0">312</h5>                                
                            </div>
                        </div>
                        <div class="progress m-b-10">
                            <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>Average 39% <i class="zmdi zmdi-trending-up"></i></small>
                    </div>                    
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card ">
                    <div class="header">
                        <h2>Europe<small >Sales Report</small></h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">Today</span>
                                <h5 class="m-b-0">210</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">This Week</span>
                                <h5 class="m-b-0">462</h5>                                
                            </div>
                            <div class="col-sm-4 col-4 m-b-10">
                                <span class="text-muted">This Month</span>
                                <h5 class="m-b-0">574</h5>                                
                            </div>
                        </div>
                        <div class="progress m-b-10">
                            <div class="progress-bar l-seagreen" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>Average 10% <i class="zmdi zmdi-trending-up"></i></small>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card product-report">
                    <div class="header">
                        <h2>Annual Report <small>Description text here...</small></h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix m-b-15">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="icon l-amber"><i class="zmdi zmdi-chart-donut"></i></div>
                                <div class="col-in">
                                    <h4 class="counter m-b-0">$4,516</h4>
                                    <small class="text-muted m-t-0">Sales Report</small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="icon l-turquoise"><i class="zmdi zmdi-chart"></i></div>
                                <div class="col-in">
                                    <h4 class="counter m-b-0">$6,481</h4>
                                    <small class="text-muted m-t-0">Annual Revenue </small>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="icon l-parpl"><i class="zmdi zmdi-card"></i></div>
                                <div class="col-in">
                                    <h4 class="counter m-b-0">$3,915</h4>
                                    <small class="text-muted m-t-0">Total Profit</small>
                                </div>
                            </div>
                        </div>
                        <div id="area_chart" class="graph"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card tasks_report ">
                    <div class="header">
                        <h2>Total Revenue</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu slideUp ">
                                    <li><a href="javascript:void(0);">2017 Year</a></li>
                                    <li><a href="javascript:void(0);">2016 Year</a></li>
                                    <li><a href="javascript:void(0);">2015 Year</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body text-center">
                        <h4>Total Sale</h4>
                        <h6 class="m-b-20">2,45,124</h6>
                        <input type="text" class="knob dial1" value="66" data-width="140" data-height="140" data-thickness="0.1" data-fgColor="#00ced1" readonly>
                        <h6 class="m-t-30">Satisfaction Rate</h6>
                        <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                        <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="80px" data-bar-Width="2" data-bar-Spacing="8" data-bar-Color="#00ced1">3,2,6,5,9,8,7,8,4,5,1,2,9,5,1,3,5,7,4,6</div>
                    </div>
                </div>
            </div>
        </div>               
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2>Top Selling Country</h2>
                    </div>
                    <div class="body">
                        <div class="row">                            
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div id="world-map-markers" class="jvector-map"></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="table-responsive">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text</p>
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                            <tr>
                                                <th>Contrary</th>
                                                <th>2017</th>
                                                <th>2017</th>
                                                <th>Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>USA</td>
                                                <td>2,009</td>
                                                <td>3,591</td>
                                                <td>7.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>India</td>
                                                <td>1,129</td>
                                                <td>1,361</td>
                                                <td>3.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Canada</td>
                                                <td>2,009</td>
                                                <td>2,901</td>
                                                <td>9.01% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Australia</td>
                                                <td>954</td>
                                                <td>901</td>
                                                <td>5.71% <i class="zmdi zmdi-trending-down text-warning"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Germany</td>
                                                <td>594</td>
                                                <td>500</td>
                                                <td>6.11% <i class="zmdi zmdi-trending-down text-warning"></i></td>
                                            </tr>
                                            <tr>
                                                <td>UK</td>
                                                <td>1,500</td>
                                                <td>1,971</td>
                                                <td>8.50% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Other</td>
                                                <td>4,236</td>
                                                <td>4,591</td>
                                                <td>9.15% <i class="zmdi zmdi-trending-up text-success"></i></td>
                                            </tr>                                            											
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="card member-card">
                    <div class="header l-blue">
                        <h4 class="m-t-0">Matthew Deo</h4>
                        <p>Top Coustomer</p>
                    </div>
                    <div class="member-img">
                        <a href="profile.html" class="">
                            <img class="rounded-circle" src="assets/images/lg/avatar3.jpg"  alt="profile-image">
                        </a>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li>
                                    <a title="facebook" href="javascript:void(0);">
                                    <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="twitter" href="javascript:void(0);">
                                    <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a title="instagram" href="3">
                                    <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco,<br> CADGE 94107</p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>98</h5>
                                <small>Item Buy</small>
                            </div>
                            <div class="col-4">
                                <h5>78</h5>
                                <small>Mobile</small>
                            </div>
                            <div class="col-4">
                                <h5>$246</h5>
                                <small>Spent</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>New Customer Ratings </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu slideUp ">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="row list-unstyled c_review">
                            <li class="col-12">
                                <div class="avatar">
                                    <a href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar2.jpg" alt="user" width="60"></a>
                                </div>                                
                                <div class="comment-action">
                                    <h5 class="c_name">Hossein Shams</h5>
                                    <p class="c_msg m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                    <div class="badge badge-primary">iPhone 8</div>
                                    <span class="m-l-10">
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                    </span>
                                    <small class="comment-date float-sm-right">Dec 21, 2017</small>
                                </div>                                
                            </li>
                            <li class="col-12">
                                <div class="avatar">
                                    <a href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar3.jpg" alt="user" width="60"></a>
                                </div>                                
                                <div class="comment-action">
                                    <h5 class="c_name">Tim Hank</h5>
                                    <p class="c_msg m-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <div class="badge badge-primary">Nokia 8</div>
                                    <span class="m-l-10">
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                    </span>
                                    <small class="comment-date float-sm-right">Dec 18, 2017</small>
                                </div>                                
                            </li>
                            <li class="col-12">
                                <div class="avatar">
                                    <a href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar4.jpg" alt="user" width="60"></a>
                                </div>                                
                                <div class="comment-action">
                                    <h5 class="c_name">Maryam Amiri</h5>
                                    <p class="c_msg m-b-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                                    <div class="badge badge-primary">Samsung Galaxy S8</div>
                                    <span class="m-l-10">
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                    </span>
                                    <small class="comment-date float-sm-right">Dec 18, 2017</small>
                                </div>                                
                            </li>
                            <li class="col-12">
                                <div class="avatar">
                                    <a href="javascript:void(0);"><img class="rounded" src="assets/images/xs/avatar5.jpg" alt="user" width="60"></a>
                                </div>                                
                                <div class="comment-action">
                                    <h5 class="c_name">Gary Camara</h5>
                                    <p class="c_msg m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    <div class="badge badge-primary">HTC U11</div>
                                    <span class="m-l-10">
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star col-amber"></i></a>
                                        <a href="javascript:void(0);"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                    </span>
                                    <small class="comment-date float-sm-right">Dec 13, 2017</small>
                                </div>                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Recent Orders </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu slideUp ">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive members_profiles">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:60px;">#</th>
                                    <th>Name</th>
                                    <th>Item</th>
                                    <th>Address</th>
                                    <th>Quantity</th>                                    
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Hossein</td>
                                    <td>IPONE-7</td>
                                    <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                    <td>3</td>
                                    <td><span class="badge badge-success">DONE</span></td>
                                </tr>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Camara</td>
                                    <td>NOKIA-8</td>
                                    <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                    <td>3</td>
                                    <td><span class="badge badge-success">DONE</span></td>
                                </tr>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Maryam</td>
                                    <td>NOKIA-456</td>
                                    <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                    <td>4</td>
                                    <td><span class="badge badge-success">DONE</span></td>
                                </tr>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Micheal</td>
                                    <td>SAMSANG PRO</td>
                                    <td>508 Virginia Street Chicago, IL 60653</td>
                                    <td>1</td>
                                    <td><span class="badge badge-success">DONE</span></td>
                                </tr>
                                <tr>
                                    <td><img src="http://via.placeholder.com/60x40" alt="Product img"></td>
                                    <td>Frank</td>
                                    <td>NOKIA-456</td>
                                    <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                    <td>13</td>
                                    <td><span class="badge badge-warning">PENDING</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>       
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <p class="m-b-0">© 2017 Nexa Admin by <a href="http://thememakker.com/" target="black">ThemeMakker</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/ecommerce.js"></script>
<script src="assets/js/pages/charts/jquery-knob.min.js"></script>
</body>
</html>
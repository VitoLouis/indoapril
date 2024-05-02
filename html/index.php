<?php
session_start();
    include 'koneksi.php';
    ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
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
        <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Nexa" /></div>
      </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- Search  -->
    <div class="search-bar">
      <div class="search-icon"><i class="material-icons">search</i></div>
      <input type="text" placeholder="Explore Nexa..." />
      <div class="close-search"><i class="material-icons">close</i></div>
    </div>

    <!-- Top Bar -->
    <?php
    include 'Navbar.php';
    ?>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <?php
    include 'userinfo.php';
    ?>
      <!-- #User Info -->
      <!-- Menu -->
      <?php
    include 'menu.php';
    ?>

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
              <li data-theme="purple">
                <div class="purple"></div>
                <span>Purple</span>
              </li>
              <li data-theme="blue">
                <div class="blue"></div>
                <span>Blue</span>
              </li>
              <li data-theme="cyan">
                <div class="cyan"></div>
                <span>Cyan</span>
              </li>
            </ul>
            <h6>Multi Color</h6>
            <ul class="choose-skin">
              <li data-theme="black">
                <div class="black"></div>
                <span>Black</span>
              </li>
              <li data-theme="deep-purple">
                <div class="deep-purple"></div>
                <span>Deep Purple</span>
              </li>
              <li data-theme="red">
                <div class="red"></div>
                <span>Red</span>
              </li>
            </ul>
            <h6>Gradient Color</h6>
            <ul class="choose-skin">
              <li data-theme="green">
                <div class="green"></div>
                <span>Green</span>
              </li>
              <li data-theme="orange" class="active">
                <div class="orange"></div>
                <span>Orange</span>
              </li>
              <li data-theme="blush">
                <div class="blush"></div>
                <span>Blush</span>
              </li>
            </ul>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane pullUp" id="chat">
          <div class="right_chat slim_scroll">
            <div class="search">
              <div class="input-group">
                <div class="form-line">
                  <input type="text" class="form-control" placeholder="Search..." required autofocus />
                </div>
              </div>
            </div>
            <h6>Recent</h6>
            <ul class="list-unstyled">
              <li class="online">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="" />
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
                    <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="" />
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
                    <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="" />
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
                    <img class="media-object" src="assets/images/xs/avatar1.jpg" alt="" />
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
                    <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="" />
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
                    <img class="media-object" src="assets/images/xs/avatar10.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="offline inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar6.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="offline inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar7.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="offline inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar8.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="offline inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar9.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="online inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="offline inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="offline inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="online inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="" />
                    <div class="media-body">
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="offline inlineblock">
                <a href="javascript:void(0);">
                  <div class="media">
                    <img class="media-object" src="assets/images/xs/avatar1.jpg" alt="" />
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
              <li>
                <span>Report Panel Usage</span>
                <div class="switch">
                  <label><input type="checkbox" checked /><span class="lever"></span></label>
                </div>
              </li>
              <li>
                <span>Email Redirect</span>
                <div class="switch">
                  <label><input type="checkbox" /><span class="lever"></span></label>
                </div>
              </li>
            </ul>
            <p class="text-left">System Settings</p>
            <ul class="setting-list">
              <li>
                <span>Notifications</span>
                <div class="switch">
                  <label><input type="checkbox" checked /><span class="lever"></span></label>
                </div>
              </li>
              <li>
                <span>Auto Updates</span>
                <div class="switch">
                  <label><input type="checkbox" checked /><span class="lever"></span></label>
                </div>
              </li>
            </ul>
            <p class="text-left">Account Settings</p>
            <ul class="setting-list">
              <li>
                <span>Offline</span>
                <div class="switch">
                  <label><input type="checkbox" /><span class="lever"></span></label>
                </div>
              </li>
              <li>
                <span>Location Permission</span>
                <div class="switch">
                  <label><input type="checkbox" checked /><span class="lever"></span></label>
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
                <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="" />
                <div class="chat-info">
                  <a class="name" href="javascript:void(0);">Alexander</a>
                  <span class="datetime">6:12</span>
                  <span class="message">Hello, John </span>
                </div>
              </li>
              <li class="right">
                <div class="chat-info">
                  <span class="datetime">6:15</span>
                  <span class="message"
                    >Hi, Alexander<br />
                    How are you!</span
                  >
                </div>
              </li>
              <li class="right">
                <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span></div>
              </li>
              <li class="left float-left">
                <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="" />
                <div class="chat-info">
                  <a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span>
                  <span class="message"
                    >Hi, Alexander,<br />
                    John <br />
                    What are you doing?</span
                  >
                </div>
              </li>
              <li class="left float-left">
                <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="" />
                <div class="chat-info"><a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span></div>
              </li>
              <li class="right">
                <div class="chat-info">
                  <span class="datetime">7:02</span> <span class="message">Hello, <br />Michael</span>
                </div>
              </li>
            </ul>
          </div>
          <div class="input-group">
            <div class="form-line">
              <input type="text" class="form-control date" placeholder="Enter your email..." />
            </div>
            <span class="input-group-addon"> <i class="material-icons">send</i> </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <section class="content home">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>
              Dashboard
              <small class="text-muted">Welcome to Indoapril Application</small>
            </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-right">
              <li class="breadcrumb-item">
                <a href="index.html"><i class="zmdi zmdi-home"></i> Indoapril</a>
              </li>
              <li class="breadcrumb-item active">Dashboard 1</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row clearfix">
          <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <div class="card tasks_report">
              <div class="body">
                <input type="text" class="knob dial1" value="76" data-width="90" data-height="90" data-thickness="0.2" data-fgColor="#00ced1" readonly />
                <h6 class="m-t-20">Customer Satisfaction Rate</h6>
                <div class="sparkline m-t-30" data-type="bar" data-width="97%" data-height="30px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#00ced1">5,8,3,4,8,9,7,2,9,5</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <div class="col-lg-9 col-md-8">
            <div class="card product-report">
              <div class="header">
                <h2>Data Report</h2>
                <ul class="header-dropdown m-r--5">
                  <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
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
                    <h4 class="counter m-b-0">Rp<?php
                    $querypenjualan = mysqli_query($koneksi,"SELECT SUM(Subtotal) as Penjualan from detail_transaksi ");
                        $datapenjualan = mysqli_fetch_array($querypenjualan);
                        echo $datapenjualan['Penjualan'] ?>
                    </h4>
                      <small class="text-muted m-t-0">Penjualan Hari ini</small>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="icon l-turquoise"><i class="zmdi zmdi-chart"></i></div>
                    <div class="col-in">
                    <h4 class="counter m-b-0">Rp<?php
                        $queryprofit = mysqli_query($koneksi,"SELECT SUM(Harga_Jual) as profit from produk ");
                        $dataprofit = mysqli_fetch_array($queryprofit);
                        $querypenjualan = mysqli_query($koneksi,"SELECT SUM(Harga_Beli) as harga from produk ");
                        $datapenjualan = mysqli_fetch_array($querypenjualan);
                        echo $dataprofit['profit'] - $datapenjualan['harga'] ?></h4>
                      <small class="text-muted m-t-0">Profit Hari Ini</small>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>

          
          <div class="col-lg-3 col-md-4">
            <div class="row clearfix">
              <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="card top-report">
                  <div class="body">
                    <h3 class="m-t-0">Sisa stok:<?php
                    $querystok = mysqli_query($koneksi,"SELECT Stok as stok from produk WHERE ProductID = '1' ");
                        $datastok = mysqli_fetch_array($querystok);
                        echo $datastok['stok'] ?><i class="zmdi zmdi-trending-up float-right"></i></h3>
                    <p class="text-muted">Untuk Coca-cola</p>
                    
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-6 col-sm-12">
                <div class="card top-report">
                  <div class="body">
                    <h3 class="m-t-0"><?php
                    $hitungtransaksi = mysqli_query($koneksi,"SELECT TransaksiID from transaksi ");
                        $datatransaksi = mysqli_fetch_array($hitungtransaksi);
                        echo count($datatransaksi) ?><i class="zmdi zmdi-trending-up float-right"></i></h3>
                    <p class="text-muted">Transaksi Hari Ini</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="row clearfix">
          <div class="col-md-12 col-lg-12">
            <div class="card visitors-map">
              <div class="header">
                <h2>Visitors Statistics</h2>
              </div>
              <div class="body">
                <div class="row">
                  <div class="col-xl-8 col-lg-7 col-md-12">
                    <div id="world-map-markers" class="jvector-map"></div>
                  </div>
                  <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="table-responsive">
                      <table class="table table-hover">
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
       
        <div class="row clearfix social-widget">
          <div class="col-xl-2 col-lg-4 col-md-4 col-6">
            <div class="card info-box-2 hover-zoom-effect facebook-widget">
              <div class="icon"><i class="zmdi zmdi-facebook"></i></div>
              <div class="content">
                <div class="text">Like</div>
                <div class="number">123</div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-6">
            <div class="card info-box-2 hover-zoom-effect instagram-widget">
              <div class="icon"><i class="zmdi zmdi-instagram"></i></div>
              <div class="content">
                <div class="text">Followers</div>
                <div class="number">231</div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-6">
            <div class="card info-box-2 hover-zoom-effect twitter-widget">
              <div class="icon"><i class="zmdi zmdi-twitter"></i></div>
              <div class="content">
                <div class="text">Followers</div>
                <div class="number">31</div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-6">
            <div class="card info-box-2 hover-zoom-effect google-widget">
              <div class="icon"><i class="zmdi zmdi-google"></i></div>
              <div class="content">
                <div class="text">Like</div>
                <div class="number">254</div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-6">
            <div class="card info-box-2 hover-zoom-effect linkedin-widget">
              <div class="icon"><i class="zmdi zmdi-linkedin"></i></div>
              <div class="content">
                <div class="text">Followers</div>
                <div class="number">2510</div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-4 col-6">
            <div class="card info-box-2 hover-zoom-effect behance-widget">
              <div class="icon"><i class="zmdi zmdi-behance"></i></div>
              <div class="content">
                <div class="text">Project</div>
                <div class="number">121</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <div class="col-lg-12">
            <div class="card">
              <div class="body">
                <p class="m-b-0">© 2024 Indoapril</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->

    <script src="assets/bundles/jvectormap.bundle.js"></script>
    <!-- JVectorMap Plugin Js -->
    <script src="assets/bundles/morrisscripts.bundle.js"></script>
    <!-- Morris Plugin Js -->
    <script src="assets/bundles/sparkline.bundle.js"></script>
    <!-- Sparkline Plugin Js -->
    <script src="assets/bundles/knob.bundle.js"></script>
    <!-- Jquery Knob Plugin Js -->

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/charts/jquery-knob.min.js"></script>
  </body>
</html>

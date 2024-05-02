<?php
session_start();
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM user");

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

    <section class="content">
      <div class="block-header">
        <div class="row">
          <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>
            Employee table
              <small class="text-muted">welcome to the employee table</small>
            </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-right">
              <li class="breadcrumb-item">
                <a href="index.php"><i class="zmdi zmdi-home"></i> Indoapril</a>
              </li>
              <li class="breadcrumb-item"><a href="javascript:void(0);">Table</a></li>
              <li class="breadcrumb-item active">Employee Table</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="header">
                <h2>Indoapril employees</h2>
                <small class="text-muted">Below is information regarding all employees</small>
                <ul class="header-dropdown">
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
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Roles</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
    $query = mysqli_query($koneksi, "SELECT * FROM user");

    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no; ?>                      </td>
            <td><?php echo $data['Nama']; ?>            </td>
            <td><?php echo $data['Roles']; ?>           </td>
            <td><?php echo $data['Email']; ?>           </td>
            <td><?php echo $data['Alamat']; ?>          </td>
            <td><?php echo $data['Telepon']; ?>         </td>
            <td>
              <a href="delete-data.php?id=<?php echo $data['UserID']; ?>"
             onclick="return confirm('Apakah Anda yakin akan menghapus data?')">
	            HAPUS</a>
            </td>
       </tr>
    <?php
        $no++;
    }
    ?>           
                    </tr>
                  </tbody>
                </table>
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
  </body>
</html>

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
              User Tabel
              <small class="text-muted">Welcome to Indoapril User</small>
            </h2>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-right">
              <li class="breadcrumb-item">
                <a href="index.php"><i class="zmdi zmdi-home"></i> Indoapril</a>
              </li>
              <li class="breadcrumb-item"><a href="javascript:void(0);">Tabel</a></li>
              <li class="breadcrumb-item active">User Tabel</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="header">
                <h2>BASIC EXAMPLE</h2>
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
        <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="header">
                <h2>EXPORTABLE TABLE</h2>
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
                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                    </tr>
                    <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                    </tr>
                    <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                    </tr>
                    <tr>
                      <td>Herrod Chandler</td>
                      <td>Sales Assistant</td>
                      <td>San Francisco</td>
                      <td>59</td>
                      <td>2012/08/06</td>
                      <td>$137,500</td>
                    </tr>
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>55</td>
                      <td>2010/10/14</td>
                      <td>$327,900</td>
                    </tr>
                    <tr>
                      <td>Colleen Hurst</td>
                      <td>Javascript Developer</td>
                      <td>San Francisco</td>
                      <td>39</td>
                      <td>2009/09/15</td>
                      <td>$205,500</td>
                    </tr>
                    <tr>
                      <td>Sonya Frost</td>
                      <td>Software Engineer</td>
                      <td>Edinburgh</td>
                      <td>23</td>
                      <td>2008/12/13</td>
                      <td>$103,600</td>
                    </tr>
                    <tr>
                      <td>Jena Gaines</td>
                      <td>Office Manager</td>
                      <td>London</td>
                      <td>30</td>
                      <td>2008/12/19</td>
                      <td>$90,560</td>
                    </tr>
                    <tr>
                      <td>Quinn Flynn</td>
                      <td>Support Lead</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2013/03/03</td>
                      <td>$342,000</td>
                    </tr>
                    <tr>
                      <td>Charde Marshall</td>
                      <td>Regional Director</td>
                      <td>San Francisco</td>
                      <td>36</td>
                      <td>2008/10/16</td>
                      <td>$470,600</td>
                    </tr>
                    <tr>
                      <td>Haley Kennedy</td>
                      <td>Senior Marketing Designer</td>
                      <td>London</td>
                      <td>43</td>
                      <td>2012/12/18</td>
                      <td>$313,500</td>
                    </tr>
                    <tr>
                      <td>Tatyana Fitzpatrick</td>
                      <td>Regional Director</td>
                      <td>London</td>
                      <td>19</td>
                      <td>2010/03/17</td>
                      <td>$385,750</td>
                    </tr>
                    <tr>
                      <td>Michael Silva</td>
                      <td>Marketing Designer</td>
                      <td>London</td>
                      <td>66</td>
                      <td>2012/11/27</td>
                      <td>$198,500</td>
                    </tr>
                    <tr>
                      <td>Paul Byrd</td>
                      <td>Chief Financial Officer (CFO)</td>
                      <td>New York</td>
                      <td>64</td>
                      <td>2010/06/09</td>
                      <td>$725,000</td>
                    </tr>
                    <tr>
                      <td>Gloria Little</td>
                      <td>Systems Administrator</td>
                      <td>New York</td>
                      <td>59</td>
                      <td>2009/04/10</td>
                      <td>$237,500</td>
                    </tr>
                    <tr>
                      <td>Bradley Greer</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>41</td>
                      <td>2012/10/13</td>
                      <td>$132,000</td>
                    </tr>
                    <tr>
                      <td>Dai Rios</td>
                      <td>Personnel Lead</td>
                      <td>Edinburgh</td>
                      <td>35</td>
                      <td>2012/09/26</td>
                      <td>$217,500</td>
                    </tr>
                    <tr>
                      <td>Jenette Caldwell</td>
                      <td>Development Lead</td>
                      <td>New York</td>
                      <td>30</td>
                      <td>2011/09/03</td>
                      <td>$345,000</td>
                    </tr>
                    <tr>
                      <td>Yuri Berry</td>
                      <td>Chief Marketing Officer (CMO)</td>
                      <td>New York</td>
                      <td>40</td>
                      <td>2009/06/25</td>
                      <td>$675,000</td>
                    </tr>
                    <tr>
                      <td>Caesar Vance</td>
                      <td>Pre-Sales Support</td>
                      <td>New York</td>
                      <td>21</td>
                      <td>2011/12/12</td>
                      <td>$106,450</td>
                    </tr>
                    <tr>
                      <td>Doris Wilder</td>
                      <td>Sales Assistant</td>
                      <td>Sidney</td>
                      <td>23</td>
                      <td>2010/09/20</td>
                      <td>$85,600</td>
                    </tr>
                    <tr>
                      <td>Angelica Ramos</td>
                      <td>Chief Executive Officer (CEO)</td>
                      <td>London</td>
                      <td>47</td>
                      <td>2009/10/09</td>
                      <td>$1,200,000</td>
                    </tr>
                    <tr>
                      <td>Gavin Joyce</td>
                      <td>Developer</td>
                      <td>Edinburgh</td>
                      <td>42</td>
                      <td>2010/12/22</td>
                      <td>$92,575</td>
                    </tr>
                    <tr>
                      <td>Jennifer Chang</td>
                      <td>Regional Director</td>
                      <td>Singapore</td>
                      <td>28</td>
                      <td>2010/11/14</td>
                      <td>$357,650</td>
                    </tr>
                    <tr>
                      <td>Brenden Wagner</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>28</td>
                      <td>2011/06/07</td>
                      <td>$206,850</td>
                    </tr>
                    <tr>
                      <td>Fiona Green</td>
                      <td>Chief Operating Officer (COO)</td>
                      <td>San Francisco</td>
                      <td>48</td>
                      <td>2010/03/11</td>
                      <td>$850,000</td>
                    </tr>
                    <tr>
                      <td>Shou Itou</td>
                      <td>Regional Marketing</td>
                      <td>Tokyo</td>
                      <td>20</td>
                      <td>2011/08/14</td>
                      <td>$163,000</td>
                    </tr>
                    <tr>
                      <td>Michelle House</td>
                      <td>Integration Specialist</td>
                      <td>Sidney</td>
                      <td>37</td>
                      <td>2011/06/02</td>
                      <td>$95,400</td>
                    </tr>
                    <tr>
                      <td>Suki Burks</td>
                      <td>Developer</td>
                      <td>London</td>
                      <td>53</td>
                      <td>2009/10/22</td>
                      <td>$114,500</td>
                    </tr>
                    <tr>
                      <td>Prescott Bartlett</td>
                      <td>Technical Author</td>
                      <td>London</td>
                      <td>27</td>
                      <td>2011/05/07</td>
                      <td>$145,000</td>
                    </tr>
                    <tr>
                      <td>Gavin Cortez</td>
                      <td>Team Leader</td>
                      <td>San Francisco</td>
                      <td>22</td>
                      <td>2008/10/26</td>
                      <td>$235,500</td>
                    </tr>
                    <tr>
                      <td>Martena Mccray</td>
                      <td>Post-Sales support</td>
                      <td>Edinburgh</td>
                      <td>46</td>
                      <td>2011/03/09</td>
                      <td>$324,050</td>
                    </tr>
                    <tr>
                      <td>Unity Butler</td>
                      <td>Marketing Designer</td>
                      <td>San Francisco</td>
                      <td>47</td>
                      <td>2009/12/09</td>
                      <td>$85,675</td>
                    </tr>
                    <tr>
                      <td>Howard Hatfield</td>
                      <td>Office Manager</td>
                      <td>San Francisco</td>
                      <td>51</td>
                      <td>2008/12/16</td>
                      <td>$164,500</td>
                    </tr>
                    <tr>
                      <td>Hope Fuentes</td>
                      <td>Secretary</td>
                      <td>San Francisco</td>
                      <td>41</td>
                      <td>2010/02/12</td>
                      <td>$109,850</td>
                    </tr>
                    <tr>
                      <td>Vivian Harrell</td>
                      <td>Financial Controller</td>
                      <td>San Francisco</td>
                      <td>62</td>
                      <td>2009/02/14</td>
                      <td>$452,500</td>
                    </tr>
                    <tr>
                      <td>Timothy Mooney</td>
                      <td>Office Manager</td>
                      <td>London</td>
                      <td>37</td>
                      <td>2008/12/11</td>
                      <td>$136,200</td>
                    </tr>
                    <tr>
                      <td>Jackson Bradshaw</td>
                      <td>Director</td>
                      <td>New York</td>
                      <td>65</td>
                      <td>2008/09/26</td>
                      <td>$645,750</td>
                    </tr>
                    <tr>
                      <td>Olivia Liang</td>
                      <td>Support Engineer</td>
                      <td>Singapore</td>
                      <td>64</td>
                      <td>2011/02/03</td>
                      <td>$234,500</td>
                    </tr>
                    <tr>
                      <td>Bruno Nash</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>38</td>
                      <td>2011/05/03</td>
                      <td>$163,500</td>
                    </tr>
                    <tr>
                      <td>Sakura Yamamoto</td>
                      <td>Support Engineer</td>
                      <td>Tokyo</td>
                      <td>37</td>
                      <td>2009/08/19</td>
                      <td>$139,575</td>
                    </tr>
                    <tr>
                      <td>Thor Walton</td>
                      <td>Developer</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2013/08/11</td>
                      <td>$98,540</td>
                    </tr>
                    <tr>
                      <td>Finn Camacho</td>
                      <td>Support Engineer</td>
                      <td>San Francisco</td>
                      <td>47</td>
                      <td>2009/07/07</td>
                      <td>$87,500</td>
                    </tr>
                    <tr>
                      <td>Serge Baldwin</td>
                      <td>Data Coordinator</td>
                      <td>Singapore</td>
                      <td>64</td>
                      <td>2012/04/09</td>
                      <td>$138,575</td>
                    </tr>
                    <tr>
                      <td>Zenaida Frank</td>
                      <td>Software Engineer</td>
                      <td>New York</td>
                      <td>63</td>
                      <td>2010/01/04</td>
                      <td>$125,250</td>
                    </tr>
                    <tr>
                      <td>Zorita Serrano</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>56</td>
                      <td>2012/06/01</td>
                      <td>$115,000</td>
                    </tr>
                    <tr>
                      <td>Jennifer Acosta</td>
                      <td>Junior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>43</td>
                      <td>2013/02/01</td>
                      <td>$75,650</td>
                    </tr>
                    <tr>
                      <td>Cara Stevens</td>
                      <td>Sales Assistant</td>
                      <td>New York</td>
                      <td>46</td>
                      <td>2011/12/06</td>
                      <td>$145,600</td>
                    </tr>
                    <tr>
                      <td>Hermione Butler</td>
                      <td>Regional Director</td>
                      <td>London</td>
                      <td>47</td>
                      <td>2011/03/21</td>
                      <td>$356,250</td>
                    </tr>
                    <tr>
                      <td>Lael Greer</td>
                      <td>Systems Administrator</td>
                      <td>London</td>
                      <td>21</td>
                      <td>2009/02/27</td>
                      <td>$103,500</td>
                    </tr>
                    <tr>
                      <td>Jonas Alexander</td>
                      <td>Developer</td>
                      <td>San Francisco</td>
                      <td>30</td>
                      <td>2010/07/14</td>
                      <td>$86,500</td>
                    </tr>
                    <tr>
                      <td>Shad Decker</td>
                      <td>Regional Director</td>
                      <td>Edinburgh</td>
                      <td>51</td>
                      <td>2008/11/13</td>
                      <td>$183,000</td>
                    </tr>
                    <tr>
                      <td>Michael Bruce</td>
                      <td>Javascript Developer</td>
                      <td>Singapore</td>
                      <td>29</td>
                      <td>2011/06/27</td>
                      <td>$183,000</td>
                    </tr>
                    <tr>
                      <td>Donna Snider</td>
                      <td>Customer Support</td>
                      <td>New York</td>
                      <td>27</td>
                      <td>2011/01/25</td>
                      <td>$112,000</td>
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

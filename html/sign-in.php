<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <?php
  include "header.php";
  ?>

  <body class="theme-orange">
    <div class="authentication">
      <div class="card">
        <div class="body">
          <div class="row">
            <div class="col-lg-12">
              <div class="header slideDown">
                <div class="logo"><img src="assets/images/logo.png" alt="Nexa" /></div>
                <h1>Indoapril</h1>
                <ul class="list-unstyled l-social">
                  <li>
                    <a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <form class="col-lg-12" id="sign_in" method="POST" action="sign-indata.php">  
              <h6 class="title">Sign in to your Account</h6>
              <div class="form-group form-float">
                <div class="form-line">
                  <input type="text" class="form-control" name ="Username" id ="Username"/>
                  <label class="form-label">Username</label>
                </div>
              </div>
              <div class="form-group form-float">
                <div class="form-line">
                  <input type="password" class="form-control" name ="Password" id ="Password" />
                  <label class="form-label">Password</label>
                </div>
              </div>
              <div>
                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan" />
                <label for="rememberme">Remember Me</label>
              </div>
            
            <div class="col-lg-12">
              <button class="btn btn-raised btn-primary waves-effect" name="sign-in" type ="submit">SIGN IN</button>
              <button class="btn btn-raised btn-default waves-effect" name="sign-up" type ="submit">SIGN UP</button>
            </div>
            <div class="col-lg-12 m-t-20">
               <a class="" href="forgot-password.html">Forgot Password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
  </body>
</html>

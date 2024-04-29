<!doctype html>
<html class="no-js " lang="en">
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
                        <div class="logo"><img src="assets/images/logo.png" alt="Nexa"></div>
                        <h1>Indoapril</h1>
                        <ul class="list-unstyled l-social">
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>                            
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>                        
                </div>
                <form class="col-lg-12" id="sign_in" method="POST" action="sign-updata.php">
                    <h6 class="title">Register a new account</h6>
                    <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="fullname" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="address" class="form-control" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="telephone" class="form-control" placeholder="No.Telp">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    <div>
                         <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>                        
                <div class="col-lg-12">                        
                    <button type="submit" class="btn btn-raised btn-primary waves-effect">SIGN UP</button>                        
                </div>                
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>
</html>

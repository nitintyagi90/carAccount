<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>global/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>global/plugins/Waves/dist/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>icons_fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>pages/login/css/user_login_v2.css">
    <link rel="icon" href="<?php echo base_url('assets/');?>global/images/favicon.png" type="image/x-icon"/>
</head>
<body >

  
<div class="login-background">
<section class="carousel-default">

    <div id="carousel-default" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-default" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-default" data-slide-to="1" class=""></li>
        <li data-target="#carousel-default" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- NOTE: Bootstrap v4 changes class name to carousel-item -->
        <div class="item active">
          <img src="http://localhost/carAccount/assets/pages/login/images/banner2.jpg" alt="First slide">
          
        </div>
        <div class="item">
          <img src="http://localhost/carAccount/assets/pages/login/images/banner1.jfif" alt="Second slide">
          
        </div>
        <div class="item">
          <img src="http://localhost/carAccount/assets/pages/login/images/bgimage2.jpg" alt="Third slide">
         
        </div>
      </div>
    </div>
 

    <div class="login-left-section">
        <img src="http://localhost/carAccount/assets/global/images/logo.png" alt="logo-image" style="height: auto; width: 25%;">
        <h2>Welcome to the My Car Account</h2>
        <p>Here you can sell or buy your car.</p>
    </div>
    <div class="login-page">
        <div class="main-login-contain">
            <div class="login-form">
                 <form id="form-validation" action="http://localhost/carAccount/auth/login" method="post">
                   <div class="row" style="rgba(228, 233, 239, 0.76) !important">
                    <div class="login-head ">
                       <h3 style="color:red">Login to your account</h3>
                       <p class="login-title-text" style="color:red">Start sell or buy your car</p></div></div>
                    <div class="form-group" style="padding-top:40px">
                        <input placeholder="Enter Mobile Number" required="required" name="phone" type="text" id="input-email" style="height:40px;">
                        <!--<label class="control-label" for="input-email">Enter Mobile Number</label>--><!--i class="bar"></i>-->
                    </div>
                    <div class="form-group" style="padding-top:20px">
                        <input placeholder="Enter Password" required="required" name="password" type="password" id="input-password" style="height:40px;">
                       <!-- <label class="control-label" for="input-password">Enter Password</label>--><!--i class="bar"></i>-->
                    </div>
                    <div class="panel-footer" style="background-color: rgba(228, 233, 239, 0.76) !important; border: 1px solid rgba(0, 0, 0, 0.2); padding-top: 10px; padding-bottom: 10px;    margin-left: -35px; margin-right: -41px; border-radius: 0px; align-item:center;">
                               <!-- <button type="submit"  class="btn btn-border btn-primary btn-center">LogIn</button>-->
                        <div class="goto-login">
                           <button type="submit" class="btn btn-login float-button-light waves-effect waves-button waves-float waves-light">LogIn</button>
                        </div>
                   </div>
                   </div>
        </div>
                </form>
           
                 </div>
       </div>
    </div>
                                                
      </section>  
</div>





<script src="<?php echo base_url('assets/');?>global/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url('assets/');?>global/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/');?>global/plugins/Waves/dist/waves.min.js"></script>
<!-- END CORE JAVASCRIPT -->

<!-- START PAGE JAVASCRIPT -->
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }

    !(function ($) {
        if (typeof Waves !== 'undefined') {
            Waves.attach('.float-button-light', ['waves-button', 'waves-float', 'waves-light']);
            Waves.init();
        }
    })(jQuery);
</script>
<!-- END PAGE JAVASCRIPT -->

</body>
</html>
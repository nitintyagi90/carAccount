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
<body>

<div class="login-background">
    <div class="login-left-section">
        <img src="<?php echo base_url('assets/');?>global/images/logo.png" alt="logo-image" style="height: auto; width: 25%;">
        <h2>Welcome to the My Car Account</h2>
        <p>Here you can sell or buy your car.</p>
    </div>
    <div class="login-page">
        <div class="main-login-contain">
            <div class="login-form">
                <?php echo validation_errors('<div class="alert alert-danger" role="alert">','</div>'); ?>
                <?php if(!empty($errors)) {
                    echo $errors;
                } ?>
                <form id="form-validation" action="<?php echo base_url('auth/login') ?>" method="post">
                   <div class="text-center heading" style="width:100%;height:30%;">
                   <h4 >Login to your account</h4>
                   <p class="login-title-text">Start sell or buy your car</p>
                   </div> 
                    
                    <div class="form-group">
                        <input required="required" name="phone" type="text" id="input-email">
                        <label class="control-label" for="input-email">Enter Mobile Number</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input required="required" name="password" type="password" id="input-password">
                        <label class="control-label" for="input-password">Enter Password</label><i class="bar"></i>
                    </div>

                    <div class="text-center " >
                        <button type="submit" class="btn btn-danger">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
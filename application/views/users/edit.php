<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Edit User</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Edit User</li>
        </ol>
    </div>
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php elseif($this->session->flashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <?php if(validation_errors()){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>
    <div class="contain-section">
        <div class="contain-inner-section">
            <form role="form" action="<?php base_url('users/edit') ?>" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h2 class="header-text">Select Group</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <!-- <label class="formLabel">Upload Delivery Note</label> -->
                            <select class="form-style" name="groups">
                                <?php foreach ($group_data as $k => $v): ?>
                                    <option value="<?php echo $v['id'] ?>" <?php if($user_group['id'] == $v['id']) { echo 'selected'; } ?> ><?php echo $v['group_name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h2 class="header-text">User Details</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <p class="formLabel">Name</p>
                            <input type="text" name="username" value="<?php echo $user_data['user_name'] ?>" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <p class="formLabel">Mobile No.</p>
                            <input type="text" name="phone"  value="<?php echo $user_data['user_mobile'] ?>" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <p class="formLabel">Company Name</p>
                            <input type="text" name="companyName"  value="<?php echo $user_data['user_company'] ?>" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <p class="formLabel">Email Id</p>
                            <input type="text" name="email" value="<?php echo $user_data['user_email'] ?>" class="form-style" autocomplete="off" />
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">

                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Leave the password field empty if you don't want to change.
                        </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">

                        <div class="form-item">
                            <p class="formLabel">Password</p>
                            <input type="text" name="password" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <p class="formLabel">Confirm Password</p>
                            <input type="text" name="cpassword" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

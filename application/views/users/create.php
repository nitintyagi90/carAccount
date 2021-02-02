<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Add User</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Add User</li>
        </ol>
    </div>

    <div class="contain-section">
        <div class="contain-inner-section">
            <?php if($this->session->flashdata('errors')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php } ?>
            <form role="form" action="<?php base_url('users/create') ?>" method="post">
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
                                    <option value="<?php echo $v['id'] ?>"><?php echo $v['group_name'] ?></option>
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
                            <input type="text" name="username" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <p class="formLabel">Mobile No.</p>
                            <input type="text" name="phone" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <p class="formLabel">Company Name</p>
                            <input type="text" name="companyName" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <p class="formLabel">Email Id</p>
                            <input type="text" name="email" class="form-style" autocomplete="off" />
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

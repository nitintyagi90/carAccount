<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid right_color">


    <div class="contain-inner-section">
        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Information</h3>
            </div>
            <!-- /.card-header -->
            <form role="form" action="<?php base_url('users/setting') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <?php echo validation_errors(); ?>


                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $user_data['user_name'] ?>" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user_data['user_email'] ?>" autocomplete="off">
                    </div>


                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $user_data['user_mobile'] ?>" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="phone">Profile Image</label>
                        <input type="file" class="form-control" id="user_profile" name="user_profile">
                    </div>

                    <div class="form-group">
                        <div class="alert alert-info alert-dismissible" role="alert">
                            Leave the password field empty if you don't want to change.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="cpassword">Confirm password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="<?php echo base_url('users/profile') ?>" class="btn btn-warning">Back</a>
                </div>
            </form>
        </div>

    </div>
</div>

</div>
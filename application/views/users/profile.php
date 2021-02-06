<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Profile</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-body">
            <a href="<?php echo base_url('users/setting');?>" class="btn btn-block btn-primary">Edit Profile</a>
        </div>
    </div>
        <div class="contain-inner-section">
            <?php if($this->session->flashdata('errors')){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php } ?>
            <div class="card-body">
                <table class="table table-bordered table-condensed table-hovered">
                    <tr>
                        <th>Username</th>
                        <td><?php echo $user_data['user_name']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $user_data['user_email']; ?></td>
                    </tr>

                    <tr>
                        <th>Phone</th>
                        <td><?php echo $user_data['user_mobile']; ?></td>
                    </tr>
                    <tr>
                        <th>Group</th>
                        <td><span class="label label-info"><?php echo $user_group['group_name']; ?></span></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

</div>
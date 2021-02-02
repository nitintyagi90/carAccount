<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">User List</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">User List</li>
        </ol>
    </div>

    <div class="contain-section">
        <div class="contain-inner-section">
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
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-body">

                        <table id="datatable-zero" class="display datatable-default">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile No.</th>
                                <th>Company Name</th>
                                <th>Email Id</th>
                                <th>Group</th>
                                <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                                <th>Action</th>
                                <?php endif; ?>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if($user_data): ?>
                                <?php foreach ($user_data as $k => $v): ?>
                                    <tr>
                                        <td><?php echo $v['user_info']['user_name']; ?></td>
                                        <td><?php echo $v['user_info']['user_mobile']; ?></td>
                                        <td><?php echo $v['user_info']['user_company']; ?></td>
                                        <td><?php echo $v['user_info']['user_email']; ?></td>
                                        <td><?php echo $v['user_group']['group_name']; ?></td>

                                        <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>

                                            <td>
                                                <?php if(in_array('updateUser', $user_permission)): ?>
                                                    <a href="<?php echo base_url('users/edit/'.$v['user_info']['user_id']) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <?php endif; ?>
                                                <?php if(in_array('deleteUser', $user_permission)): ?>
                                                    <a href="<?php echo base_url('users/delete/'.$this->atri->en($v['user_info']['user_id'])) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif; ?>
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

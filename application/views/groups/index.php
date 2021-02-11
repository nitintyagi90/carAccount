<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Group List</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Group List</li>
        </ol>
    </div>

    <div class="contain-section">
        <div class="contain-inner-section">

            <div class="row">
                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>

                <?php elseif($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-body">

                        <table id="datatable-zero" class="table display datatable-default">
                            <thead>
                            <tr>
                                <th>Group Name</th>
                                <?php if(in_array('updateGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                                <th>Action</th>
                                <?php endif; ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if($groups_data): ?>
                                <?php foreach ($groups_data as $k => $v): ?>
                                    <tr>
                                        <td><?php echo $v['group_name']; ?></td>

                                        <?php if(in_array('updateGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                                            <td>
                                                <?php if(in_array('updateGroup', $user_permission)): ?>
                                                    <a href="<?php echo base_url('groups/edit/'.$v['id']) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <?php endif; ?>
                                                <?php if(in_array('deleteGroup', $user_permission)): ?>
                                                    <a href="<?php echo base_url('groups/delete/'.$this->atri->en($v['id'])) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

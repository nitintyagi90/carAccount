<!-- End top navigation -->
    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Refurbishment Car</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Refurbishment Car</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-body">
                        <?php if($this->session->flashdata('success')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>

                        <?php elseif($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('errors')){ ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php } ?>
                            <table id="datatable-zero" class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>Reg. No.</th>
                                    <th>Model</th>
                                    <th>Sub Model</th>
                                    <th>Color</th>
                                    <th>Insurance</th>
                                    <th>Validity</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            <?php foreach($ref_list_data as $refList){?>
                                <tr>
                                    <td><?php echo $refList->registration_no;?></td>
                                    <td><?php echo $refList->model;?></td>
                                    <td><?php echo $refList->sub_model;?></td>
                                    <td><?php echo $refList->color;?></td>
                                    <td><img src="<?php echo $refList->insurance_image?>" alt="Girl in a jacket" width="500" height="600"></td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <!-- <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a> -->
                                        <a href="<?= site_url('delete-banner/'.$refList->id.'');?> " class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Contain Section -->    

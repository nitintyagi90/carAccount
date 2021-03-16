<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title --> 
        <h2 class="page-name-title">Purchase Car</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Purchase Car</li>
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

                        <table id="datatable-zero" class="display datatable-default">
                            <thead>
                            <tr>
                                <th>Reg. No.</th>
                                <th>Model</th>
                                <th>Sub Model</th>
                                <th>Color</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if($purchase_list): ?>
                                <?php foreach ($purchase_list as $k => $v): ?>
                                    <tr>
                                        <td><?php echo $v->registration_no ?></td>
                                        <td><?php echo $v->car_brand ?></td>
                                        <td><?php echo $v->car_model ?></td>
                                        <td><?php echo $v->car_color ?></td>

                                        <td>
                                            <a href="<?php echo base_url('purchase/manage/')?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url('purchase/manage/'.$this->atri->en($v->purchase_id))?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                            <a href="<?php echo base_url('purchase/detail/'.$this->atri->en($v->purchase_id)) ?>" class="btn btn-warning btn-xs"><i class="fa fa-external-link"></i></a>
                                        </td>
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

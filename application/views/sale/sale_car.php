<!-- End top navigation -->
    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Sale Car</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Sale Car</li>
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
                                <?php $i=0; foreach($carSale_data as $arr){
                                 
                                    $regNo = $this->model_sale->getRegNo($arr->registration_no);
                                  
                                    ?>
                                <tr>
                                    <td><?php echo $regNo[$i]->registration_no;?></td>
                                    <td><?php echo $arr->model;?></td>
                                    <td><?php echo $arr->sub_model;?></td>
                                    <td><?php echo $arr->color;?></td>
                                    <td><?php echo $arr->insurance_cost;?></td>
                                    <td><?php echo $arr->purchase_date;?></td>
                                    <td>
                                        <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="<?= site_url('delete-selCar/'.$arr->id.'');?> " class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++;}?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Contain Section -->    

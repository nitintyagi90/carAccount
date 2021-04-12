    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Refurbishment Entry</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Refurbishment Entry</li>
            </ol>
        </div>
     
        <div class="contain-section">
            <div class="contain-inner-section">
                <form action="<?php echo base_url();?>refurbishment/save_refurbishment" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Dealer Details</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                            <select class="form-style js-example-basic-single dealer" name="dealer_id" id="dealer_id" required>
                                <option value="0">Search Dealer Mobile</option>
                                <?php foreach ($user_list as $dealer){ ?>
                                    <option value="<?php echo $dealer->user_id ?>"><?php echo $dealer->user_mobile ?></option>
                                <?php }?>
                            </select>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel dealer_name_lebel">Dealer Name</p>
                                <input  class="form-style dealer_name" required name="dealer_name" id="dealer_name" type="text" readonly>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel dealer_comapny_lebel">Dealer Company</p>
                                <input type="text" id="dealer_company" name="dealer_company"  class="form-style dealer_company" autocomplete="off" readonly/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel user_location_label">Dealer Location</p>
                                <input type="text" id="location_dealer"  name="location_dealer"  class="form-style user_location" autocomplete="off" readonly/>
                            </div>
                        </div>
                        <div class="reb_entry" style="display: none">


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-header">
                                        <h2 class="header-text">Refurbishment & Accessories Cost</h2>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">

                                        <select class="form-style js-example-basic-single select_reg" name="registration_no" id="registration_no" required>
                                            <option value="0">Search Registration No.</option>
                                            <?php foreach ($registration_no as $data){ ?>
                                                <option value="<?php echo $data->purchase_id ?>"><?php echo $data->registration_no ?></option>
                                            <?php }?>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel make">Make</p>
                                        <input type="text"  id="make" id="make" name="make" class="form-style" autocomplete="off" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel model">Model</p>
                                        <input type="text"  id="model" name="model" class="form-style" autocomplete="off" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel submodel">Sub Model</p>
                                        <input type="text"  id="submodel" name="submodel" class="form-style" autocomplete="off" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel color">Color</p>
                                        <input type="text"  id="color" name="color" class="form-style" autocomplete="off" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel purchase_date"  style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Purchase Date</p>
                                        <input type="text"  id="purchase_date" name="purchase_date" class="form-style" autocomplete="off" readonly/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel total_purchase_price_accso_cast">Total Purchase Price</p>
                                        <input type="text"  id="total_purchase_price_accso_cast" name="total_purchase_price_accso_cast" class="form-style" autocomplete="off" readonly/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                            <div class="form-item">
                                                <input type="submit" name="submit" class="btn btn-success btn-block" value="Ready to Sell">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                      <!--</form>-->

                <!--<form>-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Refurbishment Details</h2>
                            </div>
                        </div>
                    </div>

                    <div class="multi-field-wrapper">
                        <div class="multi-fields addition">
                            <div class="row multi-field" id="row">
                                <div class="col-md-12">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <!-- <label class="formLabel">Upload Delivery Note</label> -->

                                            <select class="form-style js-example-basic-single select_reg" id="Refurbishment_details_registration_no" name="Refurbishment_details_registration_no[]" required>
                                                <option>Repairing Details</option>
                                                <?php foreach ($repaier as $data){ ?>
                                                    <option value="<?php echo $data->name ?>"><?php echo $data->name ?></option>
                                                <?php }?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Job Date</p>
                                            <input type="date" id="job_date" name="ref_details_job_date[]" class="form-style" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <p class="formLabel">Bill No.</p>
                                            <input type="text" id="ref_details_bill_no" name="ref_details_bill_no[]" class="form-style" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <p class="formLabel">Amount</p>
                                            <input type="text" id="ref_details_amount" name="ref_details_amount[]" class="form-style price my-amount" autocomplete="off" />
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 pull-right">
                        <button type="button" class="btn btn-success add-field" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <!-- <p class="formLabel">Amount</p> -->
                            <input type="file" id="img1" name="files[]" class="form-style" autocomplete="off" />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 pull-right" >
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Other Expense</h2>
                            </div>
                        </div>
                    </div>
                    <div class="expenses">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Details</p>
                                    <input type="text" name="ref_other_exp_details[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Job Date</p>
                                    <input type="date" name="ref_other_exp_jobDate[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Bill No.</p>
                                    <input type="text" name="ref_other_exp_bill_no[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Amount</p>
                                    <input type="text" name="ref_other_exp_amount[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Amount</p> -->
                                    <input type="file" name="ref_other_exp_files[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 pull-right">
                                <button type="button" class="btn btn-success fields-expenses" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Total Refurbishment Cost 1111</p>
                                <input type="text" id="ref_other_exp_totalRefur_cost" name="ref_other_exp_totalRefur_cost" class="form-style total_ref_cost" autocomplete="off" />
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Amount</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Car Accessories Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Address</p> -->

                                <select class="form-style js-example-basic-single select_reg" name="acces_details_registration_no[]" required>
                                    <option>Accessories Details</option>
                                    <?php foreach ($accessories as $data){ ?>
                                        <option value="<?php echo $data->name ?>"><?php echo $data->name ?></option>
                                    <?php }?>
                                </select>

                            </div>
                        </div>
                        <div class="accessiores car-addition">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Purchase Date</p>
                                    <input type="date" name="acces_details_perches_date[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Bill No.</p>
                                    <input type="text" name="acces_details_bill_no[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Amount</p>
                                    <input type="text" name="acces_details_amount[]" class="form-style car-amount" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Amount</p> -->
                                    <input type="file" name="acces_details_files[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 pull-right">
                                <button type="button" class="btn btn-success add-accessiores" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Other Expense</h2>
                            </div>
                        </div>
                    </div>
                    <div class="other-expenses">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Details</p>
                                    <input type="text" name="car_accessories_other_details[] " class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel"  style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Purchase Date</p>
                                    <input type="date" name="car_accessories_other_perches_date[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Bill No.</p>
                                    <input type="text" name="car_accessories_other_bill[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Amount</p>
                                    <input type="text" name="car_accessories_other_amount[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Amount</p> -->
                                    <input type="file" name="acces_acc_other_files[]" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 pull-right">
                                <button type="button" class="btn btn-success add_other_expenses" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Total Accessories Cost222</p>
                                <input type="text" id ="car_accessories_total_accs_cost" name="car_accessories_total_accs_cost" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Amount</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div> -->
                    </div>
        <!------------------sandeep sharma------------------>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Total Vehicle Cost</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                            <label class="mt-20">Total Purchase Price</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <input type="text" id="total_purchase_price" name="total_purchase_price" class="form-style" autocomplete="off" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                            <label class="mt-20">Total Refurbishment Cost</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Total Car Accessories Cost</p> -->
                                <input type="text" name="total_cost_ref" class="form-style" autocomplete="off" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                            <label class="mt-20">Total Car Accessories Cost</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Total Warranty Cost</p> -->
                                <input type="text"  name="total_car_acc_ref" class="form-style" autocomplete="off" readonly/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                            <label class="mt-20">Total Vehicle Cost</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Total Cost</p> -->
                                <input type="text" name="total_vic_ref" class="form-style" autocomplete="off" readonly/>
                            </div>
                        </div>
                    </div>

                    <!-----------Total Cost Add By Sandeep------------------------------------------>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                            <label class="mt-20">Total Cost</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Total Cost</p> -->
                                <input type="text" id="total_add_cost" name="total_add_cost" class="form-style" autocomplete="off" readonly/>
                            </div>
                        </div>
                    </div>
                    <!-----------End----------------------------------------------------------------->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                <input type="submit" name="submit" class="btn btn-success btn-block" value="Save">
                                </div>
                                <!-- <button type="button" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Submit</button> -->
                            </div>
                        </div>

                    </div>
                    <!-------sandeep sharma----->
                </form>

            </div>
        </div>

        </div>
        </div>
        </div>


    <?php include('js.php');?>
    <!-- End Contain Section -->    

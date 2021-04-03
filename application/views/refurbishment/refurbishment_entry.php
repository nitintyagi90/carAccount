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
                <form accept="<?php base_url('purchase/create') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Dealer Details</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                            <select class="form-style js-example-basic-single dealer" name="dealer_id" required>
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
                                <input disabled="" class="form-style dealer_name" required name="dealer_name" type="text">

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel dealer_comapny_lebel">Dealer Company</p>
                                <input type="text" name="dealer_company" disabled="" class="form-style dealer_company" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel user_location_label">Dealer Location</p>
                                <input type="text"  name="location_dealer" disabled="" class="form-style user_location" autocomplete="off" />
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

                                        <select class="form-style js-example-basic-single select_reg" name="registration_no" required>
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
                                        <input type="text" disabled="" id="make" name="make" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel model">Model</p>
                                        <input type="text" disabled="" id="model" name="model" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel submodel">Sub Model</p>
                                        <input type="text" disabled="" id="submodel" name="submodel" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel color">Color</p>
                                        <input type="text" disabled="" id="color" name="color" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel purchase_date"  style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Purchase Date</p>
                                        <input type="date" disabled="" id="purchase_date" name="purchase_date" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel total_purchase_price">Total Purchase Price</p>
                                        <input type="text" disabled="" id="total_purchase_price" name="total_purchase_price" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                            <div class="form-item">
                                                <button type="submit" class="btn btn-success btn-block">Ready to Sell</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                      </form>

                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Refurbishment Details</h2>
                            </div>
                        </div>
                    </div>

                    <div class="multi-field-wrapper">
                        <div class="multi-fields">
                            <div class="row multi-field" id="row">
                                <div class="col-md-12">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <!-- <label class="formLabel">Upload Delivery Note</label> -->

                                            <select class="form-style js-example-basic-single select_reg" name="registration_no" required>
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
                                            <input type="date" name="text" class="form-style" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <p class="formLabel">Bill No.</p>
                                            <input type="text" name="text" class="form-style" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <p class="formLabel">Amount</p>
                                            <input type="text" name="text" class="form-style" autocomplete="off" />
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
                            <input type="file" name="text" class="form-style" autocomplete="off" />
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
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Job Date</p>
                                    <input type="date" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Bill No.</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Amount</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Amount</p> -->
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
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
                                <p class="formLabel">Total Refurbishment Cost</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
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

                                <select class="form-style js-example-basic-single select_reg" name="registration_no" required>
                                    <option>Accessories Details</option>
                                    <?php foreach ($accessories as $data){ ?>
                                        <option value="<?php echo $data->name ?>"><?php echo $data->name ?></option>
                                    <?php }?>
                                </select>

                            </div>
                        </div>
                        <div class="accessiores">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Purchase Date</p>
                                    <input type="date" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Bill No.</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Amount</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Amount</p> -->
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
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
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel"  style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Purchase Date</p>
                                    <input type="date" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Bill No.</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Amount</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Amount</p> -->
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
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
                                <p class="formLabel">Total Accessories Cost</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
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
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
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
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
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
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
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
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <button type="submit" class="btn btn-success btn-block">Save</button>
                                </div>
                                <!-- <button type="button" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Submit</button> -->
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>

        </div>
        </div>
        </div>


    <?php include('js.php');?>
    <!-- End Contain Section -->    

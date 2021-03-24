    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Warranty</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Warranty</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">
                <form accept="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Dealer Details</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Address</p> -->
                                <!-- <select class="form-style js-example-basic-single">
                                    <option>Dealer Mobile No.</option>
                                    <option>1586587558</option>
                                    <option>9857854852</option>
                                </select> -->
                                <select class="form-style js-example-basic-single dealer"  name="dealer_id" required>
                                    <option  value="0" selected disabled hidden>Dealer Mobile No.</option>
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Warranty Details</h2>
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
                                <p class="formLabel">Purchase Date</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pull-right">
                            <div class="form-item">
                                <p class="formLabel">Total Purchase Price</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Warranty Details</h2>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Warranty</option>
                                    <option>1 Year</option>
                                    <option>6 Months</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Warranty Date</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Invoice No.</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Amount</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="page-heading">Payment Detail</label>
                    </div>
                    <div class="row">    
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Mode of Payment</option>
                                    <option>Cash</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel"style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Date</p>
                                <input type="date" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Detail</p>
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
                                <input type="file" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 pull-right">
                            <button type="button" class="btn btn-success" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                            <button type="button" class="btn btn-primary" style="margin-top: 12px;"><i class="fa fa-download"> Receipt</i> </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Mode Of Payment (Warranty)</h2>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">In the Name of</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style">
                                    <option>Bank Name</option>
                                    <option>Punjab National Bank</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">A/C no.</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">IFSC</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="page-heading">Payment Detail</label>
                    </div>
                    <div class="row">    
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style">
                                    <option>Mode of Payment</option>
                                    <option>Cash</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel"style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Date</p>
                                <input type="date" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Detail</p>
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
                                <input type="file" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 pull-right">
                            <button type="button" class="btn btn-success" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- End Contain Section -->    
    <?php include('js.php');?>
 
    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Invoice Entry</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Invoice Entry</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">
                <form accept= "<?php base_url('purchase/create') ?>" method="post"  enctype="multipart/form-data">
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
                                <h2 class="header-text">Invoice Entry Details</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Reg. No.</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            -->
                            <select class="form-style js-example-basic-single select_reg" name="registration_no" required>
                                            <option value="0">Search Registration No.</option>
                                            <?php foreach ($registration_no as $data){ ?>
                                                <option value="<?php echo $data->purchase_id ?>"><?php echo $data->registration_no ?></option>
                                            <?php }?>
                                        </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Invoice Date</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Time</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel make formTop">Make</p>
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
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Sale Details</h2>
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style">
                                    <option>Select One</option>
                                    <option>Customer</option>
                                    <option>Dealer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Name</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mobile</p>
                                <input type="number" name="text" class="form-style" autocomplete="off"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10"/>
                            
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Email ID</p>
                                <input type="email" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">PAN Number</p>
                                <input type="text" name="" class="form-style" autocomplete="off" maxlength="10"style="text-transform:uppercase;"  />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style">
                                    <option>Select Relation</option>
                                    <option>S/O</option>
                                    <option>W/O</option>
                                    <option>D/O</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">DOB</p>
                                <input type="text" name="" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Adhar Number</p>
                                <input type="number" name="text" class="form-style" autocomplete="off"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "12"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Nominee</p>
                                <input type="text" name="" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-item">
                                <p class="formLabel">Address</p>
                                <textarea class="form-style" autocomplete="off" rows="4" style="height: auto;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Address</p> -->
                                    <select class="form-style js-example-basic-single state1" name="rc_state" required>
                                            <option value="" selected disabled hidden>--Select State--</option>
                                            <?php foreach ($states as $list){ ?>
                                                <option data-id="<?php echo $list->id ?>" value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                            <?php  }?>
                                        </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Address</p> -->
                                    <select name="rc_city" class="form-style js-example-basic-single citydata2" required>
                                            <option value="" selected disabled hidden>--Select City--</option>
                                        </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Landmark</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Pincode</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Taxes & Charges Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Charges</th>
                                        <th>Value</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>SGST9</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>CGST9</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>RTO Expenses</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Insurance Expenses</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Warranty Expenses</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>SGST6</td>
                                        <td>6</td>
                                        <td>4392.84</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>CGST6</td>
                                        <td>6</td>
                                        <td>4392.84</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>TCS 0.75%</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Total Cost</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Sale Price</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">R.T.O. Cost</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Insurance Cost</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Warranty Cost</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Invoice Price</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Negotiated Cost</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Taxs/Charges</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Total Amount</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Received Amount</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                    <label class="mt-20">Balance Amount</label>
                                </div>
                                <div class="col-md-7 col-lg-7 col-sm-8 col-xs-8">
                                    <div class="form-item">
                                        <input type="text" name="text" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
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
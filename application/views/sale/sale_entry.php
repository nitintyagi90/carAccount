    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Sale Entry</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Sale Entry</li>
            </ol>
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <form accept="<?php base_url('purchase/create') ?>" method="post"  enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Dealer Details</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Address</p> -->
                                <select class="form-style js-example-basic-single dealer"  name="dealer_id" required>
                                    <option  value="0" selected disabled hidden>Dealer Mobile No.</option>
                                    <?php foreach ($user_list as $dealer){ ?>
                                    <option value="<?php echo $dealer->user_id ?>"><?php echo $dealer->user_mobile ?></option>
                                <?php }?>
                                    
                                   <!-- <option>1586587558</option>
                                    <option>9857854852</option>-->
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Sale Entry Details</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                       <select class="form-style js-example-basic-single select_reg" name="registration_no" required>
                                            <option value="0">Search Registration No.</option>
                                            <?php foreach ($registration_no as $data){ ?>
                                                <option value="<?php echo $data->purchase_id ?>"><?php echo $data->registration_no ?></option>
                                            <?php }?>
                                        </select>
                                <!-- <p class="formLabel">Reg. No</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />-->
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
                                        <p class="formLabel purchase_date">Purchase Date</p>
                                        <input type="text" disabled="" id="purchase_date" name="purchase_date" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel purchase_price">Total Purchase Price</p>
                                        <input type="text" disabled="" id="purchase_price" name="purchase_price" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                           
                               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                   <div class="form-item">
                                        <p class="formLabel">Total Vehicle Cost</p>
                                       <input type="text" name="text" class="form-style" autocomplete="off" />
                                   </div>
                              </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel purchase_commission">Sale Comission</p>
                                <input type="text" disabled="" name="purchase_commission"  id="purchase_commission" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Total Cost</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Sale Price</p>
                                <input type="text" name="text" class="date form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">R.T.O. Cost</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Insurance Cost</p>
                                <input type="text" name="text" class="date form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Warranty Cost</p>
                                <input type="text" name="text" class="time form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Invoice Price</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
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
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Customer</option>
                                    <option>Dealer/Third Party Name</option>
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
                                
                                <input type="text" name="text" class="form-style" autocomplete="off"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10"/>
                            
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
                                <input type="text" name="" class="form-style" autocomplete="off" maxlength="10"style="text-transform:uppercase;" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Address</p> -->
                                <select class="form-style">
                                    <option>Relation</option>
                                    <option>S/O</option>
                                    <option>W/O</option>
                                    <option>D/O</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel"style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">DOB</p>
                                <input type="date" name="" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">AAdhar Number</p>
                                <input type="text" name="" class="form-style" autocomplete="off"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "12" />
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
                                    <!-- <select class="form-style">
                                        <option>Select State</option>
                                    </select> -->
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
                                        </select> <!-- <select class="form-style">
                                        <option>Select City</option>
                                    </select> -->
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
                                    <input type="number" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">GST No.</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="page-heading">KYC</label>
                        <div class="row" style="margin-left: 0px; margin-right: 0">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label>Pan Upload</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label>Address Proof Upload 1</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label>Address Proof Upload 2</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
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
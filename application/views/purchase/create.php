<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Purchase Entry</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Purchase Entry</li>
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
                            <select class="form-style js-example-basic-single dealer" required>
                                <option>Dealer Mobile No.</option>
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
                            <p class="formLabel">Dealer Location</p>
                            <input type="text"  name="username" disabled="" class="form-style" autocomplete="off" />
                        </div>
                    </div>
                </div>

                <div class="purchase_entry" style="display: none">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">RC Details</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Reg. No</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">RC Name</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mobile</p>
                                <input type="number" name="number" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Email ID</p>
                                <input type="email" name="email" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Pan Number</p>
                                <input type="text" name="" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row" style="padding: 0 15px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Address</p>
                                    <textarea class="form-style" autocomplete="off" rows="5" style="height: auto;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <!-- <p class="formLabel">Address</p> -->
                                        <select class="form-style">
                                            <option>Select State</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <!-- <p class="formLabel">Address</p> -->
                                        <select class="form-style">
                                            <option>Select City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel">Landmark</p>
                                        <input type="text" name="username" class="form-style" autocomplete="off" />
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
                        <div class="col-md-4" style="padding:0;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload RC</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Insurance</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Bank NOC</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Pan Card</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding: 113px 0; margin-top: 35px; border: 1px solid #97a3a2;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Car Photo F With Number Palet</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding:0;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Address Proof 1</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Address Proof 2</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Sell Letter</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Delivery Note</label>
                                    <input type="file" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Vehicle Details</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Make</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Model</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Sub Model</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <?php foreach ($color_list as $color){ ?>
                                        <option>--Select Color--</option>
                                        <option value="<?php echo $color->name ?>"><?php echo $color->name ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Chassis No</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Engine No</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Manuf. Year</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mileage</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">

                                <select class="form-style">
                                    <option>--Select Fuel Type--</option>
                                    <?php foreach ($fuel_list as $fuel){ ?>
                                        <option value="<?php echo $fuel->name ?>"><?php echo $fuel->name ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Owner Serial No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style">
                                    <option>--Select Transmission--</option>
                                    <?php foreach ($transmission_list as $transmission){ ?>
                                        <option value="<?php echo $transmission->name ?>"><?php echo $transmission->name ?></option>
                                    <?php  }?>
                                </select>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style">
                                    <option>--Select Emission--</option>
                                    <?php foreach ($emission_list as $emission){ ?>
                                        <option value="<?php echo $emission->name ?>"><?php echo $emission->name ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Registration Date</p>
                                <input type="text" name="text" class="form-style" value="0" data-beatpicker="true" data-beatpicker-position="[10,50]" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">RC Expiry Date</p>
                                <input type="text" name="text" class="form-style" value="0" data-beatpicker="true" data-beatpicker-position="[10,50]" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Cubic Capacity</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Purchase Date</p>
                                <input type="text" name="text" class="form-style" value="0" data-beatpicker="true" data-beatpicker-position="[10,50]" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Time</p>
                                <input type="text" name="text" class="time form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Purchase Price</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Commission</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Total Purchase Price</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Finance, Insurance & Warranty Details</h2>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 0">
                            <label class="page-heading">Finance</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Car Financed</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Financer</option>
                                    <option value="Bajaj aliance">Bajaj aliance</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Loan Account No.</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Bank NOC Received</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 0">
                            <label class="page-heading">Insurance</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Insurance</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Insurance Type</option>
                                    <option value="">Enter type</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Insurance Company</option>
                                    <option value="Bajaj">Bajaj</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Insurance Expiry Date</p>
                                <input type="text" name="text" class="Date form-style" value="0" data-beatpicker="true" data-beatpicker-position="[10,50]" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'" />
                            </div>
                        </div>
                        <div class="row" style="margin-left: 0">
                            <label class="page-heading">Warranty</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Warranty</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Warranty Upto</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="6 Month">6 Months</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Warranty Expiry Date</p>
                                <input type="text" name="text" value="0" class="form-style" data-beatpicker="true" data-beatpicker-position="[10,50]" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Category</option>
                                    <option value="Certified">Certified</option>
                                    <option value="Non-certified">Non-certified</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Purchase Details</h2>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 0px;">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                    <select class="form-style">
                                        <option>Same</option>
                                        <option>Dealership</option>
                                        <option>Dealer/Third Party Name</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">RC Name</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mobile</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Email ID</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">PAN Number</p>
                                <input type="text" name="" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row" style="padding: 0 15px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Address</p>
                                    <textarea class="form-style" autocomplete="off" rows="5" style="height: auto;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <!-- <p class="formLabel">Address</p> -->
                                        <select class="form-style">
                                            <option>Select State</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <!-- <p class="formLabel">Address</p> -->
                                        <select class="form-style">
                                            <option>Select City</option>
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
                        <div class="row" style="margin-left: 0px;">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">GST No.</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <label class="page-heading">Bank Details</label>
                        <div class="row" style="margin-left: 0px; margin-right: 0">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">In the Name Of</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                    <select class="form-style">
                                        <option>Bank Name</option>
                                        <option>Punjab Namtional Bank</option>
                                        <option>State Bank Of India</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">Account Number</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">IFSC Code</p>
                                    <input type="text" name="text" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
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
                </div>


            </form>
        </div>
    </div>

</div>
<script>
    $('.dealer').change(function() {
        var $this = $(this);
        var user_id = $this.val();
        $.ajax({
            type:"POST",
            url : "<?php echo base_url('purchase/user_detail');?>",
            data: {user_id : user_id},
            success : function(data) {
                var json = $.parseJSON(data);
                if(json.status==200){
                    $('.dealer_comapny_lebel').remove();
                    $('.dealer_name_lebel').remove();
                    var user_company = json.data.user_company;
                    var user_name = json.data.user_name;
                    $('.dealer_name').val(user_name);
                    $('.dealer_company').val(user_company);
                    $('.purchase_entry').show();
                }else{
                    alert('somthing went wrong!')
                }

            }
        });

    });
</script>

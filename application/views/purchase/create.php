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
            <form accept="<?php base_url('purchase/create') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h2 class="header-text">Dealer Details (Select Dealer Mobile Before Purchase Entry)</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="form-item">
                            <select class="form-style js-example-basic-single dealer" name="dealer_id" required>
                                <option value="0">Dealer Mobile No.</option>
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

                <div class="purchase_entry" style="display: none">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">RC Details</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Reg. No*</p>
                                <input type="text" name="registration_no" id="registration_no" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">RC Name</p>
                                <input type="text" name="rc_name" id="rc_name" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mobile</p>
                                <input type="number" name="rc_mobile" id="rc_mobile" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Email ID</p>
                                <input type="email" name="rc_email" id = 'rc_email' class="form-style" autocomplete="off" />
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Pan Number</p>
                                <input type="text" name="rc_pan" id="rc_pan" class="form-style" autocomplete="off" />
                            </div>
                        </div>


                        <div class="row" style="padding: 0 15px;">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">Address</p>
                                    <textarea class="form-style" name="rc_address" id="rc_address" autocomplete="off" rows="5" style="height: auto;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <select class="form-style js-example-basic-single state1" name="rc_state" required>
                                            <option value="0">--Select State--</option>
                                            <?php foreach ($states as $list){ ?>
                                                <option data-id="<?php echo $list->id ?>" value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                            <?php  }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <select name="rc_city" class="form-style js-example-basic-single citydata2">
                                            <option>--Select City--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel">Landmark</p>
                                        <input type="text" name="rc_ladmark" id="rc_landmark" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel">Pincode</p>
                                        <input type="text" name="rc_pincode" id="rc_pincode" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding:0;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload RC</label>
                                    <input type="file" name="rc_image" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Insurance</label>
                                    <input type="file"  name="insurance_image" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Bank NOC</label>
                                    <input type="file" name="bank_noc_image" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Pan Card</label>
                                    <input type="file" name="pan_card_image" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding: 113px 0; margin-top: 35px; border: 1px solid #97a3a2;">

                            <div style="display: none"  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 showupload">

                            <img id="blah" src="#" alt="your image" />
                                <button class="hidePreview">Remove</button>

                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hideupload">
                                <div class="form-item">
                                    <label class="formLabel">Upload Car Photo F With Number Palet</label>
                                    <input type="file" id="imgInp" name="car_image" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding:0;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Address Proof 1</label>
                                    <input type="file" name="add_proof_img1" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Address Proof 2</label>
                                    <input type="file" name="add_proof_img2" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Sell Letter</label>
                                    <input type="file" name="sell_ltr_img" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Delivery Note</label>
                                    <input type="file" name="delivery_note_img" class="form-style" autocomplete="off" />
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
                                <select class="form-style js-example-basic-single brandListss" name="make">
                                    <?php if($models): ?>

                                        <option value="NG" selected="selected">--Select Make--</option>


                                        <?php foreach ($models as $k => $v): ?>
                                            <?php if($v->type=='brand'){ ?>
                                                <option data-id="<?php echo $v->id ?>" value="<?php echo $v->name ?>" ><?php echo $v->name ?></option>

                                            <?php } ?>

                                        <?php endforeach ?>
                                    <?php endif; ?>
                                </select>



                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style js-example-basic-single modelsLists" name="model">
                                    <option value="NG" selected="selected">--Select Model--</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style js-example-basic-single submodeldata" name="submodel">
                                    <option value="NG" selected="selected">--Select Submodel--</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style js-example-basic-single" name="color">
                                    <option>--Select Color--</option>
                                    <?php foreach ($color_list as $color){ ?>
                                        <option value="<?php echo $color->name ?>"><?php echo $color->name ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Chassis No</p>
                                <input type="text" name="chassis_no" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Engine No</p>
                                <input type="text" name="engine_no" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Manuf. Year</p>
                                <input type="text" name="manuf_year" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mileage</p>
                                <input type="text" name="mileage" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">

                                <select class="form-style js-example-basic-single" name="Fuel_type">
                                    <option>--Select Fuel Type--</option>
                                    <?php foreach ($fuel_list as $fuel){ ?>
                                        <option value="<?php echo $fuel->name ?>"><?php echo $fuel->name ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style" name="serial_number">
                                    <option>--Select Owner Serial No--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style js-example-basic-single" name="Transmission">
                                    <option>--Select Transmission--</option>
                                    <?php foreach ($transmission_list as $transmission){ ?>
                                        <option value="<?php echo $transmission->name ?>"><?php echo $transmission->name ?></option>
                                    <?php  }?>
                                </select>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style js-example-basic-single" name="emission">
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
                                <input type="text" name="registration_date" class="form-style current_date" data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">RC Expiry Date</p>
                                <input type="text" name="rc_expiry_date" class="form-style current_date" data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Cubic Capacity</p>
                                <input type="text" name="cubic_capicity" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Purchase Date</p>
                                <input type="text" name="purchase_date"  class="form-style current_date"  data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Time</p>
                                <input type="text" name="purchase_time" class="time form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Purchase Price</p>
                                <input type="text" name="purchase_price" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Commission</p>
                                <input type="text" name="commission" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Total Purchase Price</p>
                                <input type="text" name="total_purchase_price" class="form-style" autocomplete="off" />
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
                                <select class="form-style finance-option">
                                    <option value="0">Car Financed</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>


                        <div class="financedBlock" style="display: none">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">

                                    <select class="form-style js-example-basic-single" name="emission">
                                        <option>--Select Financer--</option>
                                        <?php foreach ($Finance_list as $list){ ?>
                                            <option value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                        <?php  }?>
                                    </select>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Loan Account No.</p>
                                    <input type="text" name="loan_amount" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <select class="form-style" name="bank_noc">
                                        <option>Bank NOC Received</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row" style="margin-left: 0">
                            <label class="page-heading">Insurance</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style insurance-option">
                                    <option value="0">Insurance</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>


                        <div class="insuranceBlock" style="display: none">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <select class="form-style" name="insurance_type">
                                        <option>Insurance Type</option>
                                        <option value="COMPREHENSIVE">COMPREHENSIVE</option>
                                        <option value="THIRD PARTY">THIRD PARTY</option>
                                        <option value="NO INSURANCE">NO INSURANCE</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">

                                    <select class="form-style js-example-basic-single" name="emission">
                                        <option>--Select Insurance Company--</option>
                                        <?php foreach ($Insurance_list as $list){ ?>
                                            <option value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                        <?php  }?>
                                    </select>


                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Insurance Expiry Date</p>
                                    <input type="text" name="insurance_expiry_date" class="Date form-style" value="0" data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="row" style="margin-left: 0">
                            <label class="page-heading">Warranty</label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style warranty-option">
                                    <option value="0">Warranty</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="warrantyBlock" style="display: none">
                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                               <div class="form-item">
                                   <select class="form-style" name="Warranty">
                                       <option>Warranty Upto</option>
                                       <option value="1 Year">1 Year</option>
                                       <option value="6 Month">6 Months</option>
                                   </select>
                               </div>
                           </div>

                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                               <div class="form-item">
                                   <p class="formLabel">Warranty Expiry Date</p>
                                   <input type="text" name="Warranty_exp_date" value="0" class="form-style" data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'" />
                               </div>
                           </div>

                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                               <div class="form-item">
                                   <select class="form-style" name="category">
                                       <option>Category</option>
                                       <option value="Certified">Certified</option>
                                       <option value="Non-certified">Non-certified</option>
                                   </select>
                               </div>
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
                                    <select class="form-style purchase-type">
                                        <option>--Select Purchase Type--</option>
                                        <option value="same">Same</option>
                                        <option value="dealership">Dealership</option>
                                        <option value="third_Party">Third Party Name</option>
                                        <option value="Dealer">Dealer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel purchase_rc">RC Name</p>
                                <input type="text" name="purchase_rc" id="purchase_rc" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel purchase_mobile">Mobile</p>
                                <input type="text" name="purchase_mobile" id="purchase_mobile" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel purchase_email">Email ID</p>
                                <input type="text" name="purchase_email" id="purchase_email" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel purchase_pan">PAN Number</p>
                                <input type="text" name="purchase_pan" id="purchase_pan" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row" style="padding: 0 15px;">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel purchase_address">Address</p>
                                    <textarea class="form-style" name="purchase_address" id="purchase_address" autocomplete="off" rows="5" style="height: auto;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">



                                <div class="p-state-city">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <select class="form-style js-example-basic-single state2" name="purchase_state">

                                                <option>--Select State--</option>
                                                <?php foreach ($states as $list){ ?>
                                                    <option data-id="<?php echo $list->id ?>" value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                                <?php  }?>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <select name="purchase_city" class="form-style js-example-basic-single citydata1">
                                                <option>--Select City--</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-state-city-same" style="display: none">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <select class="form-style js-example-basic-single state2-same" name="purchase_state">

                                                <option>--Select State--</option>
                                                <?php foreach ($states as $list){ ?>
                                                    <option data-id="<?php echo $list->id ?>" value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                                <?php  }?>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <select name="purchase_city" class="form-style js-example-basic-single citydata1-same">

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel purchase_landmark">Landmark</p>
                                        <input type="text" name="purchase_landmark" id="purchase_landmark" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel purchase_pincode">Pincode</p>
                                        <input type="text" name="purchase_pincode" id="purchase_pincode" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 0 15px;">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">GST No.</p>
                                    <input type="text" name="gst" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <label class="page-heading">Bank Details</label>
                        <div class="row" style="margin-left: 0px; margin-right: 0">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">In the Name Of</p>
                                    <input type="text" name="in_the_name_of" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">

                                    <select class="form-style js-example-basic-single" name="emission">
                                        <option>--Select Bank Name--</option>
                                        <?php foreach ($bank_list as $list){ ?>
                                            <option value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                        <?php  }?>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">Account Number</p>
                                    <input type="text" name="account_number" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">IFSC Code</p>
                                    <input type="text" name="ifsc_code" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="kyc">
                            <label class="page-heading">KYC</label>
                            <div class="row" style="margin-left: 0px; margin-right: 0">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <label>Pan Upload</label>
                                        <input type="file" name="kyc_pan_img" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <label>Address Proof Upload 1</label>
                                        <input type="file" name="kyc_Address1_img" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-item">
                                        <label>Address Proof Upload 2</label>
                                        <input type="file" name="kyc_Address2_img" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Submit</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>

</div>

<?php include('js.php');?>

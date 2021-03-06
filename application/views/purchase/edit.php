<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Purchase Entry</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Purchase Entry Edit</li>
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
                                <option value="" selected disabled hidden>Search Dealer Mobile</option>
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
                                <input type="text" name="registration_no"  value="<?php echo $purchase_data['registration_no'];?>" required id="registration_no" class="form-style" autocomplete="off" />
                           
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">RC Name</p>
                                
                                <input type="text" name="rc_name" id="rc_name"value="<?php echo $purchase_data['rc_name'];?>" required class="form-style" autocomplete="off"  />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mobile</p>
                                <input name="rc_mobile" required id="rc_mobile" class="form-style" value="<?php echo $purchase_data['rc_mobile'];?>" autocomplete="off" 
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10"/>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Email ID</p>
                                <input type="email" name="rc_email" value="<?php echo $purchase_data['rc_email'];?>" id = 'rc_email' class="form-style" autocomplete="off" />
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Pan Number</p>
                                <input type="text" name="rc_pan" required minlength="10"  id="rc_pan" class="form-style" autocomplete="off" 
                                value="<?php echo $purchase_data['rc_pan'];?>" maxlength="10"style="text-transform:uppercase;" />
                            </div>
                        </div>


                        <div class="row" style="padding: 0 15panx;">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">Address</p>
                                    <textarea class="form-style" required name="rc_address" id="rc_address" value="" autocomplete="off" rows="4" style="height: auto;"><?php echo $purchase_data['rc_address'];?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <select class="form-style js-example-basic-single state1" name="rc_state" required>
                                            <option value="" selected disabled hidden><?php echo $purchase_data['rc_state'];?></option>
                                            <?php foreach ($states as $list){ ?>
                                                <option data-id="<?php echo $list->id ?>" value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                            <?php  }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <select name="rc_city" class="form-style js-example-basic-single citydata2" required>
                                            <option value="" selected disabled hidden><?php echo $purchase_data['rc_city'];?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel">Landmark</p>
                                        <input type="text" name="rc_ladmark" value="<?php echo $purchase_data['rc_ladmark'];?>" id="rc_landmark" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel">Pincode</p>
                                        <input type="text" name="rc_pincode" value="<?php echo $purchase_data['rc_pincode'];?>" required minlength="6" id="rc_pincode" class="form-style" autocomplete="off" />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding:0;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload RC</label>
                                    <input type="file" name="rc_image"  id="imgInprc" class="form-style" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['rc_image'];?>"  id="rc_image" alt="no image" class="img-rounded">


                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Insurance</label>
                                    <input type="file"  name="insurance_image" class="form-style"   id="imgInpins" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['insurance_image'];?>"  id="insurance_image" alt="no image" class="img-rounded">

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Bank NOC</label>
                                    <input type="file" name="bank_noc_image" class="form-style" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['bank_noc_image'];?>"  id="" alt="no image" class="img-rounded">

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Pan Card</label>
                                    <input type="file" name="pan_card_image" class="form-style" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['pan_card_image'];?>"  id="" alt="no image" class="img-rounded">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 0px; padding: 0;">

        
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="form-item">
                                    <label class="formLabel">Upload Car Photo  With Number Palet</label>
                                    <input type="file" id="imgInp" name="car_image" class="form-style" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['car_image'];?>"  id="" alt="no image" class="img-rounded">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding:0;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Address Proof 1</label>
                                    <input type="file" name="add_proof_img1" class="form-style" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['add_proof_img'];?>"  id="" alt="no image" class="img-rounded">

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Address Proof 2</label>
                                    <input type="file" name="add_proof_img2" class="form-style" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['add_proof_img2'];?>"  id="" alt="no image" class="img-rounded">

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Sell Letter</label>
                                    <input type="file" name="sell_ltr_img" class="form-style" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['sell_ltr_img'];?>"  id="" alt="no image" class="img-rounded">

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label class="formLabel">Upload Delivery Note</label>
                                    <input type="file" name="delivery_note_img" class="form-style" autocomplete="off" />
                                    <img src="<?php echo $purchase_data['delivery_note_img'];?>"  id="" alt="no image" class="img-rounded">

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
                                <select class="form-style js-example-basic-single brandListss" name="make" required>
                                    <?php if($models): ?>
                                        <option value="" selected disabled hidden><?php echo $purchase_data['car_brand']; ?></option>
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
                                <select class="form-style js-example-basic-single modelsLists" name="model" required>
                                    <option value="" selected disabled hidden><?php echo $purchase_data['car_model']; ?></option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style js-example-basic-single submodeldata" name="submodel" required>
                                    <option value="" selected disabled hidden><?php echo $purchase_data['car_model']; ?></option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style js-example-basic-single" name="color" required>
                                    <option value="" selected disabled hidden><?php echo $purchase_data['car_color'];?></option>
                                    <?php foreach ($color_list as $color){ ?>
                                        <option value="<?php echo $color->name ?>"><?php echo $color->name ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Chassis No</p>
                                <input type="text"  value="<?php echo $purchase_data['car_chassis_no'];?>" name="chassis_no" required class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Engine No</p>
                                <input type="text" name="engine_no" value="<?php echo $purchase_data['car_engine_no'];?>" required class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Manuf. Year</p>
                                <input type="number"  value="<?php echo $purchase_data['car_manuf_year'];?>" required name="manuf_year" class="form-style" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "4"/> 
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mileage</p>
                                <input type="text" name="mileage" value="<?php echo $purchase_data['rc_pincode'];?>" required class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">

                                <select class="form-style js-example-basic-single" name="Fuel_type" required>
                                    <option value="" selected disabled hidden><?php echo $purchase_data['car_fuel_type'];?></option>
                                    <?php foreach ($fuel_list as $fuel){ ?>
                                        <option value="<?php echo $fuel->name ?>"><?php echo $fuel->name ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style" name="serial_number" required>
                                    <option value="" selected disabled hidden><?php echo $purchase_data['car_serial_number'];?></option>
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
                                <select class="form-style js-example-basic-single" name="Transmission" required>
                                    <option value="" selected disabled hidden><?php echo $purchase_data['car_transmission'];?></option>

                                    <?php foreach ($transmission_list as $transmission){ ?>
                                        <option value="<?php echo $transmission->name ?>"><?php echo $transmission->name ?></option>
                                    <?php  }?>
                                </select>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style js-example-basic-single" name="emission" required>
                                    <option value="" selected disabled hidden><?php echo $purchase_data['car_emission'];?></option>
                                    <?php foreach ($emission_list as $emission){ ?>
                                        <option value="<?php echo $emission->name ?>"><?php echo $emission->name ?></option>
                                    <?php  }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">Registration Date</p>
                                <input type="date" name="registration_date" value="<?php echo date($purchase_data['registration_date']); ?>"  required class="form-style"  >
                                
                                <!--<input type="text" name="registration_date" required class="form-style current_date" data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>-->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">RC Expiry Date</p>
                                <input type="date" name="rc_expiry_date" value="<?php echo date($purchase_data['rc_expiry_date']); ?>"  required class="form-style current_date" >
                                 <!-- <input type="text" name="rc_expiry_date" required class="form-style current_date" data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>-->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Cubic Capacity</p>
                                <input type="number" name="cubic_capicity" value="<?php echo $purchase_data['cubic_capicity']; ?>" required class="form-style" autocomplete="off" />
                            </div>
                        </div>
                  
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" >
                            <div class="form-item">
                                <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff;padding: 0;">Purchase Date</p>
                                <input type="date" name="purchase_date" id="" value="<?php echo date($purchase_data['purchase_date']); ?>" required class="form-style current_date" >
                                  <!--<input type="text" name="purchase_date" required  class="form-style current_date"  data-beatpicker="true" data-beatpicker-position="['*','*']" data-beatpicker-format="['DD','MM','YYYY'],separator:'/'"/>-->
                            </div>
                        </div>
                     
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Time</p>
                                <input type="text" name="purchase_time" required id="timepicker" value="<?php echo $purchase_data['purchase_time']; ?>" class="time form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Purchase Price</p>
                                <input type="number" name="purchase_price" value="<?php echo $purchase_data['purchase_price']; ?>" required class="form-style purchase-price" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Commission</p>
                                <input type="number" name="commission" value="<?php echo $purchase_data['commission']; ?>" class="form-style commission" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item ">
                                <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629;; padding: 0; background-color: #fff;">Total Purchase Price</p>
                                <input type="text" readonly name="total_purchase_price" required class="form-style total-price" autocomplete="off" value="<?php echo $purchase_data['total_purchase_price']; ?>" />
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
                                    <option value="" selected disabled hidden></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>


                        <div class="financedBlock" style="display: none">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">

                                    <select class="form-style js-example-basic-single" name="finance_comp">
                                        <option value="" selected disabled hidden>--Select Financer--</option>
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
                                        <option value="" selected disabled hidden>Bank NOC Received</option>
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
                                    <option value="" selected disabled hidden>Insurance</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>


                        <div class="insuranceBlock" style="display: none">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <select class="form-style" name="insurance_type">
                                        <option value="" selected disabled hidden>Insurance Type</option>
                                        <option value="COMPREHENSIVE">COMPREHENSIVE</option>
                                        <option value="THIRD PARTY">THIRD PARTY</option>
                                        <option value="NO INSURANCE">NO INSURANCE</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <div class="form-item">

                                    <select class="form-style js-example-basic-single" name="insurance_comp">
                                        <option value="" selected disabled hidden>--Select Insurance Company--</option>
                                        <?php foreach ($Insurance_list as $list){ ?>
                                            <option value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                        <?php  }?>
                                    </select>


                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff;padding: 0;">Insurance Expiry Date</p>
                                <input type="date" name="insurance_expiry_date" id="" required class="form-style current_date" >
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
                                    <option value="" selected disabled hidden>Warranty</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="warrantyBlock" style="display: none">
                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                               <div class="form-item">
                                   <select class="form-style" name="Warranty">
                                       <option value="" selected disabled hidden>Warranty Upto</option>
                                       <option value="1 Year">1 Year</option>
                                       <option value="6 Month">6 Months</option>
                                   </select>
                               </div>
                           </div>

                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                           <div class="form-item">
                                <p class="formLabel" style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff;padding: 0;">Warrenty Expiry Date</p>
                                <input type="date" name="Warranty_exp_date" id="" required class="form-style current_date" >
                            </div>
                           </div>

                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                               <div class="form-item">
                                   <select class="form-style" name="category">
                                       <option value="" selected disabled hidden>Category</option>
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
                                        <option value="" selected disabled hidden>Select Purchase Type</option>
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
                                <input type="text" required name="purchase_rc" id="purchase_rc" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel purchase_mobile">Mobile</p>
                              <!--  <input type="text" name="purchase_mobile" required id="purchase_mobile" class="form-style" autocomplete="off" />-->
                                <input name="purchase_mobile" required id="purchase_mobile" class="form-style" autocomplete="off" 
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10"/>
                           
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
                                <input type="text" name="purchase_pan" id="purchase_pan"   minlength="10" class="form-style" autocomplete="off" style="text-transform:uppercase;" />
                            </div>
                        </div>
                        <div class="row" style="padding: 0 15px;">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel purchase_address">Address</p>
                                    <textarea class="form-style" name="purchase_address" id="purchase_address" autocomplete="off" rows="4" style="height: auto;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">



                                <div class="p-state-city">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <select class="form-style js-example-basic-single state2" name="purchase_state">
                                                <option value="" selected disabled hidden>--Select State--</option>
                                                <?php foreach ($states as $list){ ?>
                                                    <option data-id="<?php echo $list->id ?>" value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                                <?php  }?>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <select name="purchase_city" class="form-style js-example-basic-single citydata1">
                                                <option value="" selected disabled hidden>--Select City--</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-state-city-same" style="display: none">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-item">
                                            <select class="form-style js-example-basic-single state2-same" name="purchase_state">

                                                <option value="" selected disabled hidden>--Select State--</option>

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
                                        <input type="text" name="purchase_pincode" minlength="6" id="purchase_pincode" class="form-style" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 0 15px;">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">GST No.</p>
                                    <input type="text" name="gst" class="form-style" value="<?php echo $purchase_data['gst']; ?>" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <label class="page-heading">Bank Details</label>
                        <div class="row" style="margin-left: 0px; margin-right: 0">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">In the Name Of</p>
                                    <input type="text" name="in_the_name_of" value="<?php echo $purchase_data['in_the_name_of']; ?>" class="form-style" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">

                                    <select class="form-style js-example-basic-single" name="bank_name">
                                        <option value="" selected disabled hidden><?php echo $purchase_data['bank_name']; ?></option>

                                        <?php foreach ($bank_list as $list){ ?>
                                            <option value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                        <?php  }?>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">Account Number</p>
                                    <input type="text" name="account_number" class="form-style" value="<?php echo $purchase_data['account_number']; ?>" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <p class="formLabel">IFSC Code</p>
                                    <input type="text" name="ifsc_code" class="form-style" value="<?php echo $purchase_data['ifsc_code']; ?>" autocomplete="off" />
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
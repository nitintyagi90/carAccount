            <!-- End header -->
            <!-- Start Contain Section -->
            <div class="container-fluid right_color">
                <div class="page-main-header">
                    <!-- Page Title -->
                    <h2 class="page-name-title">Details</h2>
                    <!--  Breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Details</li>
                    </ol>
                </div>

                <div class="contain-section">
                    <div class="profile-background" style="height:83px;">
                        <div class="profile-social">
                            <ul>
                                <li class="profile-name">
                                    <h4><?php echo ($dealer->user_name!==null) ? $dealer->user_name:''?></h4>
                                    <span><i class="fa fa-building-o "></i><?php echo ($dealer->user_company!==null) ? $dealer->user_company:''?></span>
                                </li>
                                <li class="profile-follow">
                                    <h6><i class="fa fa-phone "></i></h6>
                                    <span><?php echo ($dealer->user_mobile!==null) ? $dealer->user_mobile:''?></span>
                                </li>
                                <li class="profile-follow">
                                    <h6><i class="fa fa-envelope"></i></h6>
                                    <span><?php echo ($dealer->user_email!==null) ? $dealer->user_email:''?></span>
                                </li>
                                <li class="profile-follow">
                                    <h6><i class="fa fa-map-marker"></i></h6>
                                    <span><?php echo ($dealer->user_location!==null) ? $dealer->user_location:''?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-left-section">
                                <ul class="nav nav-pills">
                                    <li class="active"><a data-toggle="tab" href="#rc" class="float-button-light">RC</a>
                                    </li>
                                    <li><a class="float-button-light" data-toggle="tab" href="#vehicle">Vehicle</a></li>
                                    <li><a class="float-button-light" data-toggle="tab" href="#FIW">Finance, Insurance & Warranty</a></li>
                                    <li><a class="float-button-light" data-toggle="tab" href="#purchase">Purchase</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="rc" class="tab-pane fade in active">
                                        <div class="section-body">
                                            <div class="profile-body">
                                                <h4 class="profile-title"><i class="fa fa-hand-o-right"></i> RC Details</h4>
                                                <div class="row">
                                                    <div class="prosonal-info">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Reg. No.:- </span> <?php echo ($purchase->registration_no!==null) ? $purchase->registration_no:''?></p>
                                                            <p><span>RC Name:- </span> <?php echo ($purchase->rc_name!==null) ? $purchase->rc_name:''?></p>
                                                            <p><span>Mobile:- </span>  <?php echo ($purchase->rc_mobile!==null) ? $purchase->rc_mobile:''?></p>
                                                            <p><span>Email:- </span> <?php echo ($purchase->rc_email!==null) ? $purchase->rc_email:''?></p>
                                                            
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Pan No.:- </span> <?php echo ($purchase->rc_pan!==null) ? $purchase->rc_pan:''?></p>
                                                            <p><span>Address:- </span> <?php echo ($purchase->rc_address!==null) ? $purchase->rc_address:''?></p>
                                                            <p><span>State:- </span> <?php echo ($purchase->rc_state!==null) ? $purchase->rc_state:''?></p>
                                                            <p><span>City:- </span> <?php echo ($purchase->rc_city!==null) ? $purchase->rc_city:''?></p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Landmark:- </span><?php echo ($purchase->rc_ladmark!==null) ? $purchase->rc_ladmark:''?></p>
                                                            <p><span>Pincode:- </span> <?php echo ($purchase->rc_pincode!==null) ? $purchase->rc_pincode:''?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="profile-title"><i class="fa fa-hand-o-right"></i> RC Related Images</h4>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">RC</label>
                                                        <a href="<?php echo ($purchase->rc_image!==null) ? $purchase->rc_image:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->rc_image!==null) ? $purchase->rc_image:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Insurance</label>
                                                        <a href="<?php echo ($purchase->insurance_image!==null) ? $purchase->insurance_image:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->insurance_image!==null) ? $purchase->insurance_image:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">NOC</label>
                                                        <a href="<?php echo ($purchase->bank_noc_image!==null) ? $purchase->bank_noc_image:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->bank_noc_image!==null) ? $purchase->bank_noc_image:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Pan Card</label>
                                                        <a href="<?php echo ($purchase->pan_card_image!==null) ? $purchase->pan_card_image:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->pan_card_image!==null) ? $purchase->pan_card_image:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Car Photo</label>
                                                        <a href="<?php echo ($purchase->car_image!==null) ? $purchase->car_image:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->car_image!==null) ? $purchase->car_image:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Address Proof 1</label>
                                                        <a href="<?php echo ($purchase->add_proof_img!==null) ? $purchase->add_proof_img:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->add_proof_img!==null) ? $purchase->add_proof_img:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Address Proof 2</label>
                                                        <a href="<?php echo ($purchase->add_proof_img2!==null) ? $purchase->add_proof_img2:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->add_proof_img2!==null) ? $purchase->add_proof_img2:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Sell Letter</label>
                                                        <a href="<?php echo ($purchase->sell_ltr_img!==null) ? $purchase->sell_ltr_img:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->sell_ltr_img!==null) ? $purchase->sell_ltr_img:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Delivery Note</label>
                                                        <a href="<?php echo ($purchase->delivery_note_img!==null) ? $purchase->delivery_note_img:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->delivery_note_img!==null) ? $purchase->delivery_note_img:''?>"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="vehicle" class="tab-pane fade in">
                                        <div class="section-body">
                                            <div class="profile-body">
                                                <h4 class="profile-title"><i class="fa fa-hand-o-right"></i> Vehicle Details</h4>
                                                <div class="row">
                                                    <div class="prosonal-info">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Make:- </span> <?php echo ($purchase->car_brand!==null) ? $purchase->car_brand:''?></p>
                                                            <p><span>Model:- </span> <?php echo ($purchase->car_model!==null) ? $purchase->car_model:''?></p>
                                                            <p><span>Submodel:- </span> <?php echo ($purchase->car_submodel!==null) ? $purchase->car_submodel:''?></p>
                                                            <p><span>Color:- </span> <?php echo ($purchase->car_color!==null) ? $purchase->car_color:''?></p>
                                                            <p><span>Chassis No.:- </span> <?php echo ($purchase->car_chassis_no!==null) ? $purchase->car_chassis_no:''?></p>
                                                            <p><span>Engine No.:- </span> <?php echo ($purchase->car_engine_no!==null) ? $purchase->car_engine_no:''?></p>
                                                            <p><span>Manuf. Year:- </span> <?php echo ($purchase->car_manuf_year!==null) ? $purchase->car_manuf_year:''?></p>
                                                            
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Mileage:- </span> <?php echo ($purchase->car_mileage!==null) ? $purchase->car_mileage:''?></p>
                                                            <p><span>Fuel Type:- </span> <?php echo ($purchase->car_fuel_type!==null) ? $purchase->car_fuel_type:''?></p>
                                                            <p><span>Owner Serial No.:- </span> <?php echo ($purchase->car_serial_number!==null) ? $purchase->car_serial_number:''?></p>
                                                            <p><span>Transnission:- </span> <?php echo ($purchase->car_transmission!==null) ? $purchase->car_transmission:''?></p>
                                                            <p><span>Emission:- </span> <?php echo ($purchase->car_emission!==null) ? $purchase->car_emission:''?> </p>
                                                            <p><span>Registration Date:- </span> <?php echo ($purchase->registration_date!==null) ? $purchase->registration_date:''?> </p>
                                                            <p><span>RC Expiry Date:- </span><?php echo ($purchase->rc_expiry_date!==null) ? $purchase->rc_expiry_date:''?></p>
                                                            
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Cubic Capacity:- </span><?php echo ($purchase->cubic_capicity!==null) ? $purchase->cubic_capicity:''?></p>
                                                            <p><span>Purchase Date:- </span><?php echo ($purchase->purchase_date!==null) ? $purchase->purchase_date:''?></p>
                                                            <p><span>Time:- </span><?php echo ($purchase->purchase_time!==null) ? $purchase->purchase_time:''?></p>
                                                            <p><span>Purchase Price:- </span> ₹<?php echo ($purchase->purchase_price!==null) ? $purchase->purchase_price:''?> </p>
                                                            <p><span>Commission:- </span> ₹<?php echo ($purchase->commission!==null) ? $purchase->commission:''?> </p>
                                                            <p><span>Total Purchase Price:- </span> ₹<?php echo ($purchase->total_purchase_price!==null) ? $purchase->total_purchase_price:''?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="FIW" class="tab-pane fade in">
                                        <div class="section-body">
                                            <div class="profile-body">
                                                <h4 class="profile-title"><i class="fa fa-hand-o-right"></i> Finance, Insurance & Warranty Details</h4>
                                                <label><u>FINANCE</u></label>
                                                <div class="row">
                                                    <div class="prosonal-info">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <?php if($purchase->finance_comp!==null && $purchase->loan_amount!==null && $purchase ->bank_noc==!null){?>
                                                                <p><span>Car Financed:- </span> Yes</p>
                                                            <?php }else{?>
                                                                <p><span>Car Financed:- </span> No</p>
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Financer Name:- </span> <?php echo ($purchase->finance_comp!==null) ? $purchase->finance_comp:''?></p>
                                                            
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Lone Account No.:- </span> <?php echo ($purchase->loan_amount!==null) ? $purchase->loan_amount:''?> </p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Bank NOC Received:- </span> <?php echo ($purchase->bank_noc!=='Bank NOC Received') ? $purchase->bank_noc:''?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label><u>INSURANCE </u></label>
                                                <div class="row">
                                                    <div class="prosonal-info">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <?php if($purchase->insurance_type!==null && $purchase->insurance_comp!==null && $purchase ->insurance_expiry_date==!null){?>
                                                                <p><span>Insurance:- </span> Yes</p>
                                                            <?php }else{?>
                                                                <p><span>Insurance:- </span> No</p>
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Insurance Type:- </span> <?php echo ($purchase->insurance_type!==null) ? $purchase->insurance_type:''?></p>
                                                            
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Insurance Company:- </span> <?php echo ($purchase->insurance_comp!==null) ? $purchase->insurance_comp:''?> </p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Insurance Expiry Date:- </span><?php echo ($purchase->insurance_expiry_date!==null) ? $purchase->insurance_expiry_date:''?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label><u>WARRANTY </u></label>
                                                <div class="row">
                                                    <div class="prosonal-info">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <?php if($purchase->Warranty!==null && $purchase->Warranty_exp_date!==null && $purchase ->category==!null){?>
                                                                <p><span>Warranty:- </span> Yes</p>
                                                            <?php }else{?>
                                                                <p><span>Warranty:- </span> NO</p>
                                                            <?php }?>

                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Warranty Upto:- </span><?php echo ($purchase->Warranty!==null) ? $purchase->Warranty:''?></p>
                                                            
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Warranty Expiry Date:- </span><?php echo ($purchase->Warranty_exp_date!==null) ? $purchase->Warranty_exp_date:''?></p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Warranty Category:- </span><?php echo ($purchase->category!==null) ? $purchase->category:''?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="purchase" class="tab-pane fade in">
                                        <div class="section-body">
                                            <div class="profile-body">
                                                <h4 class="profile-title"><i class="fa fa-hand-o-right"></i> Purchase Details</h4>
                                                <div class="row">
                                                    <div class="prosonal-info">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>RC Name:- </span> <?php echo ($purchase->purchase_rc!==null) ? $purchase->purchase_rc:''?></p>
                                                            <p><span>Mobile:- </span> <?php echo ($purchase->purchase_mobile!==null) ? $purchase->purchase_mobile:''?></p>
                                                            <p><span>Email:- </span> <?php echo ($purchase->purchase_email!==null) ? $purchase->purchase_email:''?></p>
                                                            
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Pan No.:- </span> <?php echo ($purchase->purchase_pan!==null) ? $purchase->purchase_pan:''?></p>
                                                            <p><span>Address:- </span> <?php echo ($purchase->purchase_address!==null) ? $purchase->purchase_address:''?></p>
                                                            <p><span>State:- </span><?php echo ($purchase->purchase_state!==null) ? $purchase->purchase_state:''?></p>
                                                            <p><span>City:- </span><?php echo ($purchase->purchase_city!==null) ? $purchase->purchase_city:''?></p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Landmark:- </span><?php echo ($purchase->purchase_landmark!==null) ? $purchase->purchase_landmark:''?></p>
                                                            <p><span>Pincode:- </span><?php echo ($purchase->purchase_pincode!==null) ? $purchase->purchase_pincode:''?></p>
                                                            <p><span>GST No.:- </span><?php echo ($purchase->gst!==null) ? $purchase->gst:''?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label><u>Bank Detail</u></label>
                                                <div class="row">
                                                    <div class="prosonal-info">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>In the Name of:- </span> <?php echo ($purchase->in_the_name_of!==null) ? $purchase->in_the_name_of:''?></p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Bank Name:- </span> <?php echo ($purchase->bank_name!==null) ? $purchase->bank_name:''?></p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>Acc. No.:- </span> <?php echo ($purchase->account_number!==null) ? $purchase->account_number:''?></p>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <p><span>IFSC Code:- </span> <?php echo ($purchase->ifsc_code!==null) ? $purchase->ifsc_code:''?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label><u>KYC</u></label>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Pan Card</label>
                                                        <a href="<?php echo ($purchase->kyc_pan_img!==null) ? $purchase->kyc_pan_img:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->kyc_pan_img!==null) ? $purchase->kyc_pan_img:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Address Proof 1</label>
                                                        <a href="<?php echo ($purchase->kyc_Address1_img!==null) ? $purchase->kyc_Address1_img:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->kyc_Address1_img!==null) ? $purchase->kyc_Address1_img:''?>"></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="m-t-1">Address Proof 2</label>
                                                        <a href="<?php echo ($purchase->kyc_Address2_img!==null) ? $purchase->kyc_Address2_img:''?>" target="_blank"><img class="img img-responsive" src="<?php echo ($purchase->kyc_Address2_img!==null) ? $purchase->kyc_Address2_img:''?>"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Contain Section -->    

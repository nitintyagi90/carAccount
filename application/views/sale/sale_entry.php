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

                <form method="post"  enctype="multipart/form-data">
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
                                  
                                </select>
                                <?php if(form_error('c_name')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('dealer_id'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                       
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel dealer_name_lebel">Dealer Name</p>
                                <input class="form-style dealer_name"  name="dealer_name" type="text">

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel dealer_comapny_lebel">Dealer Company</p>
                                <input type="text" name="dealer_company"  class="form-style dealer_company" autocomplete="off" readonly/>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel user_location_label">Dealer Location</p>
                                <input type="text"  name="location_dealer" class="form-style user_location" autocomplete="off" readonly/>
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
                                       <select class="form-style js-example-basic-single select_reg" name="registration_no">
                                            <option value="">Search Registration No.</option>
                                            <?php foreach ($registration_no as $data){ ?>
                                                <option value="<?php echo $data->purchase_id ?>"><?php echo $data->registration_no ?></option>
                                            <?php }?>
                                        </select>

                                        <?php if(form_error('registration_no')){
                                            echo "<p class='text-danger'>".strip_tags(form_error('registration_no'))."</p>";
                                        }
                                        ?>
                                <!-- <p class="formLabel">Reg. No</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />-->
                            </div> 
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
    
                           </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel purchase_date">Purchase Date</p>
                                        <input type="text"  id="purchase_date" name="purchase_date" class="form-style" autocomplete="off" readonly/>
                                    </div>
                                </div>
                       </div>
                       
                        <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-item">
                                        <p class="formLabel make">Make</p>
                                        <input type="text"  id="make" name="make" class="form-style" autocomplete="off" readonly/>
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
                                        <p class="formLabel purchase_price">Total Purchase Price</p>
                                        <input type="text"  id="purchase_price" name="purchase_price" class="form-style" autocomplete="off" readonly/>
                                    </div>
                                </div>
                           
                               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                   <div class="form-item">
                                        <p class="formLabel">Total Vehicle Cost</p>
                                       <input type="text" id="total_vehicle_cost" name="total_vehicle_cost" class="form-style" autocomplete="off" />
                                       <?php if(form_error('total_vehicle_cost')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('total_vehicle_cost'))."</p>";
                                        }
                                      ?>
                                   </div>
                              </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Sale Comission</p>
                                <input type="text" id="sale_comission" name="sale_comission" class="form-style" autocomplete="off" />
                                <?php if(form_error('sale_comission')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('sale_comission'))."</p>";
                                        }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel total_cost">Total Cost</p>
                                <input type="text" id="total_cost" name="total_cost" class="form-style" autocomplete="off" readonly/>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Sale Price</p>
                                <input type="text" name="sale_price" class="form-style" autocomplete="off" />
                                <?php if(form_error('sale_price')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('sale_price'))."</p>";
                                        }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">R.T.O. Cost</p>
                                <input type="text" name="rto_cost" class="form-style" autocomplete="off" />
                                <?php if(form_error('rto_cost')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('rto_cost'))."</p>";
                                        }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Insurance Cost</p>
                                <input type="text" name="insurance_cost" class="form-style" autocomplete="off" />
                                <?php if(form_error('insurance_cost')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('insurance_cost'))."</p>";
                                        }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Warranty Cost</p>
                                <input type="text" name="warranty_cost" class="form-style" autocomplete="off" />
                                <?php if(form_error('warranty_cost')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('warranty_cost'))."</p>";
                                        }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Invoice Price</p>
                                <input type="text" name="invoice_price" class="form-style" autocomplete="off" />
                                <?php if(form_error('invoice_price')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('invoice_price'))."</p>";
                                        }
                                ?>
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
                                <select class="form-style" name="customer_type">
                                    <option value="">Customer Type</option>
                                    <option value="Customer">Customer</option>
                                    <option value="Dealer">Dealer</option>
                                </select>
                                <?php if(form_error('customer_type')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('customer_type'))."</p>";
                                        }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Name</p>
                                <input type="text" name="c_name" class="form-style" autocomplete="off"  value="<?= $this->input->post('c_name') ?>"/>
                                <?php if(form_error('c_name')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('c_name'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Mobile</p>
                                <input type="text" name="c_mobile" class="form-style" autocomplete="off"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "10"/>
                                <?php if(form_error('c_mobile')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('c_mobile'))."</p>";
                                }
                                ?>
                            
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Email ID</p>
                                <input type="email" name="email_id" class="form-style" autocomplete="off" />
                                <?php if(form_error('email_id')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('email_id'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">PAN Number</p>
                                <input type="text" name="c_pan" class="form-style" autocomplete="off" maxlength="10"style="text-transform:uppercase;" />
                                <?php if(form_error('c_pan')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('c_pan'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <p class="formLabel">Address</p> -->
                                <select class="form-style" name="c_relation">
                                    <option>Relation</option>
                                    <option>S/O</option>
                                    <option>W/O</option>
                                    <option>D/O</option>
                                </select>
                                <?php if(form_error('c_relation')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('c_relation'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel"style="top:-14px; position: absolute; left: 15px;  color:#d12629; background-color: #fff; padding: 0;">DOB</p>
                                <input type="date" name="date_of_brith" class="form-style" autocomplete="off" />
                                <?php if(form_error('date_of_brith')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('date_of_brith'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">AAdhar Number</p>
                                <input type="text" name="c_aadhar" class="form-style" autocomplete="off"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "12" />
                                <?php if(form_error('c_aadhar')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('c_aadhar'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Nominee</p>
                                <input type="text" name="c_nominee" class="form-style" autocomplete="off" />
                                <?php if(form_error('c_nominee')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('c_nominee'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-item">
                                <p class="formLabel">Address</p>
                                <textarea class="form-style" name="c_address" autocomplete="off" rows="4" style="height: auto;"></textarea>
                                <?php if(form_error('c_address')){
                                    echo "<p class='text-danger'>".strip_tags(form_error('c_address'))."</p>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Address</p> -->
                                    <!-- <select class="form-style">
                                        <option>Select State</option>
                                    </select> -->
                                       <select class="form-style js-example-basic-single state1" name="rc_state">
                                            <option value="" selected disabled hidden>--Select State--</option>
                                            <?php foreach ($states as $list){ ?>
                                                <option data-id="<?php echo $list->id ?>" value="<?php echo $list->name ?>"><?php echo $list->name ?></option>
                                            <?php  }?>
                                        </select>
                                        <?php if(form_error('rc_state')){
                                            echo "<p class='text-danger'>".strip_tags(form_error('rc_state'))."</p>";
                                        }
                                        ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <!-- <p class="formLabel">Address</p> -->
                                   
                                    <select name="rc_city" class="form-style js-example-basic-single citydata2">
                                            <option value="" selected disabled hidden>--Select City--</option>
                                        </select> <!-- <select class="form-style">
                                        <option>Select City</option>
                                    </select> -->
                                    <?php if(form_error('rc_city')){
                                            echo "<p class='text-danger'>".strip_tags(form_error('rc_city'))."</p>";
                                        }
                                        ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Landmark</p>
                                    <input type="text" name="landmark" class="form-style" autocomplete="off" />
                                    <?php if(form_error('landmark')){
                                            echo "<p class='text-danger'>".strip_tags(form_error('landmark'))."</p>";
                                        }
                                        ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-item">
                                    <p class="formLabel">Pincode</p>
                                    <input type="number" name="c_pincode" class="form-style" autocomplete="off" maxlength = "10"/>
                                    <?php if(form_error('c_pincode')){
                                            echo "<p class='text-danger'>".strip_tags(form_error('c_pincode'))."</p>";
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">GST No.</p>
                                <input type="text" name="gst_no" class="form-style" autocomplete="off" />
                                <?php if(form_error('gst_no')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('gst_no'))."</p>";
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="page-heading">KYC</label>
                        <div class="row" style="margin-left: 0px; margin-right: 0">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label>Pan Upload</label>
                                    <input type="file" name="pan_proof" class="form-style" autocomplete="off" />
                                    <?php if(form_error('pan_proof')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('pan_proof'))."</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label>Address Proof Upload 1</label>
                                    <input type="file" name="add_proof" class="form-style" autocomplete="off" />
                                    <?php if(form_error('add_proof')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('add_proof'))."</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-item">
                                    <label>Address Proof Upload 2</label>
                                    <input type="file" name="add_proof2" class="form-style" autocomplete="off" />
                                    <?php if(form_error('add_proof2')){
                                        echo "<p class='text-danger'>".strip_tags(form_error('add_proof2'))."</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light" name="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- End Contain Section -->    
    <?php include('js.php');?>
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
                                <select class="form-style js-example-basic-single">
                                  <option>Dealer Mobile No.</option>
                                     <!--<option>1586587558</option>
                                    <option>9857854852</option>-->
                                    <?php foreach ($user as $dealer){ ?>
                                    <option value="<?php echo $dealer->user_id ?>"><?php echo $dealer->user_mobile ?></option>
                                <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Dealer Name</p>
                                <input type="text" name="username" disabled="" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Dealer Company Name</p>
                                <input type="text" name="username" disabled="" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Dealer Location</p>
                                <input type="text" name="username" disabled="" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Refurbishment & Accessories Cost</h2>
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
                                <p class="formLabel">Make</p>
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Model</p>
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Sub Model</p>
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Color</p>
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
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
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Total Purchase Price</p>
                                <input type="text" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style">
                                    <option>Ready to Sell</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <button class="btn btn-success btn-block">Ready to Sell</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Refurbishment Details</h2>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <!-- <label class="formLabel">Upload Delivery Note</label> -->
                                <select class="form-style">
                                    <option>Repairing Details</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="duplicatefield">
                            <div class="form-item">
                                <p class="formLabel">Job Date</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="duplicatefield">
                            <div class="form-item">
                                <p class="formLabel">Bill No.</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="duplicatefield">
                            <div class="form-item">
                                <p class="formLabel">Amount</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" >
                            <div class="form-item">
                                <!-- <p class="formLabel">Amount</p> -->
                                <input type="file" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 pull-right">
                            <button type="button" id="duplicate" class="btn btn-success" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Other Expense</h2>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="duplicatefield">
                            <div class="form-item">
                                <p class="formLabel">Details</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="duplicatefield">
                            <div class="form-item">
                                <p class="formLabel">Job Date</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="duplicatefield">
                            <div class="form-item">
                                <p class="formLabel">Bill No.</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="duplicatefield">
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
                            <button type="button" class="btn btn-success" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
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
                                <select class="form-style">
                                    <option>Accessories Details</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Purchase Date</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
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
                            <button type="button" class="btn btn-success" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Other Expense</h2>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Details</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Purchase Date</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
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
                            <button type="button" class="btn btn-success" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
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
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="section-header">
                                <h2 class="header-text">Add Warranty Details</h2>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <select class="form-style">
                                    <option>Warranty</option>
                                    <option>1 Year</option>
                                    <option>6 Months</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">Warranty Details</p>
                                <input type="text" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <p class="formLabel">invoice No.</p>
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
                                <input type="file" name="text" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 pull-right">
                            <button type="button" class="btn btn-success" style="margin-top: 12px;"><i class="fa fa-plus"></i> </button>
                        </div>
                    </div> -->
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
                    <!-- <div class="row"> 
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                            <label class="mt-20">Warranty Cost</label>
                        </div>   
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-item">
                                <input type="text" disabled="" value="0" name="username" class="form-style" autocomplete="off" />
                            </div>
                        </div>
                    </div> -->
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
                            <button type="button" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--<script>
 code for duolicate the field
$(function() {
        var scntDiv = $('#duplicatefield');
        var i = $('#duplicatefield').size() + 1;
        
        $('#duplicate').live('click', function() {
                $(' <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" id="duplicatefield">
                            <div class="form-item">
                                <p class="formLabel">Job Date</p>
                                <input type="text"id="text" name="text '+ i +'" class="form-style" autocomplete="off" />
                            </div>
                        </div> <a href="#" id="remScnt">Remove</a>').appendTo(scntDiv);
                i++;
                return false;
        });
        
        $('#remScnt').live('click', function() { 
                if( i > 2 ) {
                        $(this).parents('p').remove();
                        i--;
                }
                return false;
        });
});

        
    </script>-->
    <!-- End Contain Section -->    

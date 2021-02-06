<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Add Group</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Add Group</li>
        </ol>
    </div>
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>

    <?php elseif($this->session->flashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if(validation_errors()){ ?>

        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
        </div>


    <?php } ?>

    <div class="contain-section">
        <div class="contain-inner-section">




            <form role="form" action="<?php base_url('groups/create') ?>" method="post">
                <div class="form-group">
                    <label for="group_name">Group Name</label>
                    <div class="custom-control custom-switch"><input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name" autocomplete="off">
                    </div>
                <div class="form-group" style="margin-top: 20px;">
                    <label for="permission">Permission</label>

                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Create</th>
                            <th>Update</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Users</td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch1" value="createUser"><label class="custom-control-label" for="customSwitch1">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch2" value="updateUser"><label class="custom-control-label" for="customSwitch2">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch3" value="viewUser"><label class="custom-control-label" for="customSwitch3">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch4" value="deleteUser"><label class="custom-control-label" for="customSwitch4">&nbsp;</label></div></td>
                        </tr>
                        <tr>
                            <td>Groups</td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch5" value="createGroup"><label class="custom-control-label" for="customSwitch5">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch6" value="updateGroup"><label class="custom-control-label" for="customSwitch6">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch7" value="viewGroup"><label class="custom-control-label" for="customSwitch7">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch8" value="deleteGroup"><label class="custom-control-label" for="customSwitch8">&nbsp;</label></div></td>
                        </tr>
                        <tr>
                            <td>Purchase</td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch9" value="createPurchase"><label class="custom-control-label" for="customSwitch9">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch10" value="updatePurchase"><label class="custom-control-label" for="customSwitch10">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch11" value="viewPurchase"><label class="custom-control-label" for="customSwitch11">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch12" value="deletePurchase"><label class="custom-control-label" for="customSwitch12">&nbsp;</label></div></td>
                        </tr>
                        <tr>
                            <td>Refurbishment</td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch9" value="createRefurbishment"><label class="custom-control-label" for="customSwitch9">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch10" value="updateRefurbishment"><label class="custom-control-label" for="customSwitch10">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch11" value="viewRefurbishment"><label class="custom-control-label" for="customSwitch11">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch12" value="deleteRefurbishment"><label class="custom-control-label" for="customSwitch12">&nbsp;</label></div></td>
                        </tr>

                        <tr>
                            <td>Sale</td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch9" value="createSale"><label class="custom-control-label" for="customSwitch9">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch10" value="updateSale"><label class="custom-control-label" for="customSwitch10">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch11" value="viewSale"><label class="custom-control-label" for="customSwitch11">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch12" value="deleteSale"><label class="custom-control-label" for="customSwitch12">&nbsp;</label></div></td>
                        </tr>

                        <tr>
                            <td>Payment</td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch9" value="createPayment"><label class="custom-control-label" for="customSwitch9">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch10" value="updatePayment"><label class="custom-control-label" for="customSwitch10">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch11" value="viewPayment"><label class="custom-control-label" for="customSwitch11">&nbsp;</label></div></td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch12" value="deletePayment"><label class="custom-control-label" for="customSwitch12">&nbsp;</label></div></td>
                        </tr>

                        <tr>
                            <td>App Settings</td>
                            <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch9" value="updateSetting"><label class="custom-control-label" for="customSwitch9">&nbsp;</label></div></td>

                        </tr>

                        </tbody>
                    </table>

                </div>

                <div class="col-lg-12">
                        <button type="submit" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

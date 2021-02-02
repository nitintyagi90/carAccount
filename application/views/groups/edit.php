<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Edit Group</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Edit Group</li>
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
            <form role="form" action="<?php base_url('groups/update') ?>" method="post">
                <div class="form-group">
                    <label for="group_name">Group Name</label>
                    <div class="custom-control custom-switch"><input type="text" class="form-control" id="group_name" value="<?php echo $group_data['group_name']; ?>" name="group_name" placeholder="Enter group name" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="permission">Permission</label>
                        <?php $serialize_permission = unserialize($group_data['permission']); ?>

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
                                <td><input type="checkbox" name="permission[]" id="permission" value="createUser" <?php if($serialize_permission) {
                                        if(in_array('createUser', $serialize_permission)) { echo "checked"; }
                                    } ?> ></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="updateUser" <?php
                                    if($serialize_permission) {
                                        if(in_array('updateUser', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="viewUser" <?php
                                    if($serialize_permission) {
                                        if(in_array('viewUser', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>>
                                </td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser" <?php
                                    if($serialize_permission) {
                                        if(in_array('deleteUser', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>>
                                </td>
                            </tr>
                            <tr>
                                <td>Groups</td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="createGroup" <?php
                                    if($serialize_permission) {
                                        if(in_array('createGroup', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="updateGroup" <?php
                                    if($serialize_permission) {
                                        if(in_array('updateGroup', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="viewGroup" <?php
                                    if($serialize_permission) {
                                        if(in_array('viewGroup', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="deleteGroup" <?php
                                    if($serialize_permission) {
                                        if(in_array('deleteGroup', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                            </tr>
                            <tr>
                                <td>Purchase</td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="createPurchase" <?php
                                    if($serialize_permission) {
                                        if(in_array('createPurchase', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="updatePurchase" <?php
                                    if($serialize_permission) {
                                        if(in_array('updatePurchase', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="viewPurchase" <?php
                                    if($serialize_permission) {
                                        if(in_array('viewPurchase', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="deletePurchase" <?php
                                    if($serialize_permission) {
                                        if(in_array('deletePurchase', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                            </tr>


                            <tr>
                                <td>Refurbishment</td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="createRefurbishment" <?php
                                    if($serialize_permission) {
                                        if(in_array('createRefurbishment', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="updateRefurbishment" <?php
                                    if($serialize_permission) {
                                        if(in_array('updateRefurbishment', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="viewRefurbishment" <?php
                                    if($serialize_permission) {
                                        if(in_array('viewRefurbishment', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="deleteRefurbishment" <?php
                                    if($serialize_permission) {
                                        if(in_array('deleteRefurbishment', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                            </tr>

                            <tr>
                                <td>Sale</td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="createSale" <?php
                                    if($serialize_permission) {
                                        if(in_array('createSale', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="updateSale" <?php
                                    if($serialize_permission) {
                                        if(in_array('updateSale', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="viewSale" <?php
                                    if($serialize_permission) {
                                        if(in_array('viewSale', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="deleteSale" <?php
                                    if($serialize_permission) {
                                        if(in_array('deleteSale', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                            </tr>

                            <tr>
                                <td>Payment</td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="createPayment" <?php
                                    if($serialize_permission) {
                                        if(in_array('createPayment', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="updatePayment" <?php
                                    if($serialize_permission) {
                                        if(in_array('updatePayment', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="viewPayment" <?php
                                    if($serialize_permission) {
                                        if(in_array('viewPayment', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                                <td><input type="checkbox" name="permission[]" id="permission" value="deletePayment" <?php
                                    if($serialize_permission) {
                                        if(in_array('deletePayment', $serialize_permission)) { echo "checked"; }
                                    }
                                    ?>></td>
                            </tr>


                            </tbody>
                        </table>

                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Update Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

  <script type="text/javascript">
    $(document).ready(function() {
       $("#li-groups").addClass('menu-open');
    $("#link-groups").addClass('active');
    $("#manage-groups").addClass('active');
    });
  </script>  


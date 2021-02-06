<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Delete Manufacturer</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Add Manufacturer</li>
        </ol>
    </div>
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>

    <?php elseif($this->session->flashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>


    <div class="contain-section">
        <div class="contain-inner-section">
            <h1>Do you really want to remove ?</h1>
            <form action="<?php echo base_url('manufacturer/delete_utility/'.$id) ?>" method="post">
                <input type="submit" class="btn btn-primary" name="confirm" value="Confirm">
                <a href="<?php echo base_url('manufacturer/car_utility') ?>" class="btn btn-warning">Cancel</a>
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


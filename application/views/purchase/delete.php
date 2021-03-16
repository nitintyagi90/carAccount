<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Delete Purchase</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Add Purchase</li>
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
            <h1>Do you really want to remove ?</h1>
            <form action="<?php echo base_url('purchase/delete/'.$id) ?>" method="post">
                <input type="submit" class="btn btn-primary" name="confirm" value="Confirm">
                <a href="<?php echo base_url('purchase') ?>" class="btn btn-warning">Cancel</a>
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


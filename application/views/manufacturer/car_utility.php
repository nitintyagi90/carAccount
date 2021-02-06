<!-- End top navigation -->
<!-- Start Contain Section -->
<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Car Utility Entry</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Utility Entry</li>
        </ol>
    </div>

    <div class="contain-section hover">
        <div class="contain-inner-section">

            <div class="row">
                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>

                <?php elseif($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-body">
                        <button type="button" class="btn btn-sm btn-primary btn-outline float-button-light waves-effect waves-button waves-float waves-light" data-toggle="modal" data-target="#makeModal">Add Color</button>
                        <button type="button" class="btn btn-sm btn-success btn-outline float-button-light waves-effect waves-button waves-float waves-light" data-toggle="modal" data-target="#fuel">Add Fuel Type</button>
                        <button type="button" class="btn btn-sm btn-info btn-outline float-button-light waves-effect waves-button waves-float waves-light" data-toggle="modal" data-target="#transmission">Add Transmission</button>
                        <button type="button" class="btn btn-sm btn-info btn-outline float-button-light waves-effect waves-button waves-float waves-light" data-toggle="modal" data-target="#emmisson">Add Emission</button>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-body">

                        <table id="datatable-zero" class="display datatable-default">
                            <thead>
                            <tr>
                                <th>Color Name</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if($color): ?>
                                <?php foreach ($color as $k => $v): ?>
                                    <tr>
                                        <td><?php echo $v->name; ?></td>
                                        <td><?php echo ucfirst($v->type); ?></td>
                                        <td>
                                            <a href="<?php echo base_url('manufacturer/delete_utility/'.$v->id) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                            <?php endif; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include(APPPATH.'/views/bsModals/color_modal.php');?>
<?php include(APPPATH.'/views/bsModals/fuel_type_modal.php');?>
<?php include(APPPATH.'/views/bsModals/transmission_modals.php');?>
<?php include(APPPATH.'/views/bsModals/emmisson_modal.php');?>

<script>
    $('.brandListss').change(function () {
        var id = $(this).val();
        var $mySelect = $('#modelsLists');
        if(id==0){
            $($mySelect)
                .find('option')
                .remove()
                .end()
                .append('<option value="0">No Record Found!</option>');
            return
        }
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>manufacturer/getModel',
            data: {
                'id': id
            },
            success: function (data) {
                var jsonParseRe = JSON.parse(data);
                $($mySelect).empty();
                if(jsonParseRe.status==200){
                    $.each(jsonParseRe.subcategory, function(key, value) {
                        var thing = '<option value="'+value.id+'">'+ value.name +'</option>';
                        $($mySelect).append(thing);
                    });
                    $($mySelect).selectpicker('refresh');
                }
            }
        });

    });

</script>

<!-- Sub Model modal end here -->


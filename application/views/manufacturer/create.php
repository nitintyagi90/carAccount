<!-- End top navigation -->
    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Manufacturer Entry</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Manufacturer Entry</li>
            </ol>
        </div>

        <div class="contain-section hover">
            <div class="contain-inner-section">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-body">
                            <button type="button" class="btn btn-sm btn-primary btn-outline float-button-light waves-effect waves-button waves-float waves-light" data-toggle="modal" data-target="#makeModal">Add Make</button>
                            <button type="button" class="btn btn-sm btn-success btn-outline float-button-light waves-effect waves-button waves-float waves-light" data-toggle="modal" data-target="#modelModal">Add Model</button>
                            <button type="button" class="btn btn-sm btn-info btn-outline float-button-light waves-effect waves-button waves-float waves-light" data-toggle="modal" data-target="#subModelModal">Add Sub Model</button>
                        </div>
                    </div>        
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-body">
                        <h3 class="page-heading" style="margin-bottom:20px;">Make and Model</h3>
                            <table id="datatable-zero" class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Parient</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($models): ?>
                                    <?php foreach ($models as $k => $v): ?>
                                        <tr>
                                            <td><?php echo $v->name; ?></td>
                                            <td><?php echo $v->type; ?></td>
                                            <td>
                                                <?php
                                                if($v->parent==0){?>
                                                    <span>No Parent</span>
                                                <?php }else{ ?>
                                                    <?php
                                                    $query = $this->db->get_where('brandmodels', array('id' => $v->parent,'type'=>'brand'));

                                                    $result = $query->row();

                                                    if(!empty($result)){
                                                        echo $result->name;
                                                    }
                                                    ?>
                                                <?php } ?>
                                            </td>
                                            <td>

<!--                                                <a href="<?php /*echo base_url('manufacturer/edit/'.$v->id) */?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
-->

                                                <a href="<?php echo base_url('manufacturer/delete/'.$v->id) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>


                                            </td>

                                        </tr>
                                    <?php endforeach ?>
                                <?php endif; ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-body">
                        <h3 class="page-heading" style="margin-bottom:20px;">Sub Model</h3>
                            <table id="datatable-zero" class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($submodel): ?>
                                    <?php foreach ($submodel as $k => $v): ?>
                                        <tr>
                                            <td><?php echo $v->submodel; ?></td>
                                            <td>
                                                <?php
                                                $query = $this->db->get_where('brandmodels', array('id' => $v->brand,'type'=>'brand'));
                                                $result = $query->row();
                                                if(!empty($result)){
                                                    echo $result->name;
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $query = $this->db->get_where('brandmodels', array('id' => $v->model,'type'=>'model'));
                                                $result = $query->row();
                                                if(!empty($result)){
                                                    echo $result->name;
                                                }
                                                ?>
                                            </td>
                                            <td>
<!--                                                <a href="<?php /*echo base_url('manufacturer/edit/'.$v->id) */?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
-->
                                                <a href="<?php echo base_url('manufacturer/deletesubmodel/'.$this->atri->en($v->id)) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

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
   
    <!-- Make modal start here -->
    <div id="makeModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form action="<?php echo base_url().'Manufacturer/create/'; ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Make (Brand)</h4>
                    </div>
                    <div class="modal-body">
                                <textarea class="form-control" required style="height:260px;" name="makeModels" spellcheck="false"></textarea>
                                &nbsp;
                                <div class="alert alert-info">Put one or more brand name as "," (comma) separated. Like MarutiSuzuki,Honda,Nissan</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Make modal end here -->
   
    <!-- Model modal start here -->
    <div id="modelModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form action="<?php echo base_url().'Manufacturer/modelcreate/'; ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Make (Brand)</h4>
                    </div>
                    <div class="modal-body">

                        <p>
                            <b>Select Brand</b>
                        </p>

                        <select class="form-control" name="brand" required>
                            <option value="selectBrand">---Select Brand---</option>
                            <?php if($brand): ?>
                                <?php foreach ($brand as $k => $v): ?>
                                    <option value="<?php echo $v->id; ?>"><?php echo $v->name; ?></option>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </select>

                        <textarea class="form-control" required style="height:260px;" name="makeModels" spellcheck="false"></textarea>
                        &nbsp;
                        <div class="alert alert-info">Put one or more brand name as "," (comma) separated. Like MarutiSuzuki,Honda,Nissan</div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Model modal end here -->
   
    <!-- Sub Model modal start here -->
    <div id="subModelModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form action="<?php echo base_url().'manufacturer/submodelcreate/'; ?>" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Sub Model</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <b>Select Brand</b>
                        </p>
                        <select class="form-control brandListss" name="brand" required>
                            <option value="selectBrand">---Select Brand---</option>
                            <?php if($brand): ?>
                                <?php foreach ($brand as $k => $v): ?>
                                    <option value="<?php echo $v->id; ?>"><?php echo $v->name; ?></option>
                                <?php endforeach ?>
                            <?php endif; ?>
                        </select>

                        &nbsp;
                        <p>
                            <b>Select Model</b>
                        </p>

                        <select class="form-control" id="modelsLists" name="modelId" required></select>

                        &nbsp;

                        <textarea class="form-control" required style="height:260px;" name="submodels" spellcheck="false"></textarea>

                        &nbsp;
                        <div class="alert alert-info">Put one or more brand name as "," (comma) separated. Like MarutiSuzuki,Honda,Nissan</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

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


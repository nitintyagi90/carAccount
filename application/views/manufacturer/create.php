<?php include('header.php'); ?>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-body">

                            <table id="datatable-zero" class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Parient</th>
                                    <th>Sub Parient</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Honda</td>
                                    <td>Make</td>
                                    <td>No Parient</td>
                                    <td>No Sub Parient</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
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
            <form action="">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Make (Brand)</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Enter Make">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
            <form action="">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Model</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 m-t-10">
                                <select name="" class="form-control">
                                    <option value="">Select Make</option>
                                </select>
                            </div>
                            <div class="col-md-12 m-t-10">
                                <input type="text" class="form-control" placeholder="Enter Model">
                            </div>
                        </div>
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
            <form action="">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Sub Model</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 m-t-10">
                                <select name="" class="form-control">
                                    <option value="">Select Make</option>
                                </select>
                            </div>
                            <div class="col-md-12 m-t-10">
                                <select name="" class="form-control">
                                    <option value="">Select Model</option>
                                </select>
                            </div>
                            <div class="col-md-12 m-t-10">
                                <input type="text" class="form-control" placeholder="Enter Sub Model">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Add</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Sub Model modal end here -->

<?php include('footer.php'); ?>
<div id="fuel" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form action="<?php echo base_url().'Manufacturer/color_create/'; ?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Fuel Type</h4>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" required style="height:260px;" name="utility_name" spellcheck="false"></textarea>
                    &nbsp; <input type="hidden" value="fuel" name="type">
                    <div class="alert alert-info">Put one or more Fuel name as "," (comma) separated. Like Petrol,Electric</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

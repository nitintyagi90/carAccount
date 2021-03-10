<script>


$(document).ready(function () {

var d = new Date();
var strDate = d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear();
$('.current_date').val(strDate);


$('.dealer').change(function() {
    var $this = $(this);
    var user_id = $this.val();
    if(user_id==='0'){
        // $('.purchase_entry').hide();

    }else{
        $.ajax({
            type:"POST",
            url : "<?php echo base_url('Refurbishment/user_detail');?>",
            data: {user_id : user_id},
            success : function(data) {
                var json = $.parseJSON(data);
                if(json.status==200){
                    $('.dealer_comapny_lebel').hide();
                    $('.dealer_name_lebel').hide();
                    $('.user_location_label').hide();
                    var user_company = json.data.user_company;
                    var user_name = json.data.user_name;
                    var user_location = json.data.user_location;
                    $('.dealer_name').val(user_name);
                    $('.dealer_company').val(user_company);
                    $('.user_location').val(user_location);
                    $('.purchase_entry').show();
                }else{
                    alert('somthing went wrong!')
                }

            }
        });
    }


});
</script>
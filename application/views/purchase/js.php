<script>

    $(document).ready(function () {
        $('.dealer').change(function() {
            var $this = $(this);
            var user_id = $this.val();
            if(user_id==='0'){
                $('.purchase_entry').hide();

            }else{
                $.ajax({
                    type:"POST",
                    url : "<?php echo base_url('purchase/user_detail');?>",
                    data: {user_id : user_id},
                    success : function(data) {
                        var json = $.parseJSON(data);
                        if(json.status==200){
                            $('.dealer_comapny_lebel').hide();
                            $('.dealer_name_lebel').hide();
                            var user_company = json.data.user_company;
                            var user_name = json.data.user_name;
                            $('.dealer_name').val(user_name);
                            $('.dealer_company').val(user_company);
                            $('.purchase_entry').show();
                        }else{
                            alert('somthing went wrong!')
                        }

                    }
                });
            }


        });

        $('.state1').change(function () {
            var id = $(this).val();
            var $mySelect = $('.citydata2');
            if(id==0){
                $($mySelect)
                    .find('option')
                    .hide()
                    .end()
                    .append('<option value="0">No Record Found!</option>');
                return
            }
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>purchase/getcity',
                data: {
                    'id': id
                },
                success: function (data) {
                    var jsonParseRe = JSON.parse(data);
                    $($mySelect).empty();
                    if(jsonParseRe.status==200){
                        $.each(jsonParseRe.subcategory, function(key, value) {
                            var thing = '<option value="'+value.id+'">'+ value.city +'</option>';
                            $($mySelect).append(thing);
                        });
                    }
                }
            });

        });
        $('.state2').change(function () {
            var id = $(this).val();
            var $mySelect = $('.citydata1');
            if(id==0){
                $($mySelect)
                    .find('option')
                    .hide()
                    .end()
                    .append('<option value="0">No Record Found!</option>');
                return
            }
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>purchase/getcity',
                data: {
                    'id': id
                },
                success: function (data) {
                    var jsonParseRe = JSON.parse(data);
                    $($mySelect).empty();
                    if(jsonParseRe.status==200){
                        $.each(jsonParseRe.subcategory, function(key, value) {
                            var thing = '<option value="'+value.id+'">'+ value.city +'</option>';
                            $($mySelect).append(thing);
                        });
                    }
                }
            });

        });
        $('.brandListss').change(function () {
            var id = $(this).val();
            var $mySelect = $('.modelsLists');
            if(id==0){
                $($mySelect)
                    .find('option')
                    .hide()
                    .end()
                    .append('<option value="0">No Record Found!</option>');
                return
            }
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>purchase/getModel',
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


                    }


                }
            });

        });

        $('.modelsLists').change(function () {
            var id = $(this).val();
            var $mySelect = $('.submodeldata');
            if(id==0){
                $($mySelect)
                    .find('option')
                    .hide()
                    .end()
                    .append('<option value="0">No Record Found!</option>');
                return
            }
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>purchase/getSubModel',
                data: {
                    'id': id
                },
                success: function (data) {
                    var jsonParseRe = JSON.parse(data);
                    $($mySelect).empty();
                    if(jsonParseRe.status==200){
                        $.each(jsonParseRe.subcategory, function(key, value) {
                            var thing = '<option value="'+value.id+'">'+ value.submodel +'</option>';
                            $($mySelect).append(thing);
                        });
                    }
                }
            });

        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showupload').show();
                    $('#blah').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
            $('.hideupload').hide();
        });



        $('.hidePreview').click(function (event) {
            event.preventDefault();
            $('.showupload').hide();
            $('.hideupload').show();
            $('#imgInp').val('');
        });

        $(".finance-option").change(function(){
            var $this = $(this);
            var value = $this.val();
            if(value=='Yes'){
                $('.financedBlock').show();

            }else{
                $('.financedBlock').hide();

            }
        });

        $(".insurance-option").change(function(){
            var $this = $(this);
            var value = $this.val();
            if(value=='Yes'){
                $('.insuranceBlock').show();

            }else{
                $('.insuranceBlock').hide();

            }
        });
        $(".warranty-option").change(function(){
            var $this = $(this);
            var value = $this.val();
            if(value=='Yes'){
                $('.warrantyBlock').show();

            }else{
                $('.warrantyBlock').hide();

            }
        });



        $(".purchase-type").change(function(e){
            var $this = $(this);
            var value = $this.val();
            if(value=='same'){

                var rc_pincode = $('#rc_pincode').val();
                var rc_landmark = $('#rc_landmark').val();
                var rc_state= $(".state1 option:selected" ).text();
                var rc_city= $(".citydata2 option:selected" ).text();
                var rc_address = $('#rc_address').val();
                var rc_pan = $('#rc_pan').val();
                var rc_email = $('#rc_email').val();
                var rc_mobile = $('#rc_mobile').val();
                var rc_name = $('#rc_name').val();
                $('.purchase_rc').hide();
                $('.purchase_mobile').hide();
                $('.purchase_email').hide();
                $('.purchase_pan').hide();
                $('.purchase_address').hide();
                $('.purchase_landmark').hide();
                $('.purchase_pincode').hide();

                $('#purchase_rc').val(rc_name);
                $('#purchase_mobile').val(rc_mobile);
                $('#purchase_email').val(rc_email);
                $('#purchase_pan').val(rc_pan);
                $('#purchase_address').val(rc_address);
                $('#purchase_landmark').val(rc_landmark);
                $('#purchase_pincode').val(rc_pincode);
                var thing = '<option selected value="'+rc_state+'">'+ rc_state +'</option>';
                var thin2 = '<option selected value="'+rc_city+'">'+ rc_city +'</option>';
                $('.state2').empty();
                $('.citydata1').empty();
                $('.state2').append(thing);
                $('.citydata1').append(thin2);

            }else{

                $('.purchase_rc').show();
                $('.purchase_mobile').show();
                $('.purchase_email').show();
                $('.purchase_pan').show();
                $('.purchase_address').show();
                $('.purchase_landmark').show();
                $('.purchase_pincode').show();

                $('#purchase_rc').val('');
                $('#purchase_mobile').val('');
                $('#purchase_email').val('');
                $('#purchase_pan').val('');
                $('#purchase_address').val('');
                $('#purchase_landmark').val('');
                $('#purchase_pincode').val('');
                var thing = '';
                var thin2 = '';
                $('.state2').empty();
                $('.citydata1').empty();
                $('.state2').append(thing);
                $('.citydata1').append(thin2)

            }


        });
    });





</script>

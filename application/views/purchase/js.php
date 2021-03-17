<script>

    $(document).ready(function () {

        var d = new Date();
        var strDate = d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear();
        $('.current_date').val(strDate);


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

        $('.state1').change(function () {
            var id = $("option:selected", this).attr("data-id");
            var $mySelect = $('.citydata2');
            if(id===undefined){
                var thing2 = '<option value="0">--Select City--</option>';
                $($mySelect).empty();
                $($mySelect).append(thing2);
            }else{
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
                                var thing = '<option value="'+value.city+'">'+ value.city +'</option>';
                                $($mySelect).append(thing);
                            });
                        }
                    }
                });
            }


        });
        $('.state2').change(function () {
            var id = $("option:selected", this).attr("data-id");
            var $mySelect = $('.citydata1');
            if(id===undefined){
                var thing2 = '<option value="0">--Select City--</option>';
                $($mySelect).empty();
                $($mySelect).append(thing2);
            }else{
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
                                var thing = '<option value="'+value.city+'">'+ value.city +'</option>';
                                $($mySelect).append(thing);
                            });
                        }
                    }
                });

            }

        });
        $('.brandListss').change(function () {
            var id = $("option:selected", this).attr("data-id");
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
                            var thing = '<option data-id="'+value.id+'" value="'+value.name+'">'+ value.name +'</option>';
                            $($mySelect).append(thing);
                        });


                    }


                }
            });

        });

        $('.modelsLists').change(function () {
            var id = $("option:selected", this).attr("data-id");
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
                            var thing = '<option data-id="'+value.id+'" value="'+value.submodel+'">'+ value.submodel +'</option>';
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

            }else if(value==="0"){
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

            }else if(value==="0"){
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

            }else if(value==="0"){
                $('.warrantyBlock').show();

            }else{
                $('.warrantyBlock').hide();

            }
        });



        $(".purchase-type").change(function(e){
            var $this = $(this);
            var value = $this.val();


            if(value=='dealership'){
                $('.purchase_rc').text('Dealership Name')
            }

            if(value=='third_Party'){
                $('.purchase_rc').text('Third Party Name')
            }

            if(value=='Dealer'){
                $('.purchase_rc').text('Dealer Name')
            }


            if(value=='same'){
                $('.kyc').hide();
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
                $('.p-state-city').hide();
                $('.p-state-city-same').show();
                $('#purchase_rc').val(rc_name);
                $('#purchase_mobile').val(rc_mobile);
                $('#purchase_email').val(rc_email);
                $('#purchase_pan').val(rc_pan);
                $('#purchase_address').val(rc_address);
                $('#purchase_landmark').val(rc_landmark);
                $('#purchase_pincode').val(rc_pincode);
                var thing = '<option selected value="'+rc_state+'">'+ rc_state +'</option>';
                var thin2 = '<option selected value="'+rc_city+'">'+ rc_city +'</option>';
                $('.state2-same').empty();
                $('.citydata1-same').empty();
                $('.state2-same').append(thing);
                $('.citydata1-same').append(thin2);

            }else{
                $('.p-state-city').show();
                $('.p-state-city-same').hide();
                $('.kyc').show();
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


            }


        });


        $('.commission').keyup(function() {
            var sum = 0;
            var n1 = 0;
            var n2 = 0;
            n1 = parseInt($('.commission').val());
            n2 = parseInt($('.purchase-price').val());
            sum = n1 + n2;
            if(isNaN(sum)) {
                sum = 0
            }
            $('.purchase-label').remove();
            $('.total-price').val(sum);
        });
        $('.purchase-price').keyup(function() {
            var sum = 0;
            var n1 = 0;
            var n2 = 0;
           // n1 = parseInt($('.commission').val());
            n2 = parseInt($('.purchase-price').val());
            sum = n1 + n2;
            if(isNaN(sum)) {
                sum = 0
            }
            $('.purchase-label').remove();
            $('.total-price').val(sum);
        });


    });


  
  
     
   


</script>

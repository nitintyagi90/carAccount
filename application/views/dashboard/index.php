<div class="container-fluid right_color">
    <div class="page-main-header">
        <!-- Page Title -->
        <h2 class="page-name-title">Dashboard</h2>
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>      
    <div class='selector'>
                <ul>
                    <li>
                    <a href="#" for='c1' style="color:red" title="Purchase"> <img src="<?php echo base_url('assets/');?>global/images/push.png" alt="" alt="hii" srcset=""> </a>
                    <!--<a href="#" for='c1' style="color:red" title="Purchase"> <i class="fa fa-car fa-4x"></i> </a>-->
                    </li>
                    <li>
                    <a href="#" for='c2' style="color:green" title="Sales"><i class="fa fa-car fa-4x" alt="hii"></i></a>
                    </li>
                    <li>
                    <a href="#" for='c3' style="color:yellow" title="R.T.O"><i class="fa fa-car fa-4x"></i></a>
                    </li>
                    <li>
                    <a href="#" for='c1' style="color:red" title="Purchase"> <img src="<?php echo base_url('assets/');?>global/images/push.png" alt="" alt="hii" srcset=""> </a>
                   
                   <!-- <a href="#" for='c4' style="color:blue" title="Warranty"><i class="fa fa-car fa-4x"></i></a>-->
                    </li>
                    <li>
                    <a href="#" for='c5' style="color:orange" title="Insurance"><i class="fa fa-car fa-4x"></i></a>
                    </li>
                    <li>
                    <a href="#" for='c6'><i class="fa fa-car fa-4x" title="Group"></i></a>
                    </li>
                    <li>
                    <a href="#" for='c7' style="color:pink" title="User"><i class="fa fa-car fa-4x"></i></a>
                    </li>
                    <li>
                    <a href="#" for='c8' title="Payment"><i class="fa fa-car fa-4x"></i></a>
                    </li>
                </ul>
                <button><img src="<?php echo base_url('assets/');?>global/images/push.png" alt=""></button>
            </div>

</div>

<script>
	var nbOptions = 8;
    var angleStart = -360;

    // jquery rotate animation
    function rotate(li,d) {
        $({d:angleStart}).animate({d:d}, {
            step: function(now) {
                $(li)
                .css({ transform: 'rotate('+now+'deg)' })
                .find('label')
                    .css({ transform: 'rotate('+(-now)+'deg)' });
            }, duration: 0
        });
    }

    // show / hide the options
    function toggleOptions(s) {
        $(s).toggleClass('open');
        var li = $(s).find('li');
        var deg = $(s).hasClass('half') ? 180/(li.length-1) : 360/li.length;
        for(var i=0; i<li.length; i++) {
            var d = $(s).hasClass('half') ? (i*deg)-90 : i*deg;
            $(s).hasClass('open') ? rotate(li[i],d) : rotate(li[i],angleStart);
        }
    }

    $('.selector button').click(function(e) {
        toggleOptions($(this).parent());
    });

    setTimeout(function() { toggleOptions('.selector'); }, 100);//@ sourceURL=pen.js
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

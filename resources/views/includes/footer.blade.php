<!--footer-->
<footer>
    <div class="w3l-footer-bottom">
        <div class="container-fluid">
            <div class="col-md-4 w3-footer-logo">
                <h2><a href="index.html">ONLINE RECHARGE</a></h2>
            </div>
            <div class="col-md-8 agileits-footer-class">
                <p >© 2017 Online Recharge. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</footer>
<!--//footer-->

<!-- for bootstrap working -->
<script src="{{ asset('/public/assets/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working --><!-- Responsive-slider -->
<!-- Banner-slider -->
<script src="{{ asset('/public/assets/js/responsiveslides.min.js') }}"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- //Banner-slider -->
<!-- //Responsive-slider -->
<!-- Bootstrap select option script -->
<script src="{{ asset('/public/assets/js/bootstrap-select.js') }}"></script>
<script>
    $(document).ready(function () {
        var mySelect = $('#first-disabled2');

        $('#special').on('click', function () {
            mySelect.find('option:selected').prop('disabled', true);
            mySelect.selectpicker('refresh');
        });

        $('#special2').on('click', function () {
            mySelect.find('option:disabled').prop('disabled', false);
            mySelect.selectpicker('refresh');
        });

        $('#basic2').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });
    });
</script>
<!-- //Bootstrap select option script -->

<!-- easy-responsive-tabs -->
<link rel="stylesheet" type="text/css" href="{{ asset('/public/assets/css/easy-responsive-tabs.css') }}" />
<script src="{{ asset('/public/assets/js/easyResponsiveTabs.js') }}"></script>
<!-- //easy-responsive-tabs -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('/public/assets/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/assets/js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</body>
<!-- //body -->
</html>
<!-- //html -->
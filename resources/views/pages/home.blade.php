@extends('layouts.app')
@section('content')
    <!--Plug-in Initialisation-->
    <script type="text/javascript">
        $(document).ready(function() {

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //Categories -->


    <!--phone-->
    <div class="phone" id="mobileappagileits">
        <div class="container">
            <div class="col-md-6">
                <img src="{{ asset('/public/assets/images/ph1.png') }}" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-6 phone-text">
                <h4>Online Payment mobile app on your smartphone!</h4>
                <p class="subtitle">Simple and Fast Payments</p>
                <div class="text-1">
                    <h5>Recharge</h5>
                    <p>Recharge your Mobile, DTH, Datacard etc...</p>
                </div>
                <div class="text-1">
                    <h5>Paybills</h5>
                    <p>Pay your Bills(Electricity, Water, Gas, Broadband, Landline etc...)</p>
                </div>
                <div class="text-1">
                    <h5>Book Online</h5>
                    <p>Book Online Tickets(Movies, Bus, Train etc...)</p>
                </div>
                <div class="agileinfo-dwld-app">
                    <h6>Download The App :
                        <a href="#"><i class="fa fa-apple"></i></a>
                        <a href="#"><i class="fa fa-windows"></i></a>
                        <a href="#"><i class="fa fa-android"></i></a>
                    </h6>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="wthree-mobile-app">
                <form action="#" method="get">
                    <input class="text" type="tel" name="tel" placeholder="Enter Your Mobile Number" required="">
                    <input type="submit" value="Send Download Link">
                </form>
            </div>
        </div>
    </div>
    <!--//phone-->




    <!--offers-->
    <div class="w3-offers">
        <div class="container">
            <div class="w3-agile-offers">
                <h3>the best offers</h3>
                <p>Contrary to popular belief
                    , Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
        </div>
    </div>
    <!--//offers-->

    <!--partners-->
    <div class="w3layouts-partners">
        <h3>We are accepted at</h3>
        <div class="container">
            <ul>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg1.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg2.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg3.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg4.png') }}" alt=""></a></li>
            </ul>
            <ul>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg5.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg6.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg7.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg8.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-responsive" src="{{ asset('/public/assets/images/lg9.png') }}" alt=""></a></li>
            </ul>
        </div>
    </div>
    <!--//partners-->

    <!-- subscribe -->
    <div class="w3-subscribe agileits-w3layouts">
        <div class="container">
            <div class="col-md-6 social-icons w3-agile-icons">
                <h4>Join Us</h4>
                <ul>
                    <li><a href="#" class="fa fa-facebook sicon facebook"> </a></li>
                    <li><a href="#" class="fa fa-twitter sicon twitter"> </a></li>
                    <li><a href="#" class="fa fa-google-plus sicon googleplus"> </a></li>
                    <li><a href="#" class="fa fa-dribbble sicon dribbble"> </a></li>
                    <li><a href="#" class="fa fa-rss sicon rss"> </a></li>
                </ul>
            </div>
            <div class="col-md-6 w3-agile-subscribe-right">
                <h3 class="w3ls-title">Subscribe to Our <br><span>Newsletter</span></h3>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Enter your Email..." required="">
                    <input type="submit" value="Subscribe">
                    <div class="clearfix"> </div>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //subscribe -->

@endsection
@extends('layouts.app')
@section('content')
    <div class="categories-section main-grid-border" id="mobilew3layouts">
        <div class="container">
            <div class="category-list">
                <div id="parentVerticalTab">
                    <div class="agileits-tab_nav">
                        <ul class="resp-tabs-list hor_1">
                            <li><i class="icon fa fa-mobile" aria-hidden="true"></i>Mobile</li>
                        </ul>
                    </div>
                    <div class="resp-tabs-container hor_1">
                        <!-- tab1 -->
                        <div>
                            <div class="tabs-box">

                                <img src="{{ asset('/public/assets/images/mobile.png') }}" class="w3ls-mobile" alt="" data-pin-nopin="true">
                                <ul class="tabs-menu">
                                    <li><a href="#tab1"><label class="radio"><input type="radio" name="radio" checked=""><i></i>Prepaid</label></a></li>
                                    <li><a href="#tab2"><label class="radio"><input type="radio" name="radio"><i></i>Postpaid</label></a></li>
                                </ul>
                                <div class="clearfix"> </div>
                                <div class="tab-grids">
                                    <div id="tab1" class="tab-grid">
                                        <div class="login-form">
                                            <form action="pay.html" method="post" class="signup">
                                                <ol>
                                                    <li>
                                                        <h4>Enter your mobile number</h4>
                                                        <input type="tel" class="tel" name="tel" pattern="\d{10}" placeholder="Enter Mobile Number" required="required" />
                                                        <p class="validation01">
                                                            <span class="invalid">Please enter a valid mobile number</span>
                                                            <span class="valid">That's what we wanted!</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <div class="agileits-select">
                                                            <select class="selectpicker show-tick" data-live-search="true" required="required" >
                                                                <option data-tokens="Select Operator">Select Operator</option>
                                                                <option data-tokens="Airtel">Airtel</option>
                                                                <option data-tokens="Aircel">Aircel</option>
                                                                <option data-tokens="BSNL">BSNL</option>
                                                                <option data-tokens="Tata Docomo">Tata Docomo</option>
                                                                <option data-tokens="Reliance GSM">Reliance GSM</option>
                                                                <option data-tokens="Reliance CDMA">Reliance CDMA</option>
                                                                <option data-tokens="Telenor">Telenor</option>
                                                                <option data-tokens="Jio">Jio</option>
                                                                <option data-tokens="Vodafone">Vodafone</option>
                                                                <option data-tokens="Idea">Idea</option>
                                                                <option data-tokens="MTS">MTS</option>
                                                            </select>
                                                        </div>
                                                    </li><br/>
                                                    <li>
                                                        <div class="agileits-select">
                                                            <select class="selectpicker show-tick" data-live-search="true" required="required" >
                                                                <option data-tokens="Select Circle">Select Circle</option>
                                                                <option data-tokens="Chennai">Chennai</option>
                                                                <option data-tokens="Delhi NCR">Delhi NCR</option>
                                                                <option data-tokens="Kolkata">Kolkata</option>
                                                                <option data-tokens="Mumbai">Mumbai</option>
                                                                <option data-tokens="Maharashtra & Goa">Maharashtra & Goa</option>
                                                                <option data-tokens="Assam">Assam</option>
                                                                <option data-tokens="Bihar & Jharkhand">Bihar & Jharkhand</option>
                                                                <option data-tokens="Gujarat">Gujarat</option>
                                                                <option data-tokens="Haryana">Haryana</option>
                                                                <option data-tokens="Himachal Pradesh">Himachal Pradesh</option>
                                                                <option data-tokens="Jummu & Kashmir">Jummu & Kashmir</option>
                                                                <option data-tokens="Karnataka">Karnataka</option>
                                                                <option data-tokens="Kerala">Kerala</option>
                                                                <option data-tokens="Andhra Pradesh">Andhra Pradesh</option>
                                                                <option data-tokens="MP & Chattisgarh">MP & Chattisgarh</option>
                                                                <option data-tokens="North East">North East</option>
                                                                <option data-tokens="Orissa">Orissa</option>
                                                                <option data-tokens="Punjab">Punjab</option>
                                                                <option data-tokens="Rajasthan">Rajasthan</option>
                                                                <option data-tokens="Tamilnadu">Tamilnadu</option>
                                                                <option data-tokens="UP East">UP East</option>
                                                                <option data-tokens="UP West & Utterkhand">UP West & Utterkhand</option>
                                                                <option data-tokens="West Bengal">West Bengal</option>
                                                            </select>
                                                        </div>
                                                    </li><br/>
                                                    <li>
                                                        <input type="submit" class="submit" value="Recharge Now" />
                                                    </li>
                                                </ol>
                                            </form>

                                        </div>

                                    </div>
                                    <div id="tab2" class="tab-grid">
                                        <div class="login-form">
                                            <form action="pay.html" method="post" class="signup">
                                                <ol>
                                                    <li>
                                                        <h4>Enter your mobile number</h4>
                                                        <input type="tel" class="tel" name="tel" pattern="\d{10}" placeholder="Enter Mobile Number" required />
                                                        <p class="validation01">
                                                            <span class="invalid">Please enter a valid mobile number</span>
                                                            <span class="valid">That's what we wanted!</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <div class="agileits-select">
                                                            <select class="selectpicker show-tick" data-live-search="true">
                                                                <option data-tokens="Select Operator">Select Operator</option>
                                                                <option data-tokens="Airtel">Airtel</option>
                                                                <option data-tokens="Aircel">Aircel</option>
                                                                <option data-tokens="BSNL">BSNL</option>
                                                                <option data-tokens="Tata Docomo">Tata Docomo</option>
                                                                <option data-tokens="Reliance GSM">Reliance GSM</option>
                                                                <option data-tokens="Reliance CDMA">Reliance CDMA</option>
                                                                <option data-tokens="Telenor">Telenor</option>
                                                                <option data-tokens="Jio">Jio</option>
                                                                <option data-tokens="Vodafone">Vodafone</option>
                                                                <option data-tokens="Idea">Idea</option>
                                                                <option data-tokens="MTS">MTS</option>
                                                            </select>
                                                        </div>
                                                    </li><br/>
                                                    <li>
                                                        <div class="agileits-select">
                                                            <select class="selectpicker show-tick" data-live-search="true" required="required" >
                                                                <option data-tokens="Select Circle">Select Circle</option>
                                                                <option data-tokens="Chennai">Chennai</option>
                                                                <option data-tokens="Delhi NCR">Delhi NCR</option>
                                                                <option data-tokens="Kolkata">Kolkata</option>
                                                                <option data-tokens="Mumbai">Mumbai</option>
                                                                <option data-tokens="Maharashtra & Goa">Maharashtra & Goa</option>
                                                                <option data-tokens="Assam">Assam</option>
                                                                <option data-tokens="Bihar & Jharkhand">Bihar & Jharkhand</option>
                                                                <option data-tokens="Gujarat">Gujarat</option>
                                                                <option data-tokens="Haryana">Haryana</option>
                                                                <option data-tokens="Himachal Pradesh">Himachal Pradesh</option>
                                                                <option data-tokens="Jummu & Kashmir">Jummu & Kashmir</option>
                                                                <option data-tokens="Karnataka">Karnataka</option>
                                                                <option data-tokens="Kerala">Kerala</option>
                                                                <option data-tokens="Andhra Pradesh">Andhra Pradesh</option>
                                                                <option data-tokens="MP & Chattisgarh">MP & Chattisgarh</option>
                                                                <option data-tokens="North East">North East</option>
                                                                <option data-tokens="Orissa">Orissa</option>
                                                                <option data-tokens="Punjab">Punjab</option>
                                                                <option data-tokens="Rajasthan">Rajasthan</option>
                                                                <option data-tokens="Tamilnadu">Tamilnadu</option>
                                                                <option data-tokens="UP East">UP East</option>
                                                                <option data-tokens="UP West & Utterkhand">UP West & Utterkhand</option>
                                                                <option data-tokens="West Bengal">West Bengal</option>
                                                            </select>
                                                        </div>
                                                    </li><br/>
                                                    <li>
                                                        <div class="mobile-right ">
                                                            <h4>How Much To Pay?</h4>
                                                            <div class="mobile-rchge">
                                                                <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li><br/>
                                                    <li>
                                                        <input type="submit" class="submit" value="Pay bill" />
                                                    </li>
                                                </ol>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                            <!-- script -->
                            <script>
                                $(document).ready(function() {
                                    $("#tab2").hide();
                                    $(".tabs-menu a").click(function(event){
                                        event.preventDefault();
                                        var tab=$(this).attr("href");
                                        $(".tab-grid").not(tab).css("display","none");
                                        $(tab).fadeIn("slow");
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
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
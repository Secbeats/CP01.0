@extends('layouts.app')
@section('content')
    <div class="categories-section main-grid-border" id="mobilew3layouts">
        <div class="container">
            <div class="category-list">
                <div id="parentVerticalTab">
                    <div class="agileits-tab_nav">
                        <ul class="resp-tabs-list hor_1">
                            <li><i class="icon fa fa-mobile" aria-hidden="true"></i>Account Credit</li>
                            <li><i class="icon fa fa-lightbulb-o" aria-hidden="true"></i>Transaction History</li>
                            <li><i class="icon fa fa-phone" aria-hidden="true"></i>My Donee's</li>
                            <li><i class="icon fa fa-connectdevelop" aria-hidden="true"></i>Donation Requests</li>
                            <li><i class="icon fa fa-flask" aria-hidden="true"></i>My Profile</li>
                            <li><i class="icon fa fa-tint" aria-hidden="true"></i>How It Works</li>
                            <li><i class="icon fa fa-subway" aria-hidden="true"></i>Terms and Conditions</li>
                        </ul>
                    </div>
                    <div class="resp-tabs-container hor_1">
                        <!-- tab1 -->
                        <div>
                            <div class="tabs-box">
                                <img src="{{ asset('/assets/images/mobile.png') }}" class="w3ls-mobile" alt="" data-pin-nopin="true">
                                <div class="clearfix"> </div>
                                <div class="tab-grids">
                                    <div id="tab1" class="tab-grid">
                                        <div class="login-form">
                                            <form action="{{ url('/donator/account-credit') }}" method="post" id="signup">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="gender" class="col-sm-3 control-label">
                                                        Payment Medium</label>
                                                    <div class="col-sm-9">
                                                        <label class="radio-inline"><input type="radio" name="medium" value="bkash" checked> Bkash</label>
                                                        <label class="radio-inline"><input type="radio" name="medium" value="rocket"> Rocket</label>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div><br/>
                                                <ol>
                                                    <li>
                                                        <h4>Enter your mobile number</h4>
                                                        <input type="text" id="tel" name="mobile_no"  placeholder="Enter Mobile Number" required="required" />
                                                    </li>
                                                    <li>
                                                        <h4>Enter your pin</h4>
                                                        <input type="password" id="tel" name="pin_no" placeholder="Enter Pin Number" required="required" />
                                                    </li>
                                                    <li>
                                                        <div class="mobile-right ">
                                                            <h4>How Much To Donate?</h4>
                                                            <div class="mobile-rchge">
                                                                <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="user_role" value="donator">
                                                        <input type="hidden" name="type" value="credit">
                                                        <input type="hidden" name="status" value="requested">
                                                        <input type="hidden" name="reference" value="{{ Auth::user()->id }}">
                                                        <button type="submit" class="submit">Add Fund</button>
                                                        <button type="reset" class="submit">Cancel</button>
                                                    </li>
                                                </ol>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab-grid">
                                        <div class="login-form">
                                            <form action="pay.html" method="post" id="signup">
                                                <ol>
                                                    <li>
                                                        <h4>Enter your mobile number</h4>
                                                        <input type="tel" id="tel" name="tel" pattern="\d{10}" placeholder="Enter Mobile Number" required="required" />
                                                    </li>
                                                    <li>
                                                        <h4>Enter your pin</h4>
                                                        <input type="password" id="tel" name="tel" pattern="\d{10}" placeholder="Enter Pin Number" required="required" />
                                                    </li>
                                                    <li>
                                                        <div class="mobile-right ">
                                                            <h4>How Much To Donate?</h4>
                                                            <div class="mobile-rchge">
                                                                <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <input type="submit" class="submit" value="Add Fund" />
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
                                    $("#tab3").hide();
                                    $("#tab4").hide();
                                    $(".tabs-menu a").click(function(event){
                                        event.preventDefault();
                                        var tab=$(this).attr("href");
                                        $(".tab-grid").not(tab).css("display","none");
                                        $(tab).fadeIn("slow");
                                    });
                                });
                            </script>
                        </div>
                        <!-- /tab1 -->
                        <!-- tab4 -->
                        <div>
                            <i class="icon fa fa-lightbulb-o inner-icon" aria-hidden="true"></i>
                            <div id="tab2" class="tab-grid">
                                <div class="login-form">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Transaction Id</th>
                                                <th>Transaction Amount</th>
                                                <th>Payment Medium</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $count = 0
                                        @endphp
                                        @if(isset($trans))
                                        @foreach($trans as $t)
                                            @php $count++ @endphp
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{ $t->transaction_id }}</td>
                                                <td>{{ $t->amount }}</td>
                                                <td>{{ $t->medium }}</td>
                                            </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /tab4 -->


                        <!-- tab5 -->
                        <div>
                            <i class="icon fa fa-phone inner-icon" aria-hidden="true"></i>
                            <div id="tab2" class="tab-grid">
                                <div class="login-form">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Donee Name</th>
                                            <th>Amount Contributed</th>
                                            <th>Location</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mr. X</td>
                                            <td>50000</td>
                                            <td>Bashundhara R/A,Dhaka.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mr. Y</td>
                                            <td>10000</td>
                                            <td>Mirpur Rupnagar R/A,Dhaka.</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                        <!-- /tab5 -->
                        <!-- tab6 -->
                        <div>
                            <i class="icon fa fa-connectdevelop inner-icon" aria-hidden="true"></i>
                            <div id="tab2" class="tab-grid">
                                <div class="login-form">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Donee Name</th>
                                            <th>Amount Needed</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mr. X</td>
                                            <td>50000</td>
                                            <td>Bashundhara R/A,Dhaka.</td>
                                            <td>
                                                <button class="alert alert-success">Donate</button>
                                                <button class="alert alert-success">Details</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mr. Y</td>
                                            <td>10000</td>
                                            <td>Mirpur Rupnagar R/A,Dhaka.</td>
                                            <td>
                                                <button class="alert alert-success">Donate</button>
                                                <button class="alert alert-success">Details</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /tab6 -->

                        <!-- tab7 -->
                        <div>

                            <i class="icon fa fa-flask inner-icon" aria-hidden="true"></i>
                            <div id="tab2" class="tab-grid">
                                <div class="login-form">
                                    <form action="pay.html" method="post" id="signup">
                                        <ol>
                                            <li>
                                                <h4>Your Name</h4>
                                                <input type="text" id="customer" name="name" placeholder="Enter Your Name" required="required" />
                                            </li>
                                            <li>
                                                <h4>Your Email</h4>
                                                <input type="text" id="customer"  name="email" placeholder="youremail@domain.com" readonly>
                                            </li>
                                            <li>
                                                <input type="submit" class="submit" value="Update" />
                                            </li>
                                        </ol>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /tab7 -->

                        <!-- tab8 -->
                        <div>
                            <i class="icon fa fa-tint inner-icon" aria-hidden="true"></i>
                            <div id="tab2" class="tab-grid">
                                <div class="login-form">
                                    <!-- About-page -->
                                            <h3 class="w3-head">About Us</h3>
                                            <h6>What is Online Recharge?</h6>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. </p>
                                            <p> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance</p>
                                            <h6>Why Use Online Recharge?</h6>
                                            <ol start="1">
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution of letters, as opposed  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution of letters, as opposed  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
                                            </ol>
                                            <h6>We Promise:</h6>
                                            <ol start="1">
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing.</li>
                                            </ol>
                                    <!--//About-page-->
                                </div>
                            </div>
                        </div>
                        <!-- /tab8 -->

                        <!-- tab9 -->
                        <div>
                            <i class="icon fa fa-subway inner-icon" aria-hidden="true"></i>
                            <div id="tab2" class="tab-grid">
                                <div class="login-form">
                                    <!-- About-page -->
                                            <h3 class="w3-head">Terms And Conditions</h3>
                                            <h6>What is Online Recharge?</h6>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. </p>
                                            <p> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance</p>
                                            <h6>Why Use Online Recharge?</h6>
                                            <ol start="1">
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution of letters, as opposed  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution of letters, as opposed  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
                                            </ol>
                                            <h6>We Promise:</h6>
                                            <ol start="1">
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </li>
                                                <li>Lorem Ipsum is simply dummy text of the printing.</li>
                                            </ol>
                                    <!--//About-page-->
                                </div>
                            </div>
                        </div>
                        <!-- /tab9 -->

                        <!-- tab10 -->

                        <!-- /tab10 -->

                        <!-- tab11 -->

                        <!-- /tab11 -->

                        <!-- tab12 -->

                        <!-- /tab12 -->

                        <!-- tab13 -->

                        <!-- /tab13 -->
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
    @endsection
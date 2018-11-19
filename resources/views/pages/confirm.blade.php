@extends('layouts.confirm')
@section('content')
    <div class="agileits-inner-banner">
    </div>
    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="{{ url('/') }}"><i class="fa fa-home home_1"></i></a><span>Verification</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- Contact-page -->
    <!--contact-->
    <div class="contact-section w3layouts-content">
        <div class="container">
            <h3 class="w3-head">
                @if(isset($errors))
                    @foreach($errors as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
            </h3>
            <div class="contact-main">
                <div class="col-md-6 map">
                    <h3 class="w3-head">Dear Valuable User,Your Registration has been completed Successfully. Please Check your Email and verify your Identity to login within the next 24 hours.</h3>
                </div>
                <div class="col-md-6 contact-in">
                    <p class="sed-para"> Contact Information</p>
                    <p class="para1">For Queries and details, Get in touch with us: <a href="support.html">Help</a></p>
                    <div class="more-address">
                        <address>
                            <strong>Address</strong><br>
                            ipsum road, 5th cross,<br>
                            City, State,<br>
                            689861300<br>
                            Country<br>
                            <abbr title="Phone">P:</abbr> +899 54565 324, +568 66 548 9321
                        </address>
                        <address>
                            <strong>Email</strong><br>
                            <a href="mailto:icsathlone@gmail.com">onlinerecharge@example.com</a>
                        </address>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!--//contact-->
    @endsection
@extends('frontend.app')

@section('title')
    About Us
@stop

@section('content')
    <div class="cta2 arrow-down ">
        <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <h3 class="text-uppercase">About Us</h3>
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row margin-top-40 margin-bottom-40">
            <div class="col-lg-12">
                <div class="row about-me">
                    <div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
                        <div class="box-shadow shadow-effect-2">
                            <img class="img-responsive img-bordered full-width" src="frontend/img/people/img15-md.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="overflow-h">
                            <div class="pull-left">
                                <h2>MILTON AGUILERA</h2>
                                <span>President</span>
                            </div>
                            <ul class="social-icons pull-right">
                                <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                                <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                                <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                                <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                            </ul>
                        </div>
                        <p class="text-justify">Has  22 years of Aviation experience developed in leadership. His first experience was gained working in the warehouse receiving and shipping parts. He was introduced into sales a couple of years later where he excelled in Sales, Purchasing and Customer Service. Moving into Sales and Marketing is where he became the leading sales person he is now. His analytical and people skills are the perfect mix for proven successful business development and growth in the aerospace industries. As their VP of Business Development, he was the key element for many startup companies in the MRO industry transitioning them into very successful Repair Stations. His hard work and experience throughout the years has led him become the founder/owner of STAR- Sky Technics Aviation Repair.</p>
                        <br>
                        <div class="row">
                            <!-- Smallest Progress Bar -->
                            <div class="col-md-6 md-margin-bottom-40">
                                <h3 class="heading-xs">International Sales - 95%</h3>
                                <div class="progress progress-u progress-sm">
                                    <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%">
                                    </div>
                                </div>

                                <h3 class="heading-xs">Customer Service - 98%</h3>
                                <div class="progress progress-u progress-sm">
                                    <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                                    </div>
                                </div>
                            </div>
                            <!-- End Smallest Progress Bar -->

                            <!-- Smallest Progress Bar -->
                            <div class="col-md-6 md-margin-bottom-40">
                                <h3 class="heading-xs">Operations Manager - 96%</h3>
                                <div class="progress progress-u progress-sm">
                                    <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                                    </div>
                                </div>

                                <h3 class="heading-xs">Business Development - 97%</h3>
                                <div class="progress progress-u progress-sm">
                                    <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                                    </div>
                                </div>
                            </div>
                            <!-- End Smallest Progress Bar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

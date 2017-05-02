@extends('frontend.app')
@section('title')
    Welcome to STAR, Aviation repair shop in Miami
@stop
@section('content')

    <!--=== Slider ===-->
    <div class="ms-layers-template">
        <!-- masterslider -->
        <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
            <div class="ms-slide" style="z-index: 10;">
                <img src="frontend/img/sliders/Avion.png" data-src="frontend/img/sliders/Avion.png" alt="">
                <div class="ms-layer ms-promo-info color-light" style="top:130px"
                     data-effect="bottom(40)"
                     data-duration="2000"
                     data-delay="700"
                     data-ease="easeOutExpo"
                >Welcome
                </div>

                <div class="ms-layer ms-promo-info color-light" style="top:180px"
                     data-effect="bottom(40)"
                     data-duration="2000"
                     data-delay="1000"
                     data-ease="easeOutExpo"
                >SKY TECHNICS AVIATION REPAIRS
                </div>

                <div class="ms-layer ms-promo-sub color-light" style="top:280px"
                     data-effect="bottom(40)"
                     data-duration="2000"
                     data-delay="1300"
                     data-ease="easeOutExpo"
                >SYNONYM OF PROFESSIONALISM, EFFICIENCY <br> AND FIRST CLASS SERVICE
                </div>
            </div>

            <div class="ms-slide" style="z-index: 13">
                <img src="frontend/img/sliders/Avion2.png" data-src="frontend/img/sliders/Avion2.png" alt="">

                {{--<img class="ms-layer" src="frontend/img/mockup/hand-black-iphone-l.png" data-src="frontend/img/mockup/hand-black-iphone-l.png" alt=""--}}
                {{--style="bottom:-10px; left:15px; width:400px; height: auto;"--}}
                {{--data-effect="bottom(100)"--}}
                {{--data-duration="2000"--}}
                {{--data-ease="easeOutExpo"--}}
                {{--data-type="image"--}}
                {{--/>--}}

                {{--<h3 class="ms-layer ms-promo-info-in color-light"  style="left:450px; top:170px;"--}}
                {{--data-effect="right(40)"--}}
                {{--data-duration="2300"--}}
                {{--data-delay="1300"--}}
                {{--data-ease="easeOutExpo"--}}
                {{-->MOST</h3>--}}

                {{--<h3 class="ms-layer ms-promo-info-in color-darker"  style="left:450px; top:230px"--}}
                {{--data-effect="left(40)"--}}
                {{--data-duration="2300"--}}
                {{--data-delay="1400"--}}
                {{--data-ease="easeOutBack"--}}
                {{-->INCREDIBLE</h3>--}}

                {{--<h3 class="ms-layer ms-promo-info-in color-darker"  style="left:450px; top:290px"--}}
                {{--data-effect="left(40)"--}}
                {{--data-duration="2300"--}}
                {{--data-delay="1400"--}}
                {{--data-ease="easeOutBack"--}}
                {{-->NEW <span class="color-light">FEATURES</span></h3>--}}

                {{--<a class="ms-layer btn-u" style="left:450px; top:370px" href="#"--}}
                {{--data-effect="bottom(40)"--}}
                {{--data-duration="2000"--}}
                {{--data-delay="1300"--}}
                {{--data-ease="easeOutExpo"--}}
                {{-->LEARN MORE</a>--}}

                {{--<a class="ms-layer btn-u btn-u-dark" style="left:580px; top:370px" href="#"--}}
                {{--data-effect="bottom(40)"--}}
                {{--data-duration="2000"--}}
                {{--data-delay="1300"--}}
                {{--data-ease="easeOutExpo"--}}
                {{-->DOWNLOAD NOW</a>--}}
            </div>

            <div class="ms-slide" style="z-index: 12">
                <img src="frontend/img/sliders/Avion3.png" data-src="frontend/img/sliders/Avion3.png" alt="">

                {{--<div class="ms-layer video-box" style="bottom:125px; right:15px; width:650px; height:370px;"--}}
                {{--data-type="video"--}}
                {{--data-effect="rotate3dright(0,30,0,100,r)"--}}
                {{--data-duration="1500"--}}
                {{--data-ease="easeOutQuad"--}}
                {{-->--}}
                {{--<img class="ms-img-bordered" src="frontend/img/main/img20.jpg" data-src="frontend/img/main/img20.jpg" alt="">--}}
                {{--<iframe src="http://player.vimeo.com/video/70528799" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>--}}
                {{--</div>--}}

                {{--<h3 class="ms-layer ms-promo-info color-light"  style="left:10px; top:170px"--}}
                {{--data-effect="bottom(20)"--}}
                {{--data-duration="2300"--}}
                {{--data-delay="2300"--}}
                {{--data-ease="easeOutExpo"--}}
                {{-->AMAZING</h3>--}}

                {{--<h3 class="ms-layer ms-promo-info-in color-light"  style="left:10px; top:245px"--}}
                {{--data-effect="left(100)"--}}
                {{--data-duration="3300"--}}
                {{--data-delay="1900"--}}
                {{--data-ease="easeOutExpo"--}}
                {{--><span class="color-green">FEATURES</span></h3>--}}

                {{--<h3 class="ms-layer normal-title color-light"  style="left:10px; top:312px"--}}
                {{--data-effect="bottom(20)"--}}
                {{--data-duration="2300"--}}
                {{--data-delay="2000"--}}
                {{--data-ease="easeOutExpo"--}}
                {{-->UNIFY BOOTSTRAP TEMPLATE</h3>--}}

                {{--<p class="ms-layer ms-promo-sub ms-promo-sub-in color-light"  style="left:10px; top:360px"--}}
                {{--data-effect="right(40)"--}}
                {{--data-duration="2300"--}}
                {{--data-delay="2300"--}}
                {{--data-ease="easeOutExpo"--}}
                {{-->YOUTUBE, VIMEO AND CUSTOM <br> IFRAME SUPPORTED</p>--}}
            </div>
        </div>
        <!-- end of masterslider -->
    </div>
    <!--=== End Slider ===-->

    <!-- About Info -->
    <div class="container content-md">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <h2 class="title-v2">WE ARE STAR</h2>
                <p style="font-size: 16px;" class="text-justify">We put pride in everything we do here at STAR. When we
                    put our name on your aircraft parts, we are not just trying to do a job, its our duty to make sure
                    it is done with high quality.We are a new company but with many years of expertise and experience.
                    We meet compliance and high standards and provide professional work from technicians that have been
                    in the field for many years (15 +).</p>
                <p style="font-size: 16px;" class="text-justify">That is why we guarantee the best service around.Our
                    company holds itself to excellence and knows the importance of getting your aircraft up in the
                    air.</p><br>
                <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark">Read More</a>
                <a href="#" class="btn-u">View Our Work</a>
            </div>
            <div class="col-md-6 wow slideInRight">
                <img class="img-responsive" src="frontend/img/mockup/mockup1.png" alt="">
            </div>
        </div>
    </div>
    <!-- End About Info -->

    <!--=== Parallax Quote ===-->
    <div class="parallax-quote parallaxBg wow slideInUp">
        <div class="container">
            <div class="parallax-quote-in">
                <p style="font-size: 20px;">Sky Technics Aviation Repairs synonym of<span class="color-green"> PROFESSIONALISM, EFFICIENCY AND FIRST CLASS SERVICE.</span>
                    Those are our main qualities and principles of what we stand for.</p>
            </div>
        </div>
    </div>
    <!--=== End Parallax Quote ===-->

    <!--=== Service Blcoks ===-->
    <div class="container content-md">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center">OUR SERVICES</h2>
        </div>

        <!-- Service Blcoks -->
        <div class="row">
            <div class="col-md-4 md-margin-bottom-50">
                <div class="service-block-v7 wow bounceInLeft">
                    <i class="icon-settings"></i>
                    <h3 class="title-v3-bg text-uppercase">MRO Solution</h3>
                    <p class="text-justify">STAR state-of-the-art facilities and highly trained professionals allow us
                        to provide quality in-house maintenance and repair services. We can test, repair, and overhaul a
                        range of Avionic instruments, Electro Mechanical Components, Pneumatic components, Hydraulic
                        Components and Fuel Components.</p>
                    <br>
                    <a class="text-uppercase" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-50">
                <div class="service-block-v7 wow bounceInUp">
                    <i class="icon-layers"></i>
                    <h3 class="title-v3-bg text-uppercase">Trading</h3>
                    <p class="text-justify">We maintain and operate a large rotable spare parts pool in order to better
                        serve our customers. With a range of aircraft components on-hand, we can accelerate our repair
                        services through sales and exchanges as per the needs of each repair situation. By keeping an
                        eye on our clients' present and feature fleet requirements.</p>
                    <a class="text-uppercase" href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-block-v7 wow bounceInRight">
                    <i class="icon-plane"></i>
                    <h3 class="title-v3-bg text-uppercase">Military Solutions</h3>
                    <p class="text-justify">STAR is proud to assist military aircraft fleets with repairs, maintenance,
                        logistic support, and component supply solutions. Our professionals have the experience and
                        knowledge of Air Force Technical Orders and manuals to effectively and quickly repair military
                        avionics instruments and components and provide other.</p>
                    <a class="text-uppercase" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Service Blcoks ===-->

    <!--=== Carallax Counter v1 ===-->
    <div class="parallax-counter-v1 parallaxBg">
        <div class="container">
            <h2 class="title-v2 title-light title-center">SOME FACTS AND SERVICES</h2>

            <div class="margin-bottom-40"></div>

            <div class="row margin-bottom-10">
                <div class="col-sm-4 col-xs-6">
                    <div class="counters">
                        <span class="counter">10629</span>
                        <h4>Sales Parts</h4>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="counters">
                        <span class="counter">20367</span>
                        <h4>Inventory Parts</h4>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">26798</span>
                        <h4>Capabilities Parts</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Carallax Counter v1 ===-->

    <!--=== Team v4 ===-->
    <div class="container content-sm">
        <div class="headline-center margin-bottom-60">
            <h2>MEET OUR TEAM</h2>
        </div>

        <div class="row team-v4">
            <div class="col-md-3 col-sm-6 md-margin-bottom-50 wow slideInLeft">
                <img class="img-responsive" src="frontend/img/people/img15-md.jpg" alt="">
                <span>Milton Aguilera</span>
                <small>- President -</small>
                <ul class="list-inline team-social-v4">
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-50 wow slideInDown">
                <img class="img-responsive" src="frontend/img/people/img31-md.jpg" alt="">
                <span>Manuel Castañeda</span>
                <small>- Accountable Manager -</small>
                <ul class="list-inline team-social-v4">
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 sm-margin-bottom-50 wow slideInUp">
                <img class="img-responsive" src="frontend/img/people/img18-md.jpg" alt="">
                <span>Samuel Aburto</span>
                <small></small>
                <ul class="list-inline team-social-v4">
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 wow slideInRight">
                <img class="img-responsive" src="frontend/img/people/img37-md.jpg" alt="">
                <span>Jose Aburto</span>
                <small>- Purchasing Manager -</small>
                <ul class="list-inline team-social-v4">
                    <li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div><!--/end row-->
    </div>
    <!--=== End Team v4 ===-->
    <!--=== Map ===-->
    <div class="container-fluid">
        <div class="headline-center margin-bottom-60">
            <h2>LOCATION</h2>
        </div>
        <div class="row">
            <div id="mapa" class="col-xs-12 no-padding" style="margin-bottom: -50px;">
                <div class="capa-anti-eventos" onclick="style.display='none'"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1795.5234662284129!2d-80.31505614668801!3d25.834998763286904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDUwJzA1LjgiTiA4MMKwMTgnNTAuNiJX!5e0!3m2!1ses!2ses!4v1493399114818" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <style>
                    #mapa .capa-anti-eventos {
                        width: 600px;
                        height: 450px;
                        position: absolute;
                        cursor: pointer;
                    }
                </style>
            </div>
        </div>

    </div>
    <!--=== End Map ===-->
@stop

@push('scripts')
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        FancyBox.initFancybox();
        MSfullWidth.initMSfullWidth();
        OwlCarousel.initOwlCarousel();
    });
</script>
@endpush
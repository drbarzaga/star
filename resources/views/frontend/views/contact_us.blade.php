@extends('frontend.app')

@section('title')
    Contact Us
@stop

@push('styles')
<!-- Web Fonts -->
<link rel='stylesheet' type='text/css'
      href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

<link rel="stylesheet" href="{{asset('frontend/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
<link rel="stylesheet" href="{{asset('frontend/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
<!--[if lt IE 9]>
<link rel="stylesheet" href="{{asset('frontend/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css')}}"><![endif]-->

<!-- CSS Page Style -->
<link rel="stylesheet" href="{{asset('frontend/css/pages/page_contact.css')}}">

<!-- CSS Theme -->
<link rel="stylesheet" href="{{asset('frontend/css/theme-colors/blue.css')}}" id="style_color">
@endpush

@section('content')
    <div class="cta2 arrow-down ">
        <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <h3 class="text-uppercase">Contact Us</h3>
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </div>


    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30 wow slideInLeft">
                <div class="headline"><h2>Contact Form</h2></div>
                <form action="" method="post" id="sky-form3" class="sky-form sky-changes-3">
                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label class="label">Name</label>
                                <label class="input">
                                    <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="name" id="name">
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label">E-mail</label>
                                <label class="input">
                                    <i class="icon-append fa fa-envelope-o"></i>
                                    <input type="email" name="email" id="email">
                                </label>
                            </section>
                        </div>

                        <section>
                            <label class="label">Subject</label>
                            <label class="input">
                                <i class="icon-append fa fa-tag"></i>
                                <input type="text" name="subject" id="subject">
                            </label>
                        </section>

                        <section>
                            <label class="label">Message</label>
                            <label class="textarea">
                                <textarea rows="4" name="message" id="message"></textarea>
                            </label>
                        </section>

                    </fieldset>

                    <footer>
                        <button type="submit" class="btn-u">Send message</button>
                    </footer>

                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p>Your message was successfully sent!</p>
                    </div>
                </form>
            </div><!--/col-md-9-->

            <div class="col-md-3 wow slideInRight">
                <!-- Contacts -->
                <div class="headline"><h2>Contacts</h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="#"><i class="fa fa-home"></i>6232 NW 72 Ave,Miami FL 33166</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i>info@sta-repairs.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>305 885 7499</a></li>
                </ul>
            </div><!--/col-md-3-->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

    <div class="cta2 arrow-down ">
        <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <h3 class="text-uppercase">Location</h3>
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 no-padding map-container" style="margin-bottom: -50px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1795.5234662284129!2d-80.31505614668801!3d25.834998763286904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDUwJzA1LjgiTiA4MMKwMTgnNTAuNiJX!5e0!3m2!1ses!2ses!4v1493399114818"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@stop

@push('scripts')
<script>
    $('.map-container')
        .click(function () {
            $(this).find('iframe').addClass('clicked')
        })
        .mouseleave(function () {
            $(this).find('iframe').removeClass('clicked')
        });
</script>
@endpush
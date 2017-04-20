@extends('frontend.app')

@section('title')
    About Us
@stop

@section('content')
    <!--=== Interactive Slider ===-->
    <div class="breadcrumbs-v3 img-v1 text-center wow slideInDown">
        <div class="container">
            <h1>About Us</h1>
            <p>Unify is a clean and fully responsive</p>
        </div>
    </div>
    <!--=== End Interactive Slider ===-->

    <!--=== Title v1 ===-->
    <div class="container content-sm wow slideInDown">
        <div class="title-v1 no-margin-bottom">
            <p class="no-margin-bottom">Unify <strong>creative</strong> technology company providing key digital services. <br>
                Focused on helping our clients to build a <strong>successful</strong> business on web and mobile.</p>
        </div>
    </div>
    <!--=== End Title v1 ===-->

    <!--=== Service Block v4 ===-->
    <div class="service-block-v4">
        <div class="container content-sm">
            <div class="row">
                <div class="col-md-4 service-desc md-margin-bottom-50 wow slideInLeft">
                    <i class="icon-diamond"></i>
                    <h3>Design</h3>
                    <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                </div>
                <div class="col-md-4 service-desc md-margin-bottom-50 wow slideInUp">
                    <i class="icon-rocket"></i>
                    <h3>Development</h3>
                    <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                </div>
                <div class="col-md-4 service-desc wow slideInRight">
                    <i class="icon-support"></i>
                    <h3>Support</h3>
                    <p class="no-margin-bottom">Morbi ac placerat nibh, in vestibulum odio cras vel orci non dolor sagittis sollicitudin et eu jeriu ntesque.<br> Curabitur vitae augue </p>
                </div>
            </div><!--/end row-->
        </div><!--/end container-->
    </div>
    <!--=== End Service Block v4 ===-->

    <!--=== Parallax Counter v4 ===-->
    <div class="parallax-quote parallaxBg wow slideInUp">
        <div class="container">
            <div class="parallax-quote-in">
            </div>
        </div>
    </div>
    <!--=== End Parallax Counter v4 ===-->

    @include('frontend.partials.people-say')
@stop

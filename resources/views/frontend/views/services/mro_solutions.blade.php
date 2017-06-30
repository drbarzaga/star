@extends('frontend.app')

@section('title')
    MRO Solutions
@stop

@section('content')
    <div class="cta2 arrow-down ">
        <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <h3 class="text-uppercase">MRO Solutions</h3>
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </div>

    <section style="margin-top: 40px; margin-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="mt5 mb5 text-justify wow bounce" style="visibility: visible; animation-name: bounce;font-size: 15px;">
                        STAR state-of-the-art facilities and highly trained professionals allow us to provide quality in-house maintenance and repair services. We can test, repair, and overhaul a range of STAR instruments, Electro Mechanical Components, Pneumatic components, Hydraulic Components and Fuel Components. Our maintenance support includes repairs, optimization, logistics, 24/7 AOG support, and component management. With the right inventory and knowledge of aircraft manufacturing, we can effectively repair a range of aircraft components within warranty. In total, our collective decades of experience allow STAR to perform maintenance, services, and even complete overhauls on a tight schedule but at a competitive price.
                    </p>
                </div>
                <div class="col-sm-4">
                    {{--<div class="content-box content-box-bordered mt20-xs">--}}
                        {{--<img src="images/backgrounds/mros.jpg" class="img-responsive" style="width: 400px; height: 200px;" alt="">--}}
                    {{--</div>--}}
                    <h4>
                        <span class="fa fa-cogs mr15 fa-2x"></span> Services
                    </h4>
                    <hr class="hr-solid mt5">
                    <ul class="nav nav-pills nav-stacked mb30 m5">
                        <li><a href="{{ route('frontend.services.mro-solutions') }}" style="color:#000;">MRO solutions</a></li>
                        <li><a href="{{ route('frontend.services.trading') }}" style="color:#000;">Trading</a></li>
                        <li><a href="{{ route('frontend.services.military-solutions') }}" style="color:#000;">Military solutions</a></li>
                    </ul>;
                </div>
            </div>
        </div>
    </section>
@endsection
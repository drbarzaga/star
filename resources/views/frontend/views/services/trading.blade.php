@extends('frontend.app')

@section('title')
    Trading
@stop

@section('content')
    <div class="cta2 arrow-down ">
        <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <h3 class="text-uppercase">Trading</h3>
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
                        We maintain and operate a large rotable spare parts pool in order to better serve our customers. With a range of aircraft components on-hand, we can accelerate our repair services through sales and exchanges as per the needs of each repair situation. By keeping an eye on our clients’ present and future fleet requirements, we keep our inventory stocked to match their needs. When we do not have a piece on hand for an unexpected repair, we rely on our extensive trading and purchasing network to procure a high-quality replacement component as soon as possible and at the best price. Our customers rarely ever have to endure long waits for a part. Through our effective inventory and trading system, we powerfully expedite AOG jobs and other rush needs.
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
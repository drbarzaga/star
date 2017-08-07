@extends('frontend.app')

@section('title')
    Certifications
@stop

@push('styles')
<link rel="stylesheet" href="{{asset('frontend/css/fluid-gallery.css')}}">
@endpush

@section('content')
    <div class="cta2 arrow-down ">
        <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <h3 class="text-uppercase">Certifications</h3>
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-8 col-md-3">
                    <a class="lightbox" href="frontend/docs/AIR.pdf" target="_blank">
                        <img src="frontend/img/docs/air3.png" alt="Bridge" style="border-radius: 190px;">
                    </a>
                </div>
                <div class="col-sm-8 col-md-3">
                    <a class="lightbox" href="frontend/docs/EASA.pdf" target="_blank">
                        <img src="frontend/img/docs/EASA.png" alt="Bridge" style="border-radius: 190px;">
                    </a>
                </div>
                <div class="col-sm-8 col-md-3">
                    <a class="lightbox" href="frontend/docs/FAA.pdf" target="_blank">
                        <img src="frontend/img/docs/FAA.png" alt="Bridge" style="border-radius: 190px;">
                    </a>
                </div>
                <div class="col-sm-8 col-md-3">
                    <a class="lightbox" href="frontend/docs/FAA_DRUG.pdf" target="_blank">
                        <img src="frontend/img/docs/FAA.png" alt="Bridge" style="border-radius: 190px;">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="frontend/docs/AIR.pdf" target="_blank"><i class="fa fa-download"></i> FAA</a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="frontend/docs/EASA.pdf" target="_blank"><i class="fa fa-download"></i> EASA</a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="frontend/docs/FAA.pdf" target="_blank"><i class="fa fa-download"></i> OSPCE</a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="frontend/docs/FAA_DRUG.pdf" target="_blank"><i class="fa fa-download"></i> FAA DRUG</a>
                </div>
            </div>
        </div>
    </div>
@endsection
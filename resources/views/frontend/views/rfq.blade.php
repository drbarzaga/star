@extends('frontend.app')

@section('title')
    RFQ
@stop

@section('content')
    <div class="cta2 arrow-down ">
        <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <h3 class="text-uppercase">RFQ</h3>
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </div>
    <div class="container content-md">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center ">
                    <p class="c-white text-left" style="padding-left: 25px;font-size: 15px;">
                        NEED A QUOTE? Complete the following form and one of our sales representatives will get back to you shortlhy. Please make sure to add P/N, S/N, and QTY needed.
                    </p>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-7">
                    <form role="form" id="form-contact" novalidate="novalidate" class="bv-form" style="border-left: 1px solid #bd2828;padding-left: 35px;"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                        <div class="form-group has-feedback">
                            <input type="text" name="name" placeholder="Name" class="form-control" id="InputName" data-bv-field="name"><i class="form-control-feedback bv-no-label" data-bv-icon-for="name" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;">The name is required</small></div>
                        <div class="form-group has-feedback">
                            <input type="email" name="email" placeholder="Email Address" class="form-control" id="InputEmail1" data-bv-field="email"><i class="form-control-feedback bv-no-label" data-bv-icon-for="email" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">The email is required</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small></div>
                        <div class="form-group has-feedback">
                            <textarea class="form-control" name="message" placeholder="Your Comment" id="InputMessage" rows="7" data-bv-field="message"></textarea><i class="form-control-feedback bv-no-label" data-bv-icon-for="message" style="display: none;"></i>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="message" data-bv-result="NOT_VALIDATED" style="display: none;">The message is required</small></div>
                        <button type="submit" class="btn btn-rw btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@stop
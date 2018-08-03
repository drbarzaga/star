@extends('frontend.app')

@section('title')
    Gallery
@stop

@push('styles')
    <style type="text/css">
        span img{
            min-height: 230px;
            max-height: 230px;
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="cta2 arrow-down ">
        <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
            <div class="row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    <h3 class="text-uppercase">Gallery</h3>
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </div>

    <div class="container content margin-top-40">
       <div class="row  margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img1.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 1">
                    <span><img class="img-responsive" src="frontend/img/gallery/img1.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img2.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 2">
                    <span><img class="img-responsive" src="frontend/img/gallery/img2.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="frontend/img/gallery/img3.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 3">
                    <span><img class="img-responsive" src="frontend/img/gallery/img3.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img4.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 4">
                    <span><img class="img-responsive" src="frontend/img/gallery/img4.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img5.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 5">
                    <span><img class="img-responsive" src="frontend/img/gallery/img5.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="frontend/img/gallery/img6.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 6">
                    <span><img class="img-responsive" src="frontend/img/gallery/img6.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img7.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
                    <span><img class="img-responsive" src="frontend/img/gallery/img7.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img8.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 8">
                    <span><img class="img-responsive" src="frontend/img/gallery/img8.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="frontend/img/gallery/img9.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 9">
                    <span><img class="img-responsive" src="frontend/img/gallery/img9.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img10.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
                    <span><img class="img-responsive" src="frontend/img/gallery/img10.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img11.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 8">
                    <span><img class="img-responsive" src="frontend/img/gallery/img11.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="frontend/img/gallery/img12.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 9">
                    <span><img class="img-responsive" src="frontend/img/gallery/img12.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img13.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
                    <span><img class="img-responsive" src="frontend/img/gallery/img13.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img14.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 8">
                    <span><img class="img-responsive" src="frontend/img/gallery/img14.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="frontend/img/gallery/img15.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 9">
                    <span><img class="img-responsive" src="frontend/img/gallery/img15.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img16.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
                    <span><img class="img-responsive" src="frontend/img/gallery/img16.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img17.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 8">
                    <span><img class="img-responsive" src="frontend/img/gallery/img17.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="frontend/img/gallery/img18.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 9">
                    <span><img class="img-responsive" src="frontend/img/gallery/img18.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img19.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
                    <span><img class="img-responsive" src="frontend/img/gallery/img19.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img20.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 8">
                    <span><img class="img-responsive" src="frontend/img/gallery/img20.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="frontend/img/gallery/img21.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 9">
                    <span><img class="img-responsive" src="frontend/img/gallery/img21.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img22.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
                    <span><img class="img-responsive" src="frontend/img/gallery/img22.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img23.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 8">
                    <span><img class="img-responsive" src="frontend/img/gallery/img23.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="frontend/img/gallery/img24.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 9">
                    <span><img class="img-responsive" src="frontend/img/gallery/img24.jpg" alt=""></span>
                </a>
            </div>
        </div>

        <div class="row margin-bottom-30">
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img25.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
                    <span><img class="img-responsive" src="frontend/img/gallery/img25.jpg" alt=""></span>
                </a>
            </div>
            <div class="col-sm-4 sm-margin-bottom-30">
                <a href="frontend/img/gallery/img26.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 8">
                    <span><img class="img-responsive" src="frontend/img/gallery/img26.jpg" alt=""></span>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    jQuery(document).ready(function() {
        FancyBox.initFancybox();
    });
</script>
@endpush

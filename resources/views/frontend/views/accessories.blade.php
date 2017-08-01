@extends('frontend.app')

@section('title')
   Accessories
@stop

@section('content')
   <div class="cta2 arrow-down ">
      <div class="container text-center wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
         <div class="row">
            <div class="col-xs-4">
            </div>
            <div class="col-xs-4">
               <h3 class="text-uppercase">Accessories</h3>
            </div>
            <div class="col-xs-4">
            </div>
         </div>
      </div>
   </div>

   <div class="container content margin-top-40">
      <div class="text-center margin-bottom-50">
         <h2 class="title-v2 title-center">THREE COLUMNS</h2>
         <p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p>
      </div>

      <div class="row  margin-bottom-30">
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/main/img2.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 1">
               <span><img class="img-responsive" src="frontend/img/main/img2.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/main/img4.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 2">
               <span><img class="img-responsive" src="frontend/img/main/img4.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4">
            <a href="frontend/img/main/img5.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 3">
               <span><img class="img-responsive" src="frontend/img/main/img5.jpg" alt=""></span>
            </a>
         </div>
      </div>

      <div class="row margin-bottom-30">
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/main/img6.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 4">
               <span><img class="img-responsive" src="frontend/img/main/img6.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/main/img7.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 5">
               <span><img class="img-responsive" src="frontend/img/main/img7.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4">
            <a href="frontend/img/main/img8.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 6">
               <span><img class="img-responsive" src="frontend/img/main/img8.jpg" alt=""></span>
            </a>
         </div>
      </div>

      <div class="row">
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/main/img9.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
               <span><img class="img-responsive" src="frontend/img/main/img9.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/main/img10.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 8">
               <span><img class="img-responsive" src="frontend/img/main/img10.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4">
            <a href="frontend/img/main/img11.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 9">
               <span><img class="img-responsive" src="frontend/img/main/img11.jpg" alt=""></span>
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

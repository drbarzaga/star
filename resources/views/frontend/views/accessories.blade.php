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
     <div class="row  margin-bottom-30">
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/accesories/1.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 1">
               <span><img class="img-responsive" src="frontend/img/accesories/1.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/accesories/2.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 2">
               <span><img class="img-responsive" src="frontend/img/accesories/2.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4">
            <a href="frontend/img/accesories/3.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 3">
               <span><img class="img-responsive" src="frontend/img/accesories/3.jpg" alt=""></span>
            </a>
         </div>
      </div>

      <div class="row margin-bottom-30">
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/accesories/4.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 4">
               <span><img class="img-responsive" src="frontend/img/accesories/4.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/accesories/5.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 5">
               <span><img class="img-responsive" src="frontend/img/accesories/5.jpg" alt=""></span>
            </a>
         </div>
         <div class="col-sm-4">
            <a href="frontend/img/accesories/6.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 6">
               <span><img class="img-responsive" src="frontend/img/accesories/6.jpg" alt=""></span>
            </a>
         </div>
      </div>

      <div class="row">
         <div class="col-sm-4 sm-margin-bottom-30">
            <a href="frontend/img/accesories/7.jpg" rel="gallery1" class="fancybox img-hover-v1" title="Image 7">
               <span><img class="img-responsive" src="frontend/img/accesories/7.jpg" alt=""></span>
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

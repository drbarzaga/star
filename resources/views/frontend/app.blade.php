<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>STAR | @yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    @include('frontend.partials.css')
</head>

<body class="header-fixed header-fixed-space">
<div class="wrapper">
    @include('frontend.partials.header')

    @yield('content')

    @include('frontend.partials.footer')
</div>

@include('frontend.partials.js')
</body>
</html>

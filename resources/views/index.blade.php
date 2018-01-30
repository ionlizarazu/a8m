<!DOCTYPE html>

<html class="no-js"  lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<title>:: Picxa :: A Photographer Portfolio Template</title>
<!-- Normalize -->
<link rel="stylesheet" href="{{ asset('css/assets/normalize.css') }}" type="text/css">
<!-- Bootstrap -->
<link href="{{ asset('css/assets/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<!-- Font-awesome.min -->
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<!-- Effet -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/gallery/set1.css') }}" />
<!-- Main Style -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
<!-- Responsive Style -->
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- cubeportfolio -->
<link rel="stylesheet" type="text/css" href="{{ asset('js/cubeportfolio/css/cubeportfolio.min.css') }}"> 

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

<script src="{{ asset('js/assets/modernizr-2.8.3.min.js') }}" type="text/javascript"></script>
</head>

<body>
@yield('header')
  <main class="main-wrapper" id="container"> 
      @yield('content')
  </main>
@yield('footer') 


<!-- jQuery --> 

<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')}}"></script> 
<script>window.jQuery || document.write('<script src="{{ asset('js/assets/jquery.min.js')}}"><\/script>')</script> 
<script src="{{ asset('js/assets/plugins.js')}}" type="text/javascript"></script> 
<script src="{{ asset('js/assets/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{ asset('js/custom.js')}}" type="text/javascript"></script> 
<script src="{{ asset('js/jquery.contact.js')}}" type="text/javascript"></script> 
<script src="{{ asset('js/main.js')}}" type="text/javascript"></script> 
<script type="text/javascript" src="{{ asset('js/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- init cubeportfolio -->
<!-- <script type="text/javascript" src="{{ asset('js/cubeportfolio/js/main.js') }}"></script> -->
<script src="{{ asset('js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icons -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Clouds Icon @yield('title')</title>
  </head>
  <body>

    <!-- Preloader -->
    <div id="preloader">
      <div id="status"></div>
    </div>

    <!-- Header strat -->
    @include('frontend.partial.header')
    <!-- Header end -->

    <!-- Content strat -->
    @yield('content')
    <!-- Content end -->

    <!-- Footer strat -->
    @include('frontend.partial.footer')
    <!-- Footer end -->

    <!-- JS -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
  </body>

</html>
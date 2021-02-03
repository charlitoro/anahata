<!doctype html>
<html lang="en">
  <head>
    <!--Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/assets/anahata/lib/bootstrap/css/bootstrap.min.css')}}">
    

    <link href="{{url('/assets/anahata/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/anahata/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/anahata/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/anahata/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('/assets/anahata/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{url('/assets/anahata/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/assets/anahata/css/style.css')}}">

    <title>Estetica Anahata</title>
    <link rel="shortcut icon" href="{{URL::asset('assets/anahata/img/chakra.png')}}">
  </head>
  <body id="body">

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
          <h1><a href="index.html" id="body" class="scrollto"><span><i class="ion 	
            ion-android-notifications"></i> </span>Anahata</a></h1> 
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      @include('partials.nav-bar')

    </div>
  </header>

  @yield('content')

  @include('partials.footer')

    <!-- JavaScript  -->
    <script src="{{url('/assets/anahata/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/magnific-popup/magnific-popup.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/sticky/sticky.js')}}"></script> 
    
    <script src="{{url('/assets/anahata/js/main.js')}}"></script>
    
  </body>
</html>
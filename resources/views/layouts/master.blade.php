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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    
    <title>Estetica Anahata</title>
    <link rel="shortcut icon" href="{{URL::asset('assets/anahata/img/chakra.png')}}">
  </head>
  <body id="body">

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
          <h1><a href="{{url('/')}}" id="body" class="scrollto"><span><i class="ion 	
            ion-android-notifications"></i> </span>Anahata</a></h1> 
        <!--<a href="#"><img src="{{URL::asset('assets/anahata/img/chakra.png')}}" alt="" title="" /></a>-->
      </div>

      @include('partials.navbar')

    </div>
  </header>

  @yield('content')

  @include('partials.footer')

    <!-- JavaScript  -->
    <script src="{{url('/assets/anahata/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{url('/assets/anahata/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/magnific-popup/magnific-popup.min.js')}}"></script>
    <script src="{{url('/assets/anahata/lib/sticky/sticky.js')}}"></script> 
    <script src="{{url('/assets/anahata/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <script src="{{url('/assets/anahata/js/main.js')}}"></script>
    
  </body>
</html>
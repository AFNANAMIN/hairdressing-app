<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hairdressing Salon</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <link rel="icon" type="image/png" sizes="192x192" href="favicon.png">

        @yield('css')
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('home') }}"><img src="../../icons/logo.png" alt="Euphoria"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="{{ Route::currentRouteName() === 'home' ? 'active' : null }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ Route::currentRouteName() === 'about' ? 'active' : null }}"><a href="{{ route('about') }}">About</a></li>
            <li class="{{ Route::currentRouteName() === 'stylists' ? 'active' : null }}"><a href="{{ route('stylists') }}">Stylists</a></li>
            <li class="{{ Route::currentRouteName() === 'products' ? 'active' : null }}"><a href="{{ route('products') }}">Products</a></li>
            <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : null }}"><a href="{{ route('contact') }}">Contact</a></li>
          </ul> <!-- /ul -->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    @yield('content')

    <footer>
      <div class="container">
        <div class="col-sm-4">
          <h3><img src="../../icons/logo.png" alt="Euphoria"></h3>
          <p>Our salon is in 123, Average Street, Suburb, City. Sed a risus est. Suspendisse egestas eros vel iaculis condimentum. In nec dui vehicula, ullamcorper nisl et, convallis tortor.</p>
          <p class="icon location-spacer"><img src="../../icons/location.png" alt="Location">123, Average Street, Suburb, City</p>
          <p class="icon"><img src="../../icons/phone.png" alt="Phone">05 555 5555</p>
          <p class="icon"><img src="../../icons/email.png" alt="Email">hair-salon@example.com</p>
        </div>
        <div class="col-sm-4">
          <h3>Hours</h3>
          <p>Here are our current opening hours:</p>
          @foreach($openingHours as $openingHours)
            <p class="text-uppercase admin-spacer">{{ $openingHours->season }} hours</p>
            {!! nl2br($openingHours->description) !!}
          @endforeach
        </div>
        <div class="col-sm-4">
          <h3>Navigation</h3>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('stylists') }}">Stylists</a></li>
          <li><a href="{{ route('products') }}">Products</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a href="{{ route('sitemap') }}">Sitemap</a></li>

          @if(Auth::check())
            <li class="admin-spacer"><a href="{{ route('panel') }}">Admin Panel</a></li>
            <li><a href="{{ route('auth.logout') }}">Logout</a></li>
          @else
            <li class="admin-spacer"><a href="{{ route('auth.login') }}">Admin</a></li>
          @endif


        </div>
      </div>
    </footer>

    <script src="{{ elixir('js/all.js') }}"></script>

    @yield('scripts')

  </body>
</html>


<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">
    @yield('meta')

  <link rel="apple-touch-icon" href="{{ asset('img/admin/apple-touch-icon.png') }}">
  <link rel="shortcut icon" href="{{ asset('img/admin/favicon.ico') }}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/site.min.css') }}">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="{{ asset('css/admin/skintools.min.css') }}">
  <script src="{{ asset('js/admin/sections/skintools.min.js') }}"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('css/admin/animsition.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/asScrollable.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/switchery.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/introjs.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/slidePanel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/waves.min.css') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('fonts/material-design.min.css') }}">

  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>
  
  <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
	
  @yield('css')
  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script src="{{ asset('js/admin/breakpoints.min.js') }}"></script>
  <script>
    Breakpoints();
  </script>
</head>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  @yield('content')
  <!-- End Page -->


  <!-- Core  -->
  <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
  <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/admin/animsition.min.js') }}"></script>
  <script src="{{ asset('js/admin/jquery-asScroll.min.js') }}"></script>
  <script src="{{ asset('js/admin/jquery.mousewheel.min.js') }}"></script>
  <script src="{{ asset('js/admin/jquery.asScrollable.all.min.js') }}"></script>
  <script src="{{ asset('js/admin/jquery-asHoverScroll.min.js') }}"></script>
  <script src="{{ asset('js/admin/waves.min.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('js/admin/switchery.min.js') }}"></script>
  <script src="{{ asset('js/admin/intro.min.js') }}"></script>
  <script src="{{ asset('js/admin/screenfull.min.js') }}"></script>
  <script src="{{ asset('js/admin/jquery-slidePanel.min.js') }}"></script>

  <!-- Scripts -->
  <script src="{{ asset('js/admin/core.min.js') }}"></script>
  <script src="{{ asset('js/admin/site.min.js') }}"></script>

  <script src="{{ asset('js/admin/menu.min.js') }}"></script>
  <script src="{{ asset('js/admin/menubar.min.js') }}"></script>
  <script src="{{ asset('js/admin/sidebar.min.js') }}"></script>

  <script src="{{ asset('js/admin/config-colors.min.js') }}"></script>
  <script src="{{ asset('js/admin/config-tour.min.js') }}"></script>

  <script src="{{ asset('js/admin/components/asscrollable.min.js') }}"></script>
  <script src="{{ asset('js/admin/components/animsition.min.js') }}"></script>
  <script src="{{ asset('js/admin/components/slidepanel.min.js') }}"></script>
  <script src="{{ asset('js/admin/components/switchery.min.js') }}"></script>
  <script src="{{ asset('js/admin/components/tabs.min.js') }}"></script>

  <script src="{{ asset('js/admin/components/jquery-placeholder.min.js') }}"></script>
  <script src="{{ asset('js/admin/components/animate-list.min.js') }}"></script>
  <script src="{{ asset('js/admin/components/material.min.js') }}"></script>

  @yield('js')

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>
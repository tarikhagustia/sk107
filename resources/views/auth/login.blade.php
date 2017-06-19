
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('css/admin/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin/site.min.css')}}">

  <!-- Plugins -->
  <link rel="stylesheet" href="{{asset('css/admin/animsition.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin/asScrollable.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin/switchery.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin/introjs.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin/slidePanel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin/waves.min.css')}}">
  <!-- Page -->
  <link rel="stylesheet" href="{{asset('css/login-v3.min.css')}}">

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


      <!-- Scripts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
      <script src="{{ asset('js/admin/breakpoints.min.js') }}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login-v3 layout-full">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page vertical-align text-center">
    <div class="page-content vertical-align-middle">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <h2 class="brand-text font-size-18">Admin Area</h2>
          </div>
          <form method="post" action="{{ route('login') }}" autocomplete="off">
            {{ csrf_field() }}
            <div class="form-group form-material  @if ($errors->has('email')) has-error @endif">
              <input type="email" class="form-control" name="email" />
              <label class="floating-label">Email</label>
              @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="form-group form-material @if ($errors->has('password')) has-error @endif">
              <input type="password" class="form-control" name="password" />
              <label class="floating-label">Password</label>
              @if ($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg pull-left">
                <input type="checkbox" id="inputCheckbox" name="remember">
                <label for="inputCheckbox">Remember me</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg margin-top-40">Sign in</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- End Page -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
  <script src="{{ asset('js/admin/jquery-asScroll.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
  <script src="{{ asset('js/admin/jquery.asScrollable.all.min.js') }}"></script>
  <script src="{{ asset('js/admin/jquery-asHoverScroll.min.js') }}"></script>
  <script src="{{ asset('js/admin/waves.min.js') }}"></script>

  <!-- Plugins -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.5.0/intro.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/screenfull.js/3.2.0/screenfull.min.js"></script>
  <script src="{{ asset('js/admin/jquery-slidePanel.min.js') }}"></script>

  <!-- Scripts -->
  <script src="{{ asset('js/admin/core.min.js') }}"></script>
  <script src="{{ asset('js/admin/site.min.js') }}"></script>

  <script src="{{ asset('js/admin/menu.min.js') }}"></script>
  <script src="{{ asset('js/admin/menubar.min.js') }}"></script>
  <script src="{{ asset('js/admin/sidebar.min.js') }}"></script>

  <script src="{{ asset('js/admin/config-colors.min.js') }}"></script>
  <script src="{{ asset('js/admin/config-tour.min.js') }}"></script>

  <script src="{{ asset('js/admin/asscrollable.min.js') }}"></script>
  <script src="{{ asset('js/admin/animsition.min.js') }}"></script>
  <script src="{{ asset('js/admin/slidepanel.min.js') }}"></script>
  <script src="{{ asset('js/admin/switchery.min.js') }}"></script>
  <script src="{{ asset('js/admin/tabs.min.js') }}"></script>

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

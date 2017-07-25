
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>{{ config('site.name') . ' - ' . config('site.description') }}</title>


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
  <link rel="stylesheet" href="{{asset('css/admin/toastr.min.css?v2.2.0')}}">

  <!-- Page Level -->
  <link rel="stylesheet" href="{{asset('css/admin/custom/toastr.min.css?v2.2.0')}}">

  @yield('css')
  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('fonts/material-design.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/brand-icons.min.css') }}">

  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script src="{{ asset('js/admin/breakpoints.min.js') }}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class=" site-navbar-small">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header" style="width:auto;">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <a class="navbar-brand navbar-brand-center" href="{{ url('/admin') }}">
        <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{ asset('img/logo-admin.png') }}"
        title="Remark">
        <img class="navbar-brand-logo navbar-brand-logo-special" src="{{ asset('img/logo-admin.png') }}"
        title="Remark">
        <span class="navbar-brand-text hidden-xs">{{ config('site.name') }}</span>
      </a>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="{{ asset('img/5.jpg')}}" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="{{ url('admin/profile') }}" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="{{ url('logout') }}" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->


    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-item @if(Request::segment(2) == null) active @endif">
              <a href="{{ url('admin') }}" data-dropdown-toggle="false">
                <i class="site-menu-icon md-home" aria-hidden="true"></i>
                <span class="site-menu-title">Home</span>
              </a>
            </li>
            {{-- <li class="site-menu-item has-sub @if(Request::segment(2) == 'article') active @endif">
              <a href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                <span class="site-menu-title">Article</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub ">
                <li class="site-menu-item @if(Request::segment(2) == 'article' && Request::segment(3) == 'create') active @endif">
                  <a class="animsition-link" href="{{ url('admin/article/create') }}">
                    <span class="site-menu-title">Create new</span>
                  </a>
                </li>
                <li class="site-menu-item @if(Request::segment(2) == 'article' && Request::segment(3) == 'list') active @endif">
                  <a class="animsition-link" href="{{ url('admin/article/list') }}">
                    <span class="site-menu-title">List</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub @if(Request::segment(2) == 'gallery') active @endif"> --}}

            <li class="site-menu-item has-sub @if(Request::segment(2) == 'article') active @endif">
              <a href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon md-account-box-phone" aria-hidden="true"></i>
                <span class="site-menu-title">Account</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub ">
                <li class="site-menu-item @if(Request::segment(2) == 'account' && Request::segment(3) == 'real-account') active @endif">
                  <a class="animsition-link" href="{{ url('admin/account/real-account') }}">
                    <span class="site-menu-title">Real Account</span>
                  </a>
                </li>
                <li class="site-menu-item @if(Request::segment(2) == 'account' && Request::segment(3) == 'demo-account') active @endif">
                  <a class="animsition-link" href="{{ url('admin/account/demo-account') }}">
                    <span class="site-menu-title">Demo Account</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub @if(Request::segment(2) == 'deposit') active @endif">
              <a href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon icon md-money-box" aria-hidden="true"></i>
                <span class="site-menu-title">Deposit</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub ">
                <li class="site-menu-item @if(Request::segment(2) == 'deposit' && Request::segment(3) == 'account') active @endif">
                  <a class="animsition-link" href="{{ url('admin/deposit/account') }}">
                    <span class="site-menu-title">Deposit Account</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub @if(Request::segment(2) == 'withdrawal') active @endif">
              <a href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon icon md-money" aria-hidden="true"></i>
                <span class="site-menu-title">Withdrawal</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub ">
                <li class="site-menu-item @if(Request::segment(2) == 'withdrawal' && Request::segment(3) == 'request-withdrawal') active @endif">
                  <a class="animsition-link" href="{{ url('admin/withdrawal/request-withdrawal') }}">
                    <span class="site-menu-title">Request Withdrawal</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub @if(Request::segment(2) == 'user') active @endif">
              <a href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon icon md-settings" aria-hidden="true"></i>
                <span class="site-menu-title">Pengguna</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub ">
                <li class="site-menu-item @if(Request::segment(2) == 'user' && Request::segment(3) == 'manage') active @endif">
                  <a class="animsition-link" href="{{ route('admin.user') }}">
                    <span class="site-menu-title">Atur pengguna</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  @yield('content')



  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2016 <a href="#">{{config('app.name')}}</a></div>
  </footer>
  <!-- Core  -->
  <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
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
  <script src="{{ asset('js/admin/toastr.min.js') }}"></script>

  <script src="{{ asset('js/admin/app.js') }}"></script>

  <!-- Page level -->
  <script src="{{ asset('js/admin/custom/toastr.min.js') }}"></script>
  @if (env('APP_DEBUG'))
    <script src="{{asset('js/vue.js')}}" charset="utf-8"></script>
  @else
    <script src="{{asset('js/vue.min.js')}}" charset="utf-8"></script>
  @endif
  @yield('js')

  <script>
    (function(document, window, $) {
      'use strict';
      toastr.options = {
        positionClass : 'toast-bottom-full-width',
        containerId : 'toast-bottomFullWidth',
        showMethod : "slideDown",
      }
      @if(session('success'))
        toastr.success('{{ session('success') }}')
      @endif
      @if(session('error'))
        toastr.error('{{ session('error') }}')
      @endif
      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });

    })(document, window, jQuery);
  </script>

</body>

</html>

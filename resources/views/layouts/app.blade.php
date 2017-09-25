
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap material admin template">
  <meta name="author" content="">

  <title>{{ config('settings.company_name') . ' - ' . config('site.description') }}</title>


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
  <audio id="audio">
    <source src="{{ url('alarm.mp3') }}" type="audio/mp3">
    Your browser does not support the audio tag.
  </audio>
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
        <span class="navbar-brand-text hidden-xs">{{ config('settings.company_name') }}</span>
      </a>
    </div>
  </nav>

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
    var aid = document.getElementById("audio");



    var vo = new Vue({
      el : '#notify',
      data : {
        notifications : []
      },
      mounted : function() {
        this.getNotify();

        // this.playAlarm();
        // alarm.mp3
        // if(this.notifications.length > 0 ){
        //   this.playAlarm();
        // }
        setInterval(this.getNotify, 3000);

      },
      methods : {
        getNotify(){

          $.ajax({
            url : "{{url('api2/notifications')}}",
            success: (response) => {
                this.notifications = response;
            }
          });


        },
        audioInstance(){
          var audio = new Audio('alarm.mp3');
          audio.loop = true;
          return audio;
        },
        playAlarm(){
          var audio = this.audioInstance();

          audio.play();
        },
        stopAlarm(){
          var audio = this.audioInstance();
          audio.pause();
        }
      },
      computed: {
        countNotify: function(){
          if(this.notifications.length > 0){
            aid.play();
          }else{
            aid.pause();
          }
          return this.notifications.length;
        }
      }
    });



  </script>

</body>

</html>

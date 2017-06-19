<!DOCTYPE html>
<html lang="id">
   <head>
      <meta charset="utf-8">
      <title>Bukitsekipan</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/li-scroller.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/video.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
   </head>
   <body>
      <header>
         <div id="side-bar">
            <div class="container">
               <div class="row">
                  <div id="wrapper">
                     <div class="overlay"></div>
                     <div class="col-md-1">
                        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper">
                           <ul class="nav sidebar-nav">
                              <li class="sidebar-brand mt20 pb80"><a href="#"><img src="{{ asset('img/sidebar-logo.png') }}" alt="image"></a></li>
                              <li class="quick-access">
                                 <form class="form-inline quick-search-form" action="#">
                                    <div class="form-group">
                                       <input type="text" class="form-control" placeholder="Search here">
                                    </div>
                                    <button type="submit" id="quick-search" class="btn btn-custom"><i class="icofont icofont-search-alt-1"></i></button>
                                 </form>
                              </li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">home<i class=" pull-right icofont icofont-rounded-down"></i></a>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                 </ul>
                              </li>
                              <li><a href="#">fashion</a></li>
                              <li><a href="#">celebrity</a></li>
                              <li><a href="#">culture</a></li>
                              <li><a href="#">life style</a></li>
                              <li>
                                 <div class="side-add">
                                    <img src="{{ asset('img/side-bar-add.jpg') }}" alt="image">
                                 </div>
                              </li>
                              <li>
                                 <div class="side-social">
                                    <h3>get in touch</h3>
                                    <ul class="side-social-list pt35">
                                       <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                       <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                       <li><a href="#"><i class="icofont  icofont-social-google-plus"></i></a></li>
                                       <li><a href="#"><i class="icofont icofont-social-tumblr"></i></a></li>
                                       <li><a href="#"><i class="icofont  icofont-social-pinterest"></i></a></li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                           <button type="button" class="hamburger sideclose is-closed" data-toggle="offcanvas">
                           <i class="icofont icofont-long-arrow-left"></i>
                           </button>
                        </nav>
                        <button type="button" class="hamburger nonclose is-closed" data-toggle="offcanvas">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="menu-bar">
            <div class="container">
               <div class="row">
                  <nav class="navbar navbar-default mt5">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt="image"></a>
                     </div>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav mt10 ml25">
                           <li><a href="{{ url('/') }}">Home</a></li>
                           <li><a href="{{ url('/about-us') }}">Tentang Kami</a></li>
                           <li><a href="{{ url('article/category/facility') }}">Fasilitas</a></li>
                           <li><a href="{{ url('gallery') }}">Galeri</a></li>
                           <li><a href="{{ url('contact-us') }}">Hubungi Kami</a></li>
                        </ul>
                        <div id="sb-search" class="sb-search ">
                           <form>
                              <input class="sb-search-input " onkeyup="buttonUp();" placeholder="Enter Your Search Word..." type="search" value="" name="search" id="search">
                              <input class="sb-search-submit" type="submit" value="">
                              <span class="sb-icon-search"><i class="icofont icofont-search-alt-2"></i></span>
                           </form>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <section id="news-section" class="news-section pt30">
         <div class="container">
            <div class="row">
               <div class="news-item">
                  <div class="col-md-6 col-sm-12 pr5">
                     <div class="slide-nws">
                        <div class="item-content">
                           <div class="news-pic-text">
                              <div class="news-pic">
                                 <img src="{{ asset('img/nws-item-1.jpg') }}" alt="image">
                              </div>
                              <div class="news-text">
                                 <div class="nws-head-tag">
                                    <a class="tag" href="#">fashion</a>
                                    <h2 class="nws-head"><a href="#">Olivia Wilde was soshe <span>ecited to Beyonce</span></a></h2>
                                 </div>
                                 <ul class="nws-meta">
                                    <li> <a href="#">by ashik vai</a> </li>
                                    <li> <a href="#"><i class="icofont icofont-clock-time"></i> oct24, 2016</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="item-content">
                           <div class="news-pic-text">
                              <div class="news-pic">
                                 <img src="{{ asset('img/nws-item-1.jpg') }}" alt="image">
                              </div>
                              <div class="news-text">
                                 <div class="nws-head-tag">
                                    <a class="tag" href="#">fashion</a>
                                    <h2 class="nws-head"><a href="#">Olivia Wilde was soshe <span>ecited to Beyonce</span></a></h2>
                                 </div>
                                 <ul class="nws-meta">
                                    <li> <a href="#">by ashik vai</a> </li>
                                    <li> <a href="#"><i class="icofont icofont-clock-time"></i> oct24, 2016</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="col-md-6 pl0">
                     <div class="nws-pic-text-2">
                        <div class="col-sm-6 col-xs-12 pl0 pr5">
                           <div class="nws-pic-content">
                              <div class="news-pic-2">
                                 <img src="{{ asset('img/nws-item-2.jpg') }}" alt="image">
                                 <div class="overly"></div>
                              </div>
                              <div class="news-text-2">
                                 <div class="nws-head-tag-2">
                                    <a class="tag" href="#">life style</a>
                                    <h2 class="nws-title mt5"><a href="#">Smart woman's guide to <br> working from home</a></h2>
                                 </div>
                                 <ul class="nws-meta">
                                    <li> <a href="#">by ashik vai</a> </li>
                                    <li> <a href="#"><i class="icofont icofont-clock-time"></i> oct24, 2016</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 pl0 pr5">
                           <div class="nws-pic-content">
                              <div class="news-pic-2">
                                 <img src="{{ asset('img/nws-item-3.jpg') }}" alt="image">
                                 <div class="overly"></div>
                              </div>
                              <div class="news-text-2">
                                 <div class="nws-head-tag-2">
                                    <a class="tag" href="#">life style</a>
                                    <h2 class="nws-title mt5"><a href="#">SmaHacks to make your <br> holday better</a></h2>
                                 </div>
                                 <ul class="nws-meta">
                                    <li> <a href="#">by ashik vai</a> </li>
                                    <li> <a href="#"><i class="icofont icofont-clock-time"></i> oct24, 2016</a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      @yield('content')


      <footer>
         <div id="footer-section" class="footer pb80 pt80">
            <div class="container">
               <div class="row">
                  <div class="col-sm-3">
                     <div class="footer-logo">
                        <img src="img/logo-2.png" alt="image">
                     </div>
                     <div class="footer-social mt45">
                        <ul class="solia-logo">
                           <li class="mr20"><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                           <li class="mr20"><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                           <li class="mr20"><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                           <li class="mr20"><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                           <li class="mr20"><a href="#"><i class="icofont icofont-social-youtube-play"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="nws-footer-service">
                        <ul class="servc-list">
                           <li><a href="#">Contact</a></li>
                           <li><a href="#">Advertisment</a></li>
                           <li><a href="#">About</a></li>
                           <li><a href="#">Sitemap</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="nws-footer-service">
                        <ul class="servc-list">
                           <li><a href="#">Shop Now</a></li>
                           <li><a href="#">Privacy</a></li>
                           <li><a href="#">Promostion</a></li>
                           <li><a href="#">Complants</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="nws-footer-service">
                        <ul class="servc-list">
                           <li><a href="#">Cooki Policy</a></li>
                           <li><a href="#">Terms & Condition</a></li>
                           <li><a href="#">Sitemap</a></li>
                           <li><a href="#">Payment Method</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="email-nwsltr">
                        <p>Sibscribe our newslettern and recieve update right in your inbox!</p>
                        <form action="#" method="get" class="nwsltter pt35">
                           <div class="form-group ">
                              <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                           </div>
                        </form>
                        <button type="submit">
                        <i class="icofont icofont-arrow-right"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="copy-right" class="copy-right-section pb35">
            <div class="container">
               <div class="copy-rght">
                  <div class="copy-brand mt15">
                     <p><i class="icofont icofont-copyright"></i>2016 Dazzle</p>
                     <p>All Right Reserved. Desined by <span>XS-Theme</span></p>
                  </div>
                  <div class="app-icon pull-right">
                     <ul class="downld-icon mt15">
                        <li><a href="#"><img src="img/apps.png" alt="image"></a></li>
                        <li><a href="#"><img src="img/ggl.png" alt="image"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/slick.min.js') }}"></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="{{ asset('js/jquery.li-scroller.1.0.js') }}"></script>
      <script src="{{ asset('js/videos.js') }}"></script>
      <script>
         "use strict";

         $(".hover").mouseleave(
         	function () {
         		$(this).removeClass("hover");
         	}
         	);

         $('.popup').magnificPopup({
         	disableOn: 200,
         	type: 'iframe',
         	mainClass: 'mfp-fade',
         	removalDelay: 160,
         	preloader: false,
         	fixedContentPos: false,
         });
      </script>
   </body>
</html>

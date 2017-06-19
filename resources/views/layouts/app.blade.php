<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css" /> -->

    <link href="{{ asset('css/less-space.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{ asset('css/adminstyle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pages/signin.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="navbar navbar-fixed-top lg-mb-20">

	<div class="navbar-inner">

		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="index.html">
				UW Global
			</a>
		</div> <!-- /container -->
	</div> <!-- /navbar-inner -->
</div> <!-- /navbar -->

@yield('content')
<div class="extra">

	<div class="extra-inner">

		<div class="container">

			<div class="row">
                    <div class="col-lg-3">
                        <h4>About UW Global</h4>
                        <p>
                          We are a financial trading facilitator, market research house with operations in the emerging financial powerhouses of Asia like China, Hong Kong, Japan, South Korea & South East Asia and moving towards Middle East and Europe.
                        </p>
                    </div>
                    <!-- /span3 -->
                    <div class="col-lg-3">
                        <h4> Support</h4>
                        <ul>
                            <li><a href="javascript:;">Frequently Asked Questions</a></li>
                            <li><a href="javascript:;">Ask a Question</a></li>
                            <li><a href="javascript:;">Video Tutorial</a></li>
                            <li><a href="javascript:;">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="col-lg-3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                    <div class="col-lg-3">
                        <h4>
                            Open Source jQuery Plugins</h4>
                        <ul>
                            <li><a href="http://www.egrappler.com">Open Source jQuery Plugins</a></li>
                            <li><a href="http://www.egrappler.com;">HTML5 Responsive Tempaltes</a></li>
                            <li><a href="http://www.egrappler.com;">Free Contact Form Plugin</a></li>
                            <li><a href="http://www.egrappler.com;">Flat UI PSD</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /extra-inner -->

</div>
<div class="footer">

	<div class="footer-inner">

		<div class="container">

			<div class="row">

    			<div class="span12">
    				© 2017 <a href="{{ url('/') }}">UW Global</a>.
    			</div> <!-- /span12 -->

    		</div> <!-- /row -->

		</div> <!-- /container -->

	</div> <!-- /footer-inner -->

</div>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>

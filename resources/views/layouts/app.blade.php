<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('libraries/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('libraries/chartist/chartist.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.markercluster.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.markercluster.default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/villareal-turquoise.css') }}" rel="stylesheet" type="text/css" id="css-primary">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">


    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="content-title-center">
<div class="page-wrapper">

    <div class="header-wrapper">
        <div class="header header-small">
            <div class="header-inner">
                <div class="container">
                    <div class="header-top">
                        <div class="header-top-inner">
                            <a class="header-logo" href="{{ url('/') }}">
                                <span class="header-logo-shape"></span>
                                <span class="header-logo-text">{{ config('app.name', 'Laravel') }}</span>
                            </a><!-- /.header-logo -->

                            <a class="header-action" href="properties-submit.html">
                                <i class="fa fa-upload"></i> <span>Разместить объявление-</span>
                            </a><!-- /.header-action -->


                            <div class="nav-primary-wrapper collapse navbar-toggleable-sm">
                                <ul class="nav nav-pills nav-primary">
                                    <li class="nav-item">
                                        <a href="{{ url('/') }}" class="nav-link ">
                                            Главная
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url('/properties') }}" class="nav-link ">
                                            Объявления
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url('/companyes') }}" class="nav-link ">
                                            Компании
                                        </a>
                                    </li>

                                    <li class="nav-item nav-item-parent">
                                        <a href="{{ url('/home') }}" class="nav-link ">
                                            @auth
                                            {{ Auth::user()->first_name }}
                                            @else
                                                Мой Профиль
                                            @endauth
                                        </a>
                                        @auth
                                        <ul class="sub-menu">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @else
                                          <ul class="sub-menu">
                                           <li>
                                            <a class="dropdown-item" href="{{ route('login') }}">Вход</a>
                                           </li>
                                           <li>
                                            <a class="dropdown-item" href="{{ route('register') }}">Регистрация</a>
                                           </li>
                                          </ul>
                                        @endauth
                                    </li>
                                </ul><!-- /.nav -->
                            </div><!-- /.nav-primary -->

                            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target=".nav-primary-wrapper">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div><!-- /.header-top-inner -->
                    </div><!-- /.header-top -->
                </div><!-- /.container -->
            </div><!-- /.header-inner -->
        </div><!-- /.header -->
    </div><!-- /.header-wrapper-->

    <div class="main-wrapper">
        <div class="main">
            <div class="main-inner">

                <div class="content-title">
                    <div class="content-title-inner">
                        <div class="container">
                            <h1>@yield('title')</h1>

                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="properties.html">Properties</a></li>
                                <li class="active">Standard Detail</li>
                            </ol>
                        </div><!-- /.container -->
                    </div><!-- /.content-title-inner -->
                </div><!-- /.content-title -->


                <div class="content">
                    @yield('content')
                </div><!-- /.content -->
            </div><!-- /.main-inner -->
        </div><!-- /.main -->
    </div><!-- /.main-wrapper -->

    <div class="container">
        <div class="call-to-action">
            <div class="call-to-action-inner">
                <div class="call-to-action-title">
                    <div class="logo-shape"></div><!-- /.logo-shape -->
                    <h1>Real Estate Application Kit</h1>
                    <h2>Interested in publishing your property on our website?</h2>
                </div><!-- /.call-to-action-title -->

                <a href="#" class="btn btn-primary">Contact Us</a>
            </div><!-- /.call-to-action-inner -->
        </div><!-- /.call-to-action -->
    </div>

    <div class="footer-wrapper">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-top">
                    <div class="footer-top-left">
                        <h2>Villareal Real Estate</h2>

                        <p>
                            Villareal is advanced real estate application kit. Template implements specialized components which will help you in the developement of your website or application.
                        </p>

                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-envelope"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div><!-- /.social -->
                    </div><!-- /.footer-top-left -->

                    <div class="footer-top-right">
                        <h2>Subscribe To Newsletter</h2>

                        <form method="post" action="?">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your e-mail address">
                                <span class="input-group-btn">
								<button class="btn btn-primary" type="submit">Subscribe</button>
							</span><!-- /.input-group-btn -->
                            </div><!-- /.form-group -->
                        </form>

                        <p>
                            * We promise that we will not send you spam messages.
                        </p>
                    </div><!-- /.footer-top-right -->
                </div><!-- /.footer-top -->

                <div class="footer-bottom">
                    <div class="footer-left">
                        &copy; 2016 Created by Code Vision. All Rights reserved.
                    </div><!-- /.footer-left -->

                    <div class="footer-right">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
                            <li class="nav-item"><a href="terms-conditions.html" class="nav-link">Terms &amp; Conditions</a></li>
                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                    </div><!-- /.footer-right -->
                </div><!-- /.footer-bottom -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </div><!-- /.footer-wrapper -->
</div><!-- /.page-wrapper -->


<script src="//maps.googleapis.com/maps/api/js" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.ezmark.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/gmap3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/leaflet.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/leaflet.markercluster.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries/owl-carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries/chartist/chartist.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollPosStyler.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/villareal.js') }}"></script>

</body>
</html>
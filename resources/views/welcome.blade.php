<!DOCTYPE html>
<html>

<head lang="{{ app()->getLocale() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('libraries/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('libraries/chartist/chartist.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.markercluster.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.markercluster.default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/villareal-turquoise.css') }}" rel="stylesheet" type="text/css" id="css-primary">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">

    <title>Недвижимость ДНР</title>
</head>

<body class="cover-pull-top header-transparent">
<div class="page-wrapper">
    <div class="header-wrapper">
        <div class="header header-small">
            <div class="header-inner">
                <div class="container">
                    <div class="header-top">
                        <div class="header-top-inner">
                            <a class="header-logo" href="{{ url('/') }}">
                                <span class="header-logo-shape"></span>
                                <span class="header-logo-text">Donstate</span>
                            </a><!-- /.header-logo -->

                            <a class="header-action" href="properties-submit.html">
                                <i class="fa fa-upload"></i> <span>Разместить объявление</span>
                            </a><!-- /.header-action -->


                            <div class="nav-primary-wrapper collapse navbar-toggleable-sm">
                                <ul class="nav nav-pills nav-primary">
                                    <li class="nav-item">
                                        <a href="{{ url('/') }}" class="nav-link active">
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
                                        <a href="{{ url('/cabinet') }}" class="nav-link ">
                                            @auth
                                                {{ Auth::user()->first_name }}
                                                @else
                                                 Мой Профиль
                                                @endauth
                                        </a>
                                        @auth
                                            <ul class="sub-menu">
                                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Выход
                                                    </a>

                                                </li>
                                            </ul>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
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


                <div class="content">
                    <div class="cover">
                        <div class="cover-image"></div><!-- /.cover-image -->

                        <div class="cover-title">
                            <div class="container">
                                <div class="cover-title-inner">
                                    <h1>
                                        Start searching best properties<br>
                                        in our Real Estate Directory
                                    </h1>
                                </div><!-- /.cover-title-inner -->

                                <form method="get" action="properties.html">
                                    <div class="form-group col-sm-3">
                                        <select class="form-control">
                                            <option value="">Location</option>
                                            <option value="">New York</option>
                                            <option value="">Washington</option>
                                        </select>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-3">
                                        <select class="form-control">
                                            <option value="">Property Type</option>
                                            <option value="">Apartment</option>
                                            <option value="">Building Area</option>
                                            <option value="">Condo</option>
                                            <option value="">House</option>
                                            <option value="">Villa</option>
                                        </select>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                                    </div>
                                </form>
                            </div><!-- /.container -->
                        </div><!-- /.cover-title -->
                    </div><!-- /.cover -->

                    <div class="information-bar">
                        <div class="container">
                            <i class="fa fa-star"></i> Villareal implements features like favorites, compare properties, advanced search fields. For more information check out <a href="#">full list of features</a>.
                        </div><!-- /.container -->
                    </div><!-- /.information-bar -->

                    <div class="container">
                        <div class="page-header">
                            <h1>Make Something Great. Playfully</h1>

                            <ul>
                                <li><a href="properties.html">Recent</a></li>
                                <li><a href="properties.html">Featured</a></li>
                                <li><a href="properties.html">Reduced</a></li>
                                <li><a href="properties.html">Sale</a></li>
                            </ul>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-md-6">

                                <div class="listing-box listing-box-simple">
                                    <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-12.jpg') }}')">
                                        <div class="listing-box-image-title">
                                            <h2><a href="properties-detail-standard.html">Thunder Pond Centre</a></h2>
                                            <h3>$ 480 / per week</h3>
                                        </div><!-- /.listing-box-image-title -->

                                        <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add Favorite</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View Detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare</span></a>
		</span>
                                    </div><!-- /.listing-box-image -->
                                </div><!-- /.listing-box -->
                            </div><!-- /.col-* -->

                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="listing-box">
                                            <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-5.jpg') }}')">
                                                <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                                <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                            </div><!-- /.listing-box-image -->

                                            <div class="listing-box-title">
                                                <h2><a href="properties-detail-standard.html">Bright Island Route</a></h2>
                                                <h3>$ 40.000</h3>
                                            </div><!-- /.listing-box-title -->

                                            <div class="listing-box-content">
                                                <dl>
                                                    <dt>Type</dt><dd>House</dd>
                                                    <dt>Location</dt><dd>New York</dd>
                                                    <dt>Area</dt><dd>180 sqft</dd>
                                                </dl>
                                            </div><!-- /.listing-box-cotntent -->
                                        </div><!-- /.listing-box -->
                                    </div><!-- /.col-* -->

                                    <div class="col-sm-6">
                                        <div class="listing-box">
                                            <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-4.jpg') }}')">
                                                <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                                <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                            </div><!-- /.listing-box-image -->

                                            <div class="listing-box-title">
                                                <h2><a href="properties-detail-standard.html">Misty Valley</a></h2>
                                                <h3>$ 27.000</h3>
                                            </div><!-- /.listing-box-title -->

                                            <div class="listing-box-content">
                                                <dl>
                                                    <dt>Type</dt><dd>House</dd>
                                                    <dt>Location</dt><dd>New York</dd>
                                                    <dt>Area</dt><dd>180 sqft</dd>
                                                </dl>
                                            </div><!-- /.listing-box-cotntent -->
                                        </div><!-- /.listing-box -->
                                    </div><!-- /.col-* -->

                                </div><!-- /.row -->
                            </div><!-- /.col-* -->
                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="listing-box-wrapper">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="listing-box">
                                                <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-3.jpg') }}')">
                                                    <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                                    <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                                </div><!-- /.listing-box-image -->

                                                <div class="listing-box-title">
                                                    <h2><a href="properties-detail-standard.html">Little Brook Court</a></h2>
                                                    <h3>$ 800 / per week</h3>
                                                </div><!-- /.listing-box-title -->

                                                <div class="listing-box-content">
                                                    <dl>
                                                        <dt>Type</dt><dd>House</dd>
                                                        <dt>Location</dt><dd>New York</dd>
                                                        <dt>Area</dt><dd>180 sqft</dd>
                                                    </dl>
                                                </div><!-- /.listing-box-cotntent -->
                                            </div><!-- /.listing-box -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-3">
                                            <div class="listing-box">
                                                <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-2.jpg') }}')">
                                                    <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                                    <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                                </div><!-- /.listing-box-image -->

                                                <div class="listing-box-title">
                                                    <h2><a href="properties-detail-standard.html">Quiet Parade</a></h2>
                                                    <h3>$ 256.000</h3>
                                                </div><!-- /.listing-box-title -->

                                                <div class="listing-box-content">
                                                    <dl>
                                                        <dt>Type</dt><dd>House</dd>
                                                        <dt>Location</dt><dd>New York</dd>
                                                        <dt>Area</dt><dd>180 sqft</dd>
                                                    </dl>
                                                </div><!-- /.listing-box-cotntent -->
                                            </div><!-- /.listing-box -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-3">
                                            <div class="listing-box">
                                                <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-1.jpg') }}')">
                                                    <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                                    <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                                </div><!-- /.listing-box-image -->

                                                <div class="listing-box-title">
                                                    <h2><a href="properties-detail-standard.html">Fallen Rise Parkway</a></h2>
                                                    <h3>$ 1200 / per week</h3>
                                                </div><!-- /.listing-box-title -->

                                                <div class="listing-box-content">
                                                    <dl>
                                                        <dt>Type</dt><dd>House</dd>
                                                        <dt>Location</dt><dd>New York</dd>
                                                        <dt>Area</dt><dd>180 sqft</dd>
                                                    </dl>
                                                </div><!-- /.listing-box-cotntent -->
                                            </div><!-- /.listing-box -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-3">
                                            <div class="listing-box">
                                                <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-8.jpg') }}')">
                                                    <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                                    <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                                </div><!-- /.listing-box-image -->

                                                <div class="listing-box-title">
                                                    <h2><a href="properties-detail-standard.html">Hidden Trace</a></h2>
                                                    <h3>$ 340.000</h3>
                                                </div><!-- /.listing-box-title -->

                                                <div class="listing-box-content">
                                                    <dl>
                                                        <dt>Type</dt><dd>House</dd>
                                                        <dt>Location</dt><dd>New York</dd>
                                                        <dt>Area</dt><dd>180 sqft</dd>
                                                    </dl>
                                                </div><!-- /.listing-box-cotntent -->
                                            </div><!-- /.listing-box -->
                                        </div><!-- /.col-* -->

                                    </div><!-- /.row -->
                                </div><!-- /.listing-box-wrapper -->
                            </div><!-- /.col-sm-* -->
                        </div><!-- /.row -->

                        <div class="push-top">
                            <div class="background-white fullwidth">
                                <div class="boxes">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="box">
                                                <div class="box-icon">
                                                    <i class="fa fa-diamond"></i>
                                                </div><!-- /.box-icon -->

                                                <div class="box-content">
                                                    <h2>Real Estate Kit</h2>
                                                    <p>Specialized components for creation real estate websites &amp; applications.</p>
                                                </div><!-- /.box-content -->
                                            </div><!-- /.box -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-6 col-lg-3">
                                            <div class="box">
                                                <div class="box-icon">
                                                    <i class="fa fa-star-o"></i>
                                                </div><!-- /.box-icon -->

                                                <div class="box-content">
                                                    <h2>Top Notch Support</h2>
                                                    <p>Dd you have any questions? Feel free to ask and we will try to do our best.</p>
                                                </div><!-- /.box-content -->
                                            </div><!-- /.box -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-6 col-lg-3">
                                            <div class="box">
                                                <div class="box-icon">
                                                    <i class="fa fa-cog"></i>
                                                </div><!-- /.box-icon -->

                                                <div class="box-content">
                                                    <h2>Clean Code</h2>
                                                    <p>Everything is build upon Bootstrap 4 framework following best practises.</p>
                                                </div><!-- /.box-content -->
                                            </div><!-- /.box -->
                                        </div><!-- /.col-* -->

                                        <div class="col-md-6 col-lg-3">
                                            <div class="box">
                                                <div class="box-icon">
                                                    <i class="fa fa-desktop"></i>
                                                </div><!-- /.box-icon -->

                                                <div class="box-content">
                                                    <h2>Responsive Design</h2>
                                                    <p>Template is incorporating Bootstrap 4 grid system with its 5 resolutions.</p>
                                                </div><!-- /.box-content -->
                                            </div><!-- /.box -->
                                        </div><!-- /.col-* -->
                                    </div><!-- /.row -->
                                </div><!-- /.boxes -->
                            </div>

                        </div>

                        <div class="push-bottom">
                            <div class="page-header">
                                <h1>Popular Property Categories</h1>

                                <p>
                                    Check the best property categories avaialable in our directory.
                                </p>
                            </div><!-- /.page-header -->

                            <div class="categories">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="category" style="background-image: url('{{ asset('img/tmp/tmp-6.jpg') }}');">
                                                    <a href="properties.html" class="category-link">
							<span class="category-content">
								<span class="category-title">Villas</span>
								<span class="category-subtitle">30 submissions in directory</span>
								<span class="btn btn-primary">View List</span>
							</span><!-- /.category-content -->
                                                    </a>
                                                </div><!-- /.category -->
                                            </div><!-- /.col-* -->

                                            <div class="col-sm-6">
                                                <div class="category">
                                                    <a href="properties.html" class="category-link">
							<span class="category-content">
								<span class="category-title">Houses</span>
								<span class="category-subtitle">98 submissions in directory</span>
								<span class="btn btn-primary">View List</span>
							</span><!-- /.category-content -->
                                                    </a>
                                                </div><!-- /.category -->
                                            </div><!-- /.col-* -->
                                        </div><!-- /.row -->

                                        <div class="category" style="background-image: url('{{ asset('img/tmp/tmp-13.jpg') }}');">
                                            <a href="properties.html" class="category-link">
					<span class="category-content">
						<span class="category-title">Condos</span>
						<span class="category-subtitle">312 submissions in directory</span>
						<span class="btn btn-primary">View List</span>
					</span><!-- /.category-content -->
                                            </a>
                                        </div><!-- /.category -->
                                    </div><!-- /.col-* -->

                                    <div class="col-lg-4">
                                        <div class="category category-vertical" style="background-image: url('{{ asset('img/tmp/tmp-7.jpg') }}');">
                                            <a href="properties.html" class="category-link">
					<span class="category-content">
						<span class="category-title">Apartments</span>
						<span class="category-subtitle">213 submissions in directory</span>
						<span class="btn btn-primary">View List</span>
					</span><!-- /.category-content -->
                                            </a>
                                        </div><!-- /.category -->
                                    </div><!-- /.col-* -->
                                </div><!-- /.row -->
                            </div><!-- /.categories -->
                        </div>
                    </div><!-- /.container -->

                    <div class="image-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="image-description-wrapper col-md-12 col-lg-7">
                                    <div class="image-description">
                                        <h2>Real Estate Application Kit</h2>

                                        <p>
                                            Villareal is advanced real estate application kit. It is written upon Bootstrap 4 framework to offer best coding and user experience. It is easy to add or modify any part of the HTML template.
                                        </p>

                                        <a href="blog.html" class="btn btn-primary">View Blog Template</a>
                                    </div><!-- /.image-description -->
                                </div><!-- /.col-* -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->

                        <div class="image-holder col-lg-5 col-lg-offset-7 hidden-md-down">
                        </div><!-- /.col-* -->
                    </div><!-- /.image-wrapper -->

                    <div class="container">
                        <div class="page-header">
                            <h2>Featured Properties</h2>
                        </div>

                        <div class="listing-box-wrapper listing-box-background">
                            <div class="listing-carousel-wrapper">
                                <div class="listing-carousel">

                                    <div class="listing-box">
                                        <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-5.jpg') }}')">
                                            <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                            <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                        </div><!-- /.listing-box-image -->

                                        <div class="listing-box-title">
                                            <h2><a href="properties-detail-standard.html">Bright Island Route</a></h2>
                                            <h3>$ 40.000</h3>
                                        </div><!-- /.listing-box-title -->

                                        <div class="listing-box-content">
                                            <dl>
                                                <dt>Type</dt><dd>House</dd>
                                                <dt>Location</dt><dd>New York</dd>
                                                <dt>Area</dt><dd>180 sqft</dd>
                                            </dl>
                                        </div><!-- /.listing-box-cotntent -->
                                    </div><!-- /.listing-box -->

                                    <div class="listing-box">
                                        <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-4.jpg') }}')">
                                            <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                            <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                        </div><!-- /.listing-box-image -->

                                        <div class="listing-box-title">
                                            <h2><a href="properties-detail-standard.html">Misty Valley</a></h2>
                                            <h3>$ 27.000</h3>
                                        </div><!-- /.listing-box-title -->

                                        <div class="listing-box-content">
                                            <dl>
                                                <dt>Type</dt><dd>House</dd>
                                                <dt>Location</dt><dd>New York</dd>
                                                <dt>Area</dt><dd>180 sqft</dd>
                                            </dl>
                                        </div><!-- /.listing-box-cotntent -->
                                    </div><!-- /.listing-box -->

                                    <div class="listing-box">
                                        <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-11.jpg') }}')">
                                            <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                            <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                        </div><!-- /.listing-box-image -->

                                        <div class="listing-box-title">
                                            <h2><a href="properties-detail-standard.html">Foggy Anchor Campus</a></h2>
                                            <h3>$ 840.000</h3>
                                        </div><!-- /.listing-box-title -->

                                        <div class="listing-box-content">
                                            <dl>
                                                <dt>Type</dt><dd>House</dd>
                                                <dt>Location</dt><dd>New York</dd>
                                                <dt>Area</dt><dd>180 sqft</dd>
                                            </dl>
                                        </div><!-- /.listing-box-cotntent -->
                                    </div><!-- /.listing-box -->

                                    <div class="listing-box">
                                        <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-10.jpg') }}')">
                                            <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                            <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                        </div><!-- /.listing-box-image -->

                                        <div class="listing-box-title">
                                            <h2><a href="properties-detail-standard.html">Golden Fawn Thicket</a></h2>
                                            <h3>$ 321.000</h3>
                                        </div><!-- /.listing-box-title -->

                                        <div class="listing-box-content">
                                            <dl>
                                                <dt>Type</dt><dd>House</dd>
                                                <dt>Location</dt><dd>New York</dd>
                                                <dt>Area</dt><dd>180 sqft</dd>
                                            </dl>
                                        </div><!-- /.listing-box-cotntent -->
                                    </div><!-- /.listing-box -->

                                    <div class="listing-box">
                                        <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-3.jpg') }}')">
                                            <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                            <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                        </div><!-- /.listing-box-image -->

                                        <div class="listing-box-title">
                                            <h2><a href="properties-detail-standard.html">Little Brook Court</a></h2>
                                            <h3>$ 800 / per week</h3>
                                        </div><!-- /.listing-box-title -->

                                        <div class="listing-box-content">
                                            <dl>
                                                <dt>Type</dt><dd>House</dd>
                                                <dt>Location</dt><dd>New York</dd>
                                                <dt>Area</dt><dd>180 sqft</dd>
                                            </dl>
                                        </div><!-- /.listing-box-cotntent -->
                                    </div><!-- /.listing-box -->

                                    <div class="listing-box">
                                        <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-2.jpg') }}')">
                                            <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                            <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                        </div><!-- /.listing-box-image -->

                                        <div class="listing-box-title">
                                            <h2><a href="properties-detail-standard.html">Quiet Parade</a></h2>
                                            <h3>$ 256.000</h3>
                                        </div><!-- /.listing-box-title -->

                                        <div class="listing-box-content">
                                            <dl>
                                                <dt>Type</dt><dd>House</dd>
                                                <dt>Location</dt><dd>New York</dd>
                                                <dt>Area</dt><dd>180 sqft</dd>
                                            </dl>
                                        </div><!-- /.listing-box-cotntent -->
                                    </div><!-- /.listing-box -->

                                    <div class="listing-box">
                                        <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-1.jpg') }}')">
                                            <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                            <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                        </div><!-- /.listing-box-image -->

                                        <div class="listing-box-title">
                                            <h2><a href="properties-detail-standard.html">Fallen Rise Parkway</a></h2>
                                            <h3>$ 1200 / per week</h3>
                                        </div><!-- /.listing-box-title -->

                                        <div class="listing-box-content">
                                            <dl>
                                                <dt>Type</dt><dd>House</dd>
                                                <dt>Location</dt><dd>New York</dd>
                                                <dt>Area</dt><dd>180 sqft</dd>
                                            </dl>
                                        </div><!-- /.listing-box-cotntent -->
                                    </div><!-- /.listing-box -->

                                    <div class="listing-box">
                                        <div class="listing-box-image" style="background-image: url('{{ asset('img/tmp/tmp-8.jpg') }}')">
                                            <div class="listing-box-image-label">Featured</div><!-- /.listing-box-image-label -->

                                            <span class="listing-box-image-links">
			<a href="properties.html"><i class="fa fa-heart"></i> <span>Add to favorites</span></a>
			<a href="properties-detail-standard.html"><i class="fa fa-search"></i> <span>View detail</span></a>
			<a href="properties-compare.html"><i class="fa fa-balance-scale"></i> <span>Compare property</span></a>
		</span>
                                        </div><!-- /.listing-box-image -->

                                        <div class="listing-box-title">
                                            <h2><a href="properties-detail-standard.html">Hidden Trace</a></h2>
                                            <h3>$ 340.000</h3>
                                        </div><!-- /.listing-box-title -->

                                        <div class="listing-box-content">
                                            <dl>
                                                <dt>Type</dt><dd>House</dd>
                                                <dt>Location</dt><dd>New York</dd>
                                                <dt>Area</dt><dd>180 sqft</dd>
                                            </dl>
                                        </div><!-- /.listing-box-cotntent -->
                                    </div><!-- /.listing-box -->

                                </div>
                            </div>
                        </div>

                        <div class="partners">
                            <div class="partner-wrapper">
                                <a href="#"><img src="{{ asset('img/tmp/partner.png') }}" alt=""></a>
                            </div><!-- /.partner-wrapper -->

                            <div class="partner-wrapper">
                                <a href="#"><img src="{{ asset('img/tmp/partner.png') }}" alt=""></a>
                            </div><!-- /.partner-wrapper -->

                            <div class="partner-wrapper">
                                <a href="#"><img src="{{ asset('img/tmp/partner.png') }}" alt=""></a>
                            </div><!-- /.partner-wrapper -->

                            <div class="partner-wrapper">
                                <a href="#"><img src="{{ asset('img/tmp/partner.png') }}" alt=""></a>
                            </div><!-- /.partner-wrapper -->

                            <div class="partner-wrapper partner-wrapper-no-right-border">
                                <a href="#"><img src="{{ asset('img/tmp/partner.png') }}" alt=""></a>
                            </div><!-- /.partner-wrapper -->
                        </div><!-- /.partners -->
                    </div><!-- /.container -->
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

<div class="customizer">
    <div class="customizer-content">
        <h2>Color Variant</h2>

        <ul>
            <li><a href="{{ asset('css/villareal-turquoise.css') }}" class="background-turquoise"></a></li>
            <li><a href="{{ asset('css/villareal-orange.css') }}" class="background-orange"></a></li>
            <li><a href="{{ asset('css/villareal-orange-dark.css') }}" class="background-orange-dark"></a></li>
            <li><a href="{{ asset('css/villareal-purple.css') }}" class="background-purple"></a></li>
            <li><a href="{{ asset('css/villareal-cyan.css') }}" class="background-cyan"></a></li>
            <li><a href="{{ asset('css/villareal-teal.css') }}" class="background-teal"></a></li>
            <li><a href="{{ asset('css/villareal-magenta.css') }}" class="background-magenta"></a></li>
            <li><a href="{{ asset('css/villareal-green.css') }}" class="background-green"></a></li>
            <li><a href="{{ asset('css/villareal-green-dark.css') }}" class="background-green-dark"></a></li>
            <li><a href="{{ asset('css/villareal-red.css') }}" class="background-red"></a></li>
            <li><a href="{{ asset('css/villareal-brown.css') }}" class="background-brown"></a></li>
            <li><a href="{{ asset('css/villareal-blue.css') }}" class="background-blue"></a></li>
            <li><a href="{{ asset('css/villareal-blue-gray.css') }}" class="background-blue-gray"></a></li>
            <li><a href="{{ asset('css/villareal-yellow.css') }}" class="background-yellow"></a></li>
        </ul>
    </div><!-- /.customizer-content -->

    <div class="customizer-title">
        <span><i class="fa fa-cog"></i> Customizer</span>
    </div><!-- /.customizer-title -->
</div><!-- /.customizer -->

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
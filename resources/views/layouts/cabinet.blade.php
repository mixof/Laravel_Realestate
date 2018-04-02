<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('libraries/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('libraries/chartist/chartist.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.markercluster.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/leaflet.markercluster.default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/villareal-turquoise.css') }}" rel="stylesheet" type="text/css" id="css-primary">
    <link href="{{ asset('libraries/fine-uploader/fine-uploader-gallery.css') }}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.png">
    <script type="text/javascript" src="{{ asset('libraries/fine-uploader/fine-uploader.js') }}"></script>
    <title>@yield('title')</title>
    <script type="text/html" id="qq-template-gallery">
        <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Перетащите фото сюда">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Выбрать файл</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                    <div class="qq-progress-bar-container-selector qq-progress-bar-container">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <div class="qq-thumbnail-wrapper">
                        <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
                    </div>
                    <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
                    <button type="button" class="qq-upload-retry-selector qq-upload-retry">
                        <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
                        Retry
                    </button>

                    <div class="qq-file-info">
                        <div class="qq-file-name">
                            <span class="qq-upload-file-selector qq-upload-file"></span>
                            <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                        </div>
                        <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                        <span class="qq-upload-size-selector qq-upload-size"></span>
                        <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
                            <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
                            <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
                            <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
                        </button>
                    </div>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>
</head>
<body>
<div class="page-wrapper">
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar">
            <div class="dashboard-title">
                <a href="{{ url('/') }}">
                    <span class="logo-shape"></span> DonState
                </a>

                <button class="navbar-toggler pull-xs-right hidden-lg-up" type="button" data-toggle="collapse" data-target=".dashboard-nav-primary">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div><!-- /.dashboard-title -->

            <div class="dashboard-user hidden-md-down">
                <div class="dashboard-user-image" style="background-image: url('assets/img/tmp/agent-1.jpg');">
                </div><!-- /.dashboar-user-image -->
                <strong>Anita D. Smith</strong>
            </div><!-- /.dashboard-user -->

            <div class="dashboard-nav-primary collapse navbar-toggleable-md">
                <ul class="nav nav-stacked">
                    <li class="nav-item">
                        <a href="{{ url('/cabinet/properties') }}" class="nav-link active">
                            <i class="fa fa-building"></i> Объявления
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/cabinet/messages') }}" class="nav-link ">
                            <i class="fa fa-suitcase"></i> Сообщения
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/cabinet/plans') }}" class="nav-link ">
                            <i class="fa fa-suitcase"></i> Тарифы
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/logout') }}" class="nav-link">
                            <i class="fa fa-sign-out"></i> Выход
                        </a>
                    </li>
                </ul>
            </div><!-- /.dashboard-nav-primary -->



            <div class="dashboard-text hidden-md-down">
                <h2>Нужна помощь?</h2>
                <p>
                    If you have any questions, feel free to use our profile form. We will contact you as soon as possible.
                </p>
            </div><!-- /.dashboard-text -->

        </div><!-- /.dashboard-sidebar -->

        <div class="dashboard-content">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container -->
        </div><!-- /.dashboard-content -->
    </div><!-- /.dashboard -->
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
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
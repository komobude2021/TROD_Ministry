<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Root of David (TROD) | @yield('title')</title>
    <meta name="description" content="The Root of David also known as TROD is a Christian fellowship group committed to sharing love with our community, preaching the message of Jesus Christ and His kingdom">
    <meta name="keywords" content="The Root Of David,TROD,Christain Fellowship in Bradford,Church,Bradford,Church In Bradford,Bradford Church">
    <meta name="author" content="The Root of David (TROD)">
    <link rel="shortcut icon" href="{{ asset('images/favico.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/font-awesome.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/owl.carousel.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/owl.theme.default.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/magnific-popup.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/animate.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor/bootstrap-dropdownhover.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <script src="{{ asset('js/vendor/modernizr.min.js') }}"></script>

    @yield('additional_script')
</head>

<body>
    <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

    <!-- HEADER -->
    <div class="header header-1">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-6">
                        <p>The Root of David - <strong>(TROD)</strong></p>
                    </div>

                    <div class="col-sm-5 col-md-6">
                        <div class="sosmed-icon pull-right">
                            <a href="https://www.facebook.com/trodfellowship" target="_new"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/therootofdavidfellowship/" target="_new"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCo5TY3XBUpttlp09DQFQyiQ" target="_new"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="middlebar">
            <div class="container">
                <div class="contact-info">

                    <div class="box-icon-1">
                        <div class="icon">
                            <div class="fa fa-envelope-o"></div>
                        </div>

                        <div class="body-content">
                            <div class="heading">Email :</div>
                            hello@therootofdavid.co.uk
                        </div>
                    </div>

                    <div class="box-icon-1">
                        <div class="icon">
                            <div class="fa fa-phone"></div>
                        </div>

                        <div class="body-content">
                            <div class="heading">Call Us :</div>
                            07534 134056
                        </div>

                    </div>

                    <div class="box-act">
                        <a href="#" class="btn btn-lg btn-primary">DONATE NOW</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="navbar-main">
            <div class="container">

                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo.png') }}" alt="TROD Logo" />
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('index') }}">HOME</a>
                            </li>

                            <li class="nav-item {{ Request::is('about') || Request::is('volunteer') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                            </li>

                            <li class="nav-item {{ Request::is('event') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('event') }}">EVENTS</a>
                            </li>

                            <li class="nav-item {{ Request::is('live') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('live') }}">LIVESTREAM</a>
                            </li>

                            <li class="nav-item {{ Request::is('sermon*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('sermon') }}">SERMONS</a>
                            </li>

                            <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('gallery') }}">GALLERY</a>
                            </li>

                            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="section cta">
        <div class="content-wrap-20">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <div class="cta-1">
                            <div class="body-text">
                                <h3>Become A Partner in Spreading God's Love <i class="fa fa-heart"></i></h3>
                            </div>

                            <div class="body-action">
                                <a href="#" class="btn btn-secondary">DONATE NOW</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <div class="footer" data-background="{{ asset('images/bg-map-dot.jpg') }}">
        <div class="content-wrap">
            <div class="container">

                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="footer-item">
                            <img src="{{ asset('images/logo.png') }}" alt="TROD logo" class="logo-bottom">
                            <div class="spacer-30"></div>
                            <p>The Root of David also known as TROD is a Christian fellowship group committed to sharing love with our community, preaching the message of 
                                Jesus Christ and His kingdom.</p>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3">
                        <div class="footer-item">
                            <div class="footer-title">
                                WHO WE ARE
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <ul class="list">
                                        <li><a href="{{ route('about') }}" title="About us">About us</a></li>
                                        <li><a href="#" title="Donate">Donate</a></li>
                                        <li><a href="{{ route('live') }}" title="Livestream">Livestream</a></li>
                                        <li><a href="{{ route('contact') }}" title="Contact Us">Contact Us</a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <ul class="list">
                                        <li><a href="{{ route('event') }}" title="Events">Events</a></li>
                                        <li><a href="{{ route('volunteer') }}" title="Volunteer">Volunteer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    
                    <div class="col-sm-3 col-md-3">
                        <div class="footer-item">
                            <div class="footer-title">
                                CONTACT INFORMATION
                            </div>

                            <ul class="list-info">
                                <li>
                                    <div class="info-icon">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="info-text">
                                        De Lacy Centre, Bradford Cathedral 1 Stott Hill, Bradford, BD1 4EH
                                    </div>
                                </li>

                                <li>
                                    <div class="info-icon">
                                        <span class="fa fa-phone"></span>
                                    </div>

                                    <div class="info-text">
                                        07534 134056
                                    </div>
                                </li>

                                <li>
                                    <div class="info-icon">
                                        <span class="fa fa-envelope"></span>
                                    </div>
                                    <div class="info-text">
                                        hello@therootofdavid.co.uk
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <div class="col-sm-3 col-md-3">
                        <div class="footer-item">
                            <div class="footer-title">
                                FOLLOW US
                            </div>

                            <div class="sosmed-icon primary">
                                <a href="https://www.facebook.com/trodfellowship" target="_new"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/therootofdavidfellowship/" target="_new"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCo5TY3XBUpttlp09DQFQyiQ" target="_new"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="fcopy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p class="ftex">Copyright 2022 &copy; <span class="color-primary">The Root Of David (TROD)</span>.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- JS VENDOR -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    @if (Request::is('volunteer'))
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content ">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">THE ROOT OF DAVID (TROD) MINISTRY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                @include('privacywriteup')
                </div>
            </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    @endif

</body>

</html>
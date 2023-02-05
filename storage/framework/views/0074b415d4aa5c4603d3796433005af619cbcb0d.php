<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Root of David (TROD) | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="The Root of David also known as TROD is a Christian fellowship group committed to sharing love with our community, preaching the message of Jesus Christ and His kingdom">
    <meta name="keywords" content="The Root Of David,TROD,Christain Fellowship in Bradford,Church,Bradford,Church In Bradford,Bradford Church">
    <meta name="author" content="The Root of David (TROD)">
    <link rel="shortcut icon" href="<?php echo e(asset('images/favico.ico')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/font-awesome.min.css')); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/owl.carousel.min.css')); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/owl.theme.default.min.css')); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/magnific-popup.css')); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/animate.min.css')); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/vendor/bootstrap-dropdownhover.min.css')); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" />
    <script src="<?php echo e(asset('js/vendor/modernizr.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('additional_script'); ?>

    <style>
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 99998;
            top: 0;
            left: 0;
            background-color: #B27522;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            text-align:center;
        }
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 24px;
            color: #FAF9F6;
            display: block;
            transition: 0.3s;
        }
        .sidenav a:hover {
            color: #f1f1f1;
        }
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 40px;
            margin-left: 50px;
        }
        @media  screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
        .active-kel {
            color: #B27522;
        }
        .sidenav-active {
            color: #fff;
            font-weight: bold;
        }
        hr {
            border-top:#000 solid 1px
        }
        .ml-auto, .mx-auto {
            margin-left: auto !important;
        }
    </style>

</head>

<body>
    <a href="#0" class="cd-top cd-is-visible cd-fade-out d-none d-md-block d-lg-block d-xl-block">Top</a>

    <!-- MOBILE NAVBAR ----->
	<nav class="navbar navbar-expand-sm  navbar-dark fixed-bottom d-xs-block d-sm-block d-md-none d-lg-none d-xl-none" style="background-color:#fff !important; box-shadow:0px 0px 1px #000; padding-top:10px; padding-bottom:10px; z-index: 99999;">
		<div class="container-fluid" style="text-align:center; line-height: 1; font-weight:bold">

			<div class="col-sm-2 offset-md-1 kelly-nav">
				<a class="<?php echo e((request()->is('/')) ? 'active-kel' : ''); ?>" href="<?php echo e(route('index')); ?>" >
					<i class="fa fa-home" style="font-size: 28px"></i>
					<br/><span class="nav-f-11">Home</span>
				</a>
			</div>

            <div class="col-sm-2 kelly-nav">
				<a class="<?php echo e((request()->is('live')) ? 'active-kel' : ''); ?>" href="<?php echo e(route('live')); ?>">
					<i class="fa fa-youtube-play" style="font-size: 28px"></i>
					<br/><span class="nav-f-11">Live</span>
				</a>
			</div>

			<div class="col-sm-2 kelly-nav">
				<a class="<?php echo e((request()->is('sermon*')) ? 'active-kel' : ''); ?>" href="<?php echo e(route('sermon')); ?>">
					<i class="fa fa-book" style="font-size: 28px"></i>
					<br/><span class="nav-f-11">Sermons</span>
				</a>
			</div>

			<div class="col-sm-2 kelly-nav">
				<a class="<?php echo e((request()->is('event')) ? 'active-kel' : ''); ?>" href="<?php echo e(route('event')); ?>">
					<i class="fa fa-calendar" style="font-size: 28px"></i>
					<br/><span class="nav-f-11">Events</span>
				</a>
			</div>

			<div class="col-sm-2 kelly-n">
				<span style="cursor:pointer" onclick="openNav()" class="<?php echo e((request()->is('about') || (request()->is('volunteer*')) || (request()->is('gallery')) || (request()->is('contact')) ) ? 'active-kel' : ''); ?>">
					<i class="fa fa-bars" style="font-size: 28px"></i>
					<br/><span class="nav-f-11">More</span>
				</span>
			</div>
		</div>
	</nav>

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

            <div class="container d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="TROD Logo" />
                    </a>
                </nav>
            </div>

            <div class="container d-none d-md-block d-lg-block d-xl-block">

                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="#">
                        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="TROD Logo" />
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('index')); ?>">HOME</a>
                            </li>

                            <li class="nav-item <?php echo e(Request::is('about') || Request::is('volunteer') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('about')); ?>">ABOUT US</a>
                            </li>

                            <li class="nav-item <?php echo e(Request::is('event') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('event')); ?>">EVENTS</a>
                            </li>

                            <li class="nav-item <?php echo e(Request::is('live') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('live')); ?>">LIVESTREAM</a>
                            </li>

                            <li class="nav-item <?php echo e(Request::is('sermon*') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('sermon')); ?>">SERMONS</a>
                            </li>

                            <li class="nav-item <?php echo e(Request::is('gallery') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('gallery')); ?>">GALLERY</a>
                            </li>

                            <li class="nav-item <?php echo e(Request::is('contact') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('contact')); ?>">CONTACT US</a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>

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
    <div class="footer" data-background="<?php echo e(asset('images/bg-map-dot.jpg')); ?>">
        <div class="content-wrap">
            <div class="container">

                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="footer-item">
                            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="TROD logo" class="logo-bottom">
                            <div class="spacer-30"></div>
                            <p>The Root of David also known as TROD is a Christian fellowship group committed to sharing love with our community, preaching the message of 
                                Jesus Christ and His kingdom.</p>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3 d-none d-md-block d-lg-block d-xl-block">
                        <div class="footer-item">
                            <div class="footer-title">
                                WHO WE ARE
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <ul class="list">
                                        <li><a href="<?php echo e(route('about')); ?>" title="About us">About us</a></li>
                                        <li><a href="#" title="Donate">Donate</a></li>
                                        <li><a href="<?php echo e(route('live')); ?>" title="Livestream">Livestream</a></li>
                                        <li><a href="<?php echo e(route('contact')); ?>" title="Contact Us">Contact Us</a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <ul class="list">
                                        <li><a href="<?php echo e(route('event')); ?>" title="Events">Events</a></li>
                                        <li><a href="<?php echo e(route('volunteer')); ?>" title="Volunteer">Volunteer</a></li>
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
                                        RIO GRANDE, 144 Woodhead Rd, Bradford, BD7 1PD<br/> (Behind University of Bradford)
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


                    <div class="col-sm-3 col-md-3 d-none d-md-block d-lg-block d-xl-block">
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

                            <div class="d-none d-md-block d-lg-block d-xl-block" style="padding-top: 20px">
                                <a href="https://play.google.com/store/apps/details?id=therootofdavid.trod" target="_new">
                                    <img src="<?php echo e(asset('images/googleplay.png')); ?>" style="width: 60%" />
                                </a>
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



    <!-- MORE NAV LINK - MOBILE NAVIGATION -->
	<div id="mySidenav" class="sidenav">
		<div style="padding-top: 20px">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		</div>
		<div style="text-align: left">
			<a href="<?php echo e(route('about')); ?>" class="<?php echo e((request()->is('about')) ? 'sidenav-active' : ''); ?>">
				<i class="fa fa-info-circle"></i> About Us
			</a>
			<a href="<?php echo e(route('volunteer')); ?>" class="<?php echo e((request()->is('volunteer*')) ? 'sidenav-active' : ''); ?>">
				<i class="fa fa-user"></i> Volunteer
			</a>
			<a href="<?php echo e(route('gallery')); ?>" class="<?php echo e((request()->is('gallery')) ? 'sidenav-active' : ''); ?>">
				<i class="fa fa-picture-o"></i> Gallery
			</a>
			<a href="<?php echo e(route('contact')); ?>" class="<?php echo e((request()->is('contact*')) ? 'sidenav-active' : ''); ?>">
				<i class="fa fa-map-marker"></i> Contact Us
			</a>
		</div>
	</div>

	<script>
		 /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        } 
	</script>
	<!-- END OF MORE NAV LINK - MOBILE NAVIGATION -->


    <!-- JS VENDOR -->
    <script src="<?php echo e(asset('js/vendor/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>

    <?php if(Request::is('volunteer')): ?>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index:99999">
            <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content ">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">THE ROOT OF DAVID (TROD) MINISTRY</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <?php echo $__env->make('privacywriteup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    <?php endif; ?>

</body>

</html><?php /**PATH /home/theruhmz/public_html/resources/views/app.blade.php ENDPATH**/ ?>
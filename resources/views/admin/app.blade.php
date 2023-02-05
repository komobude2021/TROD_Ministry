<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>The Root of David (TROD) - Administrative Account</title>



	<meta name="description" content="The Root of David also known as TROD is a Christian fellowship group committed to sharing love with our community, preaching the message of Jesus Christ and His kingdom">

    <meta name="keywords" content="The Root Of David,TROD,Christain Fellowship in Bradford,Church,Bradford,Church In Bradford,Bradford Church">

    <meta name="author" content="The Root of David (TROD)">

    <link rel="shortcut icon" href="{{ asset('images/favico.ico') }}">



	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('admin/assets/css/vendor/bootstrap.css') }}">

	<link rel="stylesheet" href="{{ asset('admin/assets/css/common/main.bundle.css') }}">

	<link rel="stylesheet" href="{{ asset('admin/assets/css/layouts/vertical/core/main.css') }}">

	<link rel="stylesheet" href="{{ asset('admin/assets/css/layouts/vertical/menu-type/default.css') }}">

	<link rel="stylesheet" href="{{ asset('admin/assets/css/layouts/vertical/themes/theme-a.css') }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	@yield('additional_links')

</head>

<body>

	<!-- CONTENT WRAPPER -->

	<div id="app">

		<!-- MENU SIDEBAR WRAPPER -->

		<aside class="sidebar sidebar-left">

			<div class="sidebar-content">

				<div class="aside-toolbar" style="height: 100px">

					<ul class="site-logo">

						<li>

							<!-- START LOGO -->

								<a href="index.html">

									<div class="logo">

										<img src="{{ asset('images/logo.png') }}" />

									</div>

								</a>

							<!-- END LOGO -->

						</li>

					</ul>

				</div>

				<nav class="main-menu">

					<ul class="nav metismenu">

						

						<li class="sidebar-header"><span>NAVIGATION</span></li>



						<li class="{{ (Request()->is('admin/index') || (Request()->is('admin/liveview')) ? 'active' : '' ) }}">

							<a href="{{ route('admin.index') }}"><i class="fa fa-youtube-play"></i><span>Live View</span></a>

						</li>



						<li class="{{ (Request()->is('admin/sermon*') ? 'active' : '' ) }}">

							<a href="{{ route('admin.sermon') }}"><i class="fa fa-book"></i><span>Sermons</span></a>

						</li>



						<li>

							<a href="#"><i class="fa fa-user-circle-o"></i><span>Volunteers</span></a>

						</li>


						<li>

							<a href="#"><i class="fa fa-calendar-o"></i><span>Events</span></a>

						</li>

						<li>

							<a href="#"><i class="fa fa-key"></i><span>Password</span></a>

						</li>



						<li>

							<a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></a>

						</li>



						<!--<li class="nav-dropdown active">

							<a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-article"></i><span>Page Layouts</span></a>

							<ul class="collapse in nav-sub" aria-expanded="false">

								<li class="active"><a href="layout.blank.html"><span>Blank Page</span></a></li>

								<li><a href="layout.1-column-wide.html"><span>1 Column Wide</span></a></li>

							</ul>

						</li>-->

					</ul>

				</nav>

			</div>

		</aside>





			<!-- END MENU SIDEBAR WRAPPER -->

			<div class="content-wrapper">

				<!-- TOP TOOLBAR WRAPPER -->

				<nav class="top-toolbar navbar navbar-mobile navbar-tablet">

					<ul class="navbar-nav nav-left">

						<li class="nav-item">

							<a href="javascript:void(0)" data-toggle-state="aside-left-open">

								<i class="fa fa-bars" style="font-size:28px;"></i>

							</a>

						</li>

					</ul>

					<ul class="navbar-nav nav-center site-logo">

						<li>

							<a href="index.html">

								<div class="logo_mobile"></div>

								<img src="{{ asset('images/logo.png') }}" />

							</a>

						</li>

					</ul>

					<ul class="navbar-nav nav-right">

						<li class="nav-item">

						</li>

					</ul>

				</nav>



				

				<nav class="top-toolbar navbar navbar-desktop flex-nowrap">

					



				</nav>

				<!-- END TOP TOOLBAR WRAPPER -->

				<div class="content">

					<header class="page-header">

						<div class="d-flex align-items-center">

							@yield('breadcrumb')

						</div>

					</header>



					<div class="page-content container-fluid">

						@yield('content')

					</div>



				</div>



			</div>



		</div>

		<script src="{{ asset('admin/assets/vendor/modernizr/modernizr.custom.js') }}"></script>

		<script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>

		<script src="{{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

		<script src="{{ asset('admin/assets/vendor/js-storage/js.storage.js') }}"></script>

		<script src="{{ asset('admin/assets/vendor/metismenu/dist/metisMenu.js') }}"></script>

		<script src="{{ asset('admin/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<script src="{{ asset('admin/assets/js/global/app.js') }}"></script>

	</body>

	

</html>
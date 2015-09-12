<!--[if IE 9]> <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); wp_title('&#124;', right); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="<?php bloginfo('admin_email'); ?>">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php get_template_directory_uri(); ?> ">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	  <?php wp_enqueue_scripts("jquery"); ?>
	  <?php wp_head(); ?>

	</head>

	<?php if ( is_home() ) : ?>
	<body <?php body_class('front no-trans'); ?> >
	<?php else : ?>
	<body <?php body_class('no-trans'); ?> >
	<?php endif; ?>

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">

			<!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
			<!-- ================ -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-2  col-sm-6">

							<!-- header-top-first start -->
							<!-- ================ -->
							<div class="header-top-first clearfix">
								<ul class="social-links clearfix hidden-xs">
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
									<!-- <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li> -->
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li class="github"><a target="_blank" href="http://www.github.com"><i class="fa fa-github"></i></a></li>
									<!-- <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li> -->
								</ul>
								<div class="social-links hidden-lg hidden-md hidden-sm">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
										<ul class="dropdown-menu dropdown-animation">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
											<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
											<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- header-top-first end -->

						</div>
						<div class="col-xs-10 col-sm-6">

							<!-- header-top-second start -->
							<!-- ================ -->
							<div id="header-top-second"  class="clearfix">

								<!-- header top dropdowns start -->
								<!-- ================ -->
								<div class="header-top-dropdown">
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Search</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form role="search" class="search-box">
													<div class="form-group has-feedback">
														<input type="text" class="form-control" placeholder="Search">
														<i class="fa fa-search form-control-feedback"></i>
													</div>
												</form>
											</li>
										</ul>
									</div>
									<div class="btn-group dropdown">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</button>
										<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
											<li>
												<form class="login-form">
													<div class="form-group has-feedback">
														<label class="control-label">Username</label>
														<input type="text" class="form-control" placeholder="">
														<i class="fa fa-user form-control-feedback"></i>
													</div>
													<div class="form-group has-feedback">
														<label class="control-label">Password</label>
														<input type="password" class="form-control" placeholder="">
														<i class="fa fa-lock form-control-feedback"></i>
													</div>
													<button type="submit" class="btn btn-group btn-dark btn-sm">Log In</button>
													<span>or</span>
													<button type="submit" class="btn btn-group btn-default btn-sm">Sign Up</button>

													<ul>
														<li><a href="#">Forgot your password?</a></li>
													</ul>
													<div class="divider"></div>
													<span class="text-center">Login with</span>
													<ul class="social-links clearfix">
														<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
														<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
														<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
													</ul>
												</form>
											</li>
										</ul>
									</div>

								</div>
								<!--  header top dropdowns end -->

							</div>
							<!-- header-top-second end -->

						</div>
					</div>
				</div>
			</div>
			<!-- header-top end -->

			<!-- header start classes:
				fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
				 dark: dark header version e.g. <header class="header dark clearfix">
			================ -->
			<header class="header fixed clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-3">

							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- logo -->
								<div class="logo">
									<a href="index.html"><img id="logo" src="wp-content/themes/jardimdigital/assets/images/Logo.png" alt="Jardim Digital"></a>
								</div>

							</div>
							<!-- header-left end -->

						</div>
						<div class="col-md-9">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- ================ -->
								<div class="main-navigation animated">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<ul class="nav navbar-nav navbar-right">
													<li><a href="#about">Quem Somos</a></li>
													<!-- mega-menu start -->
													<li class="dropdown mega-menu">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">Soluções</a>
														<ul class="dropdown-menu">
															<li>
																<div class="row">
																	<div class="col-sm-4 col-md-6">
																		<h4>iDea - Powerful Bootstrap Theme</h4>
																		<p>iDea is a Clean and Super Flexible Bootstrap Theme with many Features and Unlimited options.</p>
																		<img src="images/section-image-1.png" alt="image-1">
																	</div>
																	<div class="col-sm-8 col-md-6">
																		<h4>Propostas</h4>
																		<div class="row">
																			<div class="col-sm-6">
																				<div class="divider"></div>
																				<ul class="menu">
																					<li><a href="components-tabs-and-pills.html"><i class="icon-right-open"></i>Portfolio interativo</a></li>
																					<li><a href="components-accordions.html"><i class="icon-right-open"></i>Acervo de Vídeo</a></li>
																					<li><a href="components-social-icons.html"><i class="icon-right-open"></i>SEBRAETEC</a></li>
																					<li><a href="components-buttons.html"><i class="icon-right-open"></i>Hipervideo</a></li>
																					<li><a href="components-forms.html"><i class="icon-right-open"></i>aovivonaweb</a></li>
																					<li><a href="components-progress-bars.html"><i class="icon-right-open"></i>Live Transcoding</a></li>
																					<li><a href="components-alerts-and-callouts.html"><i class="icon-right-open"></i>Ação Digital</a></li>
																					<li><a href="components-content-sliders.html"><i class="icon-right-open"></i>Solução Z</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<!-- mega-menu end -->
													<li><a href="#about">Cases</a></li>
													<li><a href="#about">Blog</a></li>
													<li><a href="#about">Contato</a></li>
												</ul>
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->

							</div>
							<!-- header-right end -->

						</div>
					</div>
				</div>
			</header>
			<!-- header end -->

			<?php if ( !is_home() ) : ?>
			<!-- page-intro start-->
			<!-- ================ -->
			<div class="page-intro">
			  <div class="container">
			    <div class="row">
			      <div class="col-md-12">
			        <ol class="breadcrumb">
			          <li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
			          <li class="active"><?php the_title(); ?></li>
			        </ol>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- page-intro end -->
			<?php endif; ?>
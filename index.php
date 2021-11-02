<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content='algoders'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title Tag  -->
	<title>Algoders | We Build Your Ideas</title>

	<!-- Favicon -->
	<link rel="icon" type="image/favicon.png" href="img/favicon.png">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">

	<!-- Bizwheel Plugins CSS -->
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/cubeportfolio.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/magnific-popup.min.css">
	<link rel="stylesheet" href="css/owl-carousel.min.css">
	<link rel="stylesheet" href="css/slicknav.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<style>
		* {
			scroll-behavior: smooth;
		}
	</style>
</head>
<?php
if (isset($_POST['submit'])) {
	extract($_POST);
	$to = 'info@algoders.com';
	$subject = "New Query";
	$from = $email;

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Create email headers
	$headers .= 'From: ' . $from . "\r\n" .
		'Reply-To: ' . $from . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	$message = "
			Hi, there's a new query from " . $first_name . " " . $last_name . ", Email: " . $email . ", Phone: " . $phone . ", Message: " . $messageBox . "
		";
	$txt = $message;
	$response = mail($to, $subject, $txt, $headers);
	if ($response) {
		echo "<script>alert('Your query has been submitted, we will get back to you shortly.')</script>";
	} else {
		echo "<script>alert('Opps! your query has not been reached to us yet, please feel free to call us: +919435333519')</script>";
	}
}
?>

<body id="bg">

	<!-- Boxed Layout -->
	<div id="page" class="site boxed-layout">

		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->

		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone"></i>(+91) 9435333519</div>
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: info@algoders.com
								</div>
								<div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 04PM - 11PM (IST)
								</div>
							</div>
							<!-- End Top Contact -->
						</div>
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>
								<div class="button">
									<a href="#contact" class="bizwheel-btn">Get a Quote</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo" style="border: 0px solid black; margin-top: 30px; width: 300px;">
												<a href="index.html">
													<!-- <img style="border: 1px solid black;"
														src="img/general_developers_logo.png" alt="#"> -->
													<span style="font-size: 20px;
														display: inline-block;
														border: 0px solid black;">
														&lt &#47 &gt Algoders
													</span>
												</a>
											</div>
										</div>
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">
													<div class="nav-inner">
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="index.html">Home</a></li>
																<li><a href="#service">Our Services</a></li>
																<!-- <li><a href="portfolio.html">Our Portfolio</a></li> -->
																<!-- <li class="icon-active"><a href="#">Blog</a>
																	<ul class="sub-menu">
																		<li><a href="blog.html">Blog Grid</a></li>
																		<li><a href="blog-single.html">Blog Single</a>
																		</li>
																	</ul>
																</li> -->
																<!-- <li class="icon-active"><a href="#">Pages</a>
																	<ul class="sub-menu">
																		<li><a href="about.html">About Us</a></li>
																		<li><a href="404.html">404</a></li>
																	</ul>
																</li> -->
																<li><a href="#contact">Contact Us</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#"><i class="fa fa-search"></i></a>
													</li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<!-- <div class="search-top">
													<form action="#" class="search-form" method="get">
														<input type="text" name="s" value=""
															placeholder="Search here" />
														<button type="submit" id="searchsubmit"><i
																class="fa fa-search"></i></button>
													</form>
												</div> -->
												<!--/ End Search Form -->
											</div>
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<!-- <div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">
					<h4>About Bizwheel</h4>
					<p>The main component of a healthy environment for self esteem is that it needs be nurturing. It
						should provide unconditional warmth.</p>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="single-content">
					<h4>Important Links</h4>
					<ul class="links">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Pricing Plan</a></li>
						<li><a href="#">Blog & News</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div> -->
			<!--/ Sidebar Popup -->
		</header>
		<!--/ End Header -->

		<!-- Hero Slider -->
		<section class="hero-slider style1">
			<div class="">
				<!-- Single Slider -->
				<div class="single-slider" style="">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text">
									<div class="hero-text">
										<h4>Your search ends here</h4>
										<h1>Your one stop solution for your digital presence</h1>
										<div class="p-text">
											<p>We are experties in developing custom softwares, websites and mobile apps
												which will help you to build your digital presence and enhance your
												business. We also have a qualified digital marketing team which will
												help your business grow fast.</p>
										</div>
										<div class="button">
											<a href="contact.html" class="bizwheel-btn theme-1 effect">Work with us</a>
											<!-- <a href="portfolio.html" class="bizwheel-btn theme-2 effect">View Our
												Portfolio</a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<!-- <div class="single-slider" style="background-image:url('https://via.placeholder.com/1700x800.png')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text">
									<div class="hero-text">
										<h4>Your time is so important for us</h4>
										<h1>Build Your WorldClass Brand with Bizwheel</h1>
										<div class="p-text">
											<p>Nunc tincidunt venenatis elit. Etiam venenatis quam vel maximus bibendum
												Pellentesque elementum dapibus diam tristique</p>
										</div>
										<div class="button">
											<a href="blog.html" class="bizwheel-btn theme-1 effect">Read our blog</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<!-- <div class="single-slider" style="background-image:url('https://via.placeholder.com/1700x800.png')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text">
									<div class="hero-text">
										<h4>Our experties are waiting for you</h4>
										<h1>Best Way to Represent your Next Business </h1>
										<div class="p-text">
											<p>Nunc tincidunt venenatis elit. Etiam venenatis quam vel maximus bibendum
												Pellentesque elementum dapibus diam tristique</p>
										</div>
										<div class="button">
											<a href="team.html" class="bizwheel-btn theme-2 effect">Our Leaders</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Hero Slider -->

		<!-- Features Area -->
		<section class="features-area section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="service-single.html">Creative Design</a></h4>
							<p>We have a qualified team of designers which will transform your idea into real Products
								which are of best quality</p>
							<!-- <div class="button">
								<a href="service-single.html" class="bizwheel-btn"><i
										class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div> -->
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="service-single.html">Quality Service</a></h4>
							<p>We use the best industry standard to build our product and deliver our services, so there
								is no compromise on the quality</p>
							<!-- <div class="button">
								<a href="service-single.html" class="bizwheel-btn"><i
										class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div> -->
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature active">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="service-single.html">On-time Delivery</a></h4>
							<p>We always makes sure that you get your dream project delivered on time so that you can
								start your dream right away</p>
							<!-- <div class="button">
								<a href="service-single.html" class="bizwheel-btn"><i
										class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div> -->
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="service-single.html">Customer support</a></h4>
							<p>Facing difficulties? No worries, our trained customer support team is ready to help you
								anytime</p>
							<!-- <div class="button">
								<a href="service-single.html" class="bizwheel-btn"><i
										class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div> -->
						</div>
						<!--/ End Single Feature -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Features Area -->

		<!-- Call To Action -->
		<section class="call-action overlay" style="">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="call-inner">
							<h2>Brand Products &amp; Creativity is our Fashion</h2>
							<!-- <p>ehicula maximus velit. Morbi non tincidunt purus, a hendrerit nisi. Vivamus elementum</p> -->
						</div>
					</div>
					<div class="col-lg-3 col-12">
						<!-- <div class="button">
							<a href="portfolio.html" class="bizwheel-btn">Our Portfolio</a>
						</div> -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->

		<!-- Services -->
		<section id="service" class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title style2 text-center">
							<div class="section-top">
								<h1><span>Creative</span><b>Service We Provide</b></h1>
								<h4>We provide quality service &amp; support..</h4>
							</div>
							<div class="section-bottom">
								<div class="text-style-two">
									<p>In just few steps you will be ready to take your business to next level</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/planning.jpg" alt="#">
								<div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-business.html">Step 1: Planing</a></h4>
								<p>First we will sit over a hot cup of coffee and discuss how we can make your business
									go online and take your business to next level</p>
								<!-- <a class="btn" href="service-business.html"><i
										class="fa fa-arrow-circle-o-right"></i>View Service</a> -->
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/development.png" alt="#">
								<div class="icon-bg"><i class="fa fa-html5"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-develop.html">Step 2: Product Development</a></h4>
								<p>Our expert developers will make best custom software, webpage and mobile apps
									specially tailored to meet your business need</p>
								<!-- <a class="btn" href="service-develop.html"><i
										class="fa fa-arrow-circle-o-right"></i>View Service</a> -->
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="img/digital-marketing.jpg" alt="#">
								<div class="icon-bg"><i class="fa fa-cube"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-market.html">Step 3: Digital marketing</a></h4>
								<p>Our expert digital marketing team you help your business reach each and every corner
									via our expert seo, sem and smm services</p>
								<!-- <a class="btn" href="service-market.html"><i class="fa fa-arrow-circle-o-right"></i>View
									Service</a> -->
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Services -->

		<!-- Contact Us -->
		<section id="contact" class="contact-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<h4>Get In Touch</h4>
							<form class="form" method="post" action="">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="first_name" placeholder="First Name" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="last_name" placeholder="Last Name" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-envelope"></i></div>
											<input type="email" name="email" placeholder="Enter your email" required>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-phone"></i></div>
											<input type="text" pattern="[6789]{1}[0-9]{9}" name="phone" placeholder="Phone">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group textarea">
											<div class="icon"><i class="fa fa-pencil"></i></div>
											<textarea type="textarea" name="messageBox" rows="5"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" name="submit" class="bizwheel-btn theme-2">Send Now</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="contact-box-main m-top-30">
							<div class="contact-title">
								<h2>Contact with us</h2>
								<p>euismod eu augue. Etiam vel dui arcu. Cras varius mieros pharetra, id aliquam metus
									venenatis. Donec sollicit</p>
							</div>
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-clock-o"></i></div>
								<div class="c-text">
									<h4>Opening Hour</h4>
									<p>Monday - Saturday<br>04PM - 11PM</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-phone"></i></div>
								<div class="c-text">
									<h4>Call Us Now</h4>
									<p>(+91) 9435333519<br> (+91) 7002249057</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
								<div class="c-text">
									<h4>Email Us</h4>
									<p>info@algoders.com<br>algoderssoftware@gmail.com</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- <div class="button">
								<a href="#" class="bizwheel-btn theme-1">Contact us now<i class="fa fa-angle-right"></i></a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->

		<!-- Client Area -->
		<div class="clients section-bg">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="partner-slider">
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="img/client/client-1.png" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="img/client/client-2.png" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="img/client/client-3.png" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="img/client/client-4.png" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="img/client/client-5.png" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="#" target="_blank"><img src="img/client/client-6.png" alt="#"></a>
								</div>
							</div>
							<!--/ End Single client -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Client Area -->

		<!-- Footer -->
		<footer class="footer" style="background-image:url('img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer About -->
							<div class="single-widget footer-about widget" style="border: 0px solid white; margin-top: 35px;">
								<div class="" style="border: 0px solid white;">
									<!-- <div class="img-logo">
										<a class="logo" href="index.html">
											<img class="img-responsive" src="img/logo2.png" alt="logo">
										</a>
									</div> -->
									<span style="font-size: 25px; color: white;">
										&lt &#47 &gt Algoders
									</span>
								</div>
								<div class="footer-widget-about-description" style="margin-top: 20px;">
									<p>We are a team of experienced developers and marketing experts ready to take your
										business to next level </p>
								</div>
								<div class="social">
									<!-- Social Icons -->
									<ul class="social-icons">
										<li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
								<!-- <div class="button"><a href="#" class="bizwheel-btn">About Us</a></div> -->
							</div>
							<!--/ End Footer About -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Company</h3>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Our Services</a></li>
									<li><a href="#">Portfolio</a></li>
									<li><a href="#">Pricing Plan</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>
							<!--/ End Footer Links -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">
								<h3 class="widget-title">Blog Page</h3>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April
												15, 2020</time></p>
										<h4 class="title"><a href="#">We Provide you Best &amp; Creative
												Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April
												10, 2020</time></p>
										<h4 class="title"><a href="#">We Provide you Best &amp; Creative
												Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
							</div>
							<!--/ End Footer News -->
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer Contact -->
							<div class="single-widget footer_contact widget">
								<h3 class="widget-title">Contact</h3>
								<p>Have project in mind? Feel free to contact us</p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i>(+91) 9435333519</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@algoders.com
									</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i>Sundarbari,
										Guwahati</li>
								</ul>
							</div>
							<!--/ End Footer Contact -->
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
							<!-- Footer Newsletter -->
							<!-- <div class="footer-newsletter">
								<form action="#" method="post" class="newsletter-area">
									<input type="email" placeholder="Your email address">
									<button type="submit">Sign Up</button>
								</form>
							</div> -->
							<!--/ End Footer Newsletter -->
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© Copyright <a href="#">Algoders</a>. Design &amp; Development By <a target="_blank" href="#">Algoders</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>

		<!-- Jquery JS -->
		<script defer src="js/jquery.min.js"></script>
		<script defer src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script defer src="js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script defer src="js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script defer src="js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script defer src="js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script defer src="js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script defer src="js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script defer src="js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script defer src="js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script async src="js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script defer src="js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script defer src="js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script defer src="js/active.js"></script>
</body>

</html>
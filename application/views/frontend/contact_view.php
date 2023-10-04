<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- TITLE -->
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/images/favicon.png' ?>" />
	<meta name="description" content="OpenSource SOURCE CODE company profile hotel yang di develop oleh M Fikri Setiadi">

	<!-- META FOR IOS & HANDHELD -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
	<!-- //META FOR IOS & HANDHELD -->

	<!-- GOOGLE FONT -->
	<link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>


	<!-- CSS LIBRARY -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/font-awesome.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/font-lotusicon.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/bootstrap.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/owl.carousel.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/jquery-ui.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/magnific-popup.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/settings.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/lib/bootstrap-select.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/helper.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/custom.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/responsive.css' ?>">

	<!-- MAIN STYLE -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/style.css' ?>">
	<!-- Box Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

	<style>
		/* CSS untuk menentukan ukuran peta */
		.map {
			background-color: white;
		}

		.whatsapp-logo {
			position: fixed;
			bottom: 75px;
			right: 30px;
			z-index: 9999;
		}

		.whatsapp-logo img {
			display: block;
			margin: auto;
			width: 120px;
			height: 120px;
		}

		#border1,
		#border2,
		#border3,
		#border4,
		#border5 {
			border-color: goldenrod;
		}

		@media screen and (max-width: 767px) {

			/* CSS untuk tampilan layar kecil */
			.whatsapp-logo {
				bottom: 80px;
				right: 20px;
			}
		}

		/*  */
		:root {
			--main-color: #BD984A;
			--text-color: #2f2f2f;
			--bg-color: #F2D8A7;
			--big-font: 3.2rem;
			--h2-font: 2rem;
		}

		/* sosial */
		.contact {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.social a {
			font-size: 27px;
			margin: 0.5rem;
		}

		.social a .bx {
			padding: 5px;
			color: #fff;
			background: #161616;
			border-radius: 50%;
		}

		.social a .bx:hover {
			background: var(--main-color);
		}

		/* Contact Form */
		.contact-form {
			display: flex;
		}

		.contact-form form {
			display: flex;
			flex-direction: column;
		}

		.contact-form form input,
		textarea {
			/* width: 800px; */
			padding: 14px;
			border-radius: 0.5rem;
			border: none;
			outline: none;
			background: #FFF7E5;
		}

		.contact-form form textarea {
			resize: none;
			height: 200px;
		}

		.contact-form form .contact-button {
			font-weight: 500;
			color: #fff;
			background: var(--main-color);
			cursor: pointer;
			margin-top: 17px;
			width: 500px;
		}

		.contact-form form .contact-button:hover {
			background: #BD984A;
		}

		/* Tampilan mobile */

		@media screen and (max-width: 767px) {

			.whatsapp-logo {
				bottom: 80px;
				right: 20px;
			}

			.whatsapp-logo img {
				width: 100px;
				height: 100px;
				display: block;
				margin: auto;
			}

			.contact .heading {
				margin-top: 10%;
			}
		}

		@media only screen and (min-width:320px) and (max-width:480px) {
			.whatsapp-logo img {
				width: 80px;
				height: 80px;
			}

			.whatsapp-logo {
				bottom: 135px;
				right: 14px;
				z-index: 9999;

			}

			.section-contact .contact {
				/* padding-left: 2%; */
				float: left;
				margin-top: -7%;
			}

			.text {
				font-size: smaller;
				font-weight: lighter;
				margin-right: 25%;
			}

			.map {
				width: 97%;
			}

			.social ul a .bx {
				width: 10%;
				margin-top: 5%;
				margin-left: 3%;
				margin-bottom: 5%;
			}

			.heading {
				margin-left: 5%;
				margin-bottom: -5%;
			}

			.contact-form form {
				width: 72%;
			}

			form .row .contact-button #contact-button {
				width: 20%;
			}

		}
	</style>



</head>

<body>


	<!-- PRELOADER -->
	<div id="preloader">
		<span class="preloader-dot"></span>
	</div>
	<!-- END / PRELOADER -->

	<!-- PAGE WRAP -->
	<div id="page-wrap">

		<!-- HEADER -->
		<header id="header" class="header-v2">

			<!-- HEADER TOP -->
			<?php $this->load->view('frontend/headertop'); ?>
			<!-- END / HEADER TOP -->

			<!-- HEADER LOGO & MENU -->
			<?php $this->load->view('frontend/header'); ?>

			<!-- END / HEADER LOGO & MENU -->

		</header>
		<!-- END / HEADER -->

		<!--BANNER -->
		<section class="section-sub-banner bg-9">
			<div></div>
			<div class="sub-banner">
				<div class="container">
					<div class="text text-center">
					</div>
				</div>

			</div>

		</section>
		<!-- END BANNER -->

		<!-- CONTACT -->
		<section class="section-contact">
			<div class="container">
				<div class="contact">
					<div class="row">
						<div class="col-md-6 col-lg-5">

							<div class="text">
								<?php
								$sqf = $this->db->query("SELECT * from kontak");
								$dataf = $sqf->row_array();
								?>

								<h2>Contact</h2>
								<p><?php echo $dataf['des'] ?> </p>
								<!-- Map -->
								<div class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8305231148815!2d110.36305001477822!3d-7.807758794373631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57ff47006cdb%3A0x79a801d482b923fc!2sKesatriyan%20Jogja%20Guesthouse!5e0!3m2!1sen!2sid!4v1683479258911!5m2!1sen!2sid" width="100%" height="200" style="border: 2px solid #f4eff7; border-radius: 4px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<section class="contact" id="contact">
									<div class="social">
										<ul>
											<!-- <li><i class="icon lotus-icon-location"></i> <?php echo $dataf['alamat'] ?></li> -->
											<li><a href=""><i class="bx bxl-whatsapp"></i> </a> <?php echo $dataf['telp'] ?></li>
											<li><a href=""><i class="bx bxl-gmail"></i></a> <?php echo $dataf['email'] ?></li>
											<li><a href=""><i class="bx bxl-tiktok"></i> </a><?php echo $dataf['medsos'] ?></li>

										</ul>
									</div>
								</section>


							</div>
						</div> <br> 

						<section class="contact" id="contact">

							<div class="col-md-6 col-lg-6 col-lg-offset-1">
								<div class="heading">
									<p>Book via email or send comment</p>
								</div>
								<div class="contact-form">
									<form action="<?php echo site_url('contact/kirim'); ?>" method="post">
										<div class="row">
											<div class="col-sm-6">
												<input type="text" class="field-text" name="name" placeholder="Name" required id="border1">
											</div>
											<div class="col-sm-6">
												<input type="email" class="field-text" name="email" placeholder="Email" required id="border2">
											</div>
											<div class="col-sm-12">
												<input type="text" class="field-text" name="subject" placeholder="Book or Comment" required id="border3">
											</div>
											<div class="col-sm-12">
												<textarea cols="30" rows="10" name="message" class="field-textarea" placeholder="Write you message ex: I book 2 deluxe type rooms for 2 days on June 17, 2023. " required id="border4"></textarea>
											</div>
											<div class="col-sm-12">
											<button type="submit" class="contact-button awe-btn awe-btn-14" id="border4">SEND</button>
										</div>
											<!-- <input type="button" value="Send" class="contact-button"> -->
											<!-- <div class="col-sm-12">
												<input type="button" value="Send" class="contact-button" id="contact-button">
												<button type="submit"  id="border4">SEND</button>
											</div> -->
										</div>
										<!-- <div id="contact-content"><?php echo $this->session->flashdata('msg'); ?></div> -->
									</form>
								</div>
							</div>
						</section>

					</div>
				</div>
			</div>
		</section>
		<!-- END / CONTACT -->

		<!--  Whatapp -->
		<div class="whatsapp-logo">
			<a href="https://wa.me/6281223536083" >
				<img src="assets/images/logo-whatsapp.png" alt="WhatsApp" height="120px" width="120px">
				
			</a>
		</div>



		<!-- FOOTER -->
		<?php $this->load->view('frontend/footer'); ?>
		<!-- END / FOOTER -->

	</div>
	<!-- END / PAGE WRAP -->

	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery-1.11.0.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery-ui.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/bootstrap-select.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/isotope.pkgd.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.themepunch.revolution.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.themepunch.tools.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/owl.carousel.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.appear.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.countTo.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.countdown.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.parallax-1.1.3.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.magnific-popup.min.js' ?>"></script>

	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.form.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/lib/jquery.validate.min.js' ?>"></script>

	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/scripts.js' ?>"></script>
</body>

</html>

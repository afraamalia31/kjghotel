<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- TITLE -->
	<title>Room and Suite</title>
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

	<style>
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

		#thubnail {
			height: 10%;
		}

		/* thumbnail */
		.avia-slide-wrap {
			padding-bottom: 25px;
		}

		@media screen and (max-width: 767px) {

			/* CSS untuk tampilan layar kecil */
			.whatsapp-logo {
				bottom: 80px;
				right: 20px;
			}
		}

		/* Room */
		.reviews-container {
			display: flex;
			flex-wrap: wrap;
			gap: 1.5rem;
			margin-top: 1.5rem;
		}

		.reviews-container .review-box {
			position: relative;
			height: 420px;
			flex: 1 1 18rem;
			overflow: hidden;
		}

		.reviews-container .review-box img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.reviews-container .review-box .text-view {
			position: absolute;
			top: -100%;
			left: 0;
			width: 100%;
			height: 100%;
			text-align: center;
			padding: 20px;
			padding-top: 8rem;
			background: rgba(247, 247, 247, 0.78);
			transition: 0.5s;
		}

		.reviews-container .review-box:hover .text-view {
			top: 0;
		}

		.review-box .text-view h2 {
			font-size: 1.2rem;
		}

		.review-box .text-view p {
			margin: 0.4rem 0 1rem;
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

			<?php $this->load->view('frontend/headertop'); ?>
			<!-- END / HEADER TOP -->

			<!-- HEADER LOGO & MENU -->
			<?php $this->load->view('frontend/header'); ?>
			<!-- END / HEADER LOGO & MENU -->

		</header>
		<!-- END / HEADER -->

		<!-- SUB BANNER -->
		<section class="section-sub-banner bg-9">
			<div class="sub-banner">
				<div class="container">
					<div class="text text-center">
					</div>
				</div>

			</div>

		</section>
		<!-- END / SUB BANNER -->

		<!-- ROOM -->
		<section class="section-room bg-white">
			<div class="container">

				<div class="room-wrap-3">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1">

							<!-- ITEM -->

							<?php foreach ($data->result() as $row) :

								if (($row->kd_compare) % 2 == 0) {
									$rata = 'room_item-3 thumbs-right';
								} else {
									$rata = 'room_item-3';
								}
							?>
								<div class="<?php echo $rata; ?>">

									<div class="reviews-container">
										<div class="review-box">
											<div class="img">
												<a href="<?php echo site_url('reservation'); ?>">
													<img src="<?php echo base_url() . 'assets/images/' . $row->gambar_large; ?>" alt="">
												</a>
											</div>



											<div class="text-view">
												<div class="text-center">
													<a href="<?php echo site_url('restaurant'); ?>" class="awe-btn awe-btn-default font-hind f12 bold btn-medium ">View More</a>
												</div>
											</div>

										</div>
									</div>

									<div class="text-thumbs">

										<div class="text">
											<div class="thumbs">
												<a href="<?php echo site_url('reservation'); ?>"><img src="<?php echo base_url() . 'assets/images/' . $row->gambar_kotak; ?>" alt=""></a>
											</div>
											<h2><a href="#"><?php echo $row->type; ?></a></h2>
											<span class="price">Start from <span class="amout"><b><?php echo 'Rp ' . number_format($row->rate); ?></b></span> per day</span>
											<?php echo $row->detail; ?>
											<a href="<?php echo site_url('reservation'); ?>" class="awe-btn awe-btn-13">BOOK NOW</a>

										</div>




									</div>

								<?php endforeach; ?>
								<!-- END / ITEM -->


								</div>
		</section>
		<!-- END / ROOM -->

		<!--  Whatapp -->
		<div class="whatsapp-logo">
			<a href="https://wa.me/6281223536083">
				<img src="assets/images/logo-whatsapp.png" alt="WhatsApp" height="120px" width="120px">
			</a>
		</div>

		<!-- FOOTER -->
		<?php $this->load->view('frontend/footer'); ?>
		<!-- END / FOOTER -->

	</div>
	<!-- END / PAGE WRAP -->


	<!-- LOAD JQUERY -->
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
	<script type="text/javascript" src="<?php echo base_url() . 'theme/js/scripts.js' ?>"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- TITLE -->
	<title>Reservation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/images/favicon.png' ?>" />
	<meta name="description" content="OpenSource SOURCE CODE company profile hotel yang di develop oleh Afra Amala">

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
		h5 {
			color:burlywood;
		}

		@media screen and (max-width: 767px) {

			.whatsapp-logo {
				bottom: 80px;
				right: 20px;
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

		<!-- BLOG -->
		<section class="section-blog bg-white">
			<div class="container">
				<div class="blog">
					<div class="row">


						<!-- DEALS PACKAGE -->
						<section class="section-deals mt90">
							<div class="container">
								<div class="content">
									<div class="row">
										<div class="col col-xs-12 col-lg-6 col-lg-offset-3">
											<div class="ot-heading row-20 mb30 text-center">
												<h1>Reservation With</h1>
												<h5>To make a ordering, Please select one of our partners </h5>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<div class="item item-deal">
												<div class="img">
													<img class="img-full" src="<?php echo base_url() . 'theme/images/reservation_pantner/tiket-com.png' ?>" alt="">
												</div>
												<div class="info">
													<!-- GANTI DENGAN LINK Tiket.com HOTEL ANDA -->
													<a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="https://m.tiket.com/hotel/indonesia/kesatriyan-jogja-guest-house-601001673231438599?hotelID=a1e1cfbe-e180-4e48-ade2-105d858bbe88&checkin=2023-06-29&checkout=2023-06-30&adult=2&country=ID&device=desktop&utm_source=google-hotel&utm_medium=hotelAds&utm_campaign=Google-Hotel-0023-B2B-none-hotel" target="_blank">Reservation with</a>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="item item-deal">
												<div class="img">
													<img class="img-full" src="<?php echo base_url() . 'theme/images/reservation_pantner/travelmyth.png' ?>" alt="">
												</div>
												<div class="info">
													<!-- GANTI DENGAN LINK travelmyth HOTEL ANDA -->
													<a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="https://www.travelmyth.com/Yogyakarta/Hotels/KESATRIYAN-JOGJA-GUEST-HOUSE_tmid5846436" target="_blank">Reservation with</a>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="item item-deal">
												<div class="img">
													<img class="img-full" src="<?php echo base_url() . 'theme/images/reservation_pantner/booking.png' ?>" alt="">
												</div>
												<div class="info">
													<!-- GANTI DENGAN LINK BOOKING.COM HOTEL ANDA -->
													<a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="https://www.booking.com/hotel/id/kesatriyan-jogja-guest-house.id.html?aid=2127680&label=metagha-link-LUID-hotel-9443263_dev-desktop_los-1_bw-10_dow-Thursday_defdate-1_room-0_gstadt-2_rateid-public_aud-0_gacid-_mcid-10_ppa-0_clrid-0_ad-0_gstkid-0_checkin-20230629_&sid=3e6b3dcc697afd992a2c646f64d81ef1&all_sr_blocks=944326303_366580775_0_2_0;checkin=2023-06-29;checkout=2023-06-30;dest_id=-2703546;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;highlighted_blocks=944326303_366580775_0_2_0;hpos=1;matching_block_id=944326303_366580775_0_2_0;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;sr_pri_blocks=944326303_366580775_0_2_0__67000000;srepoch=1687151575;srpvid=7b3d24abf7f401f9;type=total;ucfs=1&#hotelTmpl" target="_blank">Reservation with</a>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="item item-deal">
												<div class="img">
													<img class="img-full" src="<?php echo base_url() . 'theme/images/reservation_pantner/agoda.png' ?>" alt="">
												</div>
												<div class="info">
													<!-- GANTI DENGAN LINK AGODA HOTEL ANDA -->
													<a class="awe-btn awe-btn-12 btn-medium font-hind f12 bold" href="https://www.agoda.com/id-id/kesatriyan-jogja-guest-house_2/hotel/all/yogyakarta-id.html?finalPriceView=1&isShowMobileAppPrice=false&cid=1731353&numberOfBedrooms=&familyMode=false&adults=2&children=0&rooms=1&maxRooms=0&checkIn=2023-06-29&isCalendarCallout=false&childAges=&numberOfGuest=0&missingChildAges=false&travellerType=-1&showReviewSubmissionEntry=false&currencyCode=IDR&isFreeOccSearch=false&isCityHaveAsq=false&pushId=dcf511a0-4aef-49c0-a6ad-cd761dd240b1100d6070-ad58-57ee-d26e-38f129ac46b8_20230617_09&los=1&searchrequestid=d5b4c20c-ffb4-45a1-9a47-36e7d33fb71c" target="_blank">Reservation with</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
						<br><br><br>
						<!-- END / DEALS PACKAGE -->

					</div>
				</div>
			</div>
		</section>

		<!--  Whatapp -->
		<div class="whatsapp-logo">
			<a href="https://wa.me/6281223536083">
				<img src="assets/images/logo-whatsapp.png" alt="WhatsApp" height="120px" width="120px">
			</a>
		</div>

		<!-- END / BODY -->

		<!-- FOOTER -->
		<?php $this->load->view('frontend/footer'); ?>
		<!-- END / FOOTER -->

	</div>
	<!-- END / -->



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

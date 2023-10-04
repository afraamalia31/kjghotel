<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- TITLE -->
	<title>Welcome to KESATRYAN JOGJA GUESTHOUSE</title>
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

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="asset/css/home.css">

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
			/* jarak dari tepi bawah layar */
			right: 30px;
			/* jarak dari tepi kanan layar */
			z-index: 9999;
			/* memberikan index tertinggi agar tetap stay di atas konten lain */
		}

		.whatsapp-logo img {
			display: block;
			/* menghilangkan margin default pada img */
			margin: auto;
			/* membuat img menjadi tengah secara horizontal */
			width: 120px;
			height: 120px;
		}

		@media screen and (max-width: 767px) {

			.whatsapp-logo {
				bottom: 80px;
				right: 20px;
			}

			.reviews-container {
				margin-right: 4%;
				margin-left: 4%;
				margin-bottom: 4%;
				float: left;
			}

			.whatsapp-logo img {
				width: 100px;
				height: 100px;
				display: block;
				margin: auto;

			}
		}


		/* Room */
		.favourite-inner {
			display: flex;
			align-items: center;
			gap: 0.1rem;
			flex-wrap: wrap;
		}

		.inner-favourite {
			flex: 1 1 300px;
			background-color: #F7F7F7;
			box-shadow: rgba(213, 213, 213) 0px 8px 20px, rgba(233, 233, 233, 1) 0px 5px 8px;
			padding: 1rem 1rem;
			transition: 1s all ease;
			border-radius: 15px;
		}

		.inner-favourite:hover {
			background: var(--firstcolor);
		}

		.inner-favourite .fav-content {
			text-align: center;
		}

		.inner-favourite .fav-content img {
			width: 100%;
			object-fit: cover;

		}

		.inner-favourite:hover .fav-content img {
			transform: translateY(-10px);
		}

		.fav-content h3 {
			color: black;
			font-size: 28px;
		}

		.fav-content p {
			color: black;
			padding: 0.3rem 0;
			padding-bottom: 1rem;
		}

		.fav-content a {
			padding: 0.5rem 2rem;
			color: black;
			text-decoration: none;
			background: var(--firstcolor);
		}

		.fav-content a:hover {
			background-color: var(--fourthcolor);
		}

		.img-room {
			padding-top: 25px;
			height: 350px;
		}

		.judul-room {
			text-align: center;
			padding-bottom: 20px;
		}

		.text-harga {
			padding-top: 25px;
			font-weight: lighter;
			font-size: xx-large;
		}

		/* Room */
		.rooms-container {
			display: flex;
			flex-wrap: wrap;
			gap: 1.5rem;
			margin-top: 1.5rem;
		}

		.rooms-container .room-box {
			position: relative;
			height: 420px;
			flex: 1 1 18rem;
			overflow: hidden;
		}

		.rooms-container .room-box img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.rooms-container .room-box .text {
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

		.rooms-container .room-box:hover .text {
			top: 0;
		}

		.room-box .text h2 {
			font-size: 1.2rem;
		}

		.room-box .text p {
			margin: 0.4rem 0 1rem;
		}

		.tp-caption {
			color:black;
			font-weight: bolder;
			text-shadow: 2px 3px 3px rgba(255, 255, 255, 1), 2px 2px 2px #FFFFFF;
		}


		/* review customer */
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

		.reviews-container .review-box .text {
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

		.reviews-container .review-box:hover .text {
			top: 0;
		}

		.review-box .text h2 {
			font-size: 1.2rem;
		}

		.review-box .text p {
			margin: 0.4rem 0 1rem;
		}

		#header {
			background-color: rgba(239, 219, 176, 1);
		}

		/* Tampilan mobile */
		@media only screen and (min-width:320px) and (max-width:480px) {
			.reviews-container {
				margin-right: 4%;
				margin-left: 4%;
				margin-bottom: -30%;
				float: left;

			}

			.reviews-container .review-box:hover .text {
				height: 80%;
			}

			.shortcode-heading {
				padding-top: 5%;
			}

			/* Slider */
			.section-check-availability {
				margin-top: -35%;
				float: left;
			}

			#img-slider {
				width: 5%;
				height: 10%;

			}

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

		<!-- BANNER SLIDER -->
		<section class="section-slider">
			<h1 class="element-invisible">Slider</h1>
			<div id="slider-revolution">
				<ul>
					<?php

					foreach ($slider as $i) :


					?>
						<li data-transition="fade">
							<img src="<?php echo base_url() . 'assets/images/' . $i->gambar; ?>" id="img-slider" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

							<div class="tp-caption sft fadeout slider-caption-sub" data-x="center" data-y="360" data-speed="700" data-start="1500" data-easing="easeOutBack">
								<?php echo $i->caption_1; ?>
							</div>

							<div class="tp-caption sfb fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="400" data-speed="700" data-easing="easeOutBack" data-start="2000"> <?php echo $i->caption_2; ?> </div>

						</li>


					<?php endforeach; ?>


				</ul>
			</div>

		</section>
		<!-- END / BANNER SLIDER -->

		<!-- CHECK AVAILABILITY -->
		<section class="section-check-availability">
			<div class="container">
				<div class="check-availability">
					<div class="row v-align">
						<div class="col-lg-6">
							<h2>Book Now Via WhatsApp</h2>
						</div>
						<div class="col-lg-6">
							<div class="availability-form">
								<div class="vailability-submit">
									<a href="<?php echo site_url('rooms'); ?>" class="awe-btn awe-btn-12">Book Via Apps Tiket Online</a>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</section>
		<!-- END / CHECK AVAILABILITY -->


		<!-- ROOM DETAIL -->
		<!-- ROOM DETAIL -->
		<section class="section-room-detail bg-white">
			<div class="container">

				<!-- COMPARE ACCOMMODATION -->
				<div class="room-detail_compare">
					<div class="row">
						<div class="col col-xs-12 col-lg-6 col-lg-offset-3">
							<div class="ot-heading row-20 mb30 text-center">
								<h2 class="shortcode-heading">Hotel Room</h2>
							</div>
						</div>
					</div>

					<div class="room-compare_content">

						<div class="row">
							<!-- ITEM -->

							<?php
							foreach ($rooms->result() as $j) :
							?>

								<!-- <div class="favourite-inner"> -->


								<div class="col-sm-3 col-md-3 col-lg-3">
									<div class="room-compare_item">

										<h3 class="judul-room"><a herf="<?php echo site_url('rooms'); ?>"><?php echo $j->type; ?></a></h3>
										<div class="inner-favourite">
											<div class="rooms-container">
												<div class="room-box">

													<div class="img-room">

														<a href="<?php echo site_url('rooms'); ?>"><img class="img img-responsive" src="<?php echo base_url() . 'assets/images/' . $j->gambar_large; ?>" alt="<?php echo $j->type; ?> " height="700px"></a>
													</div>

													<div class="text-harga">
														<p>Star to <?php echo 'Rp ' . number_format($j->rate); ?></p>
													</div>



													<div class="text">
														<div class="text-center">
															<a href="<?php echo site_url('reservation'); ?>" class="awe-btn awe-btn-default font-hind f12 bold btn-medium ">Book Now</a>
														</div>
													</div>

												</div>

											</div>
										</div>

									</div>

								</div>



								<!-- </div> -->
								<!-- END / ITEM -->

							<?php endforeach; ?>


						</div><br><br>
						<div class="text">
							<div class="text-center">
								<a href="<?php echo site_url('rooms'); ?>" class="awe-btn awe-btn-default font-hind f12 bold btn-medium ">View More</a>
							</div>
						</div>

						<!-- END / COMPARE ACCOMMODATION -->
					</div>
		</section>
		<!-- END / SHOP DETAIL -->


		<!-- DEALS PACKAGE -->
		<section class="section-deals mt90">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col col-xs-12 col-lg-6 col-lg-offset-3">
                            <h3 class="shortcode-heading"></h3>
                            <div class="ot-heading row-20 mb30 text-center">
                                <h2 class="shortcode-heading">Customer Reviews</h2>
                            </div>
                        </div>

                        <div class="row">
                            <?php
                            $query_event = $this->db->query("SELECT events.*,DAY(event_post) AS hari,LEFT(DATE_FORMAT(event_post,'%M'),3) AS bulan FROM events ORDER BY event_id DESC LIMIT 6");
                            foreach ($query_event->result() as $i) :
                            ?>
                                <div class="col-xs-12 col-sm-4">

                                    <div class="reviews-container">
                                        <div class="review-box">
                                            <div class="img">
                                                <img class="img img-responsive" src="<?php echo base_url() . 'assets/images/' . $i->review_gambar; ?>">
                                            </div>
                                            <div class="text">
                                                <p class="title bold f26 font-monserat upper text-center" href="!#"><?php echo $i->event_nama; ?></p>
                                                <p class="sub font-monserat f12 f-600 upper mt10 mb20"><?php echo $i->event_jadwal; ?></p>
                                                <p class="text-right"><?php echo $i->review_tanggal; ?></p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
        </section>

		<!-- END / DEALS PACKAGE -->
	


		
		<!--  Whatapp -->
		<div class="whatsapp-logo">
			<a href="https://wa.me/6281223536083">
				<img src="assets/images/logo-whatsapp.png" alt="WhatsApp" height="120px" width="300px">
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

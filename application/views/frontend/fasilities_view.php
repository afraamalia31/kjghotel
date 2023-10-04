<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- TITLE -->
	<title>Fasilitas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/images/favicon.png' ?>" />
	<meta name="description" content="">

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
		.img {
			height: 400px;
		}


		@media screen and (max-width: 767px) {

			.whatsapp-logo {
				bottom: 80px;
				right: 20px;
			}
			.sub-banner .room-wrap-2 .img{
				padding-bottom: -10%;
				float: left;
			}
			.whatsapp-logo img {
				width: 100px;
				height: 100px;
				display: block;
			    margin: auto;
			}
		}

		
		@media only screen and (min-width:320px) and (max-width:480px) {
			/* .room-wrap-2 .room_item-2{
				height: 10%;
				float: left;
			} */
			.img {
			height: 250px;
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

				<div class="room-wrap-2">

					<!-- ITEM -->
					<?php foreach ($data->result() as $row) :

						if (($row->kd_fasilitas) % 2 == 0) {
							$rata = 'room_item-2 img-right';
						} else {
							$rata = 'room_item-2';
						}
					?>
						<div class="<?php echo $rata ?>">

							<div class="img">
								<a><img src="<?php echo base_url() . 'assets/images/' . $row->gambar; ?>" alt=""></a>
							</div>


							<div class="text">
								<h2><?php echo $row->nama; ?></h2>
								<p><?php echo $row->detail; ?></p>
								<hr>
							</div>
						</div>
						<!-- ITEM -->


					<?php endforeach; ?>

					<!-- ITEM -->

				</div>

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

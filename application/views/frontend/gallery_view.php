<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- TITLE -->
	<title>Restaurant</title>
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

	<!-- Style CSS -->
	<style> 
	#img {
		margin-bottom: 8%;
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

		<!-- SUB BANNER -->
		<section class="section-sub-banner bg-9">
			<div></div>
			<div class="sub-banner">
				<div class="container">
					<div class="text text-center">
					</div>
				</div>

			</div>

		</section>
		<!-- END / SUB BANNER -->

		<!-- RESTAURANTS -->
		<section class="section-restaurant-4 bg-white">
			<div class="container">

				<div class="restaurant-tabs">

					<div class="tabs tabs-restaurant">

						<div class="icon-restaurant text-center"></div>


						<ul>
							<?php
							$sql = $this->db->query("SELECT * from galeri");
							foreach ($sql->result_array() as $data) {
							?>

								<li><a href="#tabs-<?php echo $data['kd_galeri'] ?>"><?php echo $data['nama'] ?></a></li>

							<?php } ?>

						</ul>


						<?php
						$sql1 = $this->db->query("SELECT * from galeri");
						foreach ($sql1->result_array() as $data1) {
						?>

							<div id="tabs-<?php echo $data1['kd_galeri'] ?>">

								<div class="restaurant_content">
									<div class="row">


										<?php
										$kode = $data1['kd_galeri'];
										$sql2 = $this->db->query("SELECT * from galeries where kd_galeri='$kode'");
										foreach ($sql2->result_array() as $data2) {
										?>



											<!-- ITEM -->
											<div class="col-md-4">
												<!-- <div class="restaurant_item "> -->

													<div class="img" id="img">
														<a href="#"><img src="<?php echo base_url() . 'assets/images/' . $data2['gambar']; ?>" alt="" ></a> 
													</div>


												<!-- </div> -->
											</div>
											<!-- END / ITEM -->
										<?php } ?>


									</div>

								</div>

							</div>

						<?php  } ?>

					</div>
				</div>

			</div>
		</section>
		<!-- END / RESTAURANTS -->

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

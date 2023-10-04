<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Contact</title>

	<meta name="description" content="">
	<meta name="author" content="Afra Amalia">
	<meta name="robots" content="noindex, nofollow">

	<!-- Icons -->
	<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
	<link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

	<!-- END Icons -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/js/plugins/datatables/dataTables.bootstrap4.min.css' ?>">
	<link rel="stylesheet" id="css-main" href="<?php echo base_url() . 'assets/css/codebase.min.css' ?>">



</head>

<body>
	<!-- Page Container -->

	<div id="page-container" class="sidebar-o side-scroll main-content-boxed side-trans-enabled page-header-fixed">


		<!-- Sidebar -->

		<nav id="sidebar">
			<!-- Sidebar Scroll Container -->
			<div id="sidebar-scroll">
				<!-- Sidebar Content -->
				<div class="sidebar-content">
					<!-- Side Header -->
					<div class="content-header content-header-fullrow px-15">
						<!-- Mini Mode -->
						<div class="content-header-section sidebar-mini-visible-b">
							<!-- Logo -->
							<span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
								<span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
							</span>
							<!-- END Logo -->
						</div>
						<!-- END Mini Mode -->

						<!-- Normal Mode -->
						<div class="content-header-section text-center align-parent sidebar-mini-hidden">
							<!-- Close Sidebar, Visible only on mobile screens -->
							<!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
							<button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
								<i class="fa fa-times text-danger"></i>
							</button>
							<!-- END Close Sidebar -->

							<!-- Logo -->
							<div class="content-header-item">
								<a class="link-effect font-w700" href="<?php echo base_url() . 'admin/dashboard' ?>">
									<i class="text-primary"></i>
									<span class="font-size-xl text-warning">K Jogja</span><span class="font-size-xl text-warning"><strong> Guesthouse</strong></span>
								</a>
							</div>
							<!-- END Logo -->
						</div>
						<!-- END Normal Mode -->
					</div>
					<!-- END Side Header -->

					<!-- Side User -->
					<div class="content-side content-side-full content-side-user px-10 align-parent">
						<!-- Visible only in mini mode -->
						<div class="sidebar-mini-visible-b align-v animated fadeIn">
							<img class="img-avatar img-avatar32" src="<?php echo base_url() . 'assets/images/user_blank.png' ?>" alt="">
						</div>
						<!-- END Visible only in mini mode -->

						<!-- Visible only in normal mode -->
						<div class="sidebar-mini-hidden-b text-center">
							<?php
							error_reporting(0);
							$idadmin = $this->session->userdata('idadmin');
							$query = $this->db->query("SELECT * FROM pengguna WHERE pengguna_id='$idadmin'");
							$data = $query->row_array();
							?>
							<?php if ($this->session->userdata('akses') == '3') : ?>
								<a class="img-link" href="<?php echo base_url() . 'assets/images/user_blank.png' ?>">
									<img class="img-avatar" src="<?php echo base_url() . 'assets/images/user_blank.png' ?>" alt="">
								</a>
							<?php else : ?>
								<a class="img-link" href="#">
									<img class="img-avatar" src="<?php echo base_url() . 'assets/images/' . $data['pengguna_photo']; ?>" alt="">
								</a>
							<?php endif; ?>
							<ul class="list-inline mt-10">
								<li class="list-inline-item">
									<!-- <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#"><?php echo $this->session->userdata('nama'); ?></a> -->
									<a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#">Afra Amalia</a>
								</li>

							</ul>
						</div>
						<!-- END Visible only in normal mode -->
					</div>
					<!-- END Side User -->

					<!-- Side Navigation -->
					<div class="content-side content-side-full">
						<ul class="nav-main">
							<li>
								<a class="active" href="<?php echo base_url() . 'admin/dashboard' ?>"><i class="si si-screen-desktop"></i><span class="sidebar-mini-hide">Dashboard</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/slider' ?>"><i class="si si-picture"></i><span class="sidebar-mini-hide">Image Slider</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/room' ?>"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Suite</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/fasilitas' ?>"><i class="si si-support"></i><span class="sidebar-mini-hide">Fasilitas</span></a>
							</li>
							<li>
								<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-camera"></i><span class="sidebar-mini-hide">Gallery</span></a>
								<ul>
									<li>
										<a href="<?php echo base_url() . 'admin/galeri' ?>">Tipe</a>
									</li>
									<li>
										<a href="<?php echo base_url() . 'admin/galeries' ?>">Galeri</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/events' ?>"><i class="si si-bubbles"></i><span class="sidebar-mini-hide">Customer Reviews</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/inbox' ?>"><i class="si si-envelope"></i><span class="sidebar-mini-hide">Pesan Masuk</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/contact' ?>"><i class="si si-call-end"></i><span class="sidebar-mini-hide">Contact</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/pengguna' ?>"><i class="si si-user"></i><span class="sidebar-mini-hide">Admin</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/blogs' ?>"><i class="si si-pencil"></i><span class="sidebar-mini-hide">Blogs</span></a>
							</li>

						</ul>
					</div>
					<!-- END Side Navigation -->
				</div>
				<!-- Sidebar Content -->
			</div>
			<!-- END Sidebar Scroll Container -->
		</nav>
		<!-- END Sidebar -->

		<!-- Header -->
		<?php $this->load->view('admin/header.php'); ?>
		<!-- END Header -->

		<!-- Main Container -->
		<div class="page-header">
			<h3>Transaksi Sewa Selesai</h3>
		</div>
		<?php foreach ($penyewaan as $p) { ?>
			<form action="<?php echo base_url() . 'admin/transaksi_selesai_act' ?>" method="post">
				<input type="hidden" name="id" value="<?php echo $p->id_sewa ?>">
				<input type="hidden" name="kamar" value="<?php echo $p->id_kamar ?>">
				<input type="hidden" name="tgl_cekout" value="<?php echo $p->tgl_cekout ?>">
				<input type="hidden" name="tgl_cekin" value="<?php echo $p->tgl_cekin ?>">
				<input type="hidden" name="extend" value="<?php echo $p->extend ?>">
				<div class="form-group">
					<label>Nama Pelanggan</label>
					<select class="form-control" name="pelanggan" disabled>
						<option value="">-Pilih Nama Pelanggan-</option>
						<?php foreach ($pelanggan as $k) { ?>
							<option <?php if ($p->id_pelanggan == $k->id_pelanggan) {
										echo "selected='selected'";
									} ?> value="<?php echo $k->id_pelanggan; ?>"><?php echo $k->nama_pelanggan; ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label>Nama Kamar</label>
					<select class="form-control" name="kamar" disabled>
						<option value="">-Pilih Nama Kamar-</option>
						<?php foreach ($kamar as $m) { ?>
							<option <?php if ($p->id_kamar == $m->id_kamar) {
										echo "selected='selected'";
									} ?> value="<?php echo $m->id_kamar; ?>"><?php echo $m->nama_kamar; ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label>Tanggal Check-in</label>
					<input class="form-control" type="date" name="tgl_cekin" value="<?php echo $p->tgl_cekin ?>" disabled>
				</div>

				<div class="form-group">
					<label>Tanggal Check-out</label>
					<input class="form-control" type="date" name="tgl_cekout" value="<?php echo $p->tgl_cekout ?>" disabled>
				</div>

				<div class="form-group">
					<label>Harga Sewa Kamar per Hari</label>
					<input class="form-control" type="text" name="extend" value="<?php echo $p->extend ?>" disabled>
				</div>

				<div class="form-group">
					<label>Tanggal Akhir Check-out</label>
					<input class="form-control" type="date" name="tgl_akhir">
					<?php echo form_error('tgl_akhir'); ?>
				</div>
				<div class="form-group">
					<input type="submit" value="Simpan" class="btn btnprimary btn-sm">
				</div>
			</form>
		<?php } ?>
		<!-- END Main Container -->
		<!-- Footer -->
		<footer id="page-footer" class="opacity-0">
			<div class="content py-20 font-size-xs clearfix">
				<div class="float-right">
					Created with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://mfikri.com" target="_blank">M Fikri Setiadi</a>
				</div>
				<div class="float-left">
					<a class="font-w600" href="https://mfikri.com" target="_blank">M Fikri</a> &copy; <span class="js-year-copy"><?php echo date('Y'); ?></span>
				</div>
			</div>
		</footer>
		<!-- END Footer -->
	</div>
	<!-- END Page Container -->


	<!-- END Normal Modal -->


	<!-- Codebase Core JS -->
	<script src="<?php echo base_url() . 'assets/js/core/jquery.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/core/popper.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/core/bootstrap.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/core/jquery.slimscroll.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/core/jquery.scrollLock.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/core/jquery.appear.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/core/jquery.countTo.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/core/js.cookie.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/codebase.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/js/plugins/datatables/dataTables.bootstrap4.min.js' ?>"></script>



</body>

</html>
<!doctype html>
<html lang="en" class="no-focus"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Reviews</title>

	<meta name="description" content="">
	<meta name="author" content="M Fikri Setiadi">
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
									<a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#"><?php echo $this->session->userdata('nama'); ?></a>
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
								<a href="<?php echo base_url() . 'admin/events' ?>"><i class="si si-bubbles"></i><span class="sidebar-mini-hide">Customer Reviews Old</span></a>
							</li>
							<li>
								<a href="<?php echo base_url() . 'admin/reviews' ?>"><i class="si si-bubbles"></i><span class="sidebar-mini-hide">Customer Reviews</span></a>
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
			<br><br><br>
			<h3>Laporan Data Pemesanan Baru</h3>
		</div>
		<?php foreach ($penyewaan as $key) { ?>
			<form action="<?php echo base_url() . 'admin/penyewaan/tambah_penyewaan_act/' ?>" method="post">
				<?php
				$id = $key->id_sewa + 1;
				?>
				<input type="hidden" name="id" value="<?php echo $id ?>">
			<?php } ?>
			<div class="form-group">
				<label>Nama Pelanggan</label>
				<select name="pelanggan" class="form-control">
					<option value="">-Pilih Nama Pelanggan-</option>
					<?php foreach ($pelanggan as $pel) { ?>
						<option value="<?php echo $pel->id_pelanggan; ?>"><?php echo $pel->nama_pelanggan; ?></option>
					<?php } ?>
				</select>
				<?php echo form_error('pelanggan'); ?>
			</div>

			<div class="form-group">
				<label>Nama Kamar</label>
				<select name="kamar" class="form-control">
					<option value="">-Pilih Nama Kamar-</option>
					<?php foreach ($kamar as $k) { ?>
						<option value="<?php echo $k->id_kamar; ?>"><?php echo $k->nama_kamar; ?></option>
					<?php } ?>
				</select>
				<?php echo form_error('kamar'); ?>
			</div>

			<div class="form-group">
				<label>Tanggal Check-in</label>
				<input type="date" name="tgl_cekin" class="form-control">
				<?php echo form_error('tgl_cekin'); ?>
			</div>

			<div class="form-group">
				<label>Tanggal Check-out</label>
				<input type="date" name="tgl_cekout" class="form-control">
				<?php echo form_error('tgl_cekout'); ?>
			</div>

			<div class="form-group">
				<label>Harga Sewa Kamar per Hari</label>
				<input type="text" name="extend" class="form-control">
				<?php echo form_error('extend'); ?>
			</div>

			<div class="block-content block-content-full block-content-md bg-body-light">
				<button type="submit" class="btn btn-primary btn-square btn-block">Submit</button>
			</div>

			<!-- <div class="form-group">
				<input type="submit" value="Simpan" class="btn btnprimary btn-sm">
			</div> -->
			</form>


			<!-- END Main Container -->
			<!-- Footer -->
			<footer id="page-footer" class="opacity-0">
				<div class="content py-20 font-size-xs clearfix">
					<div class="float-right">
						Created with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://mfikri.com" target="_blank">M Fikri Setiadi</a>
					</div>
					<div class="float-left">
						<a class="font-w600" href="https://mfikri.com" target="_blank">Afra Amalia</a> &copy; <span class="js-year-copy"><?php echo date('Y'); ?></span>
					</div>
				</div>
			</footer>
			<!-- END Footer -->
	</div>
	<!-- END Page Container -->

	<!-- Modal Hapus -->



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

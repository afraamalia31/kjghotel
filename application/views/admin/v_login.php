<!doctype html>
<html lang="en" class="no-focus">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Sign In</title>

	<meta name="description" content="M Fikri - Membantu Anda menjadi Web Developer Profesional">
	<meta name="author" content="M Fikri Setiadi">
	<meta name="robots" content="noindex, nofollow">

	<link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

	<!-- Stylesheets -->
	<!-- Codebase framework -->
	<link rel="stylesheet" id="css-main" href="<?php echo base_url() . 'assets/css/codebase.min.css' ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}

		body {
			width: 100%;
			min-height: 100vh;
			background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('assets/images/sunset.jpg');
			background-position: center;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.container {
			width: 400px;
			min-height: 400px;
			background: #FFF;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, .3);
			padding: 40px 30px;
		}

		.container .login-text {
			color: #111;
			font-weight: 500;
			font-size: 1.1rem;
			text-align: center;
			margin-bottom: 20px;
			display: block;
			text-transform: capitalize;
		}

		.container .login-social {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
			margin-bottom: 25px;
		}

		.container .login-social a {
			padding: 12px;
			margin: 10px;
			border-radius: 3px;
			box-shadow: 0 0 5px rgba(0, 0, 0, .3);
			text-decoration: none;
			font-size: 1rem;
			text-align: center;
			color: #FFF;
			transition: .3s;
		}
		.container .login-email .input-group {
			width: 100%;
			height: 50px;
			margin-bottom: 25px;
		}

		.container .login-email .input-group input {
			width: 100%;
			height: 100%;
			border: 2px solid #e7e7e7;
			padding: 15px 20px;
			font-size: 1rem;
			border-radius: 30px;
			background: transparent;
			outline: none;
			transition: .3s;
		}

		.container .login-email .input-group input:focus,
		.container .login-email .input-group input:valid {
			border-color: #a29bfe;
		}

		.container .login-email .input-group .btn {
			display: block;
			width: 100%;
			padding: 15px 20px;
			text-align: center;
			border: none;
			background: #a29bfe;
			outline: none;
			border-radius: 30px;
			font-size: 1.2rem;
			color: #FFF;
			cursor: pointer;
			transition: .3s;
		}

		.container .login-email .input-group .btn:hover {
			transform: translateY(-5px);
			background: #6c5ce7;
		}

		.login-register-text {
			color: #111;
			font-weight: 600;
		}

		.login-register-text a {
			text-decoration: none;
			color: #6c5ce7;
		}

		@media (max-width: 430px) {
			.container {
				width: 300px;
			}

			.container .login-social {
				display: block;
			}

			.container .login-social a {
				display: block;
				background-color: rgb(233, 239, 240);
				background-color: #3980bd;
				opacity: 0.7;
				align-content: center;
			}
		}
	</style>

</head>

<body>
	<!-- Page Container -->

	<!-- <div id="page-container" class="main-content-boxed"> -->
		<!-- Main Container -->
		<!-- <main id="main-container"> -->
			<!-- Page Content -->
			<div class="container">
				<form class="js-validation-signin login-email px-30" action="<?php echo base_url() . 'administrator/auth' ?>" method="post">

					<div class="form-group row">
						<div class="col-12">
							<div class="form-material floating">
								<input type="text" class="form-control" id="login-username" name="username" required>
								<label for="login-username">Username</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-12">
							<div class="form-material floating">
								<input type="password" class="form-control" id="login-password" name="password" required>
								<label for="login-password">Password</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
							<i class="si si-login mr-10"></i> Sign In
						</button>

					</div>
				</form>
			</div>
			<!-- END Page Content -->
		<!-- </main> -->
		<!-- END Main Container -->
	<!-- </div> -->
	<!-- END Page Container -->

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

	<!-- Page JS Plugins -->
	<script src="<?php echo base_url() . 'assets/js/plugins/jquery-validation/jquery.validate.min.js' ?>"></script>

	<!-- Page JS Code -->
	<script src="<?php echo base_url() . 'assets/js/pages/op_auth_signin.js' ?>"></script>
</body>

</html>

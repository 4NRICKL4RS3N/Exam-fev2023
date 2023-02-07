<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">

    <title>Log in</title>
</head>
<body>

  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url('inscription') ?>" method="post">
					<span class="login100-form-title p-b-26" style="color: rgb(10, 10, 30);">
						Welcome
					</span>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nom">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="mail">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="mdp">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" style="background-color: rgb(10, 10, 30);">
								Sign up
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="<?php echo base_url('login') ?>">
							Log in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>
</html>
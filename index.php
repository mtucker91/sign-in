<?php
session_start();
if(isset($_SESSION['error'])){
	$error = $_SESSION['error'];
}

?>

<!--<html lang="en"> -->
<head>
	<title>MTDesigns Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" method="POST">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="view/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="view/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="view/css/util.css">
	<link rel="stylesheet" type="text/css" href="view/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-30" id="loginForm">
				<form class="login100-form validate-form">
					<span class="p-b-15 login100-form-logo wrap-log0100">
						<img src="view/images/MTDesign.jpg" alt="MTDesigns Logo" class="logosize"/>
					</span>
					<span class="login100-form-title p-b-30">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" id="username" type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE['username'])){echo($_COOKIE['username']);}?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" id="password" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"  <?php if(isset($_COOKIE['username'])){echo("checked");}?>>
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="contact100-form-checkbox m-l-4" id="errmsg">

					</div>
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn" type="submit" id="login">
							Login
						</button>
					</div>
				</form>
			</div>
			<div class="" id="lbholder">
					<div id="bar-background" class="w3-container w3-green" style="">
						
					</div>
					<div id="bar-foreground"></div>
					<div id="percenttxt">0%</div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="view/vendor/jquery/jquery-3.4.1.min.js"></script>
<!--===============================================================================================-->
	<script src="view/vendor/bootstrap/js/popper.js"></script>
	<script src="view/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="view/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="model/js/main.js"></script>
	<script src="model/js/login_ajax.js"></script>

</body>
</html>
<?php
				include 'connect.php';
				session_start();

			if (isset($_POST['loginEmail']) && isset($_POST['loginPass'])) {
				function validate($data){
					$data = trim($data);
					$data = stripcslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			
				$id = validate($_POST['loginEmail']);
				$pass = validate($_POST['loginPass']);
			//if ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['submit']) == false)) {
			if (isset($_POST['submit1'])) {


				$email = $_POST['loginEmail'];
				$password = $_POST['loginPass'];

				// $signEmail = $_POST['signEmail'];
				// $signPass = $_POST['signPass'];
				// $phone = $_POST['phone'];


				if ($email == 'admin@gmail.com' && $password == '1234') {
					$sql = "SELECT * from admin_t where email='$email' and password='$password'";
					$result = mysqli_query($conn, $sql);
					if ($result) {
						$num = mysqli_num_rows($result);
						if ($num > 0) {
							$invalid = 0;
							session_start();

							$_SESSION['email'] = $email;

							echo "<script>window.location.href ='adminDashboard.php'</script>";
							// header('adminDashboard.php');
							exit();
						}
					}
				} elseif ($email != NULL && $password != NULL) {
					$sql = "SELECT * from user_t where email='$email' and password='$password'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					if (mysqli_num_rows($result) === 1) {
						if ($row['email'] === $email && $row['password'] === $password) {
							$_SESSION['userEmail'] = $email;

							echo "<script>window.location.href ='index.php'</script>";
							//header('');
							exit();
						}
					} else {
						//ask user to give email and pass
					}
				} /*elseif ($signEmail != NULL && $signPass != NULL && $phone != NULL) {
//echo $signEmail;
$signUpQuery = "INSERT INTO user_t (email, password, phone_number)
			VALUES ('$signEmail', '$signPass', '$phone')";
$signUpTable = mysqli_query($conn, $signUpQuery);
}*/ else {
					$invalid = 1;
				}
			}}

			?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->




<style>
	*,
	*::before,
	*::after {
		box-sizing: border-box;
	}

	body {
		margin: 0;
		font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
		background: #3b4465;
	}

	.forms-section {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		background-color: #ABE098;
	}

	.section-title {
		font-size: 32px;
		letter-spacing: 1px;
		color: #fff;
	}

	.forms {
		display: flex;
		align-items: flex-start;
		margin-top: 30px;
	}

	.form-wrapper {
		animation: hideLayer .3s ease-out forwards;
	}

	.form-wrapper.is-active {
		animation: showLayer .3s ease-in forwards;
	}

	@keyframes showLayer {
		50% {
			z-index: 1;
		}

		100% {
			z-index: 1;
		}
	}

	@keyframes hideLayer {
		0% {
			z-index: 1;
		}

		49.999% {
			z-index: 1;
		}
	}

	.switcher {
		position: relative;
		cursor: pointer;
		display: block;
		margin-right: auto;
		margin-left: auto;
		padding: 0;
		text-transform: uppercase;
		font-family: inherit;
		font-size: 16px;
		letter-spacing: .5px;
		color: #999;
		background-color: transparent;
		border: none;
		outline: none;
		transform: translateX(0);
		transition: all .3s ease-out;
	}

	.form-wrapper.is-active .switcher-login {
		color: #fff;
		transform: translateX(90px);
	}

	.form-wrapper.is-active .switcher-signup {
		color: #fff;
		transform: translateX(-90px);
	}

	.underline {
		position: absolute;
		bottom: -5px;
		left: 0;
		overflow: hidden;
		pointer-events: none;
		width: 100%;
		height: 2px;
	}

	.underline::before {
		content: '';
		position: absolute;
		top: 0;
		left: inherit;
		display: block;
		width: inherit;
		height: inherit;
		background-color: currentColor;
		transition: transform .2s ease-out;
	}

	.switcher-login .underline::before {
		transform: translateX(101%);
	}

	.switcher-signup .underline::before {
		transform: translateX(-101%);
	}

	.form-wrapper.is-active .underline::before {
		transform: translateX(0);
	}

	.form {
		overflow: hidden;
		min-width: 260px;
		margin-top: 50px;
		padding: 30px 25px;
		border-radius: 5px;
		transform-origin: top;
	}

	.form-login {
		animation: hideLogin .3s ease-out forwards;
	}

	.form-wrapper.is-active .form-login {
		animation: showLogin .3s ease-in forwards;
	}

	@keyframes showLogin {
		0% {
			background: #d7e7f1;
			transform: translate(40%, 10px);
		}

		50% {
			transform: translate(0, 0);
		}

		100% {
			background-color: #fff;
			transform: translate(35%, -20px);
		}
	}

	@keyframes hideLogin {
		0% {
			background-color: #fff;
			transform: translate(35%, -20px);
		}

		50% {
			transform: translate(0, 0);
		}

		100% {
			background: #d7e7f1;
			transform: translate(40%, 10px);
		}
	}

	.form-signup {
		animation: hideSignup .3s ease-out forwards;
	}

	.form-wrapper.is-active .form-signup {
		animation: showSignup .3s ease-in forwards;
	}

	@keyframes showSignup {
		0% {
			background: #d7e7f1;
			transform: translate(-40%, 10px) scaleY(.8);
		}

		50% {
			transform: translate(0, 0) scaleY(.8);
		}

		100% {
			background-color: #fff;
			transform: translate(-35%, -20px) scaleY(1);
		}
	}

	@keyframes hideSignup {
		0% {
			background-color: #fff;
			transform: translate(-35%, -20px) scaleY(1);
		}

		50% {
			transform: translate(0, 0) scaleY(.8);
		}

		100% {
			background: #d7e7f1;
			transform: translate(-40%, 10px) scaleY(.8);
		}
	}

	.form fieldset {
		position: relative;
		opacity: 0;
		margin: 0;
		padding: 0;
		border: 0;
		transition: all .3s ease-out;
	}

	.form-login fieldset {
		transform: translateX(-50%);
	}

	.form-signup fieldset {
		transform: translateX(50%);
	}

	.form-wrapper.is-active fieldset {
		opacity: 1;
		transform: translateX(0);
		transition: opacity .4s ease-in, transform .35s ease-in;
	}

	.form legend {
		position: absolute;
		overflow: hidden;
		width: 1px;
		height: 1px;
		clip: rect(0 0 0 0);
	}

	.input-block {
		margin-bottom: 20px;
	}

	.input-block label {
		font-size: 14px;
		color: #a1b4b4;
	}

	.input-block input {
		display: block;
		width: 100%;
		margin-top: 8px;
		padding-right: 15px;
		padding-left: 15px;
		font-size: 16px;
		line-height: 40px;
		color: #3b4465;
		background: #eef9fe;
		border: 1px solid #cddbef;
		border-radius: 2px;
	}

	.form [type='submit'] {
		opacity: 0;
		display: block;
		min-width: 120px;
		margin: 30px auto 10px;
		font-size: 18px;
		line-height: 40px;
		border-radius: 25px;
		border: none;
		transition: all .3s ease-out;
	}

	.form-wrapper.is-active .form [type='submit'] {
		opacity: 1;
		transform: translateX(0);
		transition: all .4s ease-in;
	}

	.btn-login {
		color: #fbfdff;
		background: #2e6b6b;
		transform: translateX(-30%);
	}

	.btn-signup {
		color: white;
		background: #2e6b6b;
		/* box-shadow: inset 0 0 0 2px #a7e245; */
		transform: translateX(30%);
	}
</style>






<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>Mystic Morsel- Home</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<!-- custom font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
	<header class="main-header">
		<!-- Nav -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
			<div class="container">
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt="" width="60px"></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
						<li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
						<li class="nav-item"><a class="nav-link" href="login.php">Login/Signup</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navigation -->
	</header>

	<!-- login form -->

	<section class="forms-section">
		<div class="forms">
			<div class="form-wrapper is-active">
				<button type="button" class="switcher switcher-login">
					Login
					<span class="underline"></span>
				</button>
				<form action="#" method="post" class="form form-login" style="box-shadow: 5px 5px 5px 5px #75a364;">
					<fieldset>
						<legend>Please, enter your email and password for login.</legend>
						<div class="input-block">
							<label for="login-email">E-mail</label>
							<input id="login-email" type="email" name="loginEmail" style="border-radius: 15px;" required>
						</div>
						<div class="input-block">
							<label for="login-password">Password</label>
							<input id="login-password" type="password" name="loginPass" style="border-radius: 15px;" required>
						</div>
					</fieldset>
					<button type="submit" name="submit1" class="btn-login">Login</button>
				</form>
			</div>

			<?php

			$invalid = 0;


			?>


			<div class="form-wrapper">
				<button type="button" class="switcher switcher-signup">
					Sign Up
					<span class="underline"></span>
				</button>
				<form action="#" method="post" class="form form-signup" style="box-shadow: 5px 5px 5px 5px #75a364;">
					<fieldset>
						<legend>Please, enter your email, password and password confirmation for sign up.</legend>
						<div class="input-block">
							<label for="signup-email">E-mail</label>
							<input id="signup-email" type="email" name="signEmail" style="border-radius: 15px;" required>
						</div>
						<div class="input-block">
							<label for="signup-password">Password</label>
							<input id="signup-password" type="password" name="signPass" style="border-radius: 15px;" required>
						</div>
						<div class="input-block">
							<label for="signup-password-confirm">Phone Number</label>
							<input id="signup-password-confirm" type="text" name="phone" style="border-radius: 15px;" required>
						</div>
					</fieldset>
					<button name="submit2" type="submit" class="btn-signup">Continue</button>
				</form>
			</div>
			<?php 
			 if (isset($_POST['submit2'])) {
				//elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && $invalid == 0) {
				$signEmail = $_POST['signEmail'];
				$signPass = $_POST['signPass'];
				$phone = $_POST['phone'];
				//echo

				$signUpQuery = "INSERT INTO user_t (email, password, phone_number)
						VALUES ('$signEmail', '$signPass', '$phone')";
				$signUpTable = mysqli_query($conn, $signUpQuery);
				//header("Location: login.php");
				$ck = 1;
				exit();
			}
			?>
		</div>
	</section>




	<!-- Start Footer  -->
	<footer>
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li>
								<li>Saturday: 10.00am to 08.00pm</li>
								<li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form method="post" class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="newsletterEmail" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" name="submit3" type="submit">Submit</button>
							</form>
						</div>

						<?php
						if (isset($_POST['submit3'])) {
							$newsletterEmail = $_POST['newsletterEmail'];
							$newsletterQuery = "INSERT INTO 
						news_letter_t (email) VALUES 
           				     ('$newsletterEmail')";
							$newsletterTable = mysqli_query($conn, $newsletterQuery);
						}
						?>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Follow us on our social media's to get delicious updates</p>
							<ul>
								<li><a href="https://www.facebook.com/profile.php?id=100063706166648" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/mystic__morsel/?igshid=MzRlODBiNWFlZA%3D%3D" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer  -->

	<!-- Start copyright  -->
	<div class="footer-copyright">
		<p class="footer-company">All Rights Reserved. &copy; 2023 <a href="#">Mystic Morsel</a> Design By :Showkat, Nazifa, Lubaina, Ashim </p>
	</div>
	<!-- End copyright  -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none; border-radius: 5px 0px 5px;box-shadow: 2px 2px white;"><i class="fa-solid fa-arrow-up" style="color: #ffffff;"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/inewsticker.js"></script>
	<script src="js/bootsnav.js."></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/loginSwitcher.js"></script>
</body>

</html>
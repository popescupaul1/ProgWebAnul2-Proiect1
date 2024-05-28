<?php
include 'connection.php';
session_start();
if(isset($_COOKIE['email']) && !isset($_SESSION['email']))
{
	$_SESSION['email'] = $_COOKIE['email'];
}
if(isset($_SESSION['email'])){
	header("Location: userIndex.php");
}
?>

<html>
	<head>
		<title>F1 Ticket Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/f1logo2.png" alt="" /></a>
					<h1>Welcome to the<br />
					<strong>Official F1 Ticket Website.</strong><br /></h1>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>This is the official place to purchase F1 tickets at an affordable price.</h2>
						</header>
						<p><strong>Note</strong> in order to succesfully purchase tickets you need to have an account on our platform. You can do that by clicking the button below.</p>
						<ul class="actions">
							<p style="margin-right:0px;"></p>
							<li><a href="loginUser.php" class="button">Log In</a></li>
							<p style="margin-right:25px;"></p>
							<li><a href="register.php" class="button">Sign Up</a></li>
							<p style="margin-right:25px;"></p>
							<li><a href="administrator.php" class="button">Administrator</a></li>
							<p style="margin-right:25px;"></p>
							<li><a href="projectReq.php" class="button">Requirements</a></li>
						</ul>

					</section>

				<!-- Two -->
					<section id="two">
						<h2>All the available races</h2>
						<div class="row">
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/races/jeddahGP.jpg" class="image fit thumb"><img src="images/races/jeddahGP.jpg" alt="" /></a>
								<h3>Saudi Arabia - Jeddah GP</h3>
								<p>You need an account to buy tickets.</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/races/AustraliaGP.jpg" class="image fit thumb"><img src="images/races/AustraliaGP.jpg" alt="" /></a>
								<h3>Australia - Melbourne GP</h3>
								<p>You need an account to buy tickets.</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/races/SuzukaGP.jpg" class="image fit thumb"><img src="images/races/SuzukaGP.jpg" alt="" /></a>
								<h3>Japan - Suzuka GP</h3>
								<p>You need an account to buy tickets.</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/races/MiamiGP.jpg" class="image fit thumb"><img src="images/races/MiamiGP.jpg" alt="" /></a>
								<h3>USA - Miami GP</h3>
								<p>You need an account to buy tickets.</p>
							</article>
						</div>
					</section>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="https://www.facebook.com/paul.popescu.180072/" class="icon brands fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://github.com/popescupaul1" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://www.instagram.com/paulpopescu26/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Popescu Paul - Constantin</li><li>Grupa M524</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
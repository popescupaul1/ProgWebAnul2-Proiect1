<?php
include 'connection.php';
session_start();
if(isset($_COOKIE['name']) && !isset($_SESSION['name']))
{
	$_SESSION['name'] = $_COOKIE['name'];
}
if(isset($_SESSION['name'])){
    $sql="SELECT * FROM users WHERE name='{$_SESSION['name']}'";
    $query=mysqli_query($con,$sql) or die(mysqli_query($con,$sql));
    $record=mysqli_fetch_array($query);
    $pos=$record['nume'];

}
?>
<html>
	<head>
		<title>F1 Raceday Images</title>
        <link rel="icon" href="f1Icon.ico" type="\images\Icon\">
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
                            <h2 style="text-align: center">Here you can view images uploaded by our followers of the <strong>beautiful race</strong>.</h2>
                        </header>
                        <ul class="actions">
							<p style="margin-right:400px;"></p>
							<li><a href="userIndex.php" class="button">Return</a></li>
						</ul>

					</section>
									<!-- Two -->
					<section id="two">
						
						<h2 style="text-align:center">Images</h2> <br>
						<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fyour-public-domain.com%2Fpage-to-like&width=400&layout=standard&action=like&size=small&share=true&height=35&appId"
        				width="400" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>						
						
						<?php
							include 'connection2.php';
							$sql='SELECT * FROM images;';
							$query=mysqli_query($con, $sql) or die(mysqli_error($con));
						?>

						<table width="30%" cellpadding="4" cellspace="4" rules="rows">
							<tr>
								<th>Nume</th>
								<th>Imagine</th>
							</tr>

							<?php while( $row = mysqli_fetch_array($query) ) { ?>

							<tr style="border-bottom: 1px solid black;">
								<td><?php echo $row['title']; ?></td>
								<td><img src="<?php echo $row['image']; ?>"></td>
							</tr>
							<?php } ?>
						</table>						
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
			<script src="assets/js/anti_rclick.js"></script>
			<script src="assets/js/anti_textSelect.js"></script>

	</body>
</html>
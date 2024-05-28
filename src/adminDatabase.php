<?php
    include 'connection.php';
    $sql='SELECT * FROM users';
    $query=  mysqli_query($con, $sql)or die(mysqli_error($con));
?>

<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Admin Database</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/f1logo2.png" alt="" /></a>
					<h1><strong>F1 Website Administration Database</strong><br /></h1>
				</div>
			</header>

		<!-- Main -->
			<div id="main">
				<!-- Two -->
					<section id="two">
						<h1 style="text-align: center">Administration Database</h1>
					<table>
								<tr>
									<th>Nume</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Gender</th>
								</tr>
						
							<?php while($row=mysqli_fetch_array($query)){ ?>
								<tr>
								<td><?php echo $row["name"];?></td>
								<td><?php echo $row["email"];?></td>
								<td><?php echo $row["phone"];?></td>
								<td>
									<?php 
										if($row["gender"] == 1)
											echo "Female";
										else 
											echo "Male";
									?>
								</td>
							<?php  } ?>
							</table>
					</section>

					<section id="two">
					<?php
						include 'connection2.php';
						$sql='SELECT * FROM images;';
						$query=mysqli_query($con, $sql) or die(mysqli_error($con));
					?>

					<table width="30%" cellpadding="4" cellspace="4" rules="rows">
						<tr>
							<th>Nume</th>
							<th>Imagine</th>
							<th colspan="3" align="center">Actions</th>
						</tr>

						<?php while( $row = mysqli_fetch_array($query) ) { ?>

						<tr style="border-bottom: 1px solid black;">
							<td><?php echo $row['title']; ?></td>
							<td><img src="<?php echo $row['image']; ?>"></td>
							<td>
								<?php echo "<a href=\"view.php?id=".$row['id']."\">View</a>
								<a href=\"edit.php?id=".$row['id']."\">Edit</a>
								<a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"
								?>
							</td>
						</tr>
						<?php } ?>
					</table>

					<ul class="actions">
						<p style="margin-right:200px;"></p>
						<li><a href="upload.php" class="button">Upload another image</a></li>
						<p style="margin-right:50px;"></p>
						<li><a href="search.php" class="button">Search an image</a></li>
					</ul>


					</section>

					<ul class="actions">
						<p style="margin-right:400px;"></p>
						<li><a href="index.php" class="button">Return</a></li>
					</ul>
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
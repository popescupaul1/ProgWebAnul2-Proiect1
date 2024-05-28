<?php
	include 'connection2.php';
    if(isset($_GET['id']))
         $sql = "SELECT * FROM images WHERE id = '{$_GET['id']}'";
    else
         $sql = "SELECT * FROM images WHERE id = '{$_POST['id']}'";
    $result = mysqli_query($con, $sql);
    $record = mysqli_fetch_array($result);
    if(isset($_POST['submit']))
    { 
		$title = $_POST['title'];
		if ($_FILES['image']['size'] > 0) {
			$target = "./images/" . basename($_FILES['image']['name']);
			move_uploaded_file($_FILES['image']['tmp_name'], $target);
		} else {
			$target = $record['image'];	
		}

		$sql1 = "UPDATE images SET title='$title', image='$target' WHERE id = '{$_POST['id']}'";
		mysqli_query($con, $sql1) or die(mysqli_error($con));
		header("location: adminDatabase.php");
    }
?>



<html>
	<head>
		<title>Upload</title>
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
							<h2 style="text-align: center">Edit Images</h2>
						</header>


						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
							Name: <br> <input class="form-control" type="text" name="title" value="<?php echo $record['title']; ?>"><br>
							Image:<br><input type="file" name="image" value="<?php echo $record['image']; ?>"><br>
							<?php if (!empty($record['image'])): ?>
								<img src="<?php echo $record['image']; ?>" alt="Current Image" width="200"><br>
							<?php endif; ?>

							<input type="hidden" name="id" value="<?php echo $record['id']; ?>">
							<input type="submit" name="submit" value="Edit" class="btn btn-primary btn-outline">
						</form>
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
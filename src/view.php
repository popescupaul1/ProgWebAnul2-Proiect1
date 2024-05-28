


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
							<h2 style="text-align: center">View Images</h2>
						</header>
						<div id="content">
                        <?php
                            include 'connection2.php';

                            if (!isset($_GET['id'])) {
                                die('ID not provided.');
                            }

                            $id = $_GET['id'];

                            // Fetch the record
                            $stmt = $con->prepare("SELECT * FROM images WHERE id = ?");
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $row = $result->fetch_assoc();
                            $stmt->close();

                            if (!$row) {
                                die("Record not found.");
                            }

                            echo "Name: " . htmlspecialchars($row["title"]) . "<br/>";
                            echo "Image: <img src='" . htmlspecialchars($row['image']) . "' alt='Image'><br/>";
                            ?>

                            <ul class="actions">
						        <p style="margin-right:400px;"></p>
						        <li><a href="adminDatabase.php" class="button">Return</a></li>
					        </ul>
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

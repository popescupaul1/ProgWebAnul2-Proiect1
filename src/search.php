<?php
    include "connection2.php";
    $sql = "SELECT * FROM images ";
    if(isset($_POST["search"])){
        $search_term= mysqli_real_escape_string($con,$_POST["search_box"]);
        $sql.="WHERE title='{$search_term}'";
    }
    $query=mysqli_query( $con, $sql ) or die(mysqli_error($con));
?>



<html>
	<head>
		<title>Search</title>
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
							<h2 style="text-align: center">Search Images</h2>
						</header>
						
                        <form name = "search.php" method="post" action="search.php">
                            Search: <input type="text" name="search_box" value=""><br>
                            <input type="submit" name="search" id="Search the table">
                            <input type="reset" value="Reset"><br>
                        </form>

                        <table width="70" cellpadding="4" cellspace="4">
                            <tr>
                                <th>Nume</th>
                                <th>Imagine</th>
                            </tr>
                            <?php while($row=mysqli_fetch_array($query)){ ?>
                            <tr>
                                <td><?php echo $row["title"];?></td>
                                <td><?php echo "Image: <br><img src='" . htmlspecialchars($row['image']) . "' alt='Image'><br/>";?></td>
                            </tr>
                            <?php } ?>

                        </table>

                        <ul class="actions">
							<p style="margin-right:400px;"></p>
							<li><a href="adminDatabase.php" class="button">Return</a></li>
						</ul>

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
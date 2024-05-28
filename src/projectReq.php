<html>
	<head>
		<title>Requirements</title>
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
				<div class="google-map">
					<h1 style="text-align: center;"><strong>Harta UAIC</strong></h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.1513064380506!2d27.571698146943085!3d47.17447407063824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61a6de8567%3A0x770562ffa2192d42!2sFacultatea%20de%20Matematic%C4%83!5e0!3m2!1sen!2sro!4v1714301704593!5m2!1sen!2sro" width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</section>


			<!-- YT Video -->
			<section>
				<div class="youtube-vid">
					<h1 style="text-align: center;"><strong>Videoclip YouTube</strong></h1>
					<iframe width="1000" height="600" src="https://www.youtube.com/embed/zhf1pIl007o?si=bUInB7inDniO5kKe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>				
				</div>
			</section>

			 
			<!-- MP4 -->
			<section>
				<div class="youtube-vid">
					<h1 style="text-align: center;"><strong>Videoclip MP4</strong></h1>
					<video controls width="1000">
						<source src="/projReq/LikeRealPeopleDo.mp4" type="video/mp4" />
					</video>
				</div>
			</section>

			<!-- MP3 -->
			<section>
				<h1 style="text-align: center;"><strong>AudioClip MP3</strong></h1>
					<figure style="text-align: center;">
						<figcaption>Going Home (Bleach - OST)</figcaption>
						<audio controls src="/projReq/Going Home (Bleach OST).mp3"></audio>
					</figure>
			</section>
			</div>

			<section>
				<h1 style="text-align: center">Canvas Element</h1>
				<figure style="text-align: center">

				<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;"></canvas>

				<script>
					var c = document.getElementById("myCanvas");
					var ctx = c.getContext("2d");

					// Create gradient
					var grd = ctx.createLinearGradient(0, 0, 200, 0);
					grd.addColorStop(0, "red");
					grd.addColorStop(1, "white");

					// Fill with gradient
					ctx.fillStyle = grd;
					ctx.fillRect(10, 10, 150, 80);
				</script> 
				</figure>
			</section>

			<section>
				<h1 style="text-align: center">SVG Element</h1>
				<figure style="text-align: center">

				<svg width="300" height="200">
					<polygon points="100,10 40,198 190,78 10,78 160,198"
					style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
				</svg>

				</figure>
			</section>



			

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
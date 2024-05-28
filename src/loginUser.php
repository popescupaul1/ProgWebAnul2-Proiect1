<?php
        session_start();
        include('connection.php');
        if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
        {
          $email = $_COOKIE['email'];
          $password = $_COOKIE['password'];
        }
        else
        {
          $email = "";
          $password ="";
        }
        if(isset($_REQUEST['submit']))
        {
          $email = $_REQUEST['email'];
          $pass = $_REQUEST['password'];
          $select_query = mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$pass'");
          $res = mysqli_num_rows($select_query);
          if($res>0)
          {
            $data = mysqli_fetch_array($select_query);
            $email = $data['email'];
            $pass = $data['password'];
            $_SESSION['email'] = $email;
            $_SESSION['password']=$pass;
            if(isset($_REQUEST['rememberme']))
            {
              setcookie('email',$_REQUEST['email'],time()+60*60, "/");//1 hour
              setcookie('password',$_REQUEST['password'],time()+60*60, "/"); //1 hour
            }
            else
            {
              setcookie('email',$_REQUEST['email'],time()-10, "/");//10 seconds
              setcookie('password',$_REQUEST['password'],time()-10, "/"); //10 seconds
            }
            header('location:userIndex.php');
          }
          else
          {
            $msg = "Please enter valid email or password.";
          }
        }
        ?>
<html>
	<head>
		<title>Log In</title>
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
						<br>
						<section>
							<h4 style="text-align: center">Log In</h4>
							<form method="post">
								<div class="row gtr-uniform gtr-50">
									<div class="col-12">
										<input type="email" name="email" value="" placeholder="Email" />
									</div>
									<div class="col-12">
										<input type="password" name="password" value="" placeholder="Password" />
									</div>
									<div class="col-12">
										Remember Me: <input type="checkbox" name="rememberme"> <br>
									</div>
									<div class="col-12">
										<ul class="actions">
                                            <p style="margin-right:2in;"></p>
											<li><input name="submit" type="submit" value="Log In" class="primary" /></li>
                                            <p style="margin-right:1.5in;"></p>
							                <li><a href="index.php" class="button">Return</a></li>
										</ul>
									</div>
								</div>
							</form>
							<p style="text-align: center">You don't have an account? <a href="register.php"><br> Sign-up now!</a></p>
						</section>

						<section>
						</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
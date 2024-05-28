<?php 
session_start();
$user = 'admin';
$pass = 'admin';
$message = "";
if((!(empty($_POST["username"]))) || (!(empty($_POST["password"])))) {
    if(($_POST["username"] == $user) && ($_POST["password"] == $pass)) {
        $_SESSION["user_name"] = $_POST["username"];
        header("Location:adminDatabase.php");
    }
} else {
    header("Location:administrator.php");
}
?>

<html>
<head>
		<title>error</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<h1 ><a href="index.php">Invalid input</a></h1>
    </body>
</html>
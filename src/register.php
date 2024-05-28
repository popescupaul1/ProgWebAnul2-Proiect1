
<?php
 include "connection.php";
// define variables and set to empty values
function test_input($data) {
  $data = trim($data);//Remove whitespaces from both sides of a string
  $data = stripslashes($data);//Remove the backslash
  $data = htmlspecialchars($data);//Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities
  return $data;
}


$numeErr =$usernameErr= $telefonErr=$emailErr = $genderErr = $passErr = $captchaErr = "";
$nume = $pass = $username = $telefon = $email = $gender = "";
$err=0;

class Name {
  private string $nume = "";

  public function nameValid(){
    $this->nume = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$this->nume))
      $numeErr = "Only alphabets and white space are allowed"; 
      $err = 1;
  }


  public function getName(){
    return $this->nume;
  }
}
class Email {
    public string $Email = "";

    public function isValid() {
        $this->Email = test_input($_POST["email"]);
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        if (!preg_match ($pattern, $this->Email) ) {  
            $err=1;
            $emailErr = "Invalid email format";  
        }  
    }

    public function getEmail() {
        return $this->Email;
    }
}


if (isset($_POST["submit"])) {

  if (empty($_POST["name"])) {
    $numeErr = "Name is required";
    $err=1;
  }

  $name = new Name();
  $name->nameValid();
  $nume = $name->getName();

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $err=1;
  }

  $e_mail = new Email();
  $e_mail->isValid();
  $email = $e_mail->getEmail();

  if (empty($_POST["phone"])) {
    $telefonErr = "A phone number is required";
    $err=1;
  } else {
    $telefon = test_input($_POST["phone"]);
    if (!preg_match ("/^[0-9]*$/", $telefon) ) {  
        $telefonErr = "Only numeric value is allowed.";  
        $err=1;
    }  
    if (strlen ($telefon) != 10) {  
        $telefonErr = "Phone number must contain 10 digits.";  
        $err=1;
    }
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $err=1;
  } else {
	$gender = ($_POST["gender"] == "Female") ? 1 : 0;
  }

  if(empty($_POST["password"])) {
    $passErr = "Add a password";
    $err = 1;
  } else {
    $pass=test_input($_POST['password']);
    // Validating password strength
    $uppercase    = preg_match('@[A-Z]@', $pass);
    $lowercase    = preg_match('@[a-z]@', $pass);
    $number       = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);
    
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8) {
        $passErr = 'Password should be at least 8 characters in length, should include at least one upper case letter, one number and one special character.';
    }
  }

  $captcha = $_POST['captcha'];
  $correctsum = $_POST['correctsum'];
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!isset($_POST['captcha'])) {
    $captchaErr = "Captcha is required";  
    $err++;
  } else if($_POST['captcha'] != $_POST['correctsum']) {
    $captchaErr = "Captcha is wrong";
    $err++;
  }

  if($err==0){
  $sql="INSERT INTO users( name, email, password, phone, gender) VALUES ('{$nume}', '{$email}', '{$pass}','{$telefon}', '{$gender}')";
  $query = mysqli_query($con, $sql)or die(mysqli_error($con));
 //header("location:index.php");
 echo "<script>location.href = 'register.php';</script>"; 
}
}
?>

<html>
	<head>
		<title>Register</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/f1logo2.png" alt="" /></a>
					<h1>Create an account <strong>easy and fast</strong><br>
                     on our platform right now!</h1>
				</div>
			</header>

		<!-- Main -->
					<section id="one">
                    <div id="main">

                          <?php
                          $number1 = rand(10, 199);
                          $number2 = rand(10, 199);
                          $sum = $number1 + $number2;
                          ?>

                        <h1 style="text-align: center">Register</h1>
                        <p><span class="error">* required field</span></p>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                        Full Name: <span class="error">* <?php echo $numeErr;?></span>
                        <input type="text" name="name">
                        <br><br>
                        E-mail: <span class="error">* <?php echo $emailErr;?></span>
                        <input type="email" name="email">
                        <br><br>
                        Password: <span class="error">* <?php echo $passErr;?></span>
                        <input type="password" name="password">
                        <br><br>
                        Phone: <span class="error">* <?php echo $telefonErr;?></span>
                        <input type="text" name="phone">
                        <br><br>
                        Gender: <span class="error">* <?php echo $genderErr;?></span> <br>
                        <input type="radio" name="gender" value="Female">Female <br>
                        <input type="radio" name="gender" value="Male">Male
                        <br><br>
                        Captcha: <span class="error">* <?php echo $captchaErr;?></span> <br>
                        <input type="hidden" name="correctsum" value="<?php echo $sum ?>"/>
                         <?php echo $number1. ' + '.$number2. ' = '; ?>
                        <input type="text" name="captcha"/> <br><br> 

                        <ul class="actions">
							<p style="margin-right:250px;"></p>
							<li><input type="submit" name="submit" value="Submit">  </li>
							<p style="margin-right:80px;"></p>
							<li><a href="index.php" class="button">Return</a></li>
						</ul>

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
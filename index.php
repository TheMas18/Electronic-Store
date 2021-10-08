<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['user_id']) or isset($_SESSION['login_user'])) {
	header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION["user_id"] = $row['id'];
		$_SESSION['photo'] = $row['photo'];
		$_SESSION["login_user"] = $row['username'];
		header("Location: main.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<link rel="stylesheet" type="text/css" href="Css/login.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="Css/LoginCss/LContainer.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="Css/LoginCss/Lbuttonanimations.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="Css/LoginCss/Ltextanimation.css?v=<?php echo time(); ?>">

	<title>Login Form</title>
</head>
<div class="video">

	<video loop muted autoplay>
		<source src="bgvideos\stars1.mp4">

	</video>
</div>

<body bgcolor="black">

	<section class="showcase">

		<header>
			<h1 class="acp">Gadget Zone</h1>

		</header>
		<div class="txt1">

			<h2 id="eslogo2">Welcome To Electronic Store</h2>
			<a href="http://localhost/ElectronicStore/start.php" class="glowbutton">Home</a>

		</div>
		<div class="wrapper">



			<div class="container">

				<form action="" method="POST" class="login-email">
					<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Here</p>
					<div class="input-group">
						<input type="email" placeholder="Email" autocomplete="off" name="email" value="<?php echo $email; ?>" required>
					</div>
					<div class="input-group">
						<input type="password" placeholder="Password" autocomplete="off" name="password" value="<?php echo $_POST['password']; ?>" required>
					</div>
					<div class="input-group">
						<button name="submit" class="btn">
							<span></span>
							<span></span>
							<span></span>
							<span></span> Login
						</button>
					</div>

					<p class="login-register-text">Don't have an account? <a href="register.php" class="as1">Register Here</a></p>
				</form>

			</div>
		</div>
	</section>



</body>

</html>
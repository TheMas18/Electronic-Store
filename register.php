<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['user_id']) or isset($_SESSION['login_user'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration Completed.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("Location: index.php");
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="Css/regi.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Css/RegiCss/Rtextaimation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Css/RegiCss/Rbuttonanimation.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Css/RegiCss/Rcontainer.css?v=<?php echo time(); ?>">
    <title>Register Form</title>
</head>
<div class="video">

    <video loop muted autoplay>
        <source src="bgvideos/stars1.mp4">

    </video>
</div>

<body>
    <section class="showcase">
        <header>
            <h1 class="acps1">Gadget Zone</h1>
        </header>

        <div class="txt1">
            <h2 id="eslogo1">Welcome To Electronic Store</h2>
            <a href="http://localhost/ElectronicStore/start.php" class="glowbutton">Home</a>
        </div>

        <div class="container">
            <div class="form-inner">
                <form action="" method="POST" class="login-email">
                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
                    <div class="input-group">
                        <input type="text" placeholder="Username" autocomplete="off" name="username" value="<?php echo $username; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="Email" autocomplete="off" name="email" value="<?php echo $email; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" autocomplete="off" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Confirm Password" autocomplete="off" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span> Register
                        </button>
                    </div>
                    <p class="login-register-text">Have an account? <a href="index.php" class="as">Login Here</a></p>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
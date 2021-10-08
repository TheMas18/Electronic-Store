<?php
$count = 0;
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="Css/contactus.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="Css/aboutus.css?v=<?php echo time(); ?>">
</head>

<body>
    <header class="header-contents">
        <div class="Elements">
            <a href="main.php" style="text-decoration: none;">
                <div class="acps3">
                    <h2>Gadget Zone</h2>
                </div>
            </a>
            <div class="video-element">
                <video src="bgvideos/stars.mp4" muted loop autoplay></video>
            </div>




            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="mycart.php">Cart(<?php echo $count; ?>) </a></li>
                <li><a href="logout.php">LogOut</a></li>
                <li><a href="javascript:history.go(-1)" style="cursor: pointer;">Back</a></li>
            </ul>


        </div>

    </header>
    <div class="contact-titlelogo">
        <h2>Contact Us</h2>
    </div>
    <section class="contact-us-container">
        <form>
            <input name="name" type="text" class="feedback-input" placeholder="Name" />
            <input name="email" type="text" class="feedback-input" placeholder="Email" />
            <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
            <button class="submit-contact">Submit</button>
        </form>
    </section>

</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?v=<?php echo time(); ?>">
<footer class="footer">


    <div class="Footer-copyrights">
        <p>
            All rights reserved by ©GadgetZone 2021 </p>
    </div>
</footer>

</html>
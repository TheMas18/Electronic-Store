<?php
session_start();
?>
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
    <title>About Us</title>
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
    <div class="aboutus-header">
        <h2>
            About Us
        </h2>
    </div>
    <section class="wrapper">
        <div class="quotes">

            <blockquote class="content-quotes">
                <p>"I guess the reality is, everybody today has so many gadgets."</p>

            </blockquote>
        </div>
    </section>
    <section>
        <div class="welcome-message">

            <p>Welcome <?php echo $_SESSION['login_user']; ?></p>
        </div>
    </section>
    <section class="information">

        <div class="information-aboutus">
            <p> Due to COVID-19 its difficult for customers to visit stores manually.Gadget Zone will help customers to buy various gadgets Online. Our Motive is to make a dedicated website only for electronic gadgets. Our Gadget Zone will make customers
                shopping experience efficient and as easy as possible.</p>
        </div>
    </section>
    <div class="creators-title">
        <p>Creators</p>
    </div>
    <section class="showcase">

        <div class="images-creators">

            <img src="images/ct1.jpg">
            <p>Sumita Khan</p>
        </div>
        <div class="images-creators">

            <img src="images/ct1.jpg">
            <p>Neha Bhalerao</p>
        </div>
        <div class="images-creators">

            <img src="images/ct1.jpg">
            <p>Rahul Gaikwad</p>
        </div>
        <div class="images-creators">

            <img src="images/ct1.jpg">
            <p>Mayuresh Samant</p>
        </div>
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
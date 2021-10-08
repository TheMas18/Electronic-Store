<link rel="stylesheet" type="text/css" href="Css/commonfooter.css?v=<?php echo time(); ?>">

<script>
    mybutton = document.getElementById("gototop");


    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }


    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?v=<?php echo time(); ?>">
<footer class="footer">
    <div class="footer-titlename">
        <p>We Hope You Enjoyed Shopping With Us</p>
        <button class="backtotop" onclick="topFunction()" id="gototop">BackToTop</button>
    </div>
    <div class="footer-logoname">
        <h1> Gadget Zone</h1>
        <p>
            Due to COVID-19 its difficult for customers to visit stores manually.Gadget Zone will help customers to buy various gadgets Online. Our Motive is to make a dedicated website only for electronic gadgets. Our Gadget Zone will make customers shopping experience
            efficient and as easy as possible.
        </p>
    </div>
    <ul class="r-footer">

        <li class="features1">
            <h2 style="color:white">Information</h2>
            <ul class="footer-first-column">
                <li><a href="../../profile.php" style="color:aqua">Profile</a></li>
                <li><a href="../../mycart.php" style="color:aqua">Cart</a></li>
                <li><a href="../../policy/termsNcond.php" style="color:aqua">Terms And Conditions</a></li>
                <li><a href="../../policy/Certifications.php" style="color:aqua">Certifications</a></li>
                <li><a href="../../policy/CustomerService.php" style="color:aqua">Customer Service</a></li>
            </ul>
        </li>
        <li class="features2">
            <h2 style="color:white">Category</h2>
            <ul class="footer-first-column2">
                <li><a href="../../CategoryPages/Smartphones Main Page.php" style="color:aqua">SmartPhones</a></li>
                <li><a href="../../CategoryPages/TV MainPage.php" style="color:aqua">Smart TV</a></li>
                <li><a href="../../CategoryPages/Headphones_Main_Page.php" style="color:aqua">Headphones</a></li>
                <li><a href="../../CategoryPages/Keyboard_Mouse_MainPage.php" style="color:aqua">Mouse</a></li>
                <li><a href="../../CategoryPages/Printer_MainPage.php" style="color:aqua">Printers</a></li>
            </ul>
        </li>
        <li class="features3">
            <h2 style="color:white; justify-content:space-evenly;"> Legal</h2>
            <ul class="box">
                <li><a href="../../AboutUs.php" style="color:aqua">About Us</a></li>

                <li><a href="../../ContactUs.php" style="color:aqua">Contact Us</a></li>


            </ul>
        </li>

    </ul>
    <div class="Footer-Socialmedia ">
        <h2>Socials</h2>
        <div class="social-iconsfooter">
            <div class="Socialmedia-button1 fb-btn">
                <a href="https://www.facebook.com/RealGadgetzoneOp"><i class="fa fa-facebook" aria-hidden="true" id="fb"></i></a>
            </div>
            <div class="Socialmedia-button1 ig-btn">
                <a href="https://www.instagram.com/gadgetzone04/"><i class="fa fa-instagram" aria-hidden="true" id="ig"></i></a>
            </div>
            <div class="Socialmedia-button1 tw-btn">
                <a href="https://twitter.com/GadgetZone04"><i class="fa fa-twitter" aria-hidden="true" id="tw"></i></a>
            </div>
        </div>
    </div>
    <div class="Footer-copyrights">
        <p>
            All rights reserved by ©GadgetZone 2021 </p>
    </div>
</footer>
<link rel="stylesheet" type="text/css" href="Css/MainPageCss/MpimagesSlider.css?v=<?php echo time(); ?>">
<section>
    <div class="container-image">
        <div class="slider">


            <div class="image">
                <a href="ProductPage/Smartphones/iphone12promax.php"> <img src="images/imageslider/ip1.jpg" alt="" href=""></a>
                <p id="imTxt1"><span id="txt1">"Powerful devices that <br> enable you to do more"<span> </p>
            </div>
            <div class="image">
                <a href="ProductPage/Mouse/Logitech G102 Mouse.php"> <img src="images/imageslider/G41o2.jpg" alt=""></a>

            </div>
            <div class="image">
                <a href="ProductPage/Keyboard/Asus ROG Strix Keyboard.php"><img src="images/imageslider/keyboard.jpg" alt=""></a>

            </div>
            <div class="image">
                <a href="ProductPage/HeadPhones/Asus ROG Strix Fusion 500.php"><img src="images/imageslider/headphone.jpg" alt=""></a>

            </div>
            <div class="image">
                <a href="ProductPage/Tv/Hisense 43inches 4k Tv.php"><img src="images/imageslider/tv1.jpg" alt=""></a>

            </div>
            <div class="indicators">
                <a onclick="nextimg(-1)" class="prev">&#10094;</a>
                <a onclick="nextimg(1)" class="next">&#10095;</a>
            </div>

            <div class="dots">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>

        </div>
    </div>

</section>
<script>
    var imageno = 1;
    displayimg(imageno);

    function nextimg(n) {
        displayimg(imageno += n)
    }

    function currentSlide(n) {
        displayimg(imageno = n)
    }

    function displayimg(n) {
        var i;
        var image = document.getElementsByClassName("image");
        var dots = document.getElementsByClassName("dot");

        if (n > image.length) {
            imageno = 1;
        }

        if (n < 1) {
            imageno = image.length;
        }

        for (i = 0; i < image.length; i++) {
            image[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        image[imageno - 1].style.display = "block";
        dots[imageno - 1].className += " active";

    }
</script>
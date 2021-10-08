<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="Css/MainPageCss/Mpmenubar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="Css/MainPageCss/Mpsidebar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="Css/MainPageCss/Mpfooter.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="Css/MainPageCss/MpimagesSlider.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="Css/MainPageCss/MpCards.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="Css/MainPageCss/MpproductSlider.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?v=<?php echo time(); ?>">
    <title>Gadget Zone</title>
</head>

<body>
    <header>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <nav class="menu-bar">
            <div class="navigationbar">
                <div id="overlay" onclick="closeNav()"></div>
                <div id="closeBtn" onclick="closeNav()" class="closebutton1">&times;</div>
                <div class="category-menu">
                    <div class="sidebar" id="sidebaric">
                        <div class="sidebar-title">
                            <a href="CategoryPage.php">Welcome <?php echo $_SESSION['login_user']; ?></a>
                        </div>
                        <div id="sidebar-content">
                            <a href="CategoryPages/AC_MainPage.php">
                                <div class="sidenavRow">
                                    <div>AC</div>
                                </div>
                            </a>
                            <a href="CategoryPages/Headphones_Main_Page.php">
                                <div class="sidenavRow">
                                    <div>Headphones & Speakers</div>
                                </div>
                            </a>
                            <a href="CategoryPages/Smartphones Main Page.php">
                                <div class="sidenavRow">
                                    <div>Mobile Phones</div>
                                </div>
                            </a>
                            <a href="CategoryPages/Keyboard_Mouse_MainPage.php">
                                <div class="sidenavRow">
                                    <div>Keyboard & Mouse</div>
                                </div>
                            </a>
                            <a href="CategoryPages/Printer_MainPage.php">
                                <div class="sidenavRow">
                                    <div>Printers</div>
                                </div>
                            </a>
                            <a href="CategoryPages/Refrigerator_MainPage.php">
                                <div class="sidenavRow">
                                    <div>Refridgerators</div>
                                </div>
                            </a>
                            <a href="CategoryPages/Washingmachine_mainpage.php">
                                <div class="sidenavRow">
                                    <div>Washing Machines</div>
                                </div>
                            </a>
                            <a href="CategoryPages/TV MainPage.php">
                                <div class="sidenavRow">
                                    <div>TV</div>
                                </div>
                            </a>
                            <div style="height: 50px"></div>
                        </div>
                    </div>
                    <div onclick="openNav()" class="sidebaricon">
                        &#9776;
                    </div>
                </div>
                <div class="menubar-headingbar">
                    <h1 class="acps3">Gadget Zone</h1>
                </div>
                <form class="srchopt">
                    <input class="search" type="search" placeholder="" id="search" onchange="openPage()" aria-label="Search">
                    <button class="btnsearch" type="submit">Search</button>

                    <!-- Javascipt for search bar -->
                    <Script>
                        function openPage() {
                            var x = document.getElementById("search").value;

                            // Smartphones Section 
                            if (x === "Infinix Smart 5") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Infinix Smart 5.php")
                            } else if (x === "Iphone 11") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/iphone11.php")
                            } else if (x === "Iphone 12 pro max") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/iphone12promax.php")
                            } else if (x === "OPPO A74 5G") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/OPPO A74 5G.php")
                            } else if (x === "Realme Nazro 30 Pro") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/realme nazro 30 Pro.php")
                            } else if (x === "Redmi Note 10S") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Redmi Note 10S.php")
                            } else if (x === "Samsung Galaxy M31s") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Samsung Galaxy M31s.php")
                            }

                            // AC Section 
                            else if (x === "LG 1.5 Ton 5 Star Wi-Fi Inverter Window") {
                                window.open("/ElectronicStore/ProductPage/AC/LG 1.5 Ton 5 Star Wi-Fi Inverter Window.php")
                            } else if (x === "LG1.5Ton5StarInverterSplitAC") {
                                window.open("/ElectronicStore/ProductPage/AC/LG1.5Ton5StarInverterSplitAC.php")
                            } else if (x === "Lloyd 1 Ton 3 Star") {
                                window.open("/ElectronicStore/ProductPage/AC/Lloyd 1 Ton 3 Star .php")
                            } else if (x === "Panasonic 2 Tons") {
                                window.open("/ElectronicStore/ProductPage/AC/Panasonic 2 Tons.php")
                            } else if (x === "Whirlpool 1.5 Ton 3 Star") {
                                window.open("/ElectronicStore/ProductPage/AC/Whirlpool 1.5 Ton 3 Star .php")
                            }

                            // Freezer Section 
                            else if (x === "Blue Star 401 L Double Door Standard Deep Freezer") {
                                window.open("/ElectronicStore/ProductPage/Freezer/Blue Star 401 L Double Door Standard Deep Freezer.php")
                            }

                            // Headphones Section 
                            else if (x === "Asus ROG Strix Fusion 500") {
                                window.open("/ElectronicStore/ProductPage/HeadPhones/Asus ROG Strix Fusion 500.php")
                            } else if (x === "EKSA Stereo Headset") {
                                window.open("/ElectronicStore/ProductPage/HeadPhones/EKSA Stereo Headset.php")
                            } else if (x === "Zebronics Zeb-Thunder") {
                                window.open("/ElectronicStore/ProductPage/HeadPhones/Zebronics Zeb-Thunder.php")
                            }

                            // Keyboard section 
                            else if (x === "Asus ROG Strix Keyboard") {
                                window.open("/ElectronicStore/ProductPage/KeyBoard/Asus ROG Strix Keyboard.php")
                            }

                            // Laptop Section 
                            else if (x === "ASUS TUF Gaming A15") {
                                window.open("/ElectronicStore/ProductPage/laptop/ASUS TUF Gaming A15.php")
                            } else if (x === "HP Chromebook Intel Core") {
                                window.open("/ElectronicStore/ProductPage/laptop/HP Chromebook Intel Core.php")
                            } else if (x === "Inspiron 14 Laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/Inspiron 14 Laptop.php")
                            } else if (x === "Lenovo IdeaPad Slim 3") {
                                window.open("/ElectronicStore/ProductPage/laptop/Lenovo IdeaPad Slim 3.php")
                            }

                            // Mouse Section 
                            else if (x === "Lenovo Legion-M200") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Lenovo Legion-M200.php")
                            } else if (x === "Logitech G102 Mouse") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Logitech G102 Mouse.php")
                            } else if (x === "Logitech G102 Mouses") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Logitech G102 Mouse1.php")
                            } else if (x === "Logitech M337 Mouse") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Logitech M337 Mouse.php")
                            }

                            // Printer Section 
                            else if (x === "Canon PIXMA G2020 NV") {
                                window.open("/ElectronicStore/ProductPage/Printers/Canon PIXMA G2020 NV.php")
                            } else if (x === "Epson PictureMate") {
                                window.open("/ElectronicStore/ProductPage/Printers/Epson PictureMate.php")
                            } else if (x === "HP DeskJet Printer") {
                                window.open("/ElectronicStore/ProductPage/Printers/HP DeskJet Printer.php")
                            } else if (x === "HP Ink Tank 319") {
                                window.open("/ElectronicStore/ProductPage/Printers/HP Ink Tank 319.php")
                            }

                            // Refrigerator Section 
                            else if (x === "Haier 170 L Direct Cool Single Door 2 Star Refrigerator") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/Haier 170 L Direct Cool Single Door 2 Star Refrigerator.php")
                            } else if (x === "SAMSUNG 192 L Direct Cool Single Door 2 Star Refrigerator") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/SAMSUNG 192 L Direct Cool Single Door 2 Star Refrigerator.php")
                            } else if (x === "samsung 253l frost free refrigerator") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/samsung_253l_frost_free_refrigerator.php")
                            } else if (x === "Whirlpool 265 L Frost Free Double Door 3 Star Convertible Refrigerator") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/Whirlpool 265 L Frost Free Double Door 3 Star Convertible Refrigerator.php")
                            }

                            // Category Section 
                            else if (x === "AC") {
                                window.open("/ElectronicStore/CategoryPages/AC_MainPage.php")
                            } else if (x === "Headphones") {
                                window.open("/ElectronicStore/CategoryPages/Headphones_Main_Page.php")
                            } else if (x === "Keyboard") {
                                window.open("/ElectronicStore/CategoryPages/Keyboard_Mouse_MainPage.php")
                            } else if (x === "Laptop") {
                                window.open("/ElectronicStore/CategoryPages/Laptop_MainPage.php")
                            } else if (x === "Printer") {
                                window.open("/ElectronicStore/CategoryPages/Printer_MainPage.php")
                            } else if (x === "Refrigerator") {
                                window.open("/ElectronicStore/CategoryPages/Refrigerator_MainPage.php")
                            } else if (x === "Smartphones") {
                                window.open("/ElectronicStore/CategoryPages/Smartphones Main Page.php")
                            } else if (x === "TV") {
                                window.open("/ElectronicStore/CategoryPages/TV MainPage.php")
                            }

                            // Keywords
                            else if (x === "phone") {
                                window.open("/ElectronicStore/CategoryPages/Smartphones Main Page.php")
                            } else if (x === "best phone") {
                                window.open("/ElectronicStore/CategoryPages/Smartphones Main Page.php")
                            } else if (x === "smartphone") {
                                window.open("/ElectronicStore/CategoryPages/Smartphones Main Page.php")
                            } else if (x === "ac") {
                                window.open("/ElectronicStore/CategoryPages/AC_MainPage.php")
                            } else if (x === "headphones") {
                                window.open("/ElectronicStore/CategoryPages/Headphones_Main_Page.php")
                            } else if (x === "headphone") {
                                window.open("/ElectronicStore/CategoryPages/Headphones_Main_Page.php")
                            } else if (x === "keyboard") {
                                window.open("/ElectronicStore/CategoryPages/Keyboard_Mouse_MainPage.php")
                            } else if (x === "laptop") {
                                window.open("/ElectronicStore/CategoryPages/Laptop_MainPage.php")
                            } else if (x === "printer") {
                                window.open("/ElectronicStore/CategoryPages/Printer_MainPage.php")
                            } else if (x === "refrigerator") {
                                window.open("/ElectronicStore/CategoryPages/Refrigerator_MainPage.php")
                            } else if (x === "tv") {
                                window.open("/ElectronicStore/CategoryPages/TV MainPage.php")
                            } else if (x === "Whirlpool") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/Whirlpool 265 L Frost Free Double Door 3 Star Convertible Refrigerator.php")
                            } else if (x === "whirlpool") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/Whirlpool 265 L Frost Free Double Door 3 Star Convertible Refrigerator.php")
                            } else if (x === "samsung refrigerator") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/samsung_253l_frost_free_refrigerator.php")
                            } else if (x === "Samsung refrigerator") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/SAMSUNG 192 L Direct Cool Single Door 2 Star Refrigerator.php")
                            } else if (x === "Haier refrigerator") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/Haier 170 L Direct Cool Single Door 2 Star Refrigerator.php")
                            } else if (x === "haier refrigerator") {
                                window.open("/ElectronicStore/ProductPage/Refrigerator/Haier 170 L Direct Cool Single Door 2 Star Refrigerator.php")
                            } else if (x === "HP printer") {
                                window.open("/ElectronicStore/ProductPage/Printers/HP Ink Tank 319.php")
                            } else if (x === "hp Printer") {
                                window.open("/ElectronicStore/ProductPage/Printers/HP DeskJet Printer.php")
                            } else if (x === "Epson") {
                                window.open("/ElectronicStore/ProductPage/Printers/Epson PictureMate.php")
                            } else if (x === "Canon") {
                                window.open("/ElectronicStore/ProductPage/Printers/Canon PIXMA G2020 NV.php")
                            } else if (x === "Logitech mouse") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Logitech M337 Mouse.php")
                            } else if (x === "logitech mouse") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Logitech G102 Mouse1.php")
                            } else if (x === "Logitech Mouse") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Logitech G102 Mouse.php")
                            } else if (x === "Lenovo mouse") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Lenovo Legion-M200.php")
                            } else if (x === "lenovo mouse") {
                                window.open("/ElectronicStore/ProductPage/Mouse/Lenovo Legion-M200.php")
                            } else if (x === "Lenovo laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/Lenovo IdeaPad Slim 3.php")
                            } else if (x === "Lenovo ideapad") {
                                window.open("/ElectronicStore/ProductPage/laptop/Lenovo IdeaPad Slim 3.php")
                            } else if (x === "lenovo ideapad") {
                                window.open("/ElectronicStore/ProductPage/laptop/Lenovo IdeaPad Slim 3.php")
                            } else if (x === "Inspiron laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/Inspiron 14 Laptop.php")
                            } else if (x === "inspiron laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/Inspiron 14 Laptop.php")
                            } else if (x === "HP Laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/HP Chromebook Intel Core.php")
                            } else if (x === "HP laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/HP Chromebook Intel Core.php")
                            } else if (x === "ASUS laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/ASUS TUF Gaming A15.php")
                            } else if (x === "ASUS gaming laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/ASUS TUF Gaming A15.php")
                            } else if (x === "gaming laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/ASUS TUF Gaming A15.php")
                            } else if (x === "asus laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/ASUS TUF Gaming A15.php")
                            } else if (x === "Asus laptop") {
                                window.open("/ElectronicStore/ProductPage/laptop/ASUS TUF Gaming A15.php")
                            } else if (x === "Asus keyboard") {
                                window.open("/ElectronicStore/ProductPage/KeyBoard/Asus ROG Strix Keyboard.php")
                            } else if (x === "Asus headphones") {
                                window.open("/ElectronicStore/ProductPage/HeadPhones/Asus ROG Strix Fusion 500.php")
                            } else if (x === "EKSA headphones") {
                                window.open("/ElectronicStore/ProductPage/HeadPhones/EKSA Stereo Headset.php")
                            } else if (x === "eksa headphones") {
                                window.open("/ElectronicStore/ProductPage/HeadPhones/EKSA Stereo Headset.php")
                            } else if (x === "Zebronics headphones") {
                                window.open("/ElectronicStore/ProductPage/HeadPhones/Zebronics Zeb-Thunder.php")
                            } else if (x === "zebronics headphones") {
                                window.open("/ElectronicStore/ProductPage/HeadPhones/Zebronics Zeb-Thunder.php")
                            } else if (x === "Freezer") {
                                window.open("/ElectronicStore/ProductPage/Freezer/Blue Star 401 L Double Door Standard Deep Freezer.php")
                            } else if (x === "freezer") {
                                window.open("/ElectronicStore/ProductPage/Freezer/Blue Star 401 L Double Door Standard Deep Freezer.php")
                            } else if (x === "LG AC") {
                                window.open("/ElectronicStore/ProductPage/AC/LG 1.5 Ton 5 Star Wi-Fi Inverter Window.php")
                            } else if (x === "lg ac") {
                                window.open("/ElectronicStore/ProductPage/AC/LG1.5Ton5StarInverterSplitAC.php")
                            } else if (x === "Lloyd AC") {
                                window.open("/ElectronicStore/ProductPage/AC/Lloyd 1 Ton 3 Star .php")
                            } else if (x === "Panasonic AC") {
                                window.open("/ElectronicStore/ProductPage/AC/Panasonic 2 Tons.php")
                            } else if (x === "panasonic AC") {
                                window.open("/ElectronicStore/ProductPage/AC/Panasonic 2 Tons.php")
                            } else if (x === "Whirlpool AC") {
                                window.open("/ElectronicStore/ProductPage/AC/Whirlpool 1.5 Ton 3 Star .php")
                            } else if (x === "whirlpool AC") {
                                window.open("/ElectronicStore/ProductPage/AC/Whirlpool 1.5 Ton 3 Star .php")
                            }

                            if (x === "Infinix phone") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Infinix Smart 5.php")
                            }

                            if (x === "infinix phone") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Infinix Smart 5.php")
                            }

                            if (x === "infinix") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Infinix Smart 5.php")
                            } else if (x === "Iphone 11") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/iphone11.php")
                            } else if (x === "iphone 11") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/iphone11.php")
                            } else if (x === "Iphone 12 pro max") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/iphone12promax.php")
                            } else if (x === "iphone 12 pro max") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/iphone12promax.php")
                            } else if (x === "iphone 12") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/iphone12promax.php")
                            } else if (x === "OPPO phone") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/OPPO A74 5G.php")
                            } else if (x === "Oppo phone") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/OPPO A74 5G.php")
                            } else if (x === "OPPO phones") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/OPPO A74 5G.php")
                            } else if (x === "OPPO phones") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/OPPO A74 5G.php")
                            } else if (x === "Realme Pro") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/realme nazro 30 Pro.php")
                            } else if (x === "Realme pro") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/realme nazro 30 Pro.php")
                            } else if (x === "Realme phone") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/realme nazro 30 Pro.php")
                            } else if (x === "Redmi phone") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Redmi Note 10S.php")
                            } else if (x === "Redmi phones") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Redmi Note 10S.php")
                            } else if (x === "redmi phones") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Redmi Note 10S.php")
                            } else if (x === "Samsung phone") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Samsung Galaxy M31s.php")
                            } else if (x === "samsung phone") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Samsung Galaxy M31s.php")
                            } else if (x === "samsung phones") {
                                window.open("/ElectronicStore/ProductPage/Smartphones/Samsung Galaxy M31s.php")
                            }

                        }
                    </Script>

                </form>
                <div class="nav-items">
                    <div class="menuitmes-container">
                        <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
                        <div class="meulist">
                            <a href="logout.php">
                                <lord-icon title="Log out" class="logout-icon" src="https://cdn.lordicon.com/koyivthb.json" trigger="hover" colors="primary:#00ffc8,secondary:#ffffff" style="width:50px;height:50px">
                                </lord-icon>
                            </a>
                            <a href="policy/termsNcond.php">
                                <lord-icon title="Terms And Conditions" class="terms-icon" src="https://cdn.lordicon.com/nocovwne.json" trigger="hover" colors="primary:#00ffc8,secondary:#ffffff" style="width:50px;height:50px">
                                </lord-icon>
                            </a>
                            <a href="mycart.php">
                                <lord-icon title="Cart" class="cart-icon" src="https://cdn.lordicon.com/slkvcfos.json" trigger="hover" colors="primary:#00ffc8,secondary:#ffffff" style="width:50px;height:50px">
                                </lord-icon>
                            </a>
                            <a href="profile.php">
                                <lord-icon title="Profile" class="Profile-icon" src="https://cdn.lordicon.com/dxjqoygy.json" trigger="hover" colors="primary:#00ffc8,secondary:#ffffff" style="width:50px;height:50px">
                                </lord-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php include "MainPageimageslider.php"; ?>
    <?php include "card1.php"; ?>
    <?php include "card2.php"; ?>
    <?php include "productslider.php"; ?>
    <?php include "MainPageFooter.php"; ?>
</body>
<script src="Javascripts/categorymenu.js"></script>
<script src="Javascripts/ProductSlider.js"></script>
<script src="Javascripts/backtotopbutton.js"></script>

</html>
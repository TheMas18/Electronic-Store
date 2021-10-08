<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/ProductPageCss/PComHeader.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Css/cart.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Css/cartcss/purchasebuttonanimation.css">

</head>

<body>
    <?php include('cartheader.php'); ?>
    <div class="container">
        <div class="row">
            <div class="carts-title">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-9 table-cart">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center cart-row-items">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                echo
                                "<tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td><input type='number' class='text-center iquantity' onchange='subTotal()' value='$value[Quantity]' min='1' max='10'></td>
                                    <td class='itotal'></td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                            </tr>
                            ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="rounded p-4 amount-box">
                    <h4>Grand Total:</h4>
                    <h5 class="text-right" id="gtotal"></h5><br>
                </div>
                <form>

                    <div class="makepurchasebutton" id="paynow">
                        <div class="container-purchase-button">
                            <div class="tick">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
            this.amt = gt;
        }
        subTotal();

        let makepurchasebutton = document.querySelector('.makepurchasebutton');
        let buttonText = document.querySelector('.tick');

        const tickMark = "<svg width=\"58\" height=\"45\" viewBox=\"0 0 58 45\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"#fff\" fill-rule=\"nonzero\" d=\"M19.11 44.64L.27 25.81l5.66-5.66 13.18 13.18L52.07.38l5.65 5.65\"/></svg>";

        buttonText.innerHTML = "Submit";

        makepurchasebutton.addEventListener('click', function() {

            if (buttonText.innerHTML !== "Submit") {
                buttonText.innerHTML = "Submit";
            } else if (buttonText.innerHTML === "Submit") {
                buttonText.innerHTML = tickMark;
            }
            this.classList.toggle('button__circle');
        });
    </script>
</body>
<script src="Javascripts/purchasebuttonanimation.js"></script>
<!-- <button id="paynow">Pay</button> -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var options = {
        "key": "rzp_test_Sxdk9lopMD6apk",
        "amount": amt * 100,
        "currency": "INR",
        "name": "Gadget Zone",
        "description": "Test Transaction",
        "image": "images/logos/cp2.png",
        "handler": function(response) {
            console.log(response);
        }
    };
    var rzp1 = new Razorpay(options);
    document.getElementById('paynow').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>

</html>
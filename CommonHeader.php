<?php
session_start();

?>
<?php
$count = 0;
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
}
?>
<link rel="stylesheet" href="Css/ProductPageCss/PComHeader.css">

<div class="header">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <a href="../../main.php" style="text-decoration: none;">
        <h1 class="acps3">Gadget Zone</h1>
    </a>
    <ul>
        <li><a href="../../profile.php">Profile</a></li>
        <li><a href="../../mycart.php">Cart (<?php echo $count; ?>)</a></li>
        <li><a href="../../logout.php">LogOut</a></li>
        <li><a href="javascript:history.go(-1)" style="cursor: pointer;">Back</a></li>
    </ul>


</div>
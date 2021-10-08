<?php
session_start();
// if (isset($_SESSION["photo"])) {
//     header("Location: main.php");
// }

include 'config.php';
if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));
    if ($password === $cpassword) {

        $photo_name = $_FILES["photo"]["name"];
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;
        if ($photo_size > 5242880) {
            echo "<script>alert('photo is very big.maximun photo uploading size is 5mb');</script>";
        } else {

            $sql = "UPDATE users  SET username='$username', password='$password', photo='$photo_new_name' WHERE  id='{$_SESSION['user_id']}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('profile updated successfully');</script>";
                move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
            } else {
                echo "<script>alert('profile cant update');</script>";
            }
        }
    } else {
        echo "<script>alert('password not match.please try again');</script>";
    }
}
echo $_SESSION["user_id"];
echo $_SESSION["login_user"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="Css/ProfileCss/Pheadermenu.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="Css/Profile.css" />
    <link rel="stylesheet" href="Css/ProfileCss/Puser.css" />
</head>

<body>
    <?php require "profileHeader.php"; ?>
    <?php require "profilenavbar.php"; ?>

    <section class="wrapper">

        <form action="" method="post" enctype="multipart/form-data">
            <?php



            $sql = "SELECT * FROM users WHERE  id='{$_SESSION['user_id']}'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {


            ?>
                    <div class="container-img">
                        <div class="inputbox1">
                            <label for="photo">
                                <img src="uploads/<?php echo $row["photo"]; ?>" class="img-thumbnail" alt="select a photo" />
                            </label>

                            <input type="file" accept="image/*" id="photo" name="photo" style="display: none;  visibility: none" onchange="getImage(this.value);" />
                        </div>
                    </div>
                    <div class="container-inputboxes">
                        <div class="inputbox">

                            <input type="text" id="username" name="username" placeholder="username" value="<?php echo $row['username']; ?>" required>
                        </div>
                        <div class="inputbox">

                            <input type="email" id="email" name="email" placeholder="email address" value="<?php echo $row['email']; ?>" disabled required>
                        </div>
                        <div class="inputbox">

                            <input type="password" id="password" name="password" placeholder="password" value="<?php echo $row['password']; ?>" required>
                        </div>
                        <div class="inputbox">

                            <input type="password" id="cpassword" name="cpassword" placeholder="confirm pasword" value="<?php echo $row['password']; ?>" required>
                        </div>

                <?php
                }
            }
                ?>
                <div class="inputbox">
                    <button type="submit" name="submit" class="btn">
                        update profile
                    </button>
                </div>
                    </div>
        </form>
        <script type="text/javascript">
            function getImage(imagename) {
                var newimg = imagename.replace(/^.*\\/, "");
                $("#photo").html(imagename);
            }
        </script>
    </section>


</body>

</html>
<?php
session_start();
//report all PHP arrors
error_reporting(E_ALL);

if (isset($_POST['update'])) {
    include 'config.php';
    $usernewname = $_POST['username'];
    $usernewemail = $_POST['email'];
    $usernewpassword = $_POST['password'];
    $userimage = $_FILES['userimage'];



    if (!empty($usernewname) && !empty($usernewemail)) {




        $imageName = $userimage['name'];
        $fileType = $userimage['type'];
        $fileSize = $userimage['size'];
        $fileTmpName = $userimage['tmp_name'];
        $fileError = $userimage['error'];


        $fileImageData = explode('/', $fileType);
        $fileExtension = $fileImageData[count($fileImageData) - 1];

        if ($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg') {


            //processimage
            if ($fileSize < 50000000) {

                $fileNewName = "../neh2/htdocs/userImage/images/" . $imageName;

                $uploaded = move_uploaded_file($fileTmpName, $fileNewName);
                if ($uploaded) {
                    $loggedInUser = $_SESSION['username'];
                    $sql = "UPDATE users SET username='$usernewname' , email='$usernewemail' , userimage='$imageName'  WHERE username='$loggedInUser'";
                    $results = mysqli_query($conn, $sql);
                    header('Location:../ElectronicStore/profile.php?success=userupdated');
                    exit;
                }
            } else {
                header('Location:../ElectronicStore/profile.php?error=envalidFileSize');
                exit;
            }
            var_dump($fileSize);
            exit();
        } else {
            header('Location:../ElectronicStore/profile.php?error=envalidFileType');
            exit;
        }
    }
} else {
    header('Location:../ElectronicStore/profile.php?error=emptynameandemail');
    exit;
}

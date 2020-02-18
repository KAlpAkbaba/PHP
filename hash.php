<?php
include "connection.php";
$email = $_GET["email"];
$hash = $_GET["hash"];
$key = $_POST["key"];
$password = $_POST["password"];
$rpassword = $_POST["password-repeat"];
$result = mysqli_query($open,"SELECT `key` FROM `forgetpassword` WHERE `key` ='".$key."' AND `hash` = '".$hash."'");
$row = mysqli_fetch_array($result);
$row2 = $row["key"];
if (!empty($password) and !empty($rpassword)) {
    if ($password === $rpassword) {
        if ($row2 === $key) {
            $update = mysqli_query($open,"UPDATE `users` SET `password` = '".$password."' WHERE `e-mail` = '".$email."'");
            echo "Your Password Succesfully Changed...";
            echo "<br>";
            ?>
            <a href="adminpanel.php">Back</a>
            <?php
        }
        else {
            echo "Your Key Is Wrong ...";
        }
    }
    else {
        echo "Password Are Not Same ...";
    }
}
else {
    echo "Password Can't Be Empty ...";
}

?>

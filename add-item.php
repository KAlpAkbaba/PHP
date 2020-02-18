<?php
session_start();
if (isset($_SESSION['e-mail'])) {
include "connection.php";
$status = 0;
$createtime = time();
$updatetime = time();
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$password = $_POST["password"];
if (!empty($name) and !empty($surname) and !empty($email) and !empty($password)) {
    $result = mysqli_query($open, "INSERT INTO `users` (`name`, `surname`, `e-mail`, `password`, `status`, `create-time`, `update-time`) VALUES ('".$name."', '".$surname."', '".$email."', '".$password."', ".$status.", ".$createtime.", ".$updatetime.")");
    echo "New User Succesfully Added";
    ?>
    <br>
    <a href="index.php">Back</a>
    <?php
    if ($result === false) {
        exit ("Mysqli_query Error");
    }
}
else {
    if (empty($name)) {
        echo "Name can'be blank...";
    }
    elseif (empty($surname)) {
        echo "Surname can'be blank...";
    }
    elseif (empty($email)) {
        echo "Email can'be blank...";
    }
    elseif (empty($password)) {
        echo "Password can'be blank...";
        }
        ?>
        <br>
        <a href="new-item.php">Back</a>
        <?php
}
}
?>

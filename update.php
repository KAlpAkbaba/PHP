<?php
include "connection.php";
session_start();
if (isset($_SESSION['e-mail'])) {
if (isset($_GET["id"]) === false) {
    exit ("Id Not Found");
}
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$password = $_POST["password"];
$updatetime = time();

if (!empty($name) and !empty($surname) and !empty($email) and !empty($password)) {
    $result = mysqli_query($open, "UPDATE `users` SET `name` = '".$name."', `surname`='".$surname."', `e-mail`= '".$email."', `password`= '".$password."', `update-time`='".$updatetime."' WHERE `id` = ".$_GET["id"]."");
    if ($result === false) {
        exit("Mysqli_query Error");
    }
    echo "Update Succesfully Completed.";
    ?>
    <br>
    <a href="edit.php?id=<?php echo $_GET['id'];?>">Back</a>
    <?php
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
        <a href="edit.php?id=<?php echo $_GET['id'];?>">Back</a>
        <?php

}
    }
else {
    echo "Authorization Error";
}



?>

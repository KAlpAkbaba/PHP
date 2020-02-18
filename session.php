<?php
include "connection.php";
session_start();
$username = $_POST["email"];
$password = $_POST["password"];
$result = mysqli_query($open,"SELECT * FROM `users` WHERE `e-mail`='$username'");
$result2 = mysqli_query($open,"SELECT `password` FROM `users` WHERE `e-mail`='$username'");
$cresult = $result;
$cresult2 = mysqli_fetch_array($result2);
$row = $cresult2["password"];
if (mysqli_num_rows($result) === 1) {
    if ($row === $password) {
        $_SESSION['e-mail'] = $_POST["email"];
        echo "Login Is Completed";
        ?>
        <br>
        <a href="index.php">Back</a>
        <?php
    }
    else {
        echo "Password Is Wrong";
        ?>
        <br>
        <a href="adminpanel.php">Back</a>
        <?php
    }

}
else {
    echo "Email Is Wrong";
    ?>
    <br>
    <a href="adminpanel.php">Back</a>
    <?php
}

?>

<?php
session_start();
if (isset($_SESSION['e-mail'])) {
include "connection.php";
$result = mysqli_query($open, "DELETE FROM `users` WHERE `id`= ".$_GET["id"]."");
if ($result === false) {
    exit("Msqli Query Error");
}
echo "Your Account Succesfully Deleted";
?>
<br>
<a href="index.php">Back</a>
<?php
}
else {
    echo "Authorization Error";
}
?>

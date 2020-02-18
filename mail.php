<?php
include "connection.php";
$mail = $_POST["email"];
$userid = mysqli_query($open,"SELECT `id` FROM `users` WHERE `e-mail` = '".$mail."'");
$row = mysqli_fetch_array($userid);
$row2 = $row["id"];
$hash = md5($mail);
$key = rand(1000,9999);
$updatetime = time();
$add = mysqli_query($open,"INSERT INTO `forgetpassword` (`userid`, `hash`, `key`, `update-time`) VALUES ('$row2', '".$hash."', '$key', '$updatetime')");
if ($add === false) {
    echo "Query Error";
}
$result = mysqli_query($open,"SELECT * FROM `users` WHERE `e-mail`='$mail'");
if (mysqli_num_rows($result) === 1) {
    echo "User Is Inside Database";
    ?>
    <br>
    <a href="changepassword.php?hash=<?php echo "$hash&";?>email=<?php echo "$mail";?>">Change Password</a>
    <?php
}
else {
    echo "We cound't find user our database";
}
?>

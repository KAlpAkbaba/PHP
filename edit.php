<?php
session_start();
if (isset($_SESSION['e-mail'])) {
include "connection.php";
if (isset($_GET["id"]) === false) {
    exit("Id Not Found");
}
$result = mysqli_query($open, "SELECT * FROM `users` WHERE `id` = ".$_GET["id"]."");
if ($result === false) {
    exit("Mysqli Query Error");
}
$n = mysqli_affected_rows($open);
if ($n !== 1) {
    exit("User Not Found");
}
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<form action="update.php?id=<?php echo $_GET["id"]; ?>" method="post">
    <table border="1">
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name" value="<?php echo $row["name"]; ?>">
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
                <input type="text" name="surname" value="<?php echo $row["surname"];?>">
            </td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>
                <input type="text" name="email" value="<?php echo $row["e-mail"];?>">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="text" name="password" value="<?php echo $row["password"];?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="update">
            </td>
        </tr>
    </table>
    <br>
    <a href="index.php">Back</a>
</form>
<?php
}
else {
    echo "Authorization Error";
}
?>

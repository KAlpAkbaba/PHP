<?php
session_start();
if (isset($_SESSION['e-mail'])) {
?>
<form action="add-item.php" method="post">
    <table border="1">
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>Surname</td>
            <td>
                <input type="text" name="surname"></input>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email"></input>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password"></input>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Register"></input>
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

<?php
$hash = $_GET["hash"];
$mail = $_GET["email"];
?>
<form action="hash.php?hash=<?php echo "$hash&";?>email=<?php echo "$mail";?>" method="post">
    <table border="1">
        <tr>
            <td>New Password</td>
            <td><input type="text" name="password"></input></td>
        </tr>
        <tr>
            <td>New Password Repeat</td>
            <td><input type="text" name="password-repeat"></input></td>
        </tr>
        <tr>
            <td>Key</td>
            <td><input type="text" name="key"></input></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit"></input></td>
        </tr>
    </table>
</form>
<a href="forgetpassword.php">Back</a>

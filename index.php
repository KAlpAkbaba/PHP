<?php
include "connection.php";
session_start();
if (isset($_SESSION['e-mail'])) {
$result = mysqli_query($open, "SELECT * FROM `users`");
if ($result === false) {
    exit("MSQL Query Error");
}
$i = mysqli_affected_rows($open);
if ($i === 0) {
    exit("User Not Found");
}
?>
<a href="new-item.php">New Item</a>
<table border="2">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>SURNAME</td>
        <td>E-MAIL</td>
        <td>PASSWORD</td>
        <td>STATUS</td>
        <td>CREATE-TIME</td>
        <td>UPDATE-TIME</td>
        <td></td>
        <td><a href="logout.php?logout">Logout</a></td>
    </tr>
    <?php
    foreach ($result as $row) {
    ?>
    <tr>
        <td>
            <?php echo $row["id"]; ?>
        </td>
        <td>
            <?php echo $row["name"]; ?>
        </td>
        <td>
            <?php echo $row["surname"]; ?>
        </td>
        <td>
            <?php echo $row["e-mail"]; ?>
        </td>
        <td>
            <?php echo $row["password"]; ?>
        </td>
        <td>
            <?php echo $row["status"]; ?>
        </td>
        <td>
            <?php echo $row["create-time"]; ?>
        </td>
        <td>
            <?php echo $row["update-time"]; ?>
        </td>
        <td>
            <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
        </td>
        <td>
            <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
        </td>
    </tr>
    <?php
    }
    }
    else {
        echo "Authorization Error";
    }
    ?>


</table>

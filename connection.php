<?php
$open = mysqli_connect("127.0.0.1", "root", "root-password", "db",3306);
if ($open === false) {
    exit("Db Error");
}
?>

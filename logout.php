<?php
session_start();
if (isset($_GET['logout'])){
    session_destroy();
}
?>
<a href="adminpanel.php">Logout</a>

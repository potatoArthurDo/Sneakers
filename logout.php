<?php
session_start();
unset($_SESSION["logined"]);
session_destroy();
header("Location: index.php");
?>

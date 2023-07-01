<?php
if(isset($_SESSION["logined"]) == false || $_SESSION["logined"] == "")
{
?>
<h3>Chưa đăng nhập</h3>
<a href="Login.php">Mời đăng nhập</a>
<?php
die("<h2> Kết thúc </h2>");
}
?>
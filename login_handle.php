<?php
session_start();
require_once("tb_user_info.php");
if(isset($_REQUEST["b1"]) == FALSE)
    die("<h3> Chưa nhập form </h3>");

$email = $_REQUEST["email"];
$password= $_REQUEST["password"];

$ketqua = CheckLogin($email,$password);
if($email == "aa@gmail.com" && $password == "456789")
{
    $_SESSION["logined"] = "admin";
    $_SESSION["full_name"]=$ketqua["full_name"];
    header("Location: admin.php");
}
else if($ketqua == true)
{
    $_SESSION["full_name"]=$ketqua["full_name"];
    $_SESSION["ID"]=$ketqua["ID"];
    $_SESSION["logined"] = "OK";
    header("Location: userPage.php");
}
else {
    $_SESSION["logined"] = "";
    echo "<h3> Can't find user. </h3>";
    echo "<h3> Try again </h3>";
    echo "<a href = \"login.php\"> Login</a>";
}
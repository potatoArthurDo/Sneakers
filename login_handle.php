<?php
session_start();
require_once("tb_user_info.php");
if(isset($_REQUEST["b1"]) == FALSE)
    die("<h3> Chưa nhập form </h3>");

$email = $_REQUEST["email"];
$password= $_REQUEST["password"];

$ketqua = CheckLogin($email,$password);
if($email == "athur4c@gmail.com" && $password == "123456")
{
    $_SESSION["logined"] = "OK";
    header("Location: admin.php");
}
if($ketqua == true)
{
    $_SESSION["full_name"]=$ketqua["full_name"];
    $_SESSION["image"]=$ketqua["image"];
    $_SESSION["logined"] = "OK";
    header("Location: userPage.php");
}
else {
    $_SESSION["logined"] = "";
    echo "<h3> Can't find user. </h3>";
    echo "<h3> Try again </h3>";
    echo "<a href = \"login.php\"> Login</a>";
}
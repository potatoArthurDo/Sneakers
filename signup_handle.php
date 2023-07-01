<?php
require_once("tb_user_info.php");

if(isset($_REQUEST["b1"]) == FALSE)
    die("<h3> Chưa nhập form </h3>");
$full_name = $_REQUEST["fullname"];
$password = $_REQUEST["password"];
$dob = $_REQUEST["dob"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$gender = $_REQUEST["rGender"];
$address = $_REQUEST["address"];

$ketqua = AddUser($full_name, $password, $dob, $email, $phone, $gender, $address) ;
if($ketqua == TRUE) 
    echo "<h3> THÀNH CÔNG </h3>";
else
    echo "<h3> LỖI THÊM DỮ LIỆU </h3>";  
?>
<a href="userList.php">Users</a>
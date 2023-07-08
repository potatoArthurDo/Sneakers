<?php
require_once("tb_user_info.php");
require_once("uploadFile.php");

if(isset($_REQUEST["b1"]) ==FALSE)
    die("<h3> Chưa nhập form </h3>");
$ID = $_REQUEST["ID"];
$full_name = $_REQUEST["fullname"];
$password = md5($_REQUEST["password"]);
$dob = $_REQUEST["dob"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$gender = $_REQUEST["rGender"];
$address = $_REQUEST["address"];
$image = UploadFile("image", "images");

$ketqua = updateUser($ID, $full_name, $password, $dob, $email, $phone, $gender, $address,$image) ;
if($ketqua == TRUE) {
    echo "<h3> THÀNH CÔNG </h3>";
    echo "<a href=\"login.php\">Return to Login</a>";
}
else {
    echo "<h3> LỖI THÊM DỮ LIỆU </h3>";  }
?>
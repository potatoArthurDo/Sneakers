<?php
require_once("tb_user_info.php");
require_once("uploadFile.php");

if(isset($_REQUEST["b1"]) == FALSE)
    die("<h3> Chưa nhập form </h3>");
$full_name = $_REQUEST["fullname"];
$password = $_REQUEST["password"];
$dob = $_REQUEST["dob"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$gender = $_REQUEST["rGender"];
$address = $_REQUEST["address"];
$image = UploadFile("image", "images");

$ketqua = AddUser($full_name, $password, $dob, $email, $phone, $gender, $address, $image) ;
if($ketqua == TRUE)  {
    echo '<script>alert("SIGN UP SUCCESSFULLY")
            window.location.href="login.php"</script>';
}
else {
    echo "<h3> LỖI THÊM DỮ LIỆU </h3>";  
}
?>

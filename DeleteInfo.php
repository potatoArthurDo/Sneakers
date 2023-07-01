<?php
require_once("tb_user_info.php");

if(isset($_REQUEST["ID"]) ==FALSE)
    die("<h3> Chưa có ID </h3>");
$ID = $_REQUEST["ID"];
if($ID =="" || is_numeric($ID) == false)
    die("<p> ID không được rỗng và phải là số <p>");
$ketqua = DeleteUser($ID);
if($ketqua == TRUE) 
    echo "<h3> THÀNH CÔNG </h3>";
else
    echo "<h3> LỖI XÓA DỮ LIỆU </h3>";  
?>
<a href="userList.php">Users</a>
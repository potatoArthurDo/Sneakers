<?php
require_once("tb_products.php");

if(isset($_REQUEST["ID"]) ==FALSE)
    die("<h3> Chưa có ID </h3>");
$ID = $_REQUEST["ID"];
if($ID =="" || is_numeric($ID) == false)
    die("<p> ID không được rỗng và phải là số <p>");
$ketqua = DeleteProduct($ID);
if($ketqua == TRUE)  {
    echo '<script>alert("DELETE PRODUCT SUCCESSFULLY")
        window.location.href="admin.php"</script>';
}
else {
    echo "<h3> LỖI XÓA DỮ LIỆU </h3>";  
}
?>
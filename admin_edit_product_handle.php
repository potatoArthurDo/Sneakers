<?php
require_once("uploadFile.php");
require_once("tb_products.php");
if(isset($_REQUEST["b1"]) ==FALSE)
    die("<h3> Chưa nhập form </h3>");
$ID = $_REQUEST["ID"];
$name = $_REQUEST["add_p_name"];
$brand_name = $_REQUEST["add_p_brand_name"];
$price = $_REQUEST["add_p_price"];
$image = UploadFile("add_p_image", "images");
$detail = $_REQUEST["add_p_detail"];
$ketqua = updateProduct($ID,$name, $brand_name, $price, $image,$detail) ;
if($ketqua == TRUE)  {
echo '<script>alert("ADDING PRODUCT SUCCESSFULLY")
        window.location.href="admin_add_product.html"</script>';
}
else {
echo "<h3> LỖI THÊM DỮ LIỆU </h3>";  
}

?>
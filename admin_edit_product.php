<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Edit</title>
    <style>
        .add_product {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            
        }

        .add_product .input {
            width: 100%;
            font-size: 15px;
            margin: 80px;
            padding:5px 10px;
        }
    </style>
</head>
<body>
<h2>Add more products to database.</h2>
    <div class="add_product">
        <?php
        if(isset($_REQUEST["ID"]) ==false)
            die("<p> Chưa có ID <p>");
        $ID = $_REQUEST["ID"];
        if($ID =="" || is_numeric($ID) == false)
            die("<p> ID không được rỗng và phải là số <p>");
        require_once("tb_products.php");
        $row = getProduct($ID);
        ?>
        <form action="admin_edit_product_handle.php?ID=<?=$row["ID"]?>" enctype="multipart/form-data" method="post">
            <input type="text" name="add_p_name" placeholder="Product name" value="<?=$row["name"]?>">
            <br>
            <input type="text" name="add_p_brand_name" placeholder="Brand name" value="<?=$row["brand_name"]?>">
            <br>
            <input type="number" name="add_p_price" placeholder="Product price" value="<?=$row["price"]?>">
            <br>
            <input type="file" name="add_p_image" placeholder="Product image" value="<?=$row["image"]?>">
            <br>
            <input type="text" name="add_p_detail" placeholder="Product details" value="<?=$row["detail"]?>">
            <button type="submit" name="b1">Confirm</button>
        </form>
        <br>
    </div>
    <div> <a href="admin.php">Go back to admin page</a> </div>
</body>
</html>
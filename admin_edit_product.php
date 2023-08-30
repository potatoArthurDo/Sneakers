<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Edit</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .add_product {
            display: flex;
            justify-content: left;
            font-size: 15px;
            padding-left: 15px;
            
        }

        .add_product input {
            width: 300px;
            height: 80px;
            font-size: 15px;
            margin: 10px;
            padding:5px 10px;
        }

        .add_product button {
            width: 80px;
            height: 30px;
            background-color: maroon;
            color: white;
            margin: 10px;
            font-size: 15px;
            border-radius: 20%;
            border-color: white;
        }
    </style>
</head>
<body>
<nav>
        <div class="header">
            <a href="admin.php" class="Logo">SUNDAY</a>
                <ul class="nav">
                    <li><a href="admin.php">Home</a></li>
                    <li><h3> Hello,<?=$_SESSION["full_name"]?> </h3></li>
                    <li> <form action="logout.php"><Button> Log out</Button> </form></li>
                </ul>
        </div>
        </nav>
<h2>Edit product.</h2>
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
            <br>
            <button type="submit" name="b1">Confirm</button>
        </form>
        <br>
    </div>
</body>
</html>
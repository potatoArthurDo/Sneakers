<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNDAY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
    <div class="header">
        <a href="index.php" class="Logo">SUNDAY</a>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li> <form action="login.php"><Button> Log in</Button> </form></li>
            </ul>
    </div>
    </nav>
    <section class="header_banner">
        <h2>$neaker$unday</h2>
        <h4>Up to 70% off</h4>
    </section>
    <section class="product">
    <div class="all_pro">
        <?php
        require_once("tb_products.php");
        $rows = getListProduct();
        if ($rows == NULL)
            die("<p> LỖI CƠ SỞ DỮ LIỆU </p>");
        foreach($rows as $row)
        {
        ?>
        <div class="pro_container">
            <img src=<?=$row["image"]?> >
            <div class="des">
                <span><?=$row["brand_name"]?></span>
                <h4><?=$row["name"]?></h4>
                <h5><?=$row["price"]?></h5>
                <div>
                    <a href="login.php" class="add"><img src="images/add_circle_FILL0_wght400_GRAD0_opsz48.png" alt=""></a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>  
    </div>
        <div class="block"></div>
    </section>
    <footer class="footer">
        <div class="col">
            <div class="Logo">SUNDAY</div>
            <h4>Contact</h4>
            <p><strong>Address:</strong> xx, xxxx street, xxxx city</p>
            <p><strong>Phone:</strong> 1800-xxxx-xxxx</p>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.html">About</a>
            <a href="#">Delivery</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="contact.html">Contact Us</a>
        </div>
    </footer>
    </body>
</html>
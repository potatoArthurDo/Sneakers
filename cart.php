<?php
session_start();
require("Login_confirmed.php");

?>
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
        <a href="userPage.php" class="Logo">SUNDAY</a>
            <ul class="nav">
                <li><a href="userPage.php">Home</a></li>
                <li><a href="shop_user.php">Shop</a></li>
                <li><h3> Hello,<?=$_SESSION["full_name"]?> </h3></li>
                <li><a href="about.html">About</a></li>
                <li> <form action="logout.php"><Button> Log out</Button> </form></li>
            </ul>
    </div>
    </nav>

    <section class="cart">
        <table width = 100%>
            <thead><tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr></thead>
            <?php
            $total = 0;;
            if(!empty(($_SESSION["shoping_cart"])))
            {
                foreach($_SESSION["shoping_cart"] as $keys => $row)
                {
                    $total = $total + ($row["item_quantity"] * $row["item_price"]);
            ?>
            <tbody>
                <tr>
                    <form action="cart_handle.php" method="POST" >
                    <td><button name="remove_item" type="submit">REMOVE</button></td>
                    <td><img src=<?=$row["item_image"]?>></td>
                    <td name="item_name"><?=$row["item_name"]?></td>
                    <td>$<?=$row["item_price"]?></td>
                    <td><?=$row["item_quantity"]?> </td>
                    <td>$<?=$row["item_quantity"] * $row["item_price"]?></td>
                    </form>
                </tr>
            </tbody>
            <?php
                }
                ?>
        </table>
    </section>

    <section class="cart_total">
        <div class="subtotal">
            <h3>Cart Total</h3>
            <table><tr>
                <td>Cart Subtotal</td>
                <td>$<?php echo $total ?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$<?php echo $total ?></strong></td>
            </tr>
            </table>
            <button class="checkout"  ><a href="confirm_purchase.html">Procees to checkout</a></button>
        </div>
        
    </section>
    <?php
    }
    ?>

    <div class="block"></div>
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

<?php
session_start();
require_once("tb_products.php");
if(isset($_POST["add_to_cart"]) ) {
    $ID = $_REQUEST["ID"];
    $row = getProduct($ID);
    if(isset($_SESSION["shoping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shoping_cart"], "item_id");
        if(in_array($ID, $item_array_id))
        {
            echo '<script>alert("Item Already Added")
            window.location.href="product.php"</script>';
            
        }
        else {
            $count = count(($_SESSION["shoping_cart"]));
            $item_array = array(
                "item_id"           =>$row["ID"],
		    	'item_name'			=>$row["name"],
                'brand_name'		=>$row["brand_name"],
		    	'item_price'		=>$row["price"],
		    	'item_quantity'		=>$_REQUEST["quantity"],
                'item_image'        =>$row["image"]
            );
            $_SESSION["shoping_cart"][$count] = $item_array;
            echo '<script>alert("Item Added")
            window.location.href="cart.php"</script>';
            
        }
        }
    else{
        $item_array = array(
            "item_id"           =>$row["ID"],
		    'item_name'			=>$row["name"],
            'brand_name'		=>$row["brand_name"],
		    'item_price'		=>$row["price"],
		    'item_quantity'		=>$_REQUEST["quantity"],
            'item_image'        =>$row["image"]
        );
        $_SESSION["shoping_cart"][0] = $item_array;
        echo '<script>alert("Item Added")
        window.location.href="cart.php"</script>';
    }
}

if(isset($_POST["remove_item"]) ) {
    foreach($_SESSION["shoping_cart"] as $keys => $value) {
        if($value["item_name"] == $_POST["item_name"])
        {
            unset($_SESSION["shoping_cart"][$keys]);
            $_SESSION["shoping_cart"]= array_values($_SESSION["shoping_cart"]);
            echo '<script>alert("Item Removed")
            window.location.href="cart.php"</script>';
        }
    }
}

?>
<?php
require_once("DB.php");
function getListCart() {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "SELECT * FROM cart
            INNER JOIN products ON  Product_ID = id";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua == FALSE)
        return NULL;
    else {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
        return $rows;
    }
}

function addProductToCart($pID, $price, $image, $quantity) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "INSERT INTO cart VALUES(NULL,?,?,?,?)";
    $pdo_stm = $conn->prepare($sql);
    $data = [$pID, $price, $image, $quantity];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

function getCart($id) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "SELECT * FROM cart 
            INNER JOIN products ON  Product_ID = id WHERE ID=?";
    $pdo_stm = $conn->prepare($sql);
    $data = [$id];
    $ketqua = $pdo_stm->execute($data);
    if($ketqua==false) 
        return NULL;
    else {
        $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
        return $row;
    }
}

function DeleteItemInCart($pID) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "DELETE FROM cart WHERE Product_ID=?";
    $pdo_stm = $conn->prepare($sql);
    //$pdo_stm->bindParam(1,$ID);
    $data =[$pID];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}
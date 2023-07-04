<?php
require_once("DB.php");
function getListProduct() {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "SELECT * FROM products";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua == FALSE)
        return NULL;
    else {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
        return $rows;
    }
}

function addProduct($name, $brand_name, $price,$status, $image) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "INSERT INTO products VALUES(NULL,?,?,?,?,?)";
    $pdo_stm = $conn->prepare($sql);
    $data = [$name,$brand_name,$price,$status,$image];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

function getProduct($id) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "SELECT * FROM products WHERE ID=?";
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

function updateProduct($ID, $name, $brand_name, $price,$status, $image) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "UPDATE products
            SET name=?, brand_name=?, price=?,status=?,image=?
            WHERE ID=?";
    $pdo_stm = $conn->prepare($sql);
    $data = [$ID];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

function DeleteUser($ID) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "DELETE FROM products WHERE ID=?";
    $pdo_stm = $conn->prepare($sql);
    //$pdo_stm->bindParam(1,$ID);
    $data =[$ID];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}
?>
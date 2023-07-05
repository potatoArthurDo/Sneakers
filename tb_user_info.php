<?php
require_once("DB.php");
function getListUser() {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "SELECT * FROM userinfo";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua == FALSE)
        return NULL;
    else {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
        return $rows;
    }
}

function AddUser($full_name, $password, $dob, $email, $phone, $gender, $address,$image) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "INSERT INTO userinfo VALUES(NULL,?,?,?,?,?,?,?,?)";
    $pdo_stm = $conn->prepare($sql);
    // $pdo_stm->bindParam(1,$full_name);
    // $pdo_stm->bindParam(2,$password);
    // $pdo_stm->bindParam(3,$dob);
    // $pdo_stm->bindParam(4,$email);
    // $pdo_stm->bindParam(5,$phone);
    // $pdo_stm->bindParam(6,$gender);
    // $pdo_stm->bindParam(7,$address);
    $data=[$full_name, $password, $dob, $email, $phone, $gender, $address, $image];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;   
}

function getUser($ID) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "SELECT * FROM userinfo WHERE ID=?";
    $pdo_stm = $conn->prepare($sql);
    //$pdo_stm->bindParam(1,$ID);
    $data=[$ID];
    $ketqua = $pdo_stm->execute($data);
    if($ketqua==FALSE)
        return NULL;
    else{
        $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
        return $row;
    }
}

function updateUser($ID, $full_name, $password, $dob, $email, $phone, $gender, $address, $image) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "UPDATE userinfo 
            SET full_name=?, password=?, dob=?, email=?, phone=?, gender=?, address=?, image=?
            WHERE ID=?";
    $pdo_stm = $conn->prepare($sql);
    // $pdo_stm->bindParam(1,$full_name);
    // $pdo_stm->bindParam(2,$dob);
    // $pdo_stm->bindParam(3,$email);
    // $pdo_stm->bindParam(4,$phone);
    // $pdo_stm->bindParam(5,$gender);
    // $pdo_stm->bindParam(6,$address);
    $data =[$ID,$full_name, $password, $dob, $email, $phone, $gender, $address, $image];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}

function DeleteUser($ID) {
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "DELETE FROM userinfo WHERE ID=?";
    $pdo_stm = $conn->prepare($sql);
    //$pdo_stm->bindParam(1,$ID);
    $data =[$ID];
    $ketqua = $pdo_stm->execute($data);
    return $ketqua;
}


function CheckLogin($email, $password) {
    $conn = ConnectDB();
    $sql = "SELECT * FROM userinfo WHERE email=? AND password=? ";
    $pdo_stm = $conn->prepare($sql);
    $data = [$email, $password];
    $ketqua = $pdo_stm->execute($data);

    if($ketqua==true) {
        $n = $pdo_stm->rowCount();
        if($n>0)
            return $pdo_stm->fetch(PDO::FETCH_BOTH);
    
        else 
            return NULL;
    }
    else {
        return false;
    }
} 
?>
?>
<?php
function ConnectDB() {
    $conn = NULL;
    try{
        $conn = new PDO("mysql:host=localhost;dbname=sneakeruser","root","");
        $conn->query("SET NAMES UTF8");
    }
    catch(PDOException $ex) {
        echo "<p>" . $ex->getMessage() . "</p>";
        die ("<h3> LỖI KẾT NỐI CSDL </h3>");
    }
    return $conn;
}



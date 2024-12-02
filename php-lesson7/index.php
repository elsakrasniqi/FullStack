<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "school";

try{
     $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    // $sql="CREATE DATABASE test2";
    // $conn->exec($sql);
    // $sql="CREATE table users(id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    // username VARCHAR(255) NOT NULL,
    // password VARCHAR(255) NOT NULL)";


    //set values to be inserted
    $username = "Elsa";
    $password = password_hash("mypassword", PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(username, password) values ('$username','$password')";
    $conn->exec($sql);


    $last_id = mysql_insert_id($conn);
    echo "user is created";
}catch(Exception $e){
    echo $e->getMessage();
}
?>
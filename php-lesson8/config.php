<?php
$server = 'localhost';
$dbname = 'db';
$username = 'root';
$password = '';

try{
    $connect = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);
    // echo "database connected succesfully";
}catch(Exception $e){
    echo "something went wrong";
}
?>
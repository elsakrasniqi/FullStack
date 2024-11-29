<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "schoool";
try{
$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);

//$sql = "CREATE DATABASE test1"; //u can also just use this
//$conn->exec($sql); 
// echo "Lidhja u be me sukses.";

// $sql = "CREATE DATABASE test2";
// $conn->exec($sql);
// echo "Lidhja me db test2 u be me sukses.";

$sql = "CREATE TABLE classes(id INT(7) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), capacity INT(6))";
$conn->exec($sql);
echo "Tabela jone classes u krijua me sukses.";
}
catch(Exception $e){
echo "Lidhja jone me databaze nuk u be si duhet.";
}
?>
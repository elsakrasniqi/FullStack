<?php
include_once('config.php'); //thirrim fajllin e db
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users(name,username,email) values
    (:name, :username, :email)";
    $sqlQuery = $connect->prepare($sql);
    $sqlQuery -> bindParam(':name',$name);
    $sqlQuery -> bindParam(':username',$username);
    $sqlQuery -> bindParam(':email',$email);

    $sql->execute();
    echo "The user was added succesfully";
}
?>
<?php
include_once("config.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPassword = $_POST['password'];

    $password = password_hash($tempPassword, PASSWORD_DEFAULT);

    if(empty($name) || empty($surname) || empty($username) || 
    empty($email) || empty($password)){
        echo "mbushi te gjitha fushat!";
    }
    else{
        $sql = "SELECT username from users WHERE username = :username";
        $tempSql = $conn->prepare($sql);
        $tempSql->bindParam(":username", $username);
        $tempSql->execute();
    }
    if($tempSql->rowCount() > 0){
        echo "Username already exists";
        header("Location: signup.php");
    }
    else{
        $sql = "INSERT into users(name, surname, username, email, password) values
        (:name, :surname, :username, :email, :password )";
        $insertSql = $conn->prepare($sql);

        $insertSql->bindParam(":name", $name);
        $insertSql->bindParam(":surname", $surname);
        $insertSql->bindParam(":username", $username);
        $insertSql->bindParam(":email", $email);
        $insertSql->bindParam(":password", $password);

        $insertSql->execute();
        echo "User added succesfully";
        header("Location: login.php");

    }
}

?>
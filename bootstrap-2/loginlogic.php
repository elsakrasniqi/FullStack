<?php
include_once("config.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $tempPassword = $_POST['password'];


    if(empty($username) || empty($password)){
        echo "mbushi te gjitha fushat!";
    }  
    else{
        $sql = "SELECT * from users WHERE username = :username";

        $tempSql = $conn->prepare($sql);
        $tempSql->bindParam(":username", $username);
        $tempSql->execute();
    }

    if($tempSql->rowCount() > 0){
       $data = $tempSql->fetch();
       if(password_verify($password, $data['password'])){
       $_SESSION['username'] = $data['username'];
       header("Location: dashboard,php");
    }
    else{
       echo "Password i gabuar";
    }
}
    else{
        echo "Useri not found";
    }
}


?>
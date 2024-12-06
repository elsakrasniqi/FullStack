<?php
include_once("config.php");
$id=1;
$sql = "DELETE FROM users WHERE id=:id";
$deleteUsers = $connect->prepare($sql);
$deleteUsers->bindParam(':id', $id);
$deleteUsers->execute();

header("Location:index.php");


?>
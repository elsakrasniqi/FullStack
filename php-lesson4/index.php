<?php
//phpinfo();

// $x = "Hello";
// print_r($x);

$x =5;
echo gettype($x)."<br>";

$y =10.5;
echo gettype($y)."<br>";

$z ="Hello";
echo gettype($z)."<br>";

function displayVersion(){
    echo "This is the php version ".phpversion();
    echo "\n";
}
displayVersion();
?>
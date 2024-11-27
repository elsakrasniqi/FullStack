<?php
//phpinfo();

// $x = "Hello";
// print_r($x);

// $x =5;
// echo gettype($x)."<br>";

// $y =10.5;
// echo gettype($y)."<br>";

// $z ="Hello";
// echo gettype($z)."<br>";

// function displayVersion(){
//     echo "This is the php version ".phpversion();
//     echo "\n";
// }
// displayVersion();

function helloWorld(){
    echo "Hello World <br>";
}
helloWorld();

function sum(){
    $value = 20+30;
    echo "$value <br>";
}
sum();

function maximum($x, $y){
    if($x>$y){
        return $x;
    }else{
        return $y;
    }
}
echo maximum(20, 30);


function plotePjestueshem($num1, $num2) {
    if ($num2 == 0) {
        return fully ;
    }

    if ($num1 % $num2 == 0) {
        return "$num1 plotepjestohet me $num2.";
    } else {
        return "$num1 nuk plotepjestohet me $num2.";
    }
}

$num1 = 20;
$num2 = 4;

echo plotePjestueshem($num1, $num2);

$x=5;
function globalVariable(){
    $y=10;
    echo $x;
    echo $y;
}
echo "<br> $x"
globalVariable();

$a=20;
$b=30;

function ab(){
    global $a, $b;
    $b=$a+$b;
}
ab();
echo "<br> $b";

function staticVariable(){
    static $count=0;
    $count++;
    echo " <br> The value of count is $count <br>"
}
staticVariable();
staticVariable();

//three types of arrays in php
$sports = array('Football', 'Basketball', 'Handball');
print_r($sports). "<br>";
//ose
$sports=['Football', 'Basketball', 'Handball'];
$len = count($sports)."<br>";

//array_push($sports, 'Voleyball');
//array_pop($sports);
//array_unshift($sports, 'Tennis');
//array_shift($sports);
//var_dump($sports); //dumping info per pjesen e nje variable 
// echo "<br>" .$sports[0];
// echo end($sports)."<br>";
// echo count($sports). "<br>";
// for ($i=0; $i<$len; $i++){
//     echo $sports[$i]."<br>";
// }

$myValues =array(12,24,36,48);
var_dump(array_sum($myValues));


?>
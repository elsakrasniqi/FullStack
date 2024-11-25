<?php 

$name="Ariana";
// echo "I am Elsa";
echo "I am $name <br>"; 

$x=50;
$y=30;
// concatination me . dhe me .=
echo $x+$y ."<br>";
echo $x-$y ."<br>";
echo $x/$y ."<br>";
echo $x*$y ."<br>";
$a = "Elsa";
$b = "Krasniqi";
$c = $a.$b ."<br>";
echo "$c \n";

$message = "Hello";
$message .= "World";
echo $message. "<br>";

$the_string = "Elsa   Krasniqi";
//me i numeru karakteret me strlen
echo strlen($the_string)."<br>"; 

//me i numeru fjalet ne ate string me str_word_count
echo str_word_count($the_string)."<br>";                                                  

//me i zev fjalet me nje fjale tjeter me str_replace
echo str_replace("Krasniqi", "Ma e mira", $the_string)."<br>";

//me e reverse stringun me strrev
echo strrev($the_string)."<br>";
?>
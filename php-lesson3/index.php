<?php
// $num = 20;
// if($num<18){
//     echo "$num is  less than 0.";
// }else{
//     echo "$num is bigger than 0.";
// }

// $age = 13;
// if (($age>12)&&($age<20)){
//     echo "You are a teenager.";
// }

// $number = 2;
// if($number<0){
//     echo "The value of the number is a negative value.";
// }elseif($number == 0){
//     echo "The value of the number is equal to 0.";
// }else{
//     echo "The value of the number is a positive value.";
// }
$day = "Wednesday";
switch($day){
    case 'Monday':
    echo "Today is Monday";
    break;
    case 'Tuesday':
    echo "Today is Tuesday";
    break;
    case 'Wednesday':
    echo "Today is Wednesday";
    break;
    case 'Thursday':
    echo "Today is Thursday";
    break;
    case 'Friday':
    echo "Today is Friday";
    break;
    case 'Saturday':
    echo "Today is Saturday";
    break;
    case 'Sunday':
    echo "Today is Sunday";
    break;
    default:
    echo "Invalid day";
    break;
}

?>
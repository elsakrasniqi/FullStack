<html>
    <head>
<style>
    table{
        width:50%;
        border-collapse:collapse;
    }
    th,td{
        padding:30px;
        text-align:left;
        border:1px solid;
    }
    th{
        background-color:lightblue;
        font-weight:bold;
    }
</style>
    </head>

<body>
    <table border = "1">
        <tr>
            <th>Brand</th>
            <th>Origin</th>
            <th>Year</th>
</tr>
</table>
</body>
</html>



<?php
//multidimensional arrays
$cars=array(
    array("BMW", "Germany", 2020),
    array("Mercedes", "France", 2017),
    array("Audi", "Italy", 2024)
);
// echo $cars[0][0]. " - " .$cars[0][1]. ", " .$cars[0][2]. "<br>";
// echo $cars[1][0]. " - " .$cars[1][1]. ", " .$cars[2][2]. "<br>";
// echo $cars[2][0]. " - " .$cars[2][1]. ", " .$cars[2][2]. "<br>";

for($row=0; $row<3; $row++){
    echo "<tr>";
for($col=0; $col<3; $col++){
    echo "<td>" .$cars[$row][$col] . "</td>";
}
echo "</tr>";
}
echo "</table>";


$array = array(
    array(1,2,3),
    array(1,2,3),
    array(1,2,3)
);

for($i=1; $i<4; $i++){
    for($j=1; $j<4; $j++){
        echo "Array $i, Elements: $j <br> ";
    }
}

//associative arrays
$grade = array(
    "Math" =>"3",
    "Art" =>"4",
    "History" =>"5",
    "Music" =>"4"
);
echo "Math Grade is".$grade['Math'];

foreach($grade as $subject => $grade){
    echo "Subject: " .$subject. "Grade: " .$grade;
    echo "<br>";
}
?>
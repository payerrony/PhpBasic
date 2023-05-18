<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

// $array= [1,2,3,4,5];
// print_r(array_slice($array,-2,2));


function sum($a,$b){
    echo "Sum Of A & B Is=".$a+$b;
}




sum($c=40,$s);

echo "<br>";

function sum_to_no($n){
    $sum=0;
    for($i=0;$i<$n;$i++){
        $sum +=$i;
    }
    // echo $sum;

     return $sum;
}


$n=50;

$a=sum_to_no($n);


echo $a;

echo "<br>";




function threeNumberSum($a,$b,$c=40){
    return $a+$b+$c;
}



//echo threeNumberSum($a=10,$b=20,$c=70);







function displayNumber($n){

    if($n<=10){
        echo "$n <br>";
    
    displayNumber($n+1);
    }
}
displayNumber(1);


?>


</body>
</html>
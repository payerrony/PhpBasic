<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    

<?php
$str = "hello world";
$freq = array();

// Loop through each character in the string
//for ($i = 0; $i < strlen($str); $i++) {


  //  if (isset($freq[$str[$i]])) {
      //  $freq[$str[$i]]++;
   // }
   // else {
    //$freq[$str[$i]] = 1;
   // }   
//}
// Output the frequency of each character
//foreach ($freq as $char => $count) {
 //   echo $char . " occurs " . $count . " times.";
  //  echo "<br>";
//}



$arr = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$arr2 =['hello','world','sucks'];




foreach($arr as $key => $value){

    echo "Key-".$key."-Value -".$value;
    echo "<br>";
}

?>

</body>
</html>
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
    
            
    $str ="10005001#1##1230";


    $data = explode('##',$str);

    $data2= explode("#",$data[0]);

    echo $data2[0];
    echo "<br>";
    echo $data2[1];


    //impolde Join array elements with a string
    $array = ['lastname', 'email', 'phone'];

    $str1 ="234";

    $str2 ="asdf";

   echo $str3 = $str1."##".$str2;

    //echo  implode("##", $array);









    
    
    ?>
</body>
</html>
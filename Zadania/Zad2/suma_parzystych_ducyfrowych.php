<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=0;
    $b=0;
    for($a;$a<100;$a++){
     if($a > 9 && $a % 2 == 0){
 echo $a;
 if($a < 98){
 echo " | ";}
 $b=$b+$a;

     }
    }
    echo"<br>";
    echo"suma powyzszych liczb jest rowna ".$b;
    ?>
</body>
</html>
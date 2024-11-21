<?php
include_once 'MasaGestosc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $r=5;
        $s="gips";
        $s1="rtęć";
        $s2="złoto";
        $s3="woda";
                
        $DodawanieObj = new obliczenia($r,$s);
?>

<ol type="I">
    <li>
        Masa kulki <strong>gipsu</strong> o promieniu <u><?=$r?>cm</u>: <mark><?=$DodawanieObj->masa()?> kg</mark>
    </li>
    <li>
        <?php
        $DodawanieObj = new obliczenia($r,$s1);
        ?>
        Masa kulki <strong>rtęci</strong> o promieniu <u><?=$r?>cm</u>: <mark><?=$DodawanieObj->masa()?> kg</mark>
    </li>
    <li>
        <?php
        $DodawanieObj = new obliczenia($r,$s2);
        ?>
        Masa kulki <strong>złota</strong> o promieniu <u><?=$r?>cm</u>: <mark><?=$DodawanieObj->masa()?> kg</mark>
    </li>
    <li>
        <?php
        $DodawanieObj = new obliczenia($r,$s3);
        ?>
        Masa kulki <strong>wody</strong> o promieniu <u><?=$r?>cm</u>: <mark><?=$DodawanieObj->masa()?> kg</mark>
    </li>
</ol>

</body>
</html>
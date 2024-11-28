<?php
include_once "stozek.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stożek</title>
    <style>
        body{
            text-align: center;
            background-color: lightpink;
            color: darkmagenta;
            font-size: 50px;
            font-family: Consolas;
            padding-top: 100px;
            padding-bottom: 100px;
            padding-left: 0;
            padding-right: 0;
        }
        div{
            display : inline-block;
            border-top: 3px solid  magenta;
            border-bottom: 3px solid magenta;
        }
    </style>
</head>
<body>
<?php
$r=5;
$h=50;
$stozek = new stozek($r, $h);
?>
<div>
<p>Stożek</p>
<p>Promień: <?= $r ?> dm</p>
<p>Wysokość: <?= $h ?> dm</p>
<p>Pole: P = <?= number_format($stozek->PoleCalkowite(),2,","," " ); ?> dm<sup>2</sup></p>
<p>Objętość: R = <?= number_format($stozek->Objetosc(),2,","," " ); ?> dm<sup>3</sup></p>
</div>
</body>
</html>


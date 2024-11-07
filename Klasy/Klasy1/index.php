<?php
include_once('Arytmetyka.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arytmetyka</title>
    <style>
        ul{
            background-color: cyan;
            font-size: 20px;
        }
    </style>
</head>
<body>
<?php
$obj = new Arytmetyka(0.5,0);
?>
<ul type="square">
    <li>Suma liczb <b><?= $obj->liczbaA ?></b> i <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->suma() ?></b></li>
    <li>Różnica liczb <b><?= $obj->liczbaA ?></b> i <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->roznica() ?></b></li>
    <li>Iloczyn liczb <b><?= $obj->liczbaA ?></b> i <b><?= $obj->liczbaB ?></b> jest równy <b><?= $obj->iloczyn() ?></b></li>
    <li>Iloraz liczb <b><?= $obj->liczbaA ?></b> i <b><?= $obj->liczbaB ?></b> wynosi <b><?= $obj->iloraz() ?></b></li>
    <li>Reszta z dzielenia liczby <b><?= $obj->liczbaA ?></b> przez <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->reszta() ?></b></li>
    <li>Liczba <b><?= $obj->liczbaA ?></b> do potęgi <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->potega() ?></b></li>
</ul>
</body>
</html>

<?php
include_once("policz_wyrazy.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <p><?= PoliczWyraz::$tekst ?></p>

    <fieldset>
        <legend>Przykładowy tekst</legend>
        <pre>
Litwo! Ojczyzno moja! ty jesteś jak zdrowie.
Ile cię trzeba cenić, ten tylko się dowie,
Kto cię stracił. Dziś piękność twą w całej ozdobie
Widzę i opisuję, bo tęsknię po tobie.
        </pre>
    </fieldset>
    <p>Tekst w ramce składa się z
        <?= PoliczWyraz::policzwyrazy("Litwo! Ojczyzno moja! ty jesteś jak zdrowie. Ile cię trzeba cenić, ten tylko się dowie, Kto cię stracił. Dziś piękność twą w całej ozdobie Widzę i opisuję, bo tęsknię po tobie.") ?>
        wyrazów
    </p>
</body>

</html>
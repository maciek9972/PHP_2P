<?php
include_once 'MasaGestosc.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $r = 5;
    $substancje = ["gipsu", "rtęci", "złota", "wody"];
?>

<ol type="I">
    <?php foreach ($substancje as $sub): ?>
        <?php $DodawanieObj = new obliczenia($r, $sub); ?>
        <li>
            Masa kulki <strong><?= $sub ?></strong> o promieniu <u><?= $r ?> cm</u>: <mark><?= $DodawanieObj->masa() ?> kg</mark>
        </li>
    <?php endforeach; ?>
</ol>

</body>
</html>

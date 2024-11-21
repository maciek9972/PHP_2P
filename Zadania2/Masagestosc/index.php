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
    $r = 5;
    $materials = ["gipsu", "rtęci", "złota", "wody"];
?>

<ol type="I">
    <?php foreach ($materials as $material): ?>
        <?php $DodawanieObj = new obliczenia($r, $material); ?>
        <li>
            Masa kulki <strong><?= $material ?></strong> o promieniu <u><?= $r ?>cm</u>: <mark><?= $DodawanieObj->masa() ?> kg</mark>
        </li>
    <?php endforeach; ?>
</ol>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiek</title>
    <style>
        h1 {
            border: 2px solid black;
        }
        .php-code {
            color: brown;
        }
        .blue-text {
            color: navy;
            border: 2px dotted navy;
        }
    </style>
</head>
<body>
<?php
$wiek = random_int(1, 100);
echo '<span class="php-code">';
echo "<h1> Mam " . $wiek;
if ($wiek == 1) {
    echo " rok.</h1>";
}
if ($wiek > 1) {
    echo " lat.</h1>";
}
echo '</span>';
if ($wiek == 1) {
    echo '<h2 class="blue-text">Jeszcze nie możesz głosować</h2>';
} else if ($wiek > 1 && $wiek < 18) {
    echo '<h2 class="blue-text">Jeszcze nie możesz głosować</h2>';
} else if ($wiek >= 18 && $wiek < 21) {
    echo '<h2 class="blue-text">Możesz tylko głosować</h2>';
} else if ($wiek >= 21 && $wiek < 30) {
    echo '<h2 class="blue-text">Możesz głosować i kandydować do Sejmu</h2>';
} else if ($wiek >= 30 && $wiek < 35) {
    echo '<h2 class="blue-text">Możesz głosować i kandydować do Sejmu i Senatu</h2>';
} else if ($wiek >= 35) {
    echo '<h2 class="blue-text">Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta</h2>';
}
?>
</body>
</html>

<?php
include_once('okrag_sfera_kula.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OkrągSferaKula</title>
    <style>
        body {
            background-color: #219ebc;
            font-family: Garamond;
            font-size: 18px;
            color: #023047;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #8ecae6;
            table-layout: fixed;
        }
        th, td {
            border: 4px solid #ffb703;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $promien = rand(0, 99);
    $figura = new OkragSferaKula($promien);
    ?>
    <table>
        <tr>
            <td colspan="3">Promień kuli r = <?php echo $promien; ?></td>
        </tr>
        <tr>
            <td>Obwód</td>
            <td>Pole powierzchni</td>
            <td>Objętość</td>
        </tr>
        <tr>
            <td><i>P = 2&#960;r</i></td>
            <td><i>S = 4&#960;r<sup>2</sup></i></td>
            <td><i>V = &#8531; &sdot; &#960;r<sup>3</sup></i></td>
        </tr>
        <tr>
            <td><?php echo $figura->obwod(); ?></td>
            <td><?php echo $figura->pole(); ?></td>
            <td><?php echo $figura->objetosc(); ?></td>
        </tr>
    </table>
</body>
</html>

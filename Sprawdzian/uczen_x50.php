<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

table {
    border-collapse: collapse;
}
#Uczen2, #Uczen3 {
    border: 1px solid lightgray;
    padding: 7px;
}
#Zapisz1 {
    border: 1px solid lightgray;
}
#Oceny {
    padding: 7px;
}
    </style>
</head>
<body>
<body>
    <table>
        <form method="post">
            <td id="Oceny" colspan="2" style="text-align: center;">Oceny</td>
            <?php
            $saveFile = false;
            for($n = 1; $n <= 50; $n++) {
                $warunek = in_array("Uczeń".$n, ($_POST["Uczen"] ?? [])) && !empty($_POST["Uczen".$n]);
                $saveFile = $saveFile || $warunek ? true : false;
                ?>
                <tr>
                <td id="Uczen2"><label for="Uczen1<?= $n ?>">Uczeń <?= $n ?>:</label></td>
                    <td id="Uczen3"><input type="text" name="Uczen[]" id="Uczen1<?= $n ?>" </td>
                </tr>
                <?php
            }
            ?>
            <tr>
            <td id="Zapisz1" colspan="2" style="text-align: center;">
            <input type="submit" value="Zapisz">
        </td>
        </tr>
        </form>
    </table>
</body>
</html>
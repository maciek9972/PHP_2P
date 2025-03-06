
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminy</title>
    <link href="https://fonts.googleapis.com/css2?family=Aubrey&family=Macondo&family=Modern+Antiqua&family=Texturina:ital,opsz,wght@0,12..72,100..900;1,12..72,100..900&display=swap" rel="stylesheet">
    <style>
        html {
    font-family: "Modern Antiqua", serif;
}
body {
    background-color: #fff7d1;
    padding: 100px;
}
table {
    background-color: #ffecc8;
    border-collapse: collapse;
}
td {
    border: 1px solid grey;
    padding: 10px;
}
input {
    background-color: #ffd09b;
    border-color: #ffb0b0;
}
input[type=checkbox] {
    accent-color: #ffd09b;
    outline: #ffb0b0 solid 1px;
    outline-offset: -1px;
    transform: scale(2);
}
</style>
<body>
    <p>Terminarz</p>
    <table>
        <form method="post">
            <?php
            $saveFile = false;
            for($i = 1; $i <= 5; $i++) {
                $warunek = in_array("termin1".$i, ($_POST["terminy"] ?? [])) && !empty($_POST["termin1-month".$i]);
                $saveFile = $saveFile || $warunek ? true : false;
                $checked = $warunek ? "checked" : "";
                ?>
                <tr>
                <td><label for="termin1<?= $i ?>">Termin <?= $i ?>.</label></td>
                    <td><input type="checkbox" name="terminy[]" id="termin1<?= $i ?>" value="termin1<?= $i ?>" <?= $checked ?></td>
                    <td><input type="month" name="termin1-month<?= $i ?>" id="termin1-month<?= $i ?>" value="<?= $warunek ? $_POST["termin1-month".$i] : '' ?>"></td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td colspan="3" style="text-align: center;">
            <input type="submit" value="Zapisz">
        </td>
        </tr>
        </form>
    </table>
    <?php
        if($saveFile) {
            $fileName = "terminy.txt";
            $fileHandle = fopen($fileName, "a");
            $data = date("Y-m-d H:i:s")."\n".print_r($_POST, true);
            fwrite($fileHandle, $data);
            fclose($fileHandle);
     ?>
            <p> Dane zostały zapisane do pliku <?= $fileName ?>. </p>
     <?php } ?>
     <pre> <?=print_r($_POST);?></pre>
</body>
</html>

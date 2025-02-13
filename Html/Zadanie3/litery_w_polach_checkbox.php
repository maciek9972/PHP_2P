<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            border-width: 2px;
            border-color: blue;
            margin-left: auto;
            margin-right: auto;
        }
        label{
            margin-right: 15px;
        }
        body{
            padding: 20px;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Alfabet</legend>
        <form method="post">
            <?php
            foreach (range('a', 'z') as $litera) {
                $isChecked = (!empty($_POST["litera"]) && in_array($litera, $_POST["litera"])) ? "checked" : "";
                ?>
                <input <?= $isChecked ?> type="checkbox" id="litera_<?= $litera ?>" name="litera[]" value="<?= $litera ?>">
                <label for="litera_<?= $litera ?>"><?= $litera ?></label>
                <?php
            }
            ?>
            <br>
            <input type="submit" name="wyslij" value="Wyślij">
        </form>
        <?php
        if (!empty($_POST["litera"])) {
            $wybrane = $_POST["litera"];
            if (count($wybrane) == 1) {
                ?>
                <p>
                    Ta litera została wybrana: <?= $wybrane[0] ?>.
                </p>
                <?php
            } 
            elseif (count($wybrane) > 1) {
                ?>
                <p>
                    Te litery zostały wybrane: <?= implode(', ', $wybrane) ?>.
                </p>
                <?php
            }
        } 
        else {
            ?>
            <p>
                Żadna litera nie została wybrana.
            </p>
            <?php
        }
        ?>
    </fieldset>
</body>

</html>
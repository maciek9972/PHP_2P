<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            border-color: blue;
            border-width: 4px;
        }
        legend{
            border-bottom: solid blue 4px;
            border-top: solid blue 4px;
        }
    </style>
</head>
<body>
<body>
    <fieldset><legend>Najlepszy kompozytor</legend>
    <?php if($_SERVER['REQUEST_METHOD']==="POST"){
    ?><p>Według ciebie najlepszym kompozytorem jest :
    <?= $_POST["komp"] ?></p>
   <?php }
    else{
    ?>
        <form method="POST">
            <input required type="radio" id="komp1" name="komp" value="Alexander Bordin"><label for="komp1">Alexander Bordin</label></input><Br>
            <input required type="radio" id="komp2" name="komp" value="Fryderyk Chopin"><label for="komp2">Fryderyk Chopin</label></input><Br>
            <input required type="radio" id="komp3" name="komp" value="Edvard Grieg"><label for="komp3">Edvard Grieg</label></input><Br>
            <input required type="radio" id="komp4" name="komp" value="Stanisław Moniuszko"><label for="komp4">Stanisław Moniuszko</label></input><Br>
            <input required type="radio" id="komp5" name="komp" value="Giuseppe Verdi"><label for="komp5">Giuseppe Verdi</label></input><Br>
            <input required type="radio" id="komp6" name="komp" value="Richard Wagner"><label for="komp6">Richard Wagner</label></input><Br>
        <input type="submit" name="submit" value="Wybierz ulubionego kompozytora"></input><Br>
        </form>
    </fieldset>
    <?php } ?>
</body>
</html>
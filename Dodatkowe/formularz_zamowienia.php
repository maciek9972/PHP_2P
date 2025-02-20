<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            background-color: lightgreen;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<?php 
    $VALIDFORM = TRUE;
    $PORDUCTNAMEERROR = ''; 
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        if(empty(trim($_POST["Towar"]))){
            $PORDUCTNAMEERROR = "<br>"."Uzupełnij nazwę towaru";
            $VALIDFORM = FALSE;
        }else{
            $_POST["Towar"]=htmlspecialchars($_POST["Towar"]);
        }

        if(isset(trim($_POST["pakowanie"]))){
            
        }
    }
?>
    <form method="POST">
        <p>
            <label for="Towar"> Nazwa towaru</label><span> * </span><br> 
            <input type="text" name="Towar" id="Towar" class=<?= $PORDUCTNAMEERROR ? 'ERROR': ''?> >
            <span class="ERROR"><?=$PORDUCTNAMEERROR?></span>
        </p>
        <p>
            Wybierz opcje pakowania:<span> * </span><br>
            <input type="checkbox" name="pakowanie" id="koperta"><label for="koperta">koperta</label><br>
            <input type="checkbox" name="pakowanie" id="folia"><label for="folia">folia</label><br>
            <input type="checkbox" name="pakowanie" id="folia_babe"><label for="folia_babe">folia bąbelkowa</label><br>
            <input type="checkbox" name="pakowanie" id="karton"><label for="karton">karton</label><br>
            <input type="checkbox" name="pakowanie" id="karton_usz"><label for="karton_usz">karton z usztywnieniem</label>
        </p>
        <p>
            Podaj wagę paczki:<span> * </span><br>
            <input type="radio" name="waga" id="waga1" ><label for="waga1">do 2 kg</label><br>
            <input type="radio" name="waga" id="waga2" ><label for="waga2">do 2 do 5 kg</label><br>
            <input type="radio" name="waga" id="waga1" ><label for="waga3">do 5 do 10 kg</label><br>
            <input type="radio" name="waga" id="waga2"  ><label for="waga4">do 10 do 15 kg</label>
        </p>
        <p>
            <label for="email">Email kontaktowy</label><span> * </span><br>
            <input type="email" name="email_kon" id="email">
        </p>
        <p>
            <label for="info">Dodatkowe informacje</label><span> * </span><br>
            <textarea name="dod_info" id="info" cols="20" rows="2"></textarea>
        </p>
        <p>
            <input type="checkbox" name="zgoda" id="zgoda"><label for="zgoda">Zgoda na przetwarzanie danych</label><span> * </span>
        </p>
        <p>
            <input type="submit" name="Wyslij" id="Wyslij" value="Wyślij">
        </p>
    </form>
</body>
</html>
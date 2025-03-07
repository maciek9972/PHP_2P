<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<style>
    h1,p{
        text-align: center;
        font-family: Papyrus;
    }
    h2{
        text-align: left;
        font-family: Papyrus;
    }
    #Ciastko{
        text-align: left;
        font-family: Courier New; 
    }
    #Witaj{
        text-align: center;
        font-family: Courier New;   
    }
</style>
<body>
<?php include 'MenuBar.php'; ?>
<h1>Moja Strona</h1>
<p id="Witaj">
    <?php 
    if(isset($_SESSION["login_status"]) != false){
        echo "Witaj ".$_SESSION['login'];
    }else{
        echo "Witaj gościu";
    }
    ?>
    </p>
    <h2>Jakie powinno być dobre hasło?</h2>

<p id="Ciastko" class="ciastko">
    <?php 
    if(isset($_SESSION["zawartosc"])) {
        echo $_SESSION["zawartosc"];
    }else{
        echo "Ciasteczko nie jest ustawione.";
    }
    ?>
</p>
<?php include 'FooterBar.php'; ?>

</body>
</html>
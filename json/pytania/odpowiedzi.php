<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Odpowiedź</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_answer'])){
    ?>
    <div class="container">
        <div class="text">
        <h1>Odpowiedź</h1>
        <p>Trudność: <?=$_SESSION['difficulty']?></p>
        <p>Kategoria <?= $_SESSION['category']?></p>
        <p>Pytanie: <?=$_SESSION['question']?></p>
        <p>Wybrałeś: <?=$_POST['user_answer']?></p>
        
        <p>
            <?php 
            if($_POST['user_answer'] == $_SESSION['correct_answer']){
                echo "<p class=dobra>Poprawna odpowiedź</p>";
                echo "<a href=pytania.php>Kolejne pytanie</a>";
            }else{
                echo "<p class=zle>Niepoprawna odpowiedź</p>";
                echo "<p class=zle>Poprawna odpowiedź to: {$_SESSION['correct_answer']}</p>";
                echo "<a href=pytania.php>Kolejne pytanie</a>";
            }
            ?>
        </p>
    <?php
        }
    ?>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php include("db/connect.php");?>
    <div class="b1">
        <h2><a href="index.php?page=glowna">Strona główna</a></h2>
        <h2><a href="index.php?page=czytelnicy">Tabela czytelnicy</a></h2>
        <h2><a href="index.php?page=dzialy">Tabela działy</a></h2>
        <h2><a href="index.php?page=ksiazki">Tabela książki</a></h2>
        <h2><a href="index.php?page=pracownicy">Tabela pracownicy</a></h2>
        <h2><a href="index.php?page=stanowiska">Tabela stanowiska</a></h2>
        <h2><a href="index.php?page=wypozyczenia">Tabela wypożyczenia</a></h2>
    </div>
    <div class="b2">
    <?php
                if (isset($_GET['page'])) {
            if (file_exists('pages/' . $_GET['page'] . '.php')) {
                include 'pages/' . $_GET['page'] . '.php';
            } else {
                echo '<h1>Nie znaleziono żądanej strony</h1>';
            }
        } else {
            include 'pages/glowna.php';
        }
    ?>
    </div>
    <?php include("db/disconnect.php")?>
</body>
</html>
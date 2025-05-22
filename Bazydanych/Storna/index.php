<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="b1">
        <h2><a href="index.php?pages=glowna.php">Strona główna</a></h2>
        <h2><a href="index.php?pages=czytelnicy.php">Tabele czytelnicy</a></h2>
        <h2><a href="#">Tabele książki</a></h2>
        <h2><a href="#">Tabele pracownicy</a></h2>
        <h2><a href="#">Tabele stanowiska</a></h2>
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
</html>
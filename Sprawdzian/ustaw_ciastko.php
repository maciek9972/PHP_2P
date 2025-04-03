<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Ustaw"])) {
    $nazwa_ciastka = $_POST['nazwa_ciastka'];
    $zawartosc = $_POST['zawartosc'];
    $_SESSION["zawartosc"] = $zawartosc;
    $czas_ciastka = $_POST['czas_ciastka'];

    setcookie($nazwa_ciastka, $zawartosc, time() + $czas_ciastka);
    header($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post">
            <label for="nazwa_ciastka">Nazwa*:</label>
            <input type="text" name="nazwa_ciastka" id="nazwa_ciastka" value="favorite_movie" required><br>

            <label for="zawartosc">Zawartość*:</label><br>
            <textarea name="zawartosc" id="zawartosc" cols="40" rows="3" required><?= isset($_SESSION['zawartosc']) ? $_SESSION['zawartosc'] : "" ?></textarea>
            <br>
            
            <label for="czas_ciastka">Wygasa:</label>
            <input type="number" name="czas_ciastka" id="czas_ciastka" value="<?= isset($czas_ciastka) ? $czas_ciastka : 100 ?>" required>
            <br>
            
            <input type="submit" name="Ustaw" value="Ustaw">
            <br>
</form>
<a href="strona_glowna.php">Strona głowna</a>
<?php
}
?>
</body>
</html>
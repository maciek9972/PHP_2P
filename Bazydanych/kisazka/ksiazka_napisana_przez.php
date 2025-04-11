<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "durlej";
$password = "korale1313";
$db = "durlej";

//try {
   $conn = mysqli_connect($servername, $username, $password, $db);
//    echo "<p>Połączono</p>";
//} catch (mysqli_sql_exception $e) {
//    echo "<p>Wystąpił błąd: ". $e->getMessage() ."</p>";
//}

$Ksiazka = "SELECT Tytul, Imie, Nazwisko FROM ksiazki;";
$wynik = $conn->query($Ksiazka);

if ($wynik->num_rows > 0) {
    while ($wier = $wynik->fetch_assoc()) {
        echo "<br> Książka ". $wier["Tytul"]. " - Name: ". $wier["Imie"]. " " . $wier["Nazwisko"] . "<br>";
    }
} else {
    echo "0 wyników";
}

$conn->close();
?>
</body>
</html>
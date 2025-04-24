<!DOCTYPE html>
<html lang="pl">
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

$conn = mysqli_connect($servername, $username, $password, $db);

$query="SELECT CONCAT(UPPER(pracownicy.Imie),' ',UPPER(pracownicy.Nazwisko)) as Pracownik FROM pracownicy;";
$wynik = mysqli_query($conn, $query);
?>
<ul>
<?php
while($wynik1 = mysqli_fetch_assoc($wynik)){?>
<li><?=$wynik1['Pracownik']?></li>
<?php
}
?>
</body>
</html>


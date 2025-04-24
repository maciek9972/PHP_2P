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

$Ksiazka = "SELECT Tytul, Imie, Nazwisko FROM ksiazki;";
$wynik = $conn->query($Ksiazka);

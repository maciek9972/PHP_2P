<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td ,th{
            border-collapse:collapse;
            border: 1px, solid, black
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "durlej";
$password = "korale1313";
$db = "durlej";

$conn = mysqli_connect($servername, $username, $password, $db);

$query = "SELECT wypozyczenia.Nr_transakcji, wypozyczenia.Data_wypozyczenia, wypozyczenia.Data_zwrotu, DATEDIFF(IFNULL(wypozyczenia.Data_zwrotu, NOW()), wypozyczenia.Data_wypozyczenia) AS DNI FROM wypozyczenia ORDER BY DNI ASC;";
$wynik = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <th>Nr Transakcji</th>
        <th>Data Wypożyczenia</th>
        <th>Data Zwrotu</th>
        <th>DNI</th>
    </tr>
    <?php
    while ($wynik1 = mysqli_fetch_assoc($wynik)) {
        echo "<tr>
            <td>{$wynik1['Nr_transakcji']}</td>
            <td>{$wynik1['Data_wypozyczenia']}</td>
            <td>{$wynik1['Data_zwrotu']}</td>
            <td>{$wynik1['DNI']}</td>
        </tr>";
    }
    ?>
</table>
</body>
</html>

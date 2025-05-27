<h1> Tabela czytelnicy</h1>
<?php 
$query = "SELECT * FROM czytelnicy;";
$wynik = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <th>Nr_Czytelnika</th>
        <th>Nazwisko</th>
        <th>Imię</th>
        <th>Data_ur</th>
        <th>Ulica</th>
        <th>Kod</th>
        <th>Miasto</th>
        <th>Data_zapisania</th>
        <th>Data_skreslenia</th>
        <th>Nr_legitymacji</th>
        <th>Funkcja</th>
        <th>Płeć</th>
    </tr>
    <?php
    while ($wynik1 = mysqli_fetch_assoc($wynik)) {
        echo "<tr>
            <td>{$wynik1['Nr_czytelnika']}</td>
            <td>{$wynik1['Nazwisko']}</td>
            <td>{$wynik1['Imie']}</td>
            <td>{$wynik1['Data_ur']}</td>
            <td>{$wynik1['Ulica']}</td>
            <td>{$wynik1['Kod']}</td>
            <td>{$wynik1['Miasto']}</td>
            <td>{$wynik1['Data_zapisania']}</td>
            <td>{$wynik1['Data_skreslenia']}</td>
            <td>{$wynik1['Nr_legitymacji']}</td>
            <td>{$wynik1['Funkcja']}</td>
            <td>{$wynik1['Plec']}</td>
        </tr>";
    }
    ?>
</table>
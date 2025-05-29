<h1>Tabela Pracownicy</h1>
<?php
$query = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $query);
$licz=mysqli_num_rows($wynik);
echo $licz;
?>
<table>
    <tr>
        <th>Id_pracownika</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Id_stanowisko</th>
        <th>Miasto</th>
        <th>Data_zatrudnienia</th>
        <th>Wynagrodzenie</th>
    </tr>
    <?php
    while ($wynik1 = mysqli_fetch_assoc($wynik)) {
        echo "<tr>
            <td>{$wynik1['Id_pracownika']}</td>
            <td>{$wynik1['Nazwisko']}</td>
            <td>{$wynik1['Imie']}</td>
            <td>{$wynik1['Id_stanowisko']}</td>
            <td>{$wynik1['Miasto']}</td>
            <td>{$wynik1['Data_zatrudnienia']}</td>
            <td>{$wynik1['Wynagrodzenie']}</td>
        </tr>";
    } 
    ?>
</table>
 
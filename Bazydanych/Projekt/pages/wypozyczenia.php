<h1>Tabela Wypożyczenia</h1>
<?php
$query = "SELECT * FROM wypozyczenia";
$wynik = mysqli_query($conn, $query);
$licz=mysqli_num_rows($wynik);
echo $licz;
?>
<table>
    <tr>
        <th>Nr_transakcji</th>
        <th>Sygnatura</th>
        <th>Id_pracownika</th>
        <th>Nr_czytelnika</th>
        <th>Data_wypozyczenia</th>
        <th>Data_zwrotu</th>
    </tr>
    <?php
    while ($wynik1 = mysqli_fetch_assoc($wynik)) {
        echo "<tr>
            <td>{$wynik1['Nr_transakcji']}</td>
            <td>{$wynik1['Sygnatura']}</td>
            <td>{$wynik1['Id_pracownika']}</td>
            <td>{$wynik1['Nr_czytelnika']}</td>
            <td>{$wynik1['Data_wypozyczenia']}</td>
            <td>{$wynik1['Data_zwrotu']}</td>
        </tr>";
    } 
    ?>
</table>


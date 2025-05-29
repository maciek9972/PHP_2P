<h1>Tabela Stanowiska</h1>
<?php
$query = "SELECT * FROM stanowiska";
$wynik = mysqli_query($conn, $query);
$licz=mysqli_num_rows($wynik);
echo $licz;
?>
<table>
    <tr>
        <th>Id_stanowisko</th>
        <th>Nazwa</th>
        
    </tr>
    <?php
    while ($wynik1 = mysqli_fetch_assoc($wynik)) {
        echo "<tr>
            <td>{$wynik1['Id_stanowisko']}</td>
            <td>{$wynik1['Nazwa']}</td>
        </tr>";
    }   
    ?>
</table>

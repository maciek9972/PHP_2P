<h1>Tabela działy</h1>
<?php 
$query = "SELECT * FROM dzialy; ";
$wynik = mysqli_query($conn, $query);
?>
<table>
    <tr>
        <th>Id_dział</th>
        <th>Nazwa</th>

    </tr>
    <?php
    while ($wynik1 = mysqli_fetch_assoc($wynik)) {
        echo "<tr>
            <td>{$wynik1['Id_dzial']}</td>
            <td>{$wynik1['Nazwa']}</td>
        </tr>";
    }
    ?>

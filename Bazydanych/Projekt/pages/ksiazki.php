<h1>Tabela Ksiazki</h1>
<?php
$query = "SELECT ksiazki.Sygnatura, ksiazki.Tytul, ksiazki.Nazwisko, ksiazki.Imie, ksiazki.Wydawnictwo, ksiazki.Miejsce_wyd, ksiazki.Rok_wyd, ksiazki.Objetosc_ks, ksiazki.Cena, dzialy.Nazwa AS 'Dzial' FROM ksiazki JOIN dzialy ON ksiazki.Id_dzial = dzialy.Id_dzial;";
$wynik = mysqli_query($conn, $query);
$licz = mysqli_num_rows($wynik);
echo $licz;
?>

<table>
    <tr>
        <th>Sygnatura</th>
        <th>Tytul</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Wydawnictwo</th>
        <th>Miejsce_wyd</th>
        <th>Rok_wyd</th>
        <th>Objetosc_ks</th>
        <th>Cena</th>
        <th>Dział</th>
    </tr>
<?php
    while ($wynik1 = mysqli_fetch_assoc($wynik)) {
    $cena = $wynik1['Cena'];
    $zlote = floor($cena);
    $grosze = round(($cena - $zlote) * 100);
    
    $grosze = str_pad($grosze, 2, '0', STR_PAD_LEFT);
    
    $cena2 = "{$zlote} zł {$grosze} gr";

    echo "<tr>
        <td>{$wynik1['Sygnatura']}</td>
        <td>{$wynik1['Tytul']}</td>
        <td>{$wynik1['Nazwisko']}</td>
        <td>{$wynik1['Imie']}</td>
        <td>{$wynik1['Wydawnictwo']}</td>
        <td>{$wynik1['Miejsce_wyd']}</td>
        <td>{$wynik1['Rok_wyd']}</td>
        <td>{$wynik1['Objetosc_ks']}</td>
        <td>{$cena2}</td>
        <td>{$wynik1['Dzial']}</td>
    </tr>";
    }
    
?>
</table>

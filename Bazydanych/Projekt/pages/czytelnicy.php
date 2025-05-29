<h1> Tabela Czytelnicy</h1>
<?php 
$query = "SELECT * FROM czytelnicy;";
$wynik = mysqli_query($conn, $query);
$licz = mysqli_num_rows($wynik);
echo $licz;
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
        if($wynik1['Plec'] == "M"){
            $plec = "Mężczyzna";
        } elseif($wynik1['Plec'] == "K"){
            $plec = "Kobieta";
        } else {
            $plec = "Nieznana";
        }

        $kod = str_split($wynik1['Kod'], 2);

        if(count($kod) >= 2){
            $Kod_p = $kod[0] . '-' . $kod[1];
            if(isset($kod[2])) {
                $Kod_p .= $kod[2];
            }
        } else {
            $Kod_p = $wynik1['Kod'];
        }

        echo "<tr>
            <td>{$wynik1['Nr_czytelnika']}</td>
            <td>{$wynik1['Nazwisko']}</td>
            <td>{$wynik1['Imie']}</td>
            <td>{$wynik1['Data_ur']}</td>
            <td>{$wynik1['Ulica']}</td>
            <td>{$Kod_p}</td>
            <td>{$wynik1['Miasto']}</td>
            <td>{$wynik1['Data_zapisania']}</td>
            <td>{$wynik1['Data_skreslenia']}</td>
            <td>{$wynik1['Nr_legitymacji']}</td>
            <td>{$wynik1['Funkcja']}</td>
            <td>{$plec}</td>
        </tr>";
    }
    ?>
</table>

<?php
class PoliczWyraz
{
    public static string $tekst = "Metoda policzWyrazy() zwraca liczbę wyrazów w danym tekście";
    public static function policzWyrazy(string $a): int
    {
        $slowa = explode(" ", $a);
        return count($slowa);
    }
}
?>
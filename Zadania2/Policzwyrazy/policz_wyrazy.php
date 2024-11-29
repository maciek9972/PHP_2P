<?php
class PoliczWyrazy{
    public static string $tekst = "Metoda policzWyrazy() zwraca liczbę wyrazów w danym tekście.";
    public static function policzWyrazy(string $a){
        $slowa= explode("",$a);
       return count($slowa);
  }
}
?>
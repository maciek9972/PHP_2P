<?php

class Arytmetyka {
    public $liczbaA;
    public $liczbaB;

    public function suma() {
        return $this->liczbaA + $this->liczbaB;
    }

    public function roznica() {
        return $this->liczbaA - $this->liczbaB;
    }

    public function iloczyn() {
        return $this->liczbaA * $this->liczbaB;
    }

    public function iloraz() {
        if (is_numeric($this->liczbaA) && is_numeric($this->liczbaB)&&$this->liczbaB ?? 0) {
            return $this->liczbaA / $this->liczbaB;
        }
        return "Błąd";
    }

    public function reszta() {
        if (is_numeric($this->liczbaA) && is_numeric($this->liczbaB)&&$this->liczbaB ?? 0) {
            return $this->liczbaA % $this->liczbaB;
        }
        return "Błąd";
    }
    public function potega() {
        return pow($this->liczbaA, $this->liczbaB);
    }
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arytmetyka</title>
</head>
<body>
<?php
$obj = new Arytmetyka();
$obj->liczbaA = -125;
$obj->liczbaB = 0;
?>
<ul type="circle">
    <li>Suma liczb <b><?= $obj->liczbaA ?></b> i <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->suma() ?></b></li>
    <li>Różnica liczb <b><?= $obj->liczbaA ?></b> i <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->roznica() ?></b></li>
    <li>Iloczyn liczb <b><?= $obj->liczbaA ?></b> i <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->iloczyn() ?></b></li>
    <li>Iloraz liczb <b><?= $obj->liczbaA ?></b> i <b><?= $obj->liczbaB ?></b> wynosi <b><?= $obj->iloraz() ?></b></li>
    <li>Reszta z dzielenia liczby <b><?= $obj->liczbaA ?></b> przez <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->reszta() ?></b></li>
    <li>Liczba <b><?= $obj->liczbaA ?></b> do potęgi <b><?= $obj->liczbaB ?></b> jest równa <b><?= $obj->potega() ?></b></li>
</ul>
</body>
</html>

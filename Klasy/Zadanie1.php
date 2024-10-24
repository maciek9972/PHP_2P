<?php
class Modulo {
    public $liczbaA;
    public $liczbaB;

    public function reszta() {
        if (is_numeric($this->liczbaA) && is_numeric($this->liczbaB)) {
            return $this->liczbaA % $this->liczbaB;
        }
        return null;
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$resz = new Modulo();
$resz->liczbaA = 22;
$resz->liczbaB = 5;
?>    
<p>Reszta z dzielenia <?= $resz->liczbaA ?> i <?= $resz->liczbaB ?> wynosi <?= $resz->reszta() ?></p>
</body>
</html>

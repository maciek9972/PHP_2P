<?php
class OkragSferaKula {
    private $promien;

    public function __construct($promien) {
        $this->promien = $promien;
    }

    public function obwod(): string {
        return ' ' . number_format(2 * pi() * $this->promien, 2, ',', ' ');
    }

    public function pole(): string {
        return ' ' . number_format(4 * pi() * pow($this->promien, 2), 2, ',', ' ');
    }

    public function objetosc(): string {
        return ' ' . number_format((4/3) * pi() * pow($this->promien, 3), 2, ',', ' ');
    }
}
?>

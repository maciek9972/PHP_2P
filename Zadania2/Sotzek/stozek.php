<?php
include_once 'przeciwprostokatna.php';

class stozek extends przeciw {
    private ?float $promien;
    private ?float $wysokosc;

    public function __construct($r, $h) {
        $this->promien = $r;
        $this->wysokosc = $h;
    }

    private function PolePodstawy(): float {
        return pi() * pow($this->promien, 2);
    }

    private function PoleBoczne(): float {
        $l = $this->ppk($this->promien, $this->wysokosc);
        return pi() * $this->promien * $l;
    }

    public function PoleCalkowite(): float {
        return $this->PolePodstawy() + $this->PoleBoczne();
    }

    public function Objetosc(): float {
        return (1/3) * pi() * pow($this->promien, 2) * $this->wysokosc;
    }
}
?>
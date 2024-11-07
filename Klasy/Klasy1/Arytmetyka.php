<?php
class Arytmetyka {
    public function __CONSTRUCT($A,$B){
        $this->liczbaA = $A;
        $this->liczbaB = $B;
    }

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
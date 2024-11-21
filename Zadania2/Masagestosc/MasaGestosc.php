<?php
    class obliczenia{
        private ?float $promien=NULL;
        private ?string $substancja=NULL;
        private ?float $gestosc=NULL;

        public function __construct($r,$s){
            $this->substancja=$s;
            $this->promien=$r;
            
        }

        private function objetosc(){
            if((is_numeric($this->promien))){
                return (4*pi()*pow($this->promien, 3))/3;
            }
            return null;
        }
        
        
        public function masa(){
            $objetosc=$this->objetosc();
            switch($this->substancja){
                case 'gips':
                    $masa=(2350 * $objetosc)/1000000;
                    return number_format($masa,3,","," ");
                case 'rtęć':
                    $masa=(13534 * $objetosc)/1000000;
                    return number_format($masa,3,","," ");
                case 'złoto':
                    $masa=(19280 * $objetosc)/1000000;
                    return number_format($masa,3,","," ");
                case 'woda':
                    $masa=(997 * $objetosc)/1000000;
                    return number_format($masa,3,","," ");
            }
    }
}
?>
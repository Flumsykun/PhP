<?php
class Auto {
    public $merk;
    public $type;
    public $kleur;
    public $heeftTrekhaak;
    public $kenteken;
    public $kilometers;
    public $tankinhoud;
    public $benzine;
    public $verbruik;

    function __construct($merk, $type, $kleur, $heeftTrekhaak , $kenteken, $kilometers, $tankinhoud, $benzine, $verbruik)
    {
        $this->merk = $merk;
        $this->type = $type;
        $this->kleur = $kleur;
        $this->heeftTrekhaak = $heeftTrekhaak;
        $this->kenteken = $kenteken;
        $this->kilometers = $kilometers;
        $this->tankinhoud = $tankinhoud;
        $this->benzine = $benzine;
        $this->verbruik = $verbruik;
    }
    public function tanken($liters){
        $this->benzine += $liters;
    }
    public function rijden($kilometers){
        $verbruik = $kilometers * $this->verbruik;
        if($this->benzine >= $verbruik){
            $this->kilometers += $kilometers;
            $this->benzine -= $verbruik;
            return $kilometers;
        }else{
            $maxKilometers = $this->benzine / $this->verbruik;
            $this->kilometers += $maxKilometers;
            $this->benzine = 0;
            return $maxKilometers;
        }
    }
}

$auto1 = new Auto("Audi", "A4", "blauw", true, "12-AB-34", 100000, 60, 20, 1.5);
$auto2 = new Auto("BMW", "X5", "zwart", false, "12-AB-34", 100000, 60, 20, 1.5);
$auto3 = new Auto("Mercedes", "C200", "wit", true, "12-AB-34", 100000, 60, 20, 1.5);
?>
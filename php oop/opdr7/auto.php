<?php
class Auto
{
    public $merk;
    public $type;
    public $kleur;
    public $heeftTrekhaak;
    public $kenteken;
    public $kilometers;
    public $tankinhoud;
    public $benzine;
    public $verbruik;

    function __construct($merk, $type, $kleur, $heeftTrekhaak, $kenteken, $kilometers, $tankinhoud, $benzine, $verbruik)
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
    public function Tanken($liters = -1)
    {
        if ($liters > 0) {
            $this->benzine += $liters;
        } else {
            $this->benzine = $this->tankinhoud;
        }
    }
    public function Rijden($kilometers)
    {
        $verbruik = ($this->verbruik = $kilometers) / 100;
        if ($this->benzine >= $verbruik) {
            $this->kilometers += $kilometers;
            $this->benzine -= $verbruik;
            return $kilometers;
        } else {
            $kilometers = ($this->benzine / $this->verbruik) * 100;
            $this->kilometers += $kilometers;
            $this->benzine -= ($this->verbruik * $kilometers) / 100;
            return $kilometers;
        }
        function kilometerstand(){
            return $this->kilometers;
        }

        function getKenteken(){
            return $this->kenteken;
        }

        function setKenteken($kenteken){
            $this->kenteken = $kenteken;
        }

        function benzinepeil(){
            return $this->benzine;
        }
    }
}
$auto1 = new Auto("Audi", "A4", "blauw", true, "12-AB-34", 165465, 59, 20, 1.5);
$auto2 = new Auto("BMW", "X5", "zwart", false, "12-AB-34", 87867, 69, 20, 1.5);
$auto3 = new Auto("Mercedes", "C200", "wit", true, "12-AB-34", 64566, 80, 20, 1.5);
?>
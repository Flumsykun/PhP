<?php
//require_once 'Auto.php';
class EigenAuto extends Auto
{
    private $aankoopdatum;
   
    public function __construct($merk, $type, $kleur, $heeftTrekhaak, $kenteken, $kilometers, $tankinhoud, $benzine, $verbruik, $aankoopdatum)
    {
        parent::__construct($merk, $type, $kleur, $heeftTrekhaak, $kenteken, $kilometers, $tankinhoud, $benzine, $verbruik);
        $this->aankoopdatum = $aankoopdatum;
    }

}
?>
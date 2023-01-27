<?php
//require_once 'Auto.php';
class LeaseAuto extends Auto
{
    public $leasemaatschappij;
    public $start_contract;
    public $einde_contract;
    public $laatste_onderhoud;

    public function __construct($merk, $type, $kleur, $heeftTrekhaak, $kenteken, $kilometers, $tankinhoud, $benzine, $verbruik, $leasemaatschappij, $start_contract, $einde_contract)
    {
        parent::__construct($merk, $type, $kleur, $heeftTrekhaak, $kenteken, $kilometers, $tankinhoud, $benzine, $verbruik);
        $this->leasemaatschappij = $leasemaatschappij;
        $this->start_contract = $start_contract;
        $this->einde_contract = $einde_contract;
    }
    public function getLeaseMaatschappij()
    {
        return $this->leasemaatschappij;
    }
    public function getStartContract()
    {
        return $this->start_contract;
    }
    public function getEindeContract()
    {
        return $this->einde_contract;
    }
    public function getLaatsteOnderhoud()
    {
        return $this->laatste_onderhoud;
    }
    public function doeOnderhoud($datum = null)
    {
        if ($datum) {
            $this->laatste_onderhoud = $datum;
        } else {
            $this->laatste_onderhoud = date('Y-m-d');
        }
    }

}

?>
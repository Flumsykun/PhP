<?php
include 'auto.php';
include 'EigenAuto.php';
include 'LeaseAuto.php';

function displayAutoInfo($auto1){
    echo "Merk: " . $auto1->merk . "<br>";
    echo "Type: " . $auto1->type . "<br>";
    echo "Kleur: " . $auto1->kleur . "<br>";
    echo "Heeft trekhaak: " . $auto1->heeftTrekhaak . "<br>";
    echo "Kenteken: " . $auto1->kenteken . "<br>";
    echo "Kilometers: " . $auto1->kilometers . "<br>";
    echo "Tankinhoud: " . $auto1->tankinhoud . "<br>";
    echo "Benzine: " . $auto1->benzine . "<br>";
    echo "Verbruik: " . $auto1->verbruik . "<br>";
}
displayAutoInfo($auto1);
echo "<br>";
displayAutoInfo($auto2);
echo "<br>";
displayAutoInfo($auto3);
?>
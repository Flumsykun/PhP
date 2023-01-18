<?php
include 'auto.php';

function displayAutoInfo($auto){
    echo "Merk: " . $auto->merk . "<br>";
    echo "Type: " . $auto->type . "<br>";
    echo "Kleur: " . $auto->kleur . "<br>";
    echo "Heeft trekhaak: " . $auto->heeftTrekhaak . "<br>";
    echo "Kenteken: " . $auto->kenteken . "<br>";
    echo "Kilometers: " . $auto->kilometers . "<br>";
    echo "Tankinhoud: " . $auto->tankinhoud . "<br>";
    echo "Benzine: " . $auto->benzine . "<br>";
    echo "Verbruik: " . $auto->verbruik . "<br>";
}
displayAutoInfo($auto1);
echo "<br>";
displayAutoInfo($auto2);
echo "<br>";
displayAutoInfo($auto3);
?>
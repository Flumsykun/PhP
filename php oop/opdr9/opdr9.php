<?php
require_once "auto.php";

session_start();
if (!isset($_SESSION['cars'])) {
    $_SESSION['cars'] = array();
}

if (isset($_POST['submit'])) {
    $car = new Auto($_POST['merk'], $_POST['type'], $_POST['kleur'], $_POST['trekhaak'], $_POST['kenteken'], $_POST['kilometers'], $_POST['benzine'], $_POST['tankinhoud'], $_POST['verbruik']);
    $_SESSION['cars'][] = $car;
}

echo "<form method='post'>";
echo "Merk: <input type='text' name='merk'><br>";
echo "Type: <input type='text' name='type'><br>";
echo "Kleur: <input type='text' name='kleur'><br>";
echo "Heeft trekhaak: <input type='checkbox' name='trekhaak'><br>";
echo "Kenteken: <input type='text' name='kenteken'><br>";
echo "Kilometers: <input type='number' name='kilometers'><br>";
echo "Benzine: <input type='number' name='benzine'><br>";
echo "Tankinhoud: <input type='number' name='tankinhoud'><br>";
echo "Verbruik: <input type='number' name='verbruik'><br>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";

echo "<br> <br>";

foreach ($_SESSION['cars'] as $car) {
    echo "Merk: " . $car->merk . "<br>";
    echo "Type: " . $car->type . "<br>";
    echo "Kleur: " . $car->kleur . "<br>";
    echo "Heeft trekhaak: " . $car->heeftTrekhaak . "<br>";
    echo "Kenteken: " . $car->kenteken . "<br>";
    echo "Kilometers: " . $car->kilometers . "<br>";
    echo "Benzine: " . $car->benzine . "<br>";
    echo "Tankinhoud: " . $car->tankinhoud . "<br>";
    echo "Verbruik: " . $car->verbruik . "<br>";
    echo "<br> <br>";
}


// session_start();

// if (!isset($_SESSION['auto1'])) {
//     echo "Auto's <br>";
//     $auto1 = new Auto("Audi", "A4", "blauw", true, "12-AB-34", 165465, 59, 20, 1.5);
//     $_SESSION['auto1'] = $auto1;
// } else {
//     $auto1 = $_SESSION['auto1'];
// }

// $auto1->tanken(40);
// $auto1->rijden(15);
// echo "Merk: " . $auto1->merk . "<br>";
// echo "Type: " . $auto1->type . "<br>";
// echo "Kleur: " . $auto1->kleur . "<br>";
// echo "Heeft trekhaak: " . $auto1->heeftTrekhaak . "<br>";
// echo "Kenteken: " . $auto1->kenteken . "<br>";
// echo "Kilometers: " . $auto1->kilometers . "<br>";
// echo "Benzine: " . $auto1->benzine . "<br>";
// echo "Tankinhoud: " . $auto1->tankinhoud . "<br>";
// echo "Verbruik: " . $auto1->verbruik . "<br>";

// echo "<br>";
// echo "<br>";
   
// echo "Lease Auto's <br>";
// $leaseAuto = new LeaseAuto('Audi','A4','blue',true,'12-AB-34',165465,59,20,1.5,'LeaseCompany Inc.', '2022-01-01','2025-01-01');
// $leaseAuto->tanken(40);
// echo "Benzine: " . $leaseAuto->benzine . "<br>";
// $leaseAuto->rijden(15);
// echo "Kilometers: " . $leaseAuto->kilometers. "<br>";
// echo "Kenteken: " . $leaseAuto->kenteken. "<br>";
// echo "Leasebedrijf: " . $leaseAuto->leasemaatschappij. "<br>";
// echo "Lease start: " . $leaseAuto->start_contract. "<br>";
// echo "Lease eind: " . $leaseAuto->einde_contract. "<br>";

// echo "<br>";
// echo "<br>";

?>
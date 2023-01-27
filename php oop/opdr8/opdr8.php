<?php
    require_once "auto.php";
    require_once "EigenAuto.php";
    require_once "LeaseAuto.php";

    echo "Auto's <br>";
    $auto1 = new Auto("Audi", "A4", "blauw", true, "12-AB-34", 165465, 59, 20, 1.5);
    $auto1->tanken(40);
    echo "Benzine: " . $auto1->benzine . "<br>";
    $auto1->rijden(15);
    echo "Kilometers: " . $auto1->kilometers;
    
    echo "<br>";
    echo "<br>";
       
    echo "Lease Auto's <br>";
    $leaseAuto = new LeaseAuto('Audi','A4','blue',true,'12-AB-34',165465,59,20,1.5,'LeaseCompany Inc.', '2022-01-01','2025-01-01');
    $leaseAuto->tanken(40);
    echo "Benzine: " . $leaseAuto->benzine . "<br>";
    $leaseAuto->rijden(15);
    echo "Kilometers: " . $leaseAuto->kilometers. "<br>";
    echo "Kenteken: " . $leaseAuto->kenteken. "<br>";
    echo "Leasebedrijf: " . $leaseAuto->leasemaatschappij. "<br>";
    echo "Lease start: " . $leaseAuto->start_contract. "<br>";
    echo "Lease eind: " . $leaseAuto->einde_contract. "<br>";
    
    echo "<br>";
    echo "<br>";

    echo "Eigen Auto's <br>";
    $eigenAuto = new EigenAuto('Audi','A4','blue',true,'12-AB-34',165465,59,20,1.5,'LeaseCompany Inc.', '2022-01-01','2025-01-01');
    $eigenAuto->tanken(40);
    echo "Benzine: " . $eigenAuto->benzine . "<br>";
    $eigenAuto->rijden(15);
    echo "Kilometers: " . $eigenAuto->kilometers. "<br>";
    echo "Kenteken: " . $eigenAuto->kenteken. "<br>";
    echo "Leasebedrijf: " . $leaseAuto->leasemaatschappij. "<br>";
    echo "Lease start: " . $leaseAuto->start_contract. "<br>";
    echo "Lease eind: " . $leaseAuto->einde_contract. "<br>";

    echo "<br>";
    echo "<br>";

?>
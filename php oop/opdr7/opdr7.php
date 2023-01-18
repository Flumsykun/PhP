<?php
    include "auto.php";
    
    $auto1 = new Auto("Audi", "A4", "blauw", true, "12-AB-34", 165465, 59, 20, 1.5);
    $auto1->tanken(40);
    echo "Benzine: " . $auto1->benzine . "<br>";
    $auto1->rijden(15);
    echo "Kilometers: " . $auto1->kilometers;
    echo "<br>";
       
    $auto2 =  new Auto("BMW", "X5", "zwart", false, "12-AB-34", 87867, 69, 20, 1.5);
    $auto2->tanken(40);
    echo "Benzine: " . $auto2->benzine . "<br>";
    $auto2->rijden(15);
    echo "Kilometers: " . $auto2->kilometers;
    echo "<br>";
       
    $auto3 = new Auto("Mercedes", "C200", "wit", true, "12-AB-34", 64566, 80, 20, 1.5);
    $auto3->tanken(40);
    echo "Benzine: " . $auto3->benzine . "<br>";
    $auto3->rijden(15);
    echo "Kilometers: " . $auto3->kilometers;
    echo "<br>";
?>
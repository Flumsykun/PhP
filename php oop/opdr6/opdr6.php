<?php
    include "auto.php";
    
    $auto = new Auto("Audi", "A4", "blauw", true, "12-AB-34", 100000, 60, 20, 1.5);
    $auto->tanken(40);
    echo "Benzine: " . $auto->benzine . "<br>";
    $auto->rijden(15);
    echo "Kilometers: " . $auto->kilometers;

?>
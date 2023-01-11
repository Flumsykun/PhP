<?php
function magStemmen(){
    $age = $_GET['leeftijd'];
    if($age >= 18){
        echo "Je mag stemmen";
    }else{
        echo "Je mag niet stemmen";
    }
}
magStemmen()
?>
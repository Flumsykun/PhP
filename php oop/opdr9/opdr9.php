<?php
require_once "auto.php";
session_start();

if (!isset($_SESSION['auto'])) {
    $_SESSION['auto'] = array();
}

if (isset($_POST['submit'])) {
    $auto1 = new Auto($_POST['merk'], $_POST['type'], $_POST['kleur'], $_POST['trekhaak'], $_POST['kenteken'], $_POST['kilometers'], $_POST['benzine'], $_POST['tankinhoud'], $_POST['verbruik']);
    $_SESSION['auto'][] = $auto1;
}
?>
<style>
     @import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
     

     body {
         background: #0e0700;
         color: #fff;
         font-family: 'Lato', Arial, sans-serif;
     }

     h1 {
         font-family: "proxima-nova",sans-serif;
         letter-spacing: -0.01em;
         font-weight: 700;
         font-style: normal;
         font-size: 60px;
         margin-left: -3px;
         line-height: 1em;
         color: #fff;
         text-align: center;
         margin-bottom: 8px;
         text-rendering: optimizeLegibility;
     }

     table {
         width: 80%;
         margin: auto;
     }

     table, th, td {
         border: 1px solid #fff;
         border-collapse: collapse;
     }

     th, td {
         padding: 15px;
     }
.invul {
    width: 80%;
    margin: auto;
    text-align: center;
}

</style>

<table>
    <tr>
        <th>Merk</th>
        <th>Type</th>
        <th>Kleur</th>
        <th>Heeft trekhaak</th>
        <th>Kenteken</th>
        <th>Kilometers</th>
        <th>Benzine</th>
        <th>Tankinhoud</th>
        <th>Verbruik</th>
    </tr>

<form class="invul" method='post'>
Merk: <input type='text' name='merk'><br>
Type: <input type='text' name='type'><br>
Kleur: <input type='text' name='kleur'><br>
Heeft trekhaak: <input type='checkbox' name='trekhaak'><br>
Kenteken: <input type='text' name='kenteken'><br>
Kilometers: <input type='number' name='kilometers'><br>
Benzine: <input type='number' name='benzine'><br>
Tankinhoud: <input type='number' name='tankinhoud'><br>
Verbruik: <input type='number' name='verbruik'><br>
<input type='submit' name='submit' value='Submit'>
</form>

    <?php

echo "<br><br>";

echo"<h1>Auto invoeren</h1>";

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

    // foreach ($_SESSION['auto'] as $auto1) {
    //     echo "Merk: " . $auto1->merk . "<br>";
    //     echo "Type: " . $auto1->type . "<br>";
    //     echo "Kleur: " . $auto1->kleur . "<br>";
    //     echo "Heeft trekhaak: " . $auto1->heeftTrekhaak . "<br>";
    //     echo "Kenteken: " . $auto1->kenteken . "<br>";
    //     echo "Kilometers: " . $auto1->kilometers . "<br>";
    //     echo "Benzine: " . $auto1->benzine . "<br>";
    //     echo "Tankinhoud: " . $auto1->tankinhoud . "<br>";
    //     echo "Verbruik: " . $auto1->verbruik . "<br>";
    //     echo "<br> <br>";
    // }

// foreach loop  display the data in the table
    foreach ($_SESSION['auto'] as $auto1) {
        echo "<tr>";
        echo "<td>" . $auto1->merk . "</td>";
        echo "<td>" . $auto1->type . "</td>";
        echo "<td>" . $auto1->kleur . "</td>";
        echo "<td>" . $auto1->heeftTrekhaak . "</td>";
        echo "<td>" . $auto1->kenteken . "</td>";
        echo "<td>" . $auto1->kilometers . "</td>";
        echo "<td>" . $auto1->benzine . "</td>";
        echo "<td>" . $auto1->tankinhoud . "</td>";
        echo "<td>" . $auto1->verbruik . "</td>";
        echo "</tr>";
    }

    ?>
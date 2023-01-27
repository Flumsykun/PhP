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
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
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
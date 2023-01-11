<?php
function nlDatum($date){
    $d = date("d", strtotime($date));
    $m = date("m", strtotime($date));
    $y = date("Y", strtotime($date));
    $maand = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
    $maand = $maand[$m-1];
    return $d . " " . $maand . " " . $y;
}
echo nlDatum("2015-12-31");
?>
<?php
// hitung total volume 2 kubus
// sisi kubus a =9 sisi kubus b = 4

// $sisi_a = 9;
// $sisi_b = 4;

// $volume_a = $sisi_a *

function Volumekubus($a, $b) {
    $volume_a = $a * $a * $a ;
    $volume_b = $b * $b * $b ;
    $total = $volume_a + $volume_b ;

    return $total ;
}

echo Volumekubus(9, 4);

?>
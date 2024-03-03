<?php

function urutanAngka($angka)
{
    $a = 1 ;
    for ($i = 1 ; $i <= $angka ; $i++) {
        for ($j = 1 ; $j <= $i ; $j++) {
            echo $a++ . " " ;
        }
        echo "<br>" ;
    }
}

echo urutanAngka(5) ;
?>
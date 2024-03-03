<?php

function Cetakangka($angka) {

    for ($i = 1; $i <= $angka; $i++){
        for ($j = 1 ; $j <= $i ; $j++) {
            echo $j . " " ;
        }
        echo "<hr>" ;     
    }       
}

echo Cetakangka(20);

?>
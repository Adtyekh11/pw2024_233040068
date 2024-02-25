<style>
    .box_hitam, .box_putih {
        display: inline-block;
        width: 50px;
        height: 50px;
        line-height: 50px;
        background-color: #fff;
        border: 1.2px solid black;
    }
    .box_hitam {
        background-color: black;
    }
</style>


<?php
for ($i = 1 ; $i <= 5 ; $i++) {
    for ($col = 1 ; $col <= 5 ; $col++) {
        $icol = $i + $col ;
        if ($icol % 2 == 0) {
            echo "<div class ='box_hitam'></div>" ;
        }
    else {
        echo "<div class ='box_putih'></div>" ;
    }
    }
    echo "<br>" ;
    
}
<style>
    .box {
        display: inline-block;
        width: 50px;
        height: 50px;
        border: 1px solid black;
        text-align: center;
        background-color: salmon;
        line-height: 50px;
    }
</style>


<?php

for ($i = 10 ; $i >= 1 ; $i--) {
    for ($col = 1 ; $col <= $i ; $col++) {
        echo "<div class ='box'> $col </div>" ;
    }
    echo "<br>" ;
}

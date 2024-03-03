<?php


// menghitung luas lingkaran

echo "<h4>Menghitung Luas Lingkaran</h4>" ;
function Luaslingkaran($r) {
    $L = 3.14 * $r * $r ;
    echo "jari-jari = $r  cm.<br>" ;
    echo "Luas lingkaran = $L cm<sup>2</sup>" ;
    return $L ;


}



Luaslingkaran(10) ;
echo "<hr>" ;



// menghitung keliling lingkaran

echo "<h4>Menghitung Keliling Lingkaran</h4>" ;
function hitungkelilinglingkaran($r)

{

    $K = 2 * 3.14 * $r ;
    echo "jari-jari = $r cm. <br>" ;
    echo "keliling lingkaran = $K cm" ;
    return $K ;
}


hitungkelilinglingkaran(20) ;
echo "<hr>" ;

?>
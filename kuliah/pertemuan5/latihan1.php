<?php

// 1. membuat array
$hari = array("Senin", "Selasa", "Rabu") ;
$bulan = ["Januari", "Febuari", "Maret"] ;
$mhs = ["Aditya", 3.2, false] ;

// 2. mencetak array (1)
// cetak 1 nilai menggunakan index
echo $hari[0] ;
echo "<br>" ;

echo $bulan [2] ;
echo "<br>" ;

echo $mhs[1];
echo "<hr>" ;

// cetak seluruh isi array
// var_dumb() atau print_r()
// digunakan untuk debugging
var_dump($hari) ;
echo "<br>" ;

print_r($bulan) ;
echo "<br>" ;

var_dump($mhs) ;
echo "<hr>" ;

// 3. manipulasi array
// menambha isi array
// diakhir : [] atau array_push()
$hari[] = "kamis" ;
$hari[] = "jumat" ;
print_r($hari) ;
echo "<br>" ;

array_push($bulan, "April", "Mei") ;
print_r($bulan) ;
echo "<br>" ;

// diawal array : array_unshift()
array_unshift($mhs, "3.2") ;
print_r($mhs) ;
echo "<hr>" ;

// menghapus isi array
// dibelakang : array_pop()
array_pop($hari) ;
print_r($hari) ;
echo "<br>" ;


// didepan : array_shift()
array_shift($bulan) ;
print_r($bulan) ;


// 4. mencetak array (2)

?>
<?php

$mahasiswa = [
    [
        "nama" => "Aditya Eka Heriyawan",
        "nrp" => "233040068",
        "email" => "aditheryawan78@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Marsha Lenathea",
        "nrp" => "23304001",
        "email" => "marsha@gmail.com",
        "jurusan" => "Kedokteran",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Kiboy Algharo",
        "nrp" => "23304002",
        "email" => "Kiboy@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "3.jpg"
    ],
    [
        "nama" => "Sasuke Darmawan",
        "nrp" => "23304003",
        "email" => "Sasuke@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "4.jpg"
    ],
    [
        "nama" => "Qibil Rizal",
        "nrp" => "23304004",
        "email" => "Qibil@gmail.com",
        "jurusan" => "Seni Musik",
        "gambar" => "5.jpg"
    ],
    [
        "nama" => "Ultraman Nexus",
        "nrp" => "23304005",
        "email" => "Ultraman@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "6.jpg"
    ],
    [
        "nama" => "Ahmad Miunz",
        "nrp" => "23304006",
        "email" => "Ahmad@gmail.com",
        "jurusan" => "Sastra Inggris",
        "gambar" => "7.jpg"
    ],
    [
        "nama" => "Muned Miunz",
        "nrp" => "23304007",
        "email" => "Muned@gmail.com",
        "jurusan" => "PGSD",
        "gambar" => "8.jpg"
    ],
    [
        "nama" => "Gojo Satoru",
        "nrp" => "23304008",
        "email" => "Gojokiko@gmail.com",
        "jurusan" => "Sastra Jepang",
        "gambar" => "9.jpg"
    ],
    [
        "nama" => "Geto Suguru",
        "nrp" => "23304009",
        "email" => "Getosuguru@gmail.com",
        "jurusan" => "Sastra Arab",
        "gambar" => "10.jpg"
    ],

]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"] ; ?>">
            <li>Nama : <?= $mhs["nama"] ;?></li>
            <li>Nrp : <?= $mhs["nrp"] ;?></li>
            <li>Email : <?= $mhs["email"] ;?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ;?></li>
        </li>
    </ul>
    <?php endforeach ?>
    
</body>
</html>
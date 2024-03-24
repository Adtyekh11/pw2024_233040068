<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6b</title>

    <style>
        .box2,
        .box{
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color:aqua;
            color: black;
            text-align: center;
            line-height: 20px;
            border: 1px solid black;
            margin: 5px;
        }

        .box2{
            background-color:aliceblue;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="angka">
        <input type="submit" value="kirim">
    </form>
    <br>
    <?php
    if (isset($_POST["angka"])){
        $angka = $_POST["angka"];
        for ($i = $angka; $i >= 1; $i--){
        for ($j = 1; $j <= $i; $j++) {
            if ($i % 2 == 0) {
            echo "<div class='box'>$i</div>";
        }   else{
                echo "<div class='box2'>$i</div>";
        }
    }
        echo "<br>";
}
}else{

}
?>
    
</body>
</html>
   
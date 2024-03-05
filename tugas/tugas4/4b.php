<?php

$komponen = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 4</title>
</head>
<body>
    <h3>Macam-Macam Perangkat Keras Komputer</h3>
<ol>
        <?php for($i = 0 ; $i < count($komponen) ;  $i++)  { ?>
            <li><?php echo $komponen[$i] ; ?> </li>
            <?php } ?>
</ol><br>


    <h3>Macam-Macam Perangkat Keras Komputer baru</h3>
    <ol>    
        <?php array_push($komponen, "Card Reader", "Modem"); asort($komponen);?>
        <?php foreach($komponen as $kp):?>
            <li><?= $kp; ?></li>
        <?php endforeach; ?>
</ol><br>

</body>
</html>
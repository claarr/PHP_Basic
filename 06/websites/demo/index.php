<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Rekomendasi Drama Korea</h1>

    <?php 
        // Menampilkan jumlah perulangan
        $drakors = [
            "Replay 1988",
            "Hospital Playlist",
            "Taxi Driver"
        ];
    ?>

    <ul>
        <!-- <li>Replay 1988</li>
        <li>Hospital Playlist</li>
        <li>Taxi Driver</li> -->

        <!-- MENGGUNAKAN FOREACH -->
        <!-- <?php 
            foreach ($drakors as $drakor){ //<- Perulangan khusus untuk memproses array
                echo "<li> Hello </li>"; // <- outputnya nanti akan menampilkan Hello 3, karena perulangan di atas ada 3 kali
                echo "<li> $drakor </li>";
                echo "<li> $drakor ™ </li>";
                echo "<li> {$drakor}™ </li>";
                echo "<li><div> $drakor </div></li>";
            }
        ?> -->

        <!-- MENGGUNAKAN ENDFOREACH -->
        <?php foreach ($drakors as $drakor) : ?>
            <!-- <li>Hello There</li> //outputnya nanti akan menampilkan Hello 3, karena perulangan di atas ada 3 kali --> 
            <!-- <li><?php echo $drakor; ?></li> -->
            <li><?= $drakor; ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

    <h1>
        <?php 
            // echo "Hello, " . "World"; //untuk spasi diantara 2 parameter atau pengganti +
            
            $greeting = "Hello,"; // variabel
            // echo $greeting . " " . "Everybody!"; // <- cara lain untuk spasi
            // echo $greeting . " Everybody!"; // <- cara lain untuk spasi
            // echo "$greeting Everybody!" // <- cara lain untuk menampilkan, variabel dijadikan satu dengan string dan terakhir tanpa titik koma
            // echo "$greeting Everybody!"; <- cara lain untuk menampilkan, variabel dijadikan satu dengan string dan terakhir menggunakan titik koma
            echo '$greeting Everybody!'; // <- menggunakan petik satu, hasilnya akan muncul $greeting Everybody!
            
        ?>
    </h1>
    
</body>
</html>
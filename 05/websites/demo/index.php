<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Dark Matter"; // variabel

        // <- BOOLEAN
        // $read = true; // 
        $read = false; // 
        
        // <- CONDITIONAL
        if($read){ // Taruh pertanyaan kamu disini
            $message = "You have read $name";
        }else{
            $message = "You have NOT read $name";
        }
    ?>

    <h1>
        <!-- TAMPILAN -->
        <!-- You have read "<?php echo $name; ?>" -->
        <!-- <?php echo $message; ?> -->
        <?= $message; ?>
    </h1>

</body>
</html>
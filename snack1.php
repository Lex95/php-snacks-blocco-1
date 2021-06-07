<?php

$partite = [
    [
        "squadraCasa" => "Rossi",
        "squadraOspite" => "Bianchi",
        "puntiCasa" => rand(0, 50),
        "puntiOspite" => rand(0, 50)
    ],
    [
        "squadraCasa" => "Verdi",
        "squadraOspite" => "Neri",
        "puntiCasa" => rand(0, 50),
        "puntiOspite" => rand(0, 50)
    ],
    [
        "squadraCasa" => "Blu",
        "squadraOspite" => "Azzurri",
        "puntiCasa" => rand(0, 50),
        "puntiOspite" => rand(0, 50)
    ],
    [
        "squadraCasa" => "Marroni",
        "squadraOspite" => "Rosa",
        "puntiCasa" => rand(0, 50),
        "puntiOspite" => rand(0, 50)
    ],
    [
        "squadraCasa" => "Viola",
        "squadraOspite" => "Arancioni",
        "puntiCasa" => rand(0, 50),
        "puntiOspite" => rand(0, 50)
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
<ul>
    <?php
    
    for ($i = 0; $i < count($partite);   $i++) {
        ?>
        <li>
            <?php echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiCasa"] . "-" . $partite[$i]["puntiOspite"] ?>
        </li>
        <?php
    }
    
    ?>
</ul>
</body>
</html>
<?php

$partite = [
    [
        "squadraCasa" => "Rossi",
        "squadraOspite" => "Bianchi",
    ],
    [
        "squadraCasa" => "Verdi",
        "squadraOspite" => "Neri",
    ],
    [
        "squadraCasa" => "Blu",
        "squadraOspite" => "Azzurri",
    ],
    [
        "squadraCasa" => "Marroni",
        "squadraOspite" => "Rosa",
    ],
    [
        "squadraCasa" => "Viola",
        "squadraOspite" => "Arancioni",
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
            <?php echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . rand(0, 50) . "-" . rand(0, 50) ?>
        </li>
        <?php
    }
    
    ?>
</ul>
</body>
</html>
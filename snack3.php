<?php

$posts = [

    '10/05/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Andrea Lega',
            'text' => "Oggi c'è il sole!"
        ],
        [
            'title' => 'Post 2',
            'author' => 'Andrea Lega',
            'text' => 'Ho mangiato un gelato'
        ],
    ],
    '20/05/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Andrea Lega',
            'text' => 'Ho incontrato Marco'
        ]
    ],
    '30/05/2021' => [
        [
            'title' => 'Post 4',
            'author' => 'Andrea Lega',
            'text' => 'Oggi piove!'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Andrea Lega',
            'text' => 'Ho manigato la pasta'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Andrea Lega',
            'text' => 'Ho incontrato Giulia'
        ]
    ],
];

$dates = array_keys($posts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <?php
    for ($i = 0; $i < count($posts); $i++) {
        ?>
        <h2><?php echo $dates[$i] ?></h2>
        <ul>
            <?php
            for ($j = 0; $j < count($posts[$dates[$i]]); $j++) {
                ?>
                <li><?php echo $posts[$dates[$i]][$j]["text"] ?></li>
                <?php
            }
            ?>
        </ul>
        <?php
    }
    ?>
</body>
</html>
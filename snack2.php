<?php

$nome = $_GET["name"];
$mail = $_GET["mail"];
$eta = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php
    if(strlen($nome) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($eta)) {
        ?>
        <h1>Accesso Riuscito</h1>
        <?php
    } else {
        ?>
        <h1>Accesso Negato</h1>
        <?php
    }
    ?>
</body>
</html>
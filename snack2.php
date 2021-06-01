<?php

$nome = $_GET["name"];
$mail = $_GET["mail"];
$eta = $_GET["age"];
/*
meglio fare dei controlli nel caso in cui i query params non siano presenti
$nome = "";

if (key_exixsts("name", $_GET)) {
    $nome = $_GET["name"]; 
}

e uguale per ogni altro parametro
oppure condizione con if ternario come visto a lezione
$nome = $_GET["name"] ? $_GET["name"] : "";
*/

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
        // per controllare che il punto sia dopo la @ => strpos($mail, ".", strpos($mail, "@"))
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
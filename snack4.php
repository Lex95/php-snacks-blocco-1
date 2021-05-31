<?php

$array = [];

while (count($array) < 15) {
    $temp = rand(0, 100);
    if (!in_array($temp, $array)) {
        $array[] = $temp;
    }
}
var_dump($array);

?>
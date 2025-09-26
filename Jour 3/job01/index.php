<?php

$table = [
    "nombre" => 200,
    "nombre2" => 204,
    "nombre3" => 173,
    "nombre4" => 98,
    "nombre5" => 171,
    "nombre6" => 404,
    "nombre7" => 459
];

foreach ($table as $key => $value) {
    if ($value % 2 == 0) {
        echo  $key. ' - ' . $value . " est pair<br />";
    } else {
        echo  $key. ' - ' . $value . " est impair<br />";
    }
}
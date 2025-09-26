<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    echo $str[$i];
}
<?php 
$hauteur = 5;
for ($i = 0; $i < $hauteur; $i++) {
    $space = $hauteur - $i;
    echo str_repeat("&nbsp;", $space);
    for ($j = 0; $j <= (1*$i); $j++) {
        echo "*";
    }
    echo "<br />";
}
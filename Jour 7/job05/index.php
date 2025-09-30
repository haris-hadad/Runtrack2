<?php

$str = "Bonsoir" ;
$char = "o";


function ocurrences($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i]== $char) {
            $count++;
        }
       
    }
    echo "si str = “Bonsoir” et char = 'o' alors le nombre d'occurrences de $char dans
$str sera : $count" ;
}
echo ocurrences($str, $char);

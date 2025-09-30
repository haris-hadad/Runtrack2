<?php
$leet = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'G' => '0', 'g' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];
    $str ="SALUT haris";


    
function lettSpeak($leet,$str)
{   
    
    $newStr = "";

    for ($i = 0; $i < strlen($str); $i++) {
    

        if (array_key_exists($str[$i], $leet)) {
            $newStr .= $leet[$str[$i]];
        } else {
            $newStr .= $str[$i];
        }
    }
    return  $newStr;
}
    echo lettSpeak($leet,$str);

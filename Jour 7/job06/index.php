<?php
$lettres = [
        'a' => '4',
        'b' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        'o' => '0',
        's' => '5',
        't' => '7'
    ];
    $str ="bonjour haris";


    
function lettSpeak($lettres,$str)
{   
    
    $newStr = "";

    for ($i = 0; $i < strlen($str); $i++) {
    

        if (array_key_exists($str[$i], $lettres)) {
            $newStr .= $lettres[$str[$i]];
        } else {
            $newStr .= $str[$i];
        }
    }
    return  $newStr;
}
    echo lettSpeak($lettres,$str);

<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$firstchar = $str[0];
$lenght = strlen($str);

$newstr = "";

for ($i = 0; $i < $lenght; $i++) {
    if ($i < $lenght - 1) {
        $newstr .= $str[$i + 1];
    } else {
        $newstr .= $firstchar . "<br />";
    }
}

echo $newstr;
?>
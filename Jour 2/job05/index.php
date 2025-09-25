<?php
for ($n = 2; $n <= 1000; $n++) {
    $diviseurs = 0;

    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $diviseurs++;
        }
    }

    if ($diviseurs == 2) {
        echo $n . "<br />";
    }
}
?>
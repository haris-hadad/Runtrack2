<?php
for ($i = 1; $i <= 1337; $i++) {
    if ($i !== 26 && $i !== 37 && $i !== 88 && $i !== 1111 && $i !== 3233) {
        echo $i . "<br />";
    } 
}
// boucle alternative avec in_array
// for ($i = 1; $i <= 1337; $i++) {
//     if (!in_array($i, [26, 37, 88, 1111, 3233]) ) {
//         echo $i . "<br />";
//     } 
// }
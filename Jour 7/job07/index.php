<?php
function gras($str) {
    return preg_replace('/\b([A-Z][a-zA-Z]*)\b/', '<b>$1</b>', $str);
}

function cesar($str, $decalage) {
    $result = '';
    for($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? ord('A') : ord('a');
            $result .= chr((ord($char) - $base + $decalage) % 26 + $base);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function plateforme($str) {
    return preg_replace('/\b(\w*me)(?=\s|$)/', '$1_', $str);
}

$result = '';
if(isset($_GET['str']) && isset($_GET['fonction'])) {
    $str = $_GET['str'];
    $fonction = $_GET['fonction'];
    $decalage = isset($_GET['decalage']) ? (int)$_GET['decalage'] : 2; 

    if ($fonction == 'gras') {
        $result = gras($str);
    } elseif ($fonction == 'cesar') {
        $result = cesar($str, $decalage);
    } elseif ($fonction == 'plateforme') {
        $result = plateforme($str);
    } else {
        $result = "Fonction inconnue.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job 07</title>
</head>
<body>
    <form method="get">
        <label>Entrez votre texte :</label><br>
        <input type="text" name="str" required><br><br>

        <label>Choisissez une fonction :</label>
        <select name="fonction" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select><br><br>

        <label>Décalage (pour César) :</label>
        <input type="number" name="decalage" id="decalage" value="2" min="1" max="25"><br><br>

        <button type="submit">Valider</button>
    </form>

    <?php if ($result): ?>
        <p>Résultat : <?= $result ?></p>
    <?php endif; ?>
</body>
</html>
    

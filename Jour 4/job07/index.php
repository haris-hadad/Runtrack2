<html>
<head>
    <meta charset="utf-8">
    <title>Job07</title>
</head>
<body>
<form action="" method="GET">
    <input type="text" name="largeur" placeholder="Largeur">
    <input type="text" name="hauteur" placeholder="Hauteur">
    <input type="submit" value="Envoyer">
</form>
</body>
</html>

<?php
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    if (empty($_GET['largeur']) || empty($_GET['hauteur'])) {
        echo "<pre>Veuillez préciser la largeur et la hauteur</pre>";
        exit;
    }

    $largeur = (int) $_GET['largeur'];
    $hauteur = (int) $_GET['hauteur'];


    echo "<pre>";

    for ($i = 0; $i < $largeur / 2; $i++) {
        echo str_repeat(" ", ($largeur - 2) - $i);
        echo "/";
        echo str_repeat(" ", $i * 2);
        echo "\\\n";
    }

    echo "/" . str_repeat( "-" , $largeur + 1) . "\\" . "\n";

    for ($i = 10; $i < $hauteur - 7; $i++) {
        echo "| " . str_repeat(" ", $largeur) . "|" . "\n";
    }

    echo str_repeat("-"  . "-", $largeur - 1) . "\n";
    echo "</pre>";
}
?>
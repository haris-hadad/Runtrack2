<form action=""method = "GET">
    <input type="text" name="nombre">
    <input type="submit" value="Envoyer">
</form>
<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    if ($nombre % 2 == 0) {
        echo "Le nombre " . htmlspecialchars($nombre) . " est pair.";
    } else {
        echo "Le nombre " . htmlspecialchars($nombre) . " est impair.";
    }
}


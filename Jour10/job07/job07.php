<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

$sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur SQL : " . $mysqli->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>superficie_totale</th></tr>";

    $row = $result->fetch_assoc();
    echo "<tr><td>" . htmlspecialchars($row['superficie_totale']) . "</td></tr>";

    echo "</table>";
} else {
    echo "Aucune donnée trouvée.";
}

$mysqli->close();
?>
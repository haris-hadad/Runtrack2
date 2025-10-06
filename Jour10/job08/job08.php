<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

$sql = "SELECT IFNULL(SUM(capacite), 0) AS capacite_totale FROM salles";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur SQL : " . $mysqli->error);
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>capacite_totale</th></tr>";

$row = $result->fetch_assoc();
echo "<tr><td>" . htmlspecialchars($row['capacite_totale']) . "</td></tr>";

echo "</table>";

$mysqli->close();
?>
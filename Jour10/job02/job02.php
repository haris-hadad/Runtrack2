<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

$query = "SELECT nom, capacite FROM salles";
$result = $mysqli->query($query);

echo "<table border='1'>";
echo "<tr><th>nom</th><th>capacite</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['nom']}</td><td>{$row['capacite']}</td></tr>";
}

echo "</table>";

$mysqli->close();
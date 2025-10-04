<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur SQL : " . $mysqli->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nombre d'étudiants</th></tr>";

    $row = $result->fetch_assoc();
    echo "<tr><td>" . htmlspecialchars($row['nb_etudiants']) . "</td></tr>";

    echo "</table>";
} else {
    echo "Aucun étudiant trouvé.";
}

$mysqli->close();
?>
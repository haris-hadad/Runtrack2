<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");

if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

$query = "SELECT nom, capacite FROM salles";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    echo "<tr>
            <th>Nom</th>
            <th>Capacité</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['nom']) . "</td>
                <td>" . htmlspecialchars($row['capacite']) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Aucune salle trouvée.";
}

$mysqli->close();
?>
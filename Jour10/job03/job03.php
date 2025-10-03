<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE LOWER(sexe) = 'f'";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur dans la requête SQL : " . $mysqli->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de naissance</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['prenom']) . "</td>
                <td>" . htmlspecialchars($row['nom']) . "</td>
                <td>" . htmlspecialchars($row['naissance']) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Aucune étudiante trouvée.";
}

// 4️⃣ Fermer la connexion
$mysqli->close();
?>
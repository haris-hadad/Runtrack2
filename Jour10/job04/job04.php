<?php
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

$sql = "SELECT prenom, nom, naissance, sexe, email FROM etudiants WHERE LOWER(prenom) LIKE 'T%'";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur dans la requête SQL : " . $mysqli->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th><th>sexe</th><th>email</th></tr>";

    $result->data_seek(0);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['prenom']) . "</td>
                <td>" . htmlspecialchars($row['nom']) . "</td>
                <td>" . htmlspecialchars($row['naissance']) . "</td>
                <td>" . htmlspecialchars($row['sexe']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>Aucun étudiants trouvée.</p>";
}

$mysqli->close();
?>
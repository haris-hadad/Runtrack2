<?php
$mysqli = new mysqli ('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

$sql = "SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) < 18";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur SQL : " . $mysqli->error);
}

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    $fields = $result->fetch_fields();
    echo "<tr>";
    foreach ($fields as $field) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>" . htmlspecialchars($data) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun étudiant de moins de 18 ans trouvé.";
}
$mysqli->close();
?>
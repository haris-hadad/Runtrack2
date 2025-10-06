<?php

$mysqli = new mysqli ('localhost', 'root', '', 'jour09');

if (!$mysqli) {
    die("Connexion échouée : " . mysqli_connect_error());
}

$sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    
    echo "<thead><tr>";
    $fields = mysqli_fetch_fields($result);
    foreach ($fields as $field) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }
    echo "</tr></thead><tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars(round($value, 2)) . "</td>";
        }
        echo "</tr>";
    }
    
    echo "</tbody></table>";
} else {
    echo "Aucune donnée trouvée.";
}

mysqli_close($mysqli);
?>
<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");


$result = $mysqli->query("SELECT * FROM etudiants");

if ($result && $result->num_rows > 0) {
    echo "<table border='1'>";
    $fields = [];
    while ($field = $result->fetch_field()) {
        if ($field->name !== 'id') {
            $fields[] = $field->name;
        }
    }
    echo "<thead><tr>";
    foreach ($fields as $name) {
        echo "<th>" . htmlspecialchars($name) . "</th>";
    }
    echo "</tr></thead>";

    echo "<tbody>";
    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($fields as $name) {
            echo "<td>" . htmlspecialchars($row[$name]) . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
    echo "<thead><tr>";
    while ($field = $result->fetch_field()) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }
    echo "</tr></thead>";

    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "Aucun résultat trouvé.";
}
?>
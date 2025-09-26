<?php
if (!empty($_GET)) {
    echo "<h2>Arguments GET reçus :</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

    foreach ($_GET as $key => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($key) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>Aucun argument GET n'a été envoyé.</p>";
}
?>

<form method="get" action="">
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <label>Âge : <input type="text" name="age"></label><br>
    <input type="submit" value="Envoyer">
</form>
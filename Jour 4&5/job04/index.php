<?php
if (!empty($_POST)) {
    echo "<h2>Arguments POST reçus :</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

   

    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($key) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
?>
    <form action="" method="post">
        <label>prenom:<input type="text" name="prenom"></label><br>
        <label>nom:<input type="text" name="nom"></label><br>
        <input type="submit" value="Envoyer">
    </form>
<?php

$variables = [
    'boolean' => true,
    'entier' => 30,
    'chaine de caratère' => "Bonjour",
    'notes' => 10.5
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
      </thead>";
echo "<tbody>";


foreach ($variables as $nom => $valeur) {

    $type = gettype($valeur);



    echo "<tr>
            <td>$type</td>
            <td>$nom</td>
            <td>$valeur</td>
          </tr>";
}

echo "</tbody>";
echo "</table>";
?>
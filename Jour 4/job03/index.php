<DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur d'arguments POST</title>
</head>
<body>
    <form action="" method="post">
        <label>Nom:<input type="text" name="nom"></label><br>
        <label>Prénom:<input type="text" name="prenom"></label><br>
        <label>âge:<input type="text" name="age"></label><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
<?php
$arguments=[];
if (isset ($_POST) ) {
    foreach ($_POST as $key => $value) {
        if (!empty($value)){

            $arguments[] = $value;
        }
    }
    $nombreArguments = count($arguments);
    echo "Le nombre d'arguments POST envoyé est : $nombreArguments";
}
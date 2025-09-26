<form action=""method = "POST">
<input type="text" name="prenom">
<input type="text" name="password">
<input type="submit" value="Envoyer">
</form>
<?php


if (isset($_POST['prenom']) && isset($_POST['password'])) {
    $name = $_POST['prenom'];
    $password = $_POST['password'];
    if ($name === "John" && $password === "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
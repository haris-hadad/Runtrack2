<?php
$cookie_name = "nbvisites";

if (isset($_POST['reset'])) {
    setcookie($cookie_name, 0, time() - 3600);
    $nbvisites = 0;
} else {
    if (isset($_COOKIE[$cookie_name])) {
        $nbvisites = $_COOKIE[$cookie_name] + 1;
    } else {
        $nbvisites = 1;
    }
    
    setcookie($cookie_name, $nbvisites, time() + 30*24*3600);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <h2>Nombre de visites :</h2>
    <p><?= $nbvisites ?></p>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
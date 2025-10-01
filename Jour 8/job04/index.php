<?php

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600, '/');
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}


if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + 3600, '/');
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job04</title>
</head>
<body>
<?php if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])): ?>
    <p>Bonjour <?= htmlspecialchars($_COOKIE['prenom']) ?> !</p>
    <form method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
<?php else: ?>
    <form method="post">
        <input type="text" name="prenom" required placeholder="Votre prénom">
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php endif; ?>
</body>
</html>
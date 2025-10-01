<?php
session_start();

if (isset($_POST['reset'])) {
    unset($_SESSION['grille'], $_SESSION['joueur'], $_SESSION['message']);
}

if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['joueur'] = 'X';
    $_SESSION['message'] = '';
}

if (isset($_POST['case']) && empty($_SESSION['message'])) {
    list($i, $j) = explode('_', $_POST['case']);
    if ($_SESSION['grille'][$i][$j] === '-') {
        $_SESSION['grille'][$i][$j] = $_SESSION['joueur'];

        if (verifVictoire($_SESSION['grille'], $_SESSION['joueur'])) {
            $_SESSION['message'] = $_SESSION['joueur'] . " a gagné !";
        } elseif (plein($_SESSION['grille'])) {
            $_SESSION['message'] = "Match nul !";
        } else {
            $_SESSION['joueur'] = $_SESSION['joueur'] === 'X' ? 'O' : 'X';
        }
    }
}

function verifVictoire($grille, $joueur) {
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] === $joueur && $grille[$i][1] === $joueur && $grille[$i][2] === $joueur) return true;
        if ($grille[0][$i] === $joueur && $grille[1][$i] === $joueur && $grille[2][$i] === $joueur) return true;
    }
    if ($grille[0][0] === $joueur && $grille[1][1] === $joueur && $grille[2][2] === $joueur) return true;
    if ($grille[0][2] === $joueur && $grille[1][1] === $joueur && $grille[2][0] === $joueur) return true;
    return false;
}

function plein($grille) {
    foreach ($grille as $ligne) {
        foreach ($ligne as $case) {
            if ($case === '-') return false;
        }
    }
    return true;
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Morpion</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 50px; height: 50px; text-align: center; }
        button { width: 100%; height: 100%; font-size: 1.5em; }
    </style>
</head>
<body>
    <h2>Jeu du Morpion</h2>
    <?php if (!empty($_SESSION['message'])): ?>
        <p><b><?= $_SESSION['message'] ?></b></p>
        <form method="post">
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </form>
        <?php
        unset($_SESSION['grille'], $_SESSION['joueur'], $_SESSION['message']);
        ?>
    <?php else: ?>
        <form method="post">
            <table border="1" cellpadding = "8" cellspaciing = "0">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < 3; $j++): ?>
                            <td>
                                <?php if ($_SESSION['grille'][$i][$j] === '-'): ?>
                                    <button type="submit" name="case" value="<?= $i . '_' . $j ?>">-</button>
                                <?php else: ?>
                                    <?= $_SESSION['grille'][$i][$j] ?>
                                <?php endif; ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </table>
            <br>
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </form>
        <p>Joueur courant : <?= $_SESSION['joueur'] ?></p>
    <?php endif; ?>
</body>
</html>
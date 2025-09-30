<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 1;
} else {
    $_SESSION['nbvisites']++;
}

echo "Vous êtes le " . $_SESSION['nbvisites'] . " visiteur de ce site !";
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

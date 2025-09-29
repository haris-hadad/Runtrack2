<?php
$style = 'style1';
if (isset($_GET['style']) && in_array($_GET['style'], ['style1', 'style2', 'style3'])) {
    $style = $_GET['style'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire avec styles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/<?php echo $style; ?>.css">
</head>
<body>
    <form>
        <div class="form">
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="text" name="nom" placeholder="Nom">
            <input type="submit" value="Envoyer">
        </div>
    </form>

    <form method="GET">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?php if($style=='style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if($style=='style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if($style=='style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <input type="submit" value="Appliquer">
    </form>
</body>
</html>
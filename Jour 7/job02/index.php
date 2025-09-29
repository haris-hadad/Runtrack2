<?php
$jour = isset($_GET['jour']) ? $_GET['jour'] : '1';

function bonjour($jour) {
    if ($jour == 2) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}
?>


<?php
echo (bonjour($jour)) . "<br>";
echo "1 + 1 = ? <br>";
 ?>

 <form method="GET">
    <label for="jour"></label>
    <select name="jour" id="jour">
        <option value="1" <?php if($jour=='1') echo 'selected'; ?>>Nombre 1</option>
        <option value="2" <?php if($jour=='2') echo 'selected'; ?>>Nombre 2</option>
        <option value="3" <?php if($jour=='3') echo 'selected'; ?>>Nombre 3</option>
    </select>
    <input type="submit" value="Appliquer">
</form>
<?php
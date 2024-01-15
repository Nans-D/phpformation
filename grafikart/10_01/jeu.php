<?php
$aDeviner = round(rand(0, 150));
$erreur = null;
$success = null;
$value = null;
if (isset($_POST['chiffre'])) {
    $value = (int)$_POST['chiffre'];
    if ($value > $aDeviner) {
        $erreur = "Votre chiffre est trop grand";
    } elseif ($value < $aDeviner) {
        $erreur = "Votre chiffre est trop petit";
    } else {
        $success = "Bravo ! Le bon nombre était $aDeviner";
    }
}
require 'elements/header.php';
?>
<form action="jeu.php" method="POST">
    <?php if ($erreur) : ?>
        <div class="alert alert-danger">
            <?= $erreur ?>
        </div>
    <?php elseif ($success) : ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
    <?php endif ?>
    <input type="number" name="chiffre" placeholder="Entre 0 et 1000" value="<?= $value ?>">
    <button type="submit">Deviner</button>
</form>
<?php require 'elements/footer.php';
?>
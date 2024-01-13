<?php
$nom = null;
if (!empty($_COOKIE['user'])) {
    $nom = $_COOKIE['user'];
}
if (!empty($_POST["nom"])) {
    setcookie('user', $_POST["nom"]);
    $nom = $_POST['nom'];
}
require 'header.php'; ?>

<?php if ($nom) : ?>
    <?= 'Bonjour ' . htmlentities($nom) ?>
<?php else : ?>
    <form action="" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" name="nom" placeholder="Entrez votre nom d'utilisateur">
        </div>
        <button class="btn btn-primary" type="submit">Se connecter</button>
    </form>
<?php endif ?>

<?php require 'footer.php'; ?>
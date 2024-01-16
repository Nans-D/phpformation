<?php
$erreur = null;
$password = '$2y$10$9FKw5.0hvOrADmLG.YXkd.3TS/JEXxyUr4JLkU.npnkp36q482gha';
if (!empty($_POST['user']) && !empty($_POST['password'])) {
    if ($_POST['user'] === 'nans' && password_verify($_POST['password'], $password)) {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /PHP/grafikart/10_01/dashboard.php');
        exit;
    } else {
        $erreur = 'Identifiants incorrects';
    }
}

require_once 'functions/auth.php';
if (est_connecte()) {
    header('Location: /PHP/grafikart/10_01/dashboard.php');
    exit;
}

require 'elements/header.php';
?>

<?php if ($erreur) : ?>
    <div class="alert alert-danger"><?= $erreur ?></div>
<?php endif ?>

<form action="" method="post">
    <div class="form-group mb-4">
        <input class="form-control mb-4" type="text" name="user" placeholder="Entrez votre nom d'utilisateur">
    </div>
    <div class="form-group mb-4">
        <input class="form-control mb-4" type="password" name="password" placeholder="Entrez votre mot de passe">
    </div>
    <button class="btn btn-primary" type="submit">Se connecter</button>
</form>
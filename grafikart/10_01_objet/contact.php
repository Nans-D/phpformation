<?php
$title = "Nous contacter";
require_once 'functions.php';
require_once 'config.php';
// code brut
$heure = (int)date('G', time());
$creneaux = CRENEAUX;
$ouvert = in_creneaux($heure, $creneaux);

// code dynamique user

$jour = isset($_GET['jour']) ? (int)$_GET['jour'] : null;
$heure2 = isset($_GET["heure"]) ? $_GET["heure"] : null;

// Convertissez $heure en entier (si ce n'est pas null)
$heure2 = $heure2 !== null ? (int)$heure2 : null;

// Appelez getTime() seulement si $jour et $heure ne sont pas null
if ($jour !== null && $heure2 !== null) {
    $ouvertUser = getTime($jour, $heure2, $creneaux);
} else {
    $ouvertUser = false; // ou toute autre valeur par défaut
}

// MA SOLUTION
// $creneaux = creneaux_html(CRENEAUX, JOURS);

require 'elements/header.php'
?>

<div class="row">
    <div class="col-md-8 border">
        <h2>Nous contacter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus veniam debitis dolorum omnis alias, iusto explicabo facilis voluptas nobis qui! Temporibus eaque, voluptatum in quidem dolores maxime illo nobis.</p>
    </div>
    <div class="col-md-4 border">
        <h2>Horaire d'ouverture</h2>
        <form action="" method="get">
            <label for="">Jour : </label>
            <?= select('jour', $jour, JOURS) ?>
            <label for="">Heure : </label>
            <input type="time" name="heure">
            <button type="submit">Envoyer</button>

        </form>
        <?php if ($jour === null || $heure2 === null) : ?>
            <div>Entrez une date</div>
        <?php else : ?>
            <?php if ($ouvertUser) : ?>

                <div class="alert alert-success">
                    <?= "Le magasin est ouvert" ?>

                </div>
            <?php else : ?>
                <div class="alert alert-danger">

                    <?= "Le magasin est fermé" ?>
                </div>
            <?php endif ?>
        <?php endif ?>
        <div>
            <?php if ($ouvert) : ?>

                <div class="alert alert-success">
                    <?= "Le magasin est ouvert à votre actuelle : {$heure}h" ?>

                </div>
            <?php else : ?>
                <div class="alert alert-danger">

                    <?= "Le magasin est fermé à votre actuelle : {$heure}h" ?>
                </div>
            <?php endif ?>
            <div>
                <ul>
                    <?php foreach (JOURS as $k => $jour) : ?>
                        <li <?php if ($k + 1 === (int)date('N')) : ?> <?php endif ?>)>
                            <strong><?= $jour . " : " ?></strong>
                            <?= creneaux_html(CRENEAUX[$k]) ?>

                            <!-- MA SOLUTION -->
                            <!-- <?= $creneaux ?> -->
                        </li>
                    <?php endforeach ?>
                </ul>

            </div>
        </div>
    </div>

    <?php require 'elements/footer.php' ?>
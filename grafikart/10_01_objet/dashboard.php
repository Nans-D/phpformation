<?php

require __DIR__ . '/functions/auth.php';
if (!est_connecte()) {
    header('Location: /PHP/grafikart/10_01/login.php');
    exit;
}
require 'functions/compteur.php';

$annee = (int)date('Y');
$annee_selection = empty($_GET["annee"]) ? null : (int)$_GET["annee"];
$mois_selection = empty($_GET["mois"]) ? null : (int)$_GET["mois"];
if ($annee_selection && $mois_selection) {
    $total = (int)nombre_vues_mois($annee_selection, $mois_selection);
    $details = nombre_vues_detail_mois($annee_selection, $mois_selection);
} else {
    $total = lireVue();
}

$mois = [
    '01' => 'janvier',
    '02' => 'février',
    '03' => 'mars',
    '04' => 'avril',
    '05' => 'mai',
    '06' => 'juin',
    '07' => 'juiller',
    '08' => 'aout',
    '09' => 'septembre',
    '10' => 'octobre',
    '11' => 'novembre',
    '12' => 'decembre'
];

require 'elements/header.php' ?>

<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <a class="list-group-item <?= $annee - $i === $annee_selection ? 'active' : ''; ?>" href="dashboard.php?annee=<?= $annee - $i ?>">
                    <?= $annee - $i ?>
                </a>
                <?php if ($annee - $i === $annee_selection) : ?>
                    <div class="list-group">
                        <?php foreach ($mois as $numero => $nom) : ?>
                            <a class="list-group-item <?= (int)$numero === (int)$mois_selection ? 'active' : ''; ?>" href="dashboard.php?annee=<?= $annee_selection ?>&mois=<?= $numero ?>">
                                <?= $nom ?>
                            </a>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            <?php endfor ?>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <strong style="font-size:3em"><?= $total ?></strong>
                Visite<?= $total > 1 ? 's' : '' ?> total
            </div>
        </div>
        <?php if (isset($details) && is_array($details)) : ?>
            <h2>Détails des visites pour le mois</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nombre de visites</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($details as $detail) : ?>
                        <tr>
                            <td><?= $detail['jours'] ?></td>
                            <td><?= $detail['visites'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>

    </div>
</div>



<?php require 'elements/footer.php' ?>
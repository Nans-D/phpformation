<?php
$title = "Nous contacter";
require_once 'functions.php';
require_once 'config.php';

// MA SOLUTION
// $creneaux = creneaux_html(CRENEAUX, JOURS);


require 'header.php'
?>

<div class="row">
    <div class="col-md-8 border">
        <h2>Nous contacter</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus veniam debitis dolorum omnis alias, iusto explicabo facilis voluptas nobis qui! Temporibus eaque, voluptatum in quidem dolores maxime illo nobis.</p>
    </div>
    <div class="col-md-4 border">
        <h2>Horaire d'ouverture</h2>
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

<?php require 'footer.php' ?>
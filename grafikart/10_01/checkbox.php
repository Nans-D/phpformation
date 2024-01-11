<?php

require_once 'functions.php';

$parfums = [
    'fraise' => 4,
    'chocolat' => 5,
    'vanille' => 3
];

$cornets = [
    'pot' => 2,
    'cornet' => 3
];

$supplements = [
    'pepites de chocolat' => 1,
    'chantilly' => 0.5
];

$ingredients = [];
$priceTotal = null;

foreach (['parfum', 'supplement', 'cornet'] as $name) {
    $liste = $name . 's';
    if (isset($_GET[$name])) {
        if (is_array($_GET[$name])) {
            foreach ($_GET[$name] as $value) {
                if (isset($$liste[$value])) {
                    $ingredients[] = $value;
                    $priceTotal += $$liste[$value];
                }
            }
        } else {
            if (isset($_GET[$name])) {
                $value = ($_GET[$name]);
                if (isset($$liste[$value])) {
                    $ingredients[] = $value;
                    $priceTotal += $$liste[$value];
                }
            }
        }
    }
}
require 'header.php'
?>



<form class="mb-5" action="" method="GET">
    <div class="glace-container">
        <h2>Votre glace</h2>
        <ul>
            <?php foreach ($ingredients as $ingredient) : ?>
                <li><?= $ingredient ?></li>
            <?php endforeach ?>
        </ul>
        <div class="total-price">
            <?= $priceTotal . " €" ?>
        </div>
    </div>
    <div class="form-container">
        <div class="choice-container">
            <h3>PARFUMS</h3>
            <?php foreach ($parfums as $parfum => $prix) : ?>
                <div>
                    <?= checkbox('parfum', $parfum, $_GET) ?>
                    <label for="parfum"><?= $parfum . " - " . $prix . "€"  ?></label>
                </div>
            <?php endforeach ?>
            <!-- <div>
                <input type="checkbox" name="parfum[]" value="fraise">
                <label for="parfum">Fraise</label>
            </div>
            <div>
                <input type="checkbox" name="parfum[]" value="vanille">
                <label for="parfum">Vanille</label>
            </div>
            <div>
                <input type="checkbox" name="parfum[]" value="chocolat">
                <label for="parfum">Chocolat</label>
            </div> -->
        </div>
        <div class="choice-container">

            <h3>CORNETS</h3>
            <?php foreach ($cornets as $cornet => $prix) : ?>
                <div>
                    <?= radio('cornet', $cornet, $_GET) ?>
                    <label for="cornet"><?= $cornet . " - " . $prix  . "€" ?></label>
                </div>
            <?php endforeach ?>
            <!-- <div>
                <input type="radio" name="cornets[]" value="pot">
                <label for="cornets[]">Pot</label>
            </div>
            <div>
                <input type="radio" name="cornets[]" value="cornet">
                <label for="cornets[]">Cornet</label>
            </div> -->
        </div>
        <div class="choice-container">

            <h3>SUPPLEMENTS</h3>
            <?php foreach ($supplements as $supp => $prix) : ?>
                <div>
                    <?= checkbox('supplement', $supp, $_GET) ?>
                    <label for="supplement"><?= $supp . " - " . $prix  . "€" ?></label>
                </div>
            <?php endforeach ?>
            <!-- <div>
                <input type="checkbox" name="supplements[]" value="pépites de chocolat">
                <label for="parfum">Pepites de chocolat</label>
            </div>
            <div>
                <input type="checkbox" name="supplements[]" value="chantilly">
                <label for="parfum">Chantilly</label>
            </div>
        -->
        </div>
    </div>
    <div class="btn-center"">
        <button class=" btn btn-primary" type="submit">Envoyer</button>
    </div>

</form>
<pre>

</pre>

<?php require 'footer.php' ?>
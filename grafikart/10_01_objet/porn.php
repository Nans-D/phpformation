<?php
$userAge = null;
if (!empty($_GET['age'])) {
    // $userAge = $_GET['age'];
    setcookie('ageUser', $_GET['age']);
    $_COOKIE['ageUser'] = $_GET['age'];
}
if (!empty($_COOKIE['ageUser'])) {
    $userAge = $_COOKIE['ageUser'];
}
require 'elements/header.php' ?>

<form action="" method="get">
    <label for="age">Age : </label>
    <select name="age">
        <?php for ($i = 1919; $i < 2020; $i++) : ?>
            <option value="<?= $i ?>" <?= (!empty($_COOKIE["ageUser"])) && $i == $_COOKIE["ageUser"] ? 'selected' : ''; ?>><?= $i ?></option>;
        <?php endfor ?>

    </select>
    </select>
    <button type="submit">Envoyer</button>
</form>

<?php if (empty($_COOKIE["ageUser"])) : ?>
    Entrez votre age
<?php else : ?>
    <?php if (!is_null($userAge) && (int)date('Y') - (int)$userAge > 18) : ?>
        <div class="alert alert-success">Vous avez l'age requis</div>
    <?php else : ?>
        <div class="alert alert-danger">Vous n'avez pas l'age requis</div>
    <?php endif ?>
<?php endif ?>
<?php require 'elements/footer.php' ?>
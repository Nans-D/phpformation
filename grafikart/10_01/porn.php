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
require 'header.php' ?>

<form action="" method="get">
    <label for="age">Age : </label>
    <select name="age">
        <?php for ($i = 1919; $i < 2020; $i++) : ?>
            <option value="<?= $i ?>" <?= ($i === (int)$_COOKIE["ageUser"]) ? 'selected' : ''; ?>><?= $i ?></option>;
        <?php endfor ?>

    </select>
    </select>
    <button type="submit">Envoyer</button>
</form>

<?php if ((int)date('Y', time()) - ((int)$userAge) > 18) : ?>
    <div class="alert alert-success">Vous avez l'age requis</div>
<?php else : ?>
    <div class="alert alert-danger">Vous n'avez pas l'age requis</div>
<?php endif ?>
<?php var_dump((int)date('Y', time()) - ((int)$userAge), (int)date('Y', time()), (int)$userAge) ?>
<?php require 'footer.php' ?>
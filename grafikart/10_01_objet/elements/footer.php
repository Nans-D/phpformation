<?php require_once 'functions.php' ?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <ul class="list-unstyled ml-4">
        <?= nav_menu(); ?>
    </ul>

    <div>
        <?php
        require_once 'class/Compteur.php';
        $compteur = new Compteur('data/compteur');
        $compteur->incrementer();
        $vues = $compteur->recuperer();
        // ajoutVue();
        // $data = lireVue();
        ?>
        Il y a <?= $vues ?> visite<?php if ($vues > 1) : ?>s<?php endif ?> sur votre site


    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Creneau.php';
$creneau = new Creneau(9, 12);
$creneau2 = new Creneau(13, 14);

var_dump($creneau->intersect($creneau2));

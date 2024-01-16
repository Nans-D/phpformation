<?php

$d1 = new DateTime();
echo "On est le " . $d1->format('d/m/Y');
$d1->modify("+1 month");
echo "\n";
echo "Un mois plus tard, on sera le " . $d1->format('d/m/Y');

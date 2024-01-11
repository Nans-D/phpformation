<div>
    <?php
    function repondre_oui_non($phrase): bool
    {
        while (true) {
            $action1 = readline($phrase . "oui / non : ");
            if ($action1 === "o") {
                return true;
            } elseif ($action1 === 'n') {
                return false;
            }
        }
    }

    function demander_creneau($phrase = "Entrez votre créneau"): array
    {
        echo $phrase . "\n";
        while (true) {
            $debut = (int)readline('Entrez votre heure de début');
            if ($debut >= 0 && $debut <= 23) {
                break;
            }
        }

        while (true) {
            $fin = (int)readline('Entrez votre heure de fin');
            if ($fin >= 0 && $fin <= 23 && $fin > $debut) {
                break;
            }
        }

        return [$debut, $fin];
    }

    // $resultat = repondre_oui_non("Voulez vous continuer ?");
    // var_dump($creneau, $creneau2);
    // $creneau = demander_creneau();
    // $creneau2 = demander_creneau("Veuillez entrez votre créneau : ");

    function demander_creneaux($phrase): array
    {
        echo $phrase;
        $creneaux = [];
        $continuer = true;
        while ($continuer) {
            $creneaux[] = demander_creneau();
            $continuer = repondre_oui_non("Voulez vous continuer ? (o/n)");
        }
        return $creneaux;
    }

    ?>
</div>
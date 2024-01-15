<?php

function nav_item(string $lien, string $titre, string $linkClass = ''): string
{
    $classe = 'nav-item';

    if ($_SERVER["SCRIPT_NAME"] === $lien) {
        $classe .= " active";
    }
    return <<<HTML
    <li class="$classe">
        <a class="$linkClass" href="$lien">$titre</a>
    </li>
HTML;
}

function nav_menu(string $linkClass = ''): string
{
    return
        nav_item("index.php", "Accueil", $linkClass) .
        nav_item("contact.php", "Contact", $linkClass) .
        nav_item("jeu.php", "Jeu", $linkClass) .
        nav_item("checkbox.php", "Checkbox", $linkClass) .
        nav_item("porn.php", "Porn", $linkClass);
}

function checkbox(string $name, string $value, array $data)
{
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
}
function radio(string $name, string $value, array $data)
{
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
}



function creneaux_html(array $creneaux)
{

    if (empty($creneaux)) {
        return "Fermé";
    }
    $phrases = [];
    foreach ($creneaux as $creneau) {
        $phrases[] = " de {$creneau[0]}h à {$creneau[1]}h";
    }

    return 'Ouvert' . implode(' et ', $phrases); // Utiliser une chaîne vide comme séparateur

}


function in_creneaux(int $heure, array $creneaux)
{
    foreach ($creneaux as $creneau) {
        if (($heure > $creneau[0][0] && $heure < $creneau[0][1]) || ($heure > $creneau[1][0] && $heure < $creneau[1][1])) {
            return true;
        } else {
            return false;
        }
    }
}

function select(string $name, $value, array $options): string
{
    $html_options = [];
    foreach ($options as $k => $option) {
        $attributes = $k == $value ? 'selected' : '';
        $html_options[] = "<option value='$k' $attributes>$option</option>";
    }

    return "<select name='$name'>" . implode($html_options) . '</select>';
}

function getTime(int $jours, int $heure, array $creneaux): bool
{

    if ($jours === 5 || $jours === 6) {
        return false;
    } else {
        foreach ($creneaux as $creneau) {
            if (($heure > $creneau[0][0] && $heure < $creneau[0][1]) || ($heure > $creneau[1][0] && $heure < $creneau[1][1])) {
                return true;
            } else {
                return false;
            }
        }
    }
}






// // MA VERSION
// function creneaux_html(array $creneaux, array $days)
// {
//     $phrases = [];
//     $i = 0;

//     foreach ($creneaux as $creneau) {
//         $day = $days[$i]; // Accéder directement au jour correspondant
//         if (empty($creneau)) {
//             $phrases[] = "Fermé le $day <br>";
//         } else {
//             // Construction de la phrase pour les horaires d'ouverture
//             $phrase = "Ouvert le $day de {$creneau[0][0]}h à {$creneau[0][1]}h";
//             // Vérifier s'il existe un deuxième créneau
//             if (isset($creneau[1])) {
//                 $phrase .= " et de {$creneau[1][0]}h à {$creneau[1][1]}h";
//             }
//             $phrase .= " <br>";
//             $phrases[] = $phrase;
//         }
//         $i++;
//     }
//     return implode('', $phrases); // Utiliser une chaîne vide comme séparateur
// }

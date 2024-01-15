<?php
function ajoutVue()
{
    $fichier = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur'; // Chemin modifié
    $compteur = 1;
    if (file_exists($fichier)) {
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
    file_put_contents($fichier, $compteur);
}

function lireVue()
{
    $fichier = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur'; // Chemin modifié
    if (file_exists($fichier)) {
        return file_get_contents($fichier);
    } else {
        return "0"; // Retourne 0 si le fichier n'existe pas
    }
}

function nombre_vues_mois(int $annee, int $mois): int
{
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
    $fichier = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . "-" . $mois . "-" . "*";
    $fichiers = (glob($fichier));
    $total = 0;
    foreach ($fichiers as $fichier) {
        $total += (int)file_get_contents($fichier);
    }
    return $total;
}
function nombre_vues_detail_mois(int $annee, int $mois): array
{
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
    $fichier = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . "-" . $mois . "-" . "*";
    $fichiers = (glob($fichier));
    $visites = [];
    foreach ($fichiers as $fichier) {
        $parties = explode('-', basename($fichier));

        $visites[] = [
            'annee' => $parties[1],
            '$mois' => $parties[2],
            'jours' => $parties[3],
            'visites' => (int)file_get_contents($fichier)
        ];
    }
    return $visites;
}

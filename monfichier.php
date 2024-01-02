<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- // Conditions : Écrivez un script qui détermine si un nombre est positif, négatif ou zéro. -->

    <?php
    $age = 0;
    if ($age < 0) {
        echo "l'age est négatif";
    } elseif ($age > 0) {
        echo "l'age est positif";
    } else {
        echo "l'age est égale à 0";
    }
    ?>

    <!-- // Boucles : Créez un script qui affiche les 10 premiers nombres pairs. -->

    <div>
        <?php
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 === 0) {
                echo $i;
            }
        }
        ?>
    </div>

    <!-- // Gestion des Erreurs : Écrivez un script qui tente de diviser deux nombres, mais gère correctement le cas où le diviseur est zéro. -->

    <div>
        <?php
        $number = 10;
        $diviseur = 0;
        try {
            if ($diviseur == 0) {
                throw new Exception("error");
            };
            $resultat = $number / $diviseur;
            echo $resultat;
        } catch (Exception $e) {
            echo "erreur capturée : " . $e->getMessage();
        }
        ?>
    </div>

    <!-- // 1. Conditions Avancées -->
    <!-- // Exercice : Écrivez un script PHP qui détermine si un nombre est un multiple de 3, de 5, des deux (comme dans le jeu FizzBuzz), ou d'aucun. Par exemple, si le nombre est 15, il devrait afficher "FizzBuzz", si c'est 9, il devrait afficher "Fizz", si c'est 10, "Buzz", et si c'est 7, simplement afficher le nombre. -->
    <div>
        <?php

        $number = 8;
        if ($number % 3 === 0 && $number % 5 === 0) {
            echo "ce chiffre est un multiple de 3 et de 5";
        } elseif ($number % 5 === 0) {
            echo "ce chiffre est un multiple de 5";
        } elseif ($number % 3 === 0) {
            echo "ce chiffre est un multiple de 3";
        } else {
            echo "error";
        }
        ?>
    </div>

    <!-- // 2. Boucles et Tableaux -->
    <!-- // Exercice : Créez un tableau en PHP contenant des noms d'animaux. Utilisez une boucle foreach pour parcourir le tableau et affichez chaque nom d'animal avec un numéro devant (comme une liste numérotée). -->
    <div>
        <?php
        $array = ["lion", "serpent", "oiseau"];
        foreach ($array as $key => $value) {
            echo "numero : " . $key . " => " . $value . "<br>";
        }
        ?>
    </div>

    <!-- //3. Gestion des Erreurs avec Fonctions Personnalisées -->
    <!-- //Exercice : Écrivez une fonction PHP qui divise deux nombres et utilise la gestion des erreurs pour traiter les cas spéciaux. La fonction doit gérer le cas où le diviseur est zéro et également le cas où l'un des arguments n'est pas un nombre. Utilisez des exceptions pour gérer ces erreurs. -->
    <div>
        <?php
        function test($number, $diviseur)
        {

            try {
                if ($diviseur === 0 || !is_numeric($diviseur) || !is_numeric($number)) {
                    throw new Exception("Entrée non valide");
                }
                $resultat = $number / $diviseur;
                echo $resultat;
            } catch (Exception $e) {
                echo "erreur : " . $e->getMessage();
            }
        }
        echo test(2, 3);

        ?>
    </div>

    <!-- //4. Conditions et Boucles Combinées -->
    <!-- //Exercice : Utilisez une boucle while ou for pour afficher les 20 premiers nombres, mais pour chaque nombre qui est un multiple de 4, affichez "Multiple de 4" au lieu du nombre. -->
    <div>
        <?php
        for ($i = 1; $i < 20; $i++) {
            if ($i % 4 === 0) {
                echo $i . ' est un multiple de 4 <br>';
            }
        }

        ?>
    </div>

    <!-- //5. Fonctions et Gestion des Erreurs -->
    <!-- //Exercice : Écrivez une fonction PHP qui prend un tableau de nombres comme argument et renvoie la somme des nombres. La fonction doit gérer le cas où l'argument n'est pas un tableau ou si le tableau contient des éléments non numériques, en lançant une exception dans ces cas. -->

    <div>
        <?php
        function isTableau($tableau)
        {
            if (!is_array($tableau)) {
                throw new Exception("ceci n'est pas un tableau");
            }

            $somme = 0;
            foreach ($tableau as $element) {
                if (!is_numeric($element)) {
                    throw new Exception("Un élement du tableau n'est pas un nombre");
                }
                $somme += $element;
            }

            return $somme;
        }

        try {
            $resultat = isTableau([2, 2, 3]);
            echo $resultat;
        } catch (Exception $e) {
            echo "error : " . $e->getMessage();
        }
        ?>
    </div>

    <!-- //1. Vérification des Horaires de Réservation -->
    <!-- //Exercice : Écrivez un script PHP qui vérifie si une heure de réservation est dans les 
    plages horaires d'ouverture du parking. Utilisez des conditions pour comparer l'heure de réservation avec 
    les heures d'ouverture et de fermeture. -->
    <div>
        <?php

        function reservation($dateUtilisateur)
        {
            $dateDebut = new DateTime("2023-10-12 08:00:00");
            $dateFin = new DateTime("2023-10-12 18:00:00");
            $dateOutput = DateTime::createFromFormat("Y-m-d H:i:s", $dateUtilisateur);


            try {
                if (!$dateOutput) {
                    throw new Exception("Le format de la date est non valide");
                }
                if ($dateOutput > $dateFin || $dateOutput < $dateDebut) {
                    throw new Exception("Vous êtes en dehors de la plage horaire");
                } else {
                    return "ok";
                }
            } catch (Exception $e) {
                return "Erreur : " . $e->getMessage();
            }
        }

        $resultat = reservation("2023-10-12 17:00:00");
        echo $resultat;

        ?>
    </div>

    <!-- 2. Calcul du Coût de Stationnement -->
    <!-- Exercice : Créez une fonction qui calcule le coût total du stationnement en 
    fonction du nombre d'heures et d'un tarif horaire. Utilisez des boucles pour simuler 
    des augmentations de tarif après certaines heures. -->

    <div>
        <?php
        function totalCost($day, $dateUser)
        {
            $cost = 35;
            $dateDebut = new DateTime("2023-10-12 20:00:00");
            $dateDebut = $dateDebut->getTimestamp();
            $dateFin = new DateTime("2023-10-13 20:00:00");
            $dateFin = $dateFin->getTimestamp();
            $dateOutput = DateTime::createFromFormat("Y-m-d H:i:s", $dateUser);
            $dateOutput = $dateOutput->getTimestamp();



            try {
                if (!is_numeric($day)) {
                    throw new Exception("Veuillez rentrer un chiffre");
                }
                $totalCost = $cost * $day;

                if ($dateOutput > $dateFin) {

                    $extraDays = ($dateOutput - $dateFin) / 86400;
                    $extraDays = round($extraDays, 0);
                    for ($i = 0; $i < $extraDays; $i++) {
                        $totalCost += $cost * 1.1;
                    }
                }
                return $totalCost;
            } catch (Exception $e) {
                return "error : " . $e->getMessage();
            }
        }

        $resultat2 = "test: " . totalCost(2, "2023-10-14 20:00:00");
        echo $resultat2;

        ?>
    </div>

    <!-- 3. Sélection de Places de Parking Disponibles
    Exercice : Imaginez que vous avez un tableau représentant les places de parking et 
    leur disponibilité. Utilisez une boucle pour parcourir le tableau et sélectionner la 
    première place disponible. 
    Gérez le cas où il n'y a plus de places disponibles. -->
    <div>
        <?php
        class Parking
        {
            public $id;
            public $available;

            public function __construct($id, $available)
            {
                $this->id = $id;
                $this->available = $available;
            }
        }
        $parkingArray = [];
        $parkingArray[] = new Parking(1, false);
        $parkingArray[] = new Parking(2, false);

        $foundspot = false;
        foreach ($parkingArray as $spot) {

            if ($spot->available) {
                echo "la place disponible est le parking numero : $spot->id";
                $foundspot = true;
            }
        }
        if (!$foundspot) {
            echo "Aucune place disponible";
        }

        ?>
    </div>

    <!-- 4. Gestion des Erreurs lors de la Réservation
Exercice : Simulez un processus de réservation de parking et utilisez la gestion des erreurs pour traiter des situations 
comme une entrée invalide ou une tentative de réservation d'une place déjà occupée. -->

    <div>
        <?php
        class Parking2
        {
            public $id;
            public $available;

            public function __construct($id, $available)
            {
                $this->id = $id;
                $this->available = $available;
            }
        }

        $arrayParking2 = [];
        $arrayParking2[] = new Parking2(1, true);
        $arrayParking2[] = new Parking2(2, false);

        function reservation2($id, $arrayParking2)
        {
            if (!is_numeric($id)) {
                throw new Exception("Veuillez entrer une place valide");
            }

            foreach ($arrayParking2 as $spot) {
                if ($spot->id == $id) {
                    if (!$spot->available) {
                        throw new Exception("La place $id est déjà prise");
                    } else {
                        $spot->available = false; // Marquer la place comme réservée
                        return "Vous avez réservé la place numéro $id";
                    }
                }
            }
            throw new Exception("Place non trouvée");
        }

        try {
            $resultat3 = reservation2(2, $arrayParking2);
            echo $resultat3;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
        ?>

    </div>

    <!-- 5. Tri et Affichage des Places -->
    <!-- Exercice : À partir d'un tableau contenant des informations sur différentes places de parking 
(comme le numéro de la place, le statut de disponibilité, etc.), utilisez des boucles et des conditions pour trier et 
afficher les places par ordre de disponibilité ou de numéro. -->

    <div>
        <?php
        class Parking3
        {
            public $id;
            public $name;
            public $isAvailable;

            public function __construct($id, $name, $isAvailable)
            {
                $this->id = $id;
                $this->name = $name;
                $this->isAvailable = $isAvailable;
            }
        }

        $arrayParking3 = [];
        $arrayParking3[] = new Parking3(1, "Clichy", true);
        $arrayParking3[] = new Parking3(2, "15eme", true);
        $arrayParking3[] = new Parking3(3, "Nanterre", false);
        $arrayParking3[] = new Parking3(4, "Saint-denis", false);

        foreach ($arrayParking3 as $spot) {
            if ($spot->isAvailable === false) {
                echo $spot->isAvailable . "test";
            }
        }

        ?>
    </div>



</body>

</html>
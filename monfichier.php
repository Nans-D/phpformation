<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    // Conditions : Écrivez un script qui détermine si un nombre est positif, négatif ou zéro.

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

    // Boucles : Créez un script qui affiche les 10 premiers nombres pairs.

    <div>
        <?php
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 === 0) {
                echo $i;
            }
        }
        ?>
    </div>

    // Gestion des Erreurs : Écrivez un script qui tente de diviser deux nombres, mais gère correctement le cas où le diviseur est zéro.

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

    // 1. Conditions Avancées
    // Exercice : Écrivez un script PHP qui détermine si un nombre est un multiple de 3, de 5, des deux (comme dans le jeu FizzBuzz), ou d'aucun. Par exemple, si le nombre est 15, il devrait afficher "FizzBuzz", si c'est 9, il devrait afficher "Fizz", si c'est 10, "Buzz", et si c'est 7, simplement afficher le nombre.
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

    // 2. Boucles et Tableaux
    // Exercice : Créez un tableau en PHP contenant des noms d'animaux. Utilisez une boucle foreach pour parcourir le tableau et affichez chaque nom d'animal avec un numéro devant (comme une liste numérotée).
    <div>
        <?php
        $array = ["lion", "serpent", "oiseau"];
        foreach ($array as $key => $value) {
            echo "numero : " . $key . " => " . $value . "<br>";
        }
        ?>
    </div>

    //3. Gestion des Erreurs avec Fonctions Personnalisées
    //Exercice : Écrivez une fonction PHP qui divise deux nombres et utilise la gestion des erreurs pour traiter les cas spéciaux. La fonction doit gérer le cas où le diviseur est zéro et également le cas où l'un des arguments n'est pas un nombre. Utilisez des exceptions pour gérer ces erreurs.
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

    //4. Conditions et Boucles Combinées
    //Exercice : Utilisez une boucle while ou for pour afficher les 20 premiers nombres, mais pour chaque nombre qui est un multiple de 4, affichez "Multiple de 4" au lieu du nombre.
    <div>
        <?php
        for ($i = 1; $i < 20; $i++) {
            if ($i % 4 === 0) {
                echo $i . ' est un multiple de 4 <br>';
            }
        }

        ?>
    </div>

    //5. Fonctions et Gestion des Erreurs
    //Exercice : Écrivez une fonction PHP qui prend un tableau de nombres comme argument et renvoie la somme des nombres. La fonction doit gérer le cas où l'argument n'est pas un tableau ou si le tableau contient des éléments non numériques, en lançant une exception dans ces cas.

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


</body>

</html>
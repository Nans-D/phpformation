<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
    <div>
        <?php
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 === 0) {
                echo $i;
            }
        }
        ?>
    </div>
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
    <div>
        <?php
        $array = ["lion", "serpent", "oiseau"];
        foreach ($array as $key => $value) {
            echo "numero : " . $key . " => " . $value . "<br>";
        }
        ?>
    </div>
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
    <div>
        <?php
        for ($i = 1; $i < 20; $i++) {
            if ($i % 4 === 0) {
                echo $i . ' est un multiple de 4 <br>';
            }
        }

        ?>
    </div>
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
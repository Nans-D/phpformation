<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $name = "Nans";
    $age = 27;
    $boolean = false;
    if ($boolean) {
        $student = "étudiant";
    } else {
        $student = " pas étudiant";
    }

    echo "$name à $age ans et il est $student"
    ?>

    <div>
        <?php
        $nombre1 = 10;
        $nombre2 = 5;

        $addition = $nombre1 + $nombre2;
        $soustraction = $nombre1 - $nombre2;
        $multiplication = $nombre1 * $nombre2;

        echo $addition . " " . $soustraction . " " .  $multiplication;

        ?>
    </div>

    <div>
        <?php
        echo "nans" . "coraline";
        ?>
    </div>

    <div>
        <?php
        $tableau = ["nans", "coraline", "luna", "stello"];

        foreach ($tableau as $key) {
            echo $key . "<br>";
        }
        ?>
    </div>
    <div>
        <?php
        $nombre1 = 10;
        $nombre2 = 10;

        if ($nombre1 > $nombre2) {
            echo $nombre1;
        } elseif ($nombre2 > $nombre1) {
            echo $nombre2;
        } else {
            echo $nombre1 . " " . $nombre2;
        }
        ?>
    </div>
    <div>
        <?php
        for ($i = 1; $i < 11; $i++) {
            echo $i . " ";
        }
        ?>
    </div>
    <div>
        <?php
        function square($nombre)
        {
            return $nombre * $nombre . " ";
        }

        echo (square(2));
        echo (square(3));
        echo (square(7));
        echo (square(10));
        ?>
    </div>

    <div>

        <form action="monfichier2.php" method="POST">
            <input type="text" name="name" placeholder="Votre nom">
            <button type="submit">envoyer</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            echo "bonjour " . htmlspecialchars($_POST["name"]);
        }
        ?>
    </div>

    <!-- 2eme partie -->

    <div>
        <?php

        function calculTVA($nombre)
        {
            $TVA = 0.2;
            if (is_numeric($nombre)) {
                return $nombre * $TVA;
            }
        }

        $montantTVA = calculTVA(10);
        echo "Le montant de la TVA est de $montantTVA"
        ?>
    </div>
    <div>
        <?php
        function multiplicateTable($nombre)
        {
            $table = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            if (is_numeric($nombre)) {
                foreach ($table as $key) {
                    echo $key * $nombre . " ";
                }
            }
        }
        echo (multiplicateTable(9))

        ?>
    </div>

    <div>

        <form action="monfichier2.php" method="POST">
            <input type="text" name="name" placeholder="Votre nom">
            <input type="password" name="password" placeholder="Votre mot de passe">
            <button type="submit">envoyer</button>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["name"])) {
                if (strlen($_POST["password"]) > 8) {
                    echo "password trop long";
                } else {
                    echo "test";
                }
            } else {
                echo "error";
            }
        }
        ?>
    </div>
    <div>
        <?php
        function intoFahrenheit($nombre)
        {
            if (is_numeric($nombre)) {
                echo ($nombre * 1.8) + 32;
            }
        }

        intoFahrenheit(30)

        ?>
    </div>
    <div>
        <?php
        $array = [3, "apple", 1, "orange", 4, "banana"];
        sort($array);
        print_r($array);

        $array = [3, "apple", 1, "orange", 4, "banana"];
        natsort($array);
        print_r($array)
        ?>
    </div>
    <div>

        <form action="monfichier2.php" method="POST">
            <input type="number" name="annee" placeholder="entrez votre annee de naissance">
            <button type="submit">envoyer</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $anneeActuelle = date("Y");
            $annee = $_POST["annee"];
            if (is_numeric($annee)) {
                if (strlen($annee) === 4) {
                    $age = $anneeActuelle - $annee;
                    echo "Votre age est de $age ans";
                } else {
                    echo "Veuillez saisir 4chiffres";
                }
            } else {
                echo "Veuillez entrer une année de naissance valise";
            }
        }
        ?>
    </div>

    <div>
        <?php
        function diviseur($nombre1, $nombre2)
        {
            if (is_numeric($nombre1) && is_numeric($nombre2)) {
                if ($nombre1 != 0 && $nombre2 != 0) {
                    $resultat = $nombre1 / $nombre2;
                    echo $resultat;
                } else {
                    echo "Veuillez saisir un autre chiffre que zero";
                }
            } else {
                echo "Veuillez saisir des chiffres";
            }
        }

        diviseur(10, 2);
        ?>
    </div>
    <div>
        <?php
        $citations = ["citation1", "citation2", "citation3", "citation4"];
        $indicesCitations = mt_rand(0, count($citations) - 1);
        echo $citations[$indicesCitations];
        ?>
    </div>





</body>

</html>
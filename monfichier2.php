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
    <br>
    <!-- 2eme partie -->
    <strong>2eme partie</strong>

    <!-- 1. **Calculatrice de TVA :**
   - Écrivez un script PHP qui calcule le montant de la TVA sur un prix donné et le prix total (prix + TVA). Utilisez une fonction pour calculer la TVA. -->
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

    <!-- 2. **Générateur de Table de Multiplication :**
   - Créez un script PHP qui génère une table de multiplication jusqu'à un certain nombre. Par exemple, affichez la table de multiplication pour les nombres de 1 à 10. -->
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

    <!-- 3. **Validation de Formulaire :**
   - Écrivez un formulaire HTML avec des champs pour un nom d'utilisateur et un mot de passe. Puis, utilisez PHP pour valider que le nom d'utilisateur n'est pas vide et que le mot de passe a au moins 8 caractères.
 -->
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

    <!-- 4. **Conversion d'Unités :**
   - Faites un script qui convertit les unités de mesure (par exemple, de kilomètres en miles, ou de Celsius en Fahrenheit) et affiche le résultat. -->
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

    <!-- 5. **Tri de Tableau :**
   - Créez un tableau contenant une liste de nombres ou de chaînes de caractères. Utilisez différentes fonctions de tri en PHP pour trier le tableau, et affichez le résultat avant et après le tri. -->
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

    <!-- 7. **Calcul de l'Âge :**
   - Demandez à l'utilisateur de saisir sa date de naissance via un formulaire, puis utilisez PHP pour calculer et afficher son âge. -->
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


    <!-- 8. **Gestion des Erreurs :**
   - Créez un script qui tente de diviser deux nombres, mais gère le cas où le diviseur est zéro en affichant un message d'erreur sans arrêter le script.
 -->
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

    <!-- 10. **Générateur de Citation Aléatoire :**
    - Créez un tableau contenant plusieurs citations. Utilisez PHP pour afficher une citation aléatoire à chaque fois que la page est chargée. -->
    <div>
        <?php
        $citations = ["citation1", "citation2", "citation3", "citation4"];
        $indicesCitations = mt_rand(0, count($citations) - 1);
        echo $citations[$indicesCitations];
        ?>
    </div>
    <br>

    <!-- 3eme partie -->
    <strong>3eme partie</strong>


    <!-- 1. **Générateur d'Emails Temporaires :**
    - Écrivez un script PHP qui génère des adresses email temporaires. Par exemple, "user12345@tempmail.com", où "12345" est un numéro aléatoire. -->

    <div>
        <?php
        $nbreAleatoire = mt_rand(1000, 9999);
        echo "user$nbreAleatoire@gmail.com";
        ?>
    </div>

    <!-- 2. **Calculatrice de BMR (Basal Metabolic Rate) :**
   - Créez un formulaire qui demande l'âge, le sexe, le poids et la taille de l'utilisateur. Écrivez une fonction PHP qui calcule et retourne le BMR (taux métabolique de base) de l'utilisateur en fonction de ces données. -->
    <div>
        <form action="monfichier2.php" method="POST">
            <input type="number" name="age" placeholder="Entrez votre age">
            <select name="genre" id="">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
            <input type="number" name="poids" placeholder="Entrez votre poids">
            <input type="number" name="taille" placeholder="Entrez votre taille en cm">
            <button type="submit">Envoyer</button>
        </form>
        <?php
        $age = $_POST["age"];
        $genre = $_POST["genre"];
        $poids = $_POST["poids"];
        $taille = $_POST["taille"];


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (is_numeric($age) && is_numeric($poids) && is_numeric($taille)) {

                switch ($genre) {
                    case 'homme':
                        $BRMHomme = 88.362 + (13.397 * $poids) + (4.799 * $taille) - (5.677 * $age);
                        echo $BRMHomme;
                        break;

                    case 'femme':
                        $BRFemme = 447.593 + (9.247 * $poids) + (3.098 * $taille) - (4.330 * $age);
                        echo $BRFemme;
                        break;
                    default:
                        echo "error";
                        break;
                }
            } else {
                echo 'entrez des chiffres seulement';
            }
        }

        ?>
    </div>

    <!-- 3. **Validation de Formulaire Avancée :**
   - Élaborez un formulaire de contact avec validation côté serveur. Assurez-vous que le nom, l'email et le message sont non seulement présents, mais aussi valides (par exemple, l'email doit avoir un format correct). -->
    <div>
        <form action="monfichier2.php" method="post">
            <input type="text" name="name" id="" placeholder="nom">
            <input type="text" name="mail" id="" placeholder="email">
            <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
            <button type="submit">envoyer</button>
        </form>
        <?php
        $name = $_POST["name"];
        $email = $_POST["mail"];
        $message = $_POST["message"];

        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (is_string($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "Message bien recu";
                } else {
                    throw new Exception("mistake");
                }
            }
        } catch (Exception $e) {
            echo "error " . $e->getMessage();
        }
        ?>
    </div>

    <!-- Gestionnaire de Fichiers Simples :
Écrivez un script PHP pour lister tous les fichiers d'un répertoire donné et afficher leur taille en octets. -->

</body>

</html>
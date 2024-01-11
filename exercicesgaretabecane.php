<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <strong>Exercice 1</strong>
    <!-- 1. Formulaire de Listing de Garage
Objectif : Créer un formulaire pour que les propriétaires puissent lister leur garage ou espace de parking.

Étapes :

Créer le Formulaire HTML :

Utilisez des éléments HTML comme input pour le nom, l'adresse, et le prix.
Ajoutez des select ou des checkbox pour les équipements.
Incluez un textarea pour la description.
N'oubliez pas le bouton de soumission.
Traitement en PHP :

Créez un fichier PHP séparé pour traiter les données soumises.
Utilisez $_POST pour récupérer les valeurs du formulaire après la soumission.
Validez et nettoyez les données reçues.
(Optionnel) Stockez les données dans une base de données ou un fichier. -->

    <div>

        <form action="exercicesgaretabecane.php" method="POST">
            <div class="input-container">
                <input type="text" name="name" placeholder="nom">
                <input type="text" name="adress" placeholder="adress">
                <input type="number" name="price" placeholder="price">
                <textarea name="text" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="checkbox" id="chaine" name="chaine" />
                <label for="chaine">Chaine au sol</label>
            </div>

            <div>
                <input type="checkbox" id="alone" name="alone" />
                <label for="alone">Alone</label>
            </div>
            <button type="submit">Créer place</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["name"];
            $adress = $_POST["adress"];
            $price = $_POST["price"];
            $message = $_POST["text"];
            $chaine = isset($_POST["chaine"]) ? 1 : 0;
            $alone = isset($_POST["alone"]) ? 1 : 0;
            if (is_numeric($price)) {

                // BDD Fictive
                try {

                    $pdo = new PDO('sqlite:./ma_base_de_donnees.sqlite');
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $pdo->exec("CREATE TABLE IF NOT EXISTS garages (
            id INTEGER PRIMARY KEY,
            nom TEXT, 
            adress TEXT, 
            price INTEGER,
            message TEXT,
            chaine INTEGER,
            alone INTEGER)");
                    $stmt = $pdo->prepare("INSERT INTO garages(nom, adress, price, message, chaine, alone) VALUES(?,?,?,?,?,?)");
                    $stmt->execute([$nom, $adress, $price, $message, $chaine, $alone]);

                    echo "table crée avec succes";
                } catch (PDOException $e) {
                    echo "erreur de connexion : " . $e->getMessage();
                }
            }
        }

        echo realpath('ma_base_de_donnees.sqlite');
        ?>
    </div>
    <br>

    <strong>Exercice 2</strong>

    <!-- 2. Système de Recherche de Garage
Objectif : Permettre aux utilisateurs de rechercher des garages disponibles.

Étapes :

Créer le Formulaire de Recherche :

Un formulaire simple avec un champ de recherche pour l'adresse ou le nom du garage.
Ajoutez des filtres optionnels comme le prix ou les équipements.
Logique de Recherche en PHP :

Récupérez la requête de recherche via $_POST ou $_GET.
Implémentez une fonction qui recherche dans votre base de données ou fichier les garages correspondant aux critères.
Affichez les résultats de la recherche. -->

    <div>
        <form action="exercicesgaretabecane.php" method="POST">
            <div class="input-container">
                <input type="text" name="name" placeholder="nom">
                <input type="text" name="adress" placeholder="adress">
                <input type="number" name="price" placeholder="price">
            </div>
            <div>
                <input type="checkbox" id="chaine" name="chaine" />
                <label for="chaine">Chaine au sol</label>
            </div>

            <div>
                <input type="checkbox" id="alone" name="alone" />
                <label for="alone">Alone</label>
            </div>
            <button type="submit">Rechercher place</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["name"];
            $adress = $_POST["adress"];
            $price = $_POST["price"];
            $chaine = isset($_POST["chaine"]) ? 1 : 0;
            $alone = isset($_POST["alone"]) ? 1 : 0;

            function findName($nom)
            {
                $query = "SELECT name FROM garages";
                if ($nom === $query) {
                    echo $nom;
                }
            }

            findName("Patrick");
        }


        ?>
    </div>

</body>

</html>
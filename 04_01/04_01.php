<strong>Exercice 0</strong>
<!-- -->
<div>
    <?php

    ?>
</div>

<strong>Exercice 1</strong>
<!-- Exercice 1 : Créer une Fonction Simple
Énoncé : Écrivez une fonction saluer qui prend un nom en paramètre et retourne un message de salutation. -->
<div>
    <?php
    function greeting($name)
    {
        return "Bonjour $name";
    }

    echo (greeting("Nans"))
    ?>
</div>
<br>

<strong>Exercice 2</strong>
<!-- Exercice 2 : Fonction avec Valeur par Défaut
Énoncé : Modifiez la fonction saluer pour qu'elle retourne "Bonjour Monde!" si aucun nom n'est passé en paramètre. -->
<div>
    <?php
    function greeting2($name = "")
    {
        if (empty($name)) {
            return "Bonjour Monde!";
        } else {
            return "Bonjour $name";
        }
    }

    echo (greeting2());
    echo "<br>";
    echo (greeting2("Nans"));
    ?>
</div>
<br>

<strong>Exercice 3</strong>
<!-- Exercice 3 : Inclusion de Fichiers
Énoncé : Créez deux fichiers PHP. Dans le premier, définissez une fonction, et dans le deuxième, incluez le premier fichier et utilisez la fonction définie. -->
<div>
    <?php
    function direHello()
    {
        return "SayHello";
    }
    ?>
</div>
<br>

<strong>Exercice 4</strong>
<!-- Exercice 4 : Bonnes Pratiques de Nommage
Énoncé : Renommez une fonction calcArea en une dénomination plus descriptive et utilisez cette fonction pour calculer l'aire d'un cercle. -->
<div>
    <?php
    function calcAreaCircle($rayon)
    {
        return pi() * ($rayon * $rayon);
    }
    echo (calcAreaCircle(2))
    ?>
</div>
<br>

<strong>Exercice 5</strong>
<!-- Exercice 5 : Introduction à la POO - Définir une Classe
Énoncé : Créez une classe Voiture avec une propriété couleur et une méthode pour afficher la couleur.-->
<div>
    <?php
    class Voiture
    {
        public $couleur;



        public function printColor()
        {
            echo $this->couleur;
        }
    }

    $maVoiture = new Voiture;
    $maVoiture->couleur = "rouge";
    $maVoiture->printColor();
    ?>
</div>
<br>

<strong>Exercice 6</strong>
<!--Exercice 6 : Utilisation des Constructeurs
Énoncé : Ajoutez un constructeur à la classe Voiture qui permet d'initialiser la couleur de la voiture lors de la création de l'objet. -->
<div>
    <?php

    class Voiture_deux
    {
        public $couleur;

        public function __construct($couleur)
        {
            $this->couleur = $couleur;
        }

        public function printColor2()
        {
            echo $this->couleur;
        }
    }

    $maVoiture2 = new Voiture_deux("verte");
    $maVoiture2->printColor2();


    ?>
</div>
<br>

<strong>Exercice 7</strong>
<!-- Exercice 7 : Fonctions de Calcul
Énoncé : Écrivez une fonction qui prend deux nombres en paramètres et retourne leur somme. -->

<div>
    <?php
    function somme($a, $b)
    {
        return $a + $b;
    }

    echo (somme(2, 3));
    ?>
</div>
<br>

<strong>Exercice 8</strong>
<!-- Exercice 8 : Gestion des Fichiers
Énoncé : Écrivez un script pour créer un fichier, écrire du texte dedans, puis le lire. -->
<div>
    <?php
    file_put_contents('text2.txt', 'bonjour, je suis Nans');
    ?>
</div>
<br>

<strong>Exercice 9</strong>
<!--Exercice 9 : Classes et Héritage
Énoncé : Créez une classe Véhicule et une classe Voiture qui hérite de Véhicule. Ajoutez des propriétés et méthodes spécifiques à chaque classe. -->
<div>
    <?php
    class Vehicule
    {
        public $type;
        public $marque;

        public function printVehicule()
        {
            echo $this->type;
            echo "<br>";
            echo $this->marque;
        }
    }

    class Voiture3 extends Vehicule
    {
        private $couleur;
        public $moteur;
        public $modele;
        public $nbreChevaux;

        public function getCouleur()
        {
            echo $this->couleur;
        }

        public function setCouleur($newColor)
        {
            if (!empty($newColor)) {
                return $this->couleur = $newColor;
            } else {
                echo "error";
            }
        }

        public function printVoiture()
        {
            echo $this->couleur;
            echo "<br>";
            echo $this->moteur;
            echo "<br>";
            echo $this->modele;
            echo "<br>";
            echo $this->nbreChevaux;
        }
    }

    $myVehicule = new Vehicule;
    $myVehicule->type = 'voiture';
    $myVehicule->marque = 'ford';
    $myVehicule->printVehicule();
    echo "<br>";

    $myVoiture = new Voiture3;
    $myVoiture->setCouleur("jaune");
    $myVoiture->getCouleur();
    $myVoiture->moteur = "v8";
    $myVoiture->modele = "Ferrari";
    $myVoiture->nbreChevaux = 500;
    $myVoiture->printVehicule();
    // $myVoiture->printVoiture();
    echo "<br>";


    ?>
</div>
<strong>Exercices</strong>

<!-- Exercice 1 : Définition de Classe
Énoncé : Créez une classe simple appelée Animal avec une propriété nom et une méthode faireSon() qui affiche un son. -->

<!-- Exercice 1 : Définition de Classe
Énoncé : Créez une classe simple appelée Animal avec une propriété nom et une méthode faireSon() qui affiche un son. -->

<!-- Exercice 2 : Création d'Objet
Énoncé : Instanciez un objet de la classe Animal, définissez son nom et appelez la méthode faireSon(). -->

<!-- Exercice 3 : Constructeur de Classe
Énoncé : Ajoutez un constructeur à la classe Animal qui permet d'initialiser le nom de l'animal lors de la création de l'objet. -->

<!-- Exercice 4 : Encapsulation
Énoncé : Modifiez la classe Animal pour rendre la propriété nom privée et ajoutez des méthodes getter et setter pour cette propriété. -->

<!-- Exercice 5 : Héritage Simple
Énoncé : Créez une classe Chien qui hérite de Animal et surcharge la méthode faireSon() pour afficher un aboiement. -->

<!-- Exercice 6 : Constructeur d'Héritage
Énoncé : Ajoutez un constructeur à la classe Chien qui appelle le constructeur de la classe parent Animal. -->

<!-- Exercice 7 : Méthode Protégée
Énoncé : Ajoutez une méthode protégée dans la classe Animal et démontrez son utilisation dans la classe Chien. -->

<!-- Exercice 8 : Propriétés et Méthodes Statiques
Énoncé : Ajoutez une propriété statique à la classe Animal et une méthode statique qui affiche cette propriété. -->

<!-- Exercice 9 : Polymorphisme
Énoncé : Créez une autre classe qui hérite de Animal, par exemple Chat, et implémentez sa propre version de la méthode faireSon(). -->

<!-- Exercice 10 : Interface
Énoncé : Définissez une interface Mammifere avec une méthode respirer. Implémentez cette interface dans la classe Animal. -->
<div>
    <?php
    class Animal
    {
        private $nom;

        protected function sayHello()
        {
            echo "hello";
        }

        public function __construct($nom)
        {
            $this->nom = $nom;
        }

        public function getAnimal()
        {
            echo $this->nom;
        }

        public function setAnimal($newAnimal)
        {
            $this->nom = $newAnimal;
        }

        public function faireSon()
        {
            echo "l'animal se prépare a faire un son";
        }
    }

    $myAnimal = new Animal("cat");
    echo "<br>";
    $myAnimal->faireSon();
    echo "<br>";
    $myAnimal->setAnimal("dog");
    echo "<br>";
    $myAnimal->faireSon();
    echo "<br>";

    class Chien extends Animal
    {
        public function faireSon()
        {
            parent::faireSon();
            echo " : bark";
        }

        public function sayHello()
        {
            parent::sayHello();
        }
    }

    $Chien = new Chien("dog");
    echo "<br>";
    $Chien->faireSon();
    echo "<br>";
    $Chien->sayHello();

    ?>


</div>
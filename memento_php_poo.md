# PHP - Programmation Orientée Objet (POO)

La programmation orientée objet est différente de la manière de programmer dites procédurale que nous avons utilisée jusqu'ici.

Dans la **programmation procédurale**, on exécute des instructions les unes à la suite des autres.
Dans la **programmation orientée objet**, on pense notre site comme étant un ensemble d'objets qui interagisse entre eux.

## Classes et objets

Une classe est un "modèle", un "template" définissant ce qu'ily a à l'intérieur d'un objet.

Dans notre classe, nous organisons nos constantes, functions, etc...

Une fois que notre classe est créée (notre modèle) on peut créer notre premier objet (basé sur ce modèle)!

## Vocabulaire

En programmation orientée objet:

* les fonctions sont appellées METHODES
* les variables sont appellées PROPRIETES

## Déclaration d'une classe

````php
class Product // Attention nom de class commence toujours par une Majuscule
{ 
	public $title; //Propriétés

	function getTitle()
	{
		//Méthodes
	}
}

$p = new Product(); // Création d'un objet	
````

## Création d'un objet (instanciation d'une classe)

On parle d'une instanciation d'une classe pour créer un objet.

````php
$p = new Product()
````


## Appel d'une propriété

Pour appelé une propriété d'un objet, on utilise une variable suivie d'une fleche -> puis du nom de la propriété sans le $ et suivi d'un point-virgule.

````php
$p->titre;
````

## Visibilité des propriétés

**public :** les propriétés peuvent être accessible depuis n'importe où dans votre code

**protected :** les propriétés peuvent être accessible seulement à l'intérieur de la classe ET ses classes parentes et hérités

**private :** les propriétés peuvent être accessible seulement à l'intérieur de la classe.

Attention, si vous n'affectez aucuen visibilité, par défaut ce sera public. Pensez donc à le mettre malgré tout pour une meilleure lisibilité de votre code notamment pour votre équipe.


## Affectation d'une propriétés

### La bonne manière de procéder

````php
class Personne{
	public $FirstName = "Bill";
	public $LastName = "Murphy";
	private $Password = "Poppy";
	public $Age = 29;
	public $FavouriteColour = "Purple";
}

$bill = new Personne();
````

### La mauvaise manière de procéder (non recommandée)

````php
class Product{
	public $title; // Propriétés
	
	function getTitle(){
		//Méthodes
	}
}
$p =new Product(); //objet de la classe Product
$p->title('Harry Potter');
echo $p->title;
````

## Création d'une méthode

````php
class Product{
	public $title = 'Harry Potter';
	
	function getTitle(){
		return "Le nom du produit :" .$this->title;
	}
}
$p =new Product(); //objet de la classe Product
$p->getTitle(); //Accès à la méthode
````


## Appel d'une méthode

On n'oublie pas les parenthèses, sauf si c'est pour appeler une propriété! On utilise la -> pour pointer vers une méthode

````php
$p->getTitle();
````

## "$this" variable

Lorsque vous êtes **à l'intérieur d'une méthode**, PHP va automatiquement affecter l'objet à la variable $this pour pouvoir travailler avec les propriétés de la classe correspondante.

````php
$this->title = $title; //Affecte le paramètre
````
$title à la propriété $title de la classe

## Constructeur

Le constructeur est la fonction qui est appelée automatiquement par la classe lorsque vous créez une nouvelle instance d'uen classe à l'aide de l'opérateur **new**.

````php
$p = new Product ("Le seigneur des anneaux");
````


````php
class Product {
	public $title = 'Harry Potter';

	function __construct($title){
		$this->title = $title;
	}

	function getTitle(){
		return "Le nom du produit :" .$this->title;
	} //retourne le titre du produit
}

$p = new Product("Le seigneur des anneaux");
$p->getTitle(); //Retourne quel titre?
// Retourne "Le seigneur des anneaux" car la méthode a été appliqué à un nouvel objet à qui on ne transmet qu'un paramètre ($title) 
//donc ici on à créer un nouvel objet en indiquant que son titre était "Le seigneur des anneaux"
//ensuite on a appellé la methode getTitle qui retourne le title de l'objet et donc à retourner "Le seigneur des anneaux"
````

## Héritage

L'héritage est uen manière d'étendre une classe avec uen nouvelle et d'éviter la saisie de code répétitif DRY (Don't Repeat Yourself)

````php
class Voiture {
	public $marque;
	public $puissance;


	function __construct($marque, $puissance){
		$this->marque = $marque;
		$this->marque = $marque;
	}

	function getMarque(){
		//retourne la marque de la voiture
	}
}

$v = new Voiture ("Renault","6CV"); //Création d'un nouvel objet voiture
$v->getMarque(); //retourne la marque du nouvel objet voiture
````


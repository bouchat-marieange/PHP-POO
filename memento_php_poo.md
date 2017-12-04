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

# PHP - POO (Intro -2eme partie)

## Qu'est-ce qu'un objet?

* Les objets sont des entités réelles
* Elles peuvent avoir des propriétés et des méthodes
* On instancie une classe pour créer un objet

## Qu'est-ce qu'un constructeur

Un constructeur est uen méthode spéciale qui est appellée dès que l'instanciation (la création d'un nouvel objet). 

Il y a 2 manières de définir le constructeur

__construct() ou "Le nom de la class" (depuis PHP5)

## Encapsulation


![encapsulation](/home/user/Desktop/html/PHP-POO/download.png)

Dans le code d'une class, on peut retrouver une ou des méthode(s) publique(s) et une ou des propriété(s) privée(s). 

L'encapsulation permet:

* L'utilisation de méthodes publiques de la classe pour modifier les propriétés
* La protection des données
* La validation des valeurs


````php
class MyClass
{
	private $myVar = 0;
	public function affVar()
	{
		echo 'La valeur est: ' .++$this->myVar;
	}
}

$myInstance = new MyClass();
echo $myInstance->affVar(); // La valeur est: 1
echo $myInstance->myVar; //Fatal Error

````

Parce que $myVar a été déclarée comme private, il est possible d'en afficher le contenu en passant par la fonction affVar, par contre cela renvoie une erreur si on tente de l'afficher directement car elle est private. On ne peut y avoir accès directement, seule les fonction de la class peuvent y avoir accès. Dans cet exemple, la méthode (function va afficher la valeur de la variable private en lui ajoutant 1 ++$this->myVar. La variable étant déterminée à 0 au départ, si on ajoute 1 à 0, la fonction affVar (méthode) va bien afficher 1. On a effectuer une opération sur la valeur attribuée initialement à la variable grâce à la méthode (function).

## Encapsulation - Les accesseurs (Getter / Setter)

* Méthodes spéciales pour accéder / modifier les propriétés d'une classe

* Norme POO

´´´´php
class Vehicle
{
	private $_color, $_brand;

	public function getColor() {return $this->_color; }
	public function setColor($color)
	{
		$this->_color = $color;
	}

	public function getBrand() {return $this->_brand; }
	public function setBrand($brand) 
	{
		$this->_brand = $brand;
	}
}	
´´´´

**get permet d'accéder aux propriété d'une classe**
´´´´php
public function getColor() {return $this->_color; }
````

**set permet de modidifier les propriétés d'une classe en leur envoyant une nouvelle valeur en paramètre**
````php
public function setColor($color)
	{
		$this->_color = $color;
	}
````

Astuce avec Netbeans: Clicdroit - Insert code - Getter/Setter


## Héritage

* Les propriétés public et protected sont accessibles à l'intérieur des classes héritées

* Evite la répétition de code

* Permet de partager des méthodes et propriétés en commun, structurer de façon naturelle notre logique objet.

````php
class Electrique extends Voiture
{
	public $volt;

	function Electrique($marque, $puissance, $volt)
	{
		parent::__construct ($marque, $puissance);
		$this->volt = $volt;
	}

	function getVolt() {...}
}
````

## Classes abstraites

Les classes abstraites sont faites pour être héritées par défaut, elles ne peuvent être instanciées.

Le seul moyen de se servir des méthodes de la classe est de l'héritée.

´´´´php
abstract class Vehicle {}
´´´´

## Méthode abstraites

La définition de méthodes abstraites au sein d'une classe abstraite oblige toutesles classes héritées à définir cette fonction.

````php
abstract class Personnage
{
	// On va forcer toute classe héritée à écrire cette méthode car chaque personnage frappe différemment.
	abstract public function frapper(Personnage $perso);
}
´´´´

## Static

Parfois, il peut être utile d'accéder à une classe sans devoir l'instancier.

Utilisation du mot-clé "static" pour une méthode ou une propriété

Quelques exemples concrets: 

* Affichage d'une date
* Connexion à une base de donnée

````php
class Connexion 
{
	public static funcion bdd()
	{
		//Code PDO pur se connecter
	}
}

Connexion::bdd(); //Effectue une connexion à la base
````

## Quelques fonctions utiles


| class_exists (string class_name     |        bool       |      Si une classe est déclarée |
| get_class (object objetct)          |        object     |      Retourne la classe spécifiée |
| get_declared_classes(void)          |        array      |      Retourne les classes définies |


## Challenge

Créer une base de donnée en utilisant uen classe Connexion et uen méthode statique pour se connecter (utiliser PDO)

Créer une classe Post avec les propriétés suivantes:
* id_post, title_post, content_post

et les méthodes suivantes: 
* addPost, removePost, findAllPost

Créer les pages index.php qui affiche les Posts contenus dans la base de donnée, ajouter.php qui affiche un formulaire d'ajout d'un post.

## Ressources

http://bdelespierre.fr/article/la-poo-en-php-en-10-minutes-ou-moins

http://www.lephpfacile.com/cours/

https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/l-heritage-3 











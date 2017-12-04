<?php
class Animal
{
  protecte $nbre_pattes;
  function __construct()
  {
    echo "Je suis un animal !";
  }
  public function respire()
  {
    echo "Je respire !";
  }
}

class Mammifere extends Animal
{
  function __construct()
    {
      echo "Je suis un mammifère !";
    }
}

class Oiseau extends Animal
{
  function __construct ()//le construct sert à attributer des variables spécifiques
  {
    echo "Je suis un oiseau !";
  }
}
$elephant = new Mammifere;
$elephant->respire(); // On appelle la méthode respire (héritée de Animal) sur l'éléphant qui est un Mammifère hérité de Animal.
?>

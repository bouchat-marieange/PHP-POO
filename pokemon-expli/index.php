<?php
class Pokemon
{
  private $_type;
  private $_nom;
  private static $_compteur = 0; //static correspond au moule pas au gateau. A ma class pas à a l'objet
  private static $_hello_world ="Hello world !";

  function __construct($nom, $type)
  {
    $this->set_nom($nom);
    $this->set_nom($type);
    self::$_compteur++;
  }

  public function type(){
    return $this->_type;
  }

  public function nom(){
    return $this->_nom;
  }

  public function __get() //fonction get, existe aussi set et destruct
  {
    echo "coucou"; 
  }

  public function set_nom($nom){
    if (is_string($nom) == false) return false;
    $this->_nom = $nom; //vérifier que l'on ne modifie pas un string en un entier par exemple
  }

  public function set_type ($type){
    if (is_string($type) == false) return false;
    $this->_type = $type;
  }

  public function total (){
    return self::$compteur;
  }

  public function to_string (){
    return "\n$this->nom est de type $this->_type";
  }
}$pokemons = array();
$pokemons[] = new Pokemon ("Bulbizard", "Plante");
$pokemons[] = new Pokemon ("Salamèche", "Feu");
$pokemons[] = new Pokemon ("Carapuce", "Eau");

// $pokemons[0]->nom = 1; le but de mettre le paramètre pokemons en private est d'éviter que l'on puisse par exemple réatribuer une valeur intéger ou un autre nom au pokemon



?>

<!-- Créatioin d'un tableau de pokémon -->
<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter</title>
  </head>

  <body>
    <section class="pokemons-list">
  <div>
    <table>
      <thead>
        <tr class="thead">
          <th>Nom</th>
          <th>Type</th>
          <th>to_string</th>
        </tr>
      </thead>

      <?php
      foreach ($pokemons as $pokemon)
{ ?>
  <tr>
    <td><? = $pokemon->nom() ?></td>
    <td><? = $pokemon->type() ?></td>
    <td></td>
  </tr>
<?php } ?>
</tbody>
</table>
  Total: <? : Pokemon::hello_world()?>
}
</section>
?>
  </body>

</html>

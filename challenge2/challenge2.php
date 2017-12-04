<?php
class Connexion
{
  public static function bdd()
  {
    $this->bdd = new PDO('mysql:host=localhost;dbname=challenge;charset=utf8', 'root', 'user');
  }
}

// Connexion::bdd();

// function affPost()
// {
// 	$reponse = $this->bdd->query('SELECT * FROM posts');
// 	while ($test=$reponse->fetch())
// 	{
// 	echo $test['id].' - '.['title']. ' - ' . ['content'];
// 	}
// }

?>

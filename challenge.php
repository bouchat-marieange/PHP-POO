<?php
class Connexion
{
	public $db;
	function __construct()
	{
		try
		{
			$this->db = new PDO('mysql:host=localhost;dbname=challenge;charset=utf8', 'root', 'user');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
	}


	// function countTable()
	// {
	//   $req = $this->db->query('SELECT * FROM exo1');// la méthode va compter les nombre d'utilisateurs dans toute la table - soit 3
	// 	var_dump($req);
	// }

	function countTable() //Alternative avec une requête non préparée - code delphine
	{
		$reponse = $this->db->query('SELECT * FROM exo1');
		while ($test=$reponse->fetch())
		{
		echo $test['id'];
		}
	}
}
?>

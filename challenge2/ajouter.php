<?php

  class Connexion
  {
    public $bdd;
    public static function bdd()
    {
      $bdd = new PDO('mysql:host=localhost;dbname=challenge2;charset=utf8', 'root', 'user');
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $bdd;
    }
  }


  class Post
  {
    public $id_post;
    public $title_post;
    public $content_post;
    public $bdd;

    function __construct($id, $title, $content)
    {
      $this->id_post = $id;
      $this->title_post = $title;
      $this->content_post = $content;
      $this->bdd = Connexion::bdd();
    }


    public function addPost () //set et add en ajoutant des nouveaux objet?
    {
      $req = $this->bdd->prepare("INSERT INTO posts (`title`, `content`) VALUES (:title, :content)"); //inserer un nouvelle ligne
      $req->execute([
        "title" => $this->title_post,
        "content" => $this->content_post
      ]);
    }



    public function removePost ($id_post, $title_post, $content_post)
    {
      // SQL delete

    }

    public function findAllPost() //get ?
    {
      return $this->id_post;
      return $this->title_post;
      return $this->content_post;
    }

  }

  if(isset($_POST['title']) && isset($_POST['content']))//vérification de l'existence des valeurs envoyées en post par le formulaire
  {
    $titre = $_POST['title'];
    $contenu = $_POST['content'];
    $nouveau_message = new Post(-1, $titre, $contenu);//-1 pour garder une valeur d'id pour récupération id si nécessaire
    $nouveau_message->addPost();
  }




?>


<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter</title>
  </head>

  <body>
    <form action="ajouter.php" method="post">

      <div>
        <label for="title">Title :</label>
        <input name="title" type="text" id="title" />
    </div>
    <div>
        <label for="content">Content :</label>
        <input name="content" type="text" id="content" />
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
    </form>

  </body>

</html>

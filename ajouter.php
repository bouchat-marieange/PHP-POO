<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter</title>
  </head>

  <body>
    <?php
      class Connexion
      {
        public static function bdd()
        {
          $this->bdd = new PDO('mysql:host=localhost;dbname=challenge;charset=utf8', 'root', 'user');
        }
      }

      Connexion::bdd();

      class Post
      {
        $id_post;
        $title_post;
        $content_post;

        public function addPost ($id_post, $title_post, $content_post)
        {
          $this->id_post = $id;
          $this->title_post = $title;
          $this->content_post = $content;
        }

        public function removePost ($id_post, $title_post, $content_post)
        {

        }

        public findAllPost()
        {
          return $this->id_post;
          return $this->title_post;
          return $this->content_post;
        }
      }
    ?>


    <form action="ajouter.php" method="post">
      <div>
        <label for="title">Title :</label>
        <input type="text" id="title_post" />
    </div>
    <div>
        <label for="content">Content :</label>
        <input type="text" id="content_post" />
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
    </form>

  </body>

</html>

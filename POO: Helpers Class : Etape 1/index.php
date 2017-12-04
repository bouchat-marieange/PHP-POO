<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>POO: Helpers Class : Etape 1</title>
  </head>

  <body>

    <!-- <h2>Enoncé de l'exercice</h2> -->
    <!-- <p>Créer une classe Form qui s'occupera de générer les différents éléments du formulaires. Pour la classe Form Vous n'êtes pas obligé de vous baser sur l'exemple plus haut. -->

    <!-- Cette classe devra avoir des méthodes et des propriétés afin de pouvoir générer :

    Le début d'un formulaire <form ...>
    Un input text <input type="text"...>
    Un select <select ...> ...</select>
    Un bouton submit <button type="submit"></button>
    Un textarea <textarea ...> ...</textarea>
    Un radio button <textarea ...> ...</textarea>
    Une checkbox <input type="radio"...>
    Vous devez créer cette classes en pensant qu'elles devront être utilisées par un autre développeur. <br/>
    Utilisez des noms de propriétés et de méthodes qui ont du sens, restez simple et commentez votre code.</p> -->

    <?php
    // $form = new Form(); //nouvel objet formulaire
    // echo $form->create($action); // determine la page qui va traiter le formulaire
    // echo $form->text('nom', $nom);// créer un input de type texte avec comme valeur par défaut $nom
    // echo $form->select('nom', $nom);
    // echo $form->textarea('nom', $nom);
    // echo $form->radio button('nom', $nom);
    // echo $form->checkbox('nom', $nom);
    // echo $form->submit('Envoyer');
    // echo $form->end(); //fermer le formulaire
    ?>


    <!-- Le formulaire en htlm -->
    <form method="post" action="traitement.php">

       <p>
         <label>Nom</label> : <input type="text" name="pseudo" />
       </p>

       <p>
         <label for="pays">Dans quel pays habitez-vous ?</label><br />
         <select name="pays" id="pays">
           <option value="france">Belgique</option>
           <option value="canada">Canada</option>
           <option value="japon">Japon</option>
         </select>
       </p>

       <p>
         <label for="precisions">Votre biographie:</label><br/>
         <textarea name="ameliorer" id="ameliorer"></textarea>
       </p>

       <p>
         Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />
         <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />
         <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />
         <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />
         <input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">Encore plus vieux que ça ?!</label>
      </p>

      <p>
         Cochez les aliments que vous aimez manger :<br />
         <input type="checkbox" name="frites" id="frites" /> <label for="frites">Frites</label><br />
         <input type="checkbox" name="steak" id="steak" /> <label for="steak">Steak haché</label><br />
         <input type="checkbox" name="epinards" id="epinards" /> <label for="epinards">Epinards</label><br />
         <input type="checkbox" name="huitres" id="huitres" /> <label for="huitres">Huitres</label>
     </p>

     <p>
       <input type="submit" value="Envoyer" />
     </p>

  </form>


</body>

</html>

<?php

class Form{

  public function __construct($typeForm, $donneForm)
  {
    $this->formulaire($typeForm);
    $this->input($donneForm);
    $this->send();
  }

/*
  public function check($donneForm){
     for($i = 0; $i < count($donneForm); $i++){
      if ($donneForm[$i] == "femal") {

        echo "<label for='femal' name='test'>Femal</label>";
      }
      elseif ($donneForm[$i] == "male") {
        echo "<label for='femal'>Male</label>";
      }
     }
    }*/

  public function formulaire($test){
    echo'
      <form action="'.$test[0].'" method="'.$test[1].'">
    ';
  }

  public function input($donne){
    for($i = 0; $i < count($donne); $i++){
      if( $donne[$i][0] == 'radio'){
        echo "<label for='".$donne[$i][1]."'>".$donne[$i][1]."</label>";
         echo'<input type="'.$donne[$i][0].'" name="'.$donne[$i][1].'" placeholder="'.$donne[$i][2].'">';
      }else{
        echo'<input type="'.$donne[$i][0].'" name="'.$donne[$i][1].'" placeholder="'.$donne[$i][2].'">';
      }

    }
  }

   public function send(){
    echo'
        <button type="submit">Envoyer</button>
      </form>
      ';
  }

}
?>
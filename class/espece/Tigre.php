<?php 

require_once('../Animaux.php');


 class Tigre extends Animaux{
   
    private $espece='Tigre';


    protected function emettreSon() {
        echo "{$this->espece} émet un rugissement.\n";
    }

    public function seDeplacer() {
        echo "{$this->espece} vagabonde.\n";
    }

    

}




?>
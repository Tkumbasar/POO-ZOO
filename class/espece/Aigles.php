<?php 

class Aigles extends Animaux{

        private $espece='Aigles';
    
    
        public function emettreSon() {
            echo "$this->espece piouxpioux.\n";
        }
    
        public function seDeplacer() {
            echo "$this->espece vols.\n";
        }

}




?>
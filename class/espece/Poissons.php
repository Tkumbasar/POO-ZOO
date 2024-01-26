<?php

class Poissons extends Animaux
{

    private $espece = 'Poisson';


    public function emettreSon()
    {
        echo "{$this->espece} plouk.\n";
    }

    public function seDeplacer()
    {
        echo "{$this->espece} nage.\n";
    }


    
}

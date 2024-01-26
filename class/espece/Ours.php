<?php

class Ours extends Animaux
{

    private $espece = 'Ours';


    public function emettreSon()
    {
        echo "{$this->espece} émet un rugissement.\n";
    }

    public function seDeplacer()
    {
        echo "{$this->espece} vagabonde.\n";
    }
}

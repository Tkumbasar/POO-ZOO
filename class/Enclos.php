<?php

require_once('../Animaux.php');

abstract class Enclos
{

    protected int $place_disponible = 6;
    protected $animaux = [];
    private $nomEnclos;
    private string $proprete;
    private $animauxPresents;

    public function __construct($nomEnclos, $proprete, $animauxPresents)
    {

        $this->nomEnclos = $nomEnclos;
        $this->proprete = $proprete;
        $this->animauxPresents = $animauxPresents;
    }

    public function getAnimaux()
    {
        return $this->animaux;
    }
    public function setAnimaux($animaux)
    {
        return $this->animaux = $animaux;
    }

    public function setplaceDisponible($place_disponible)
    {
        $this->place_disponible = $place_disponible;
    }
    public function getplaceDisponible()
    {
        $this->place_disponible;
    }

    public function setNomEnclos($nomEnclos)
    {
        $this->nomEnclos = $nomEnclos;
    }
    public function getNomEnclos()
    {
        return $this->nomEnclos;
    }
    public function setProprete($proprete)
    {
        $this->proprete = $proprete;
    }
    public function getProprete()
    {
        return $this->proprete;
    }
    public function setAnimauxPresents($animauxPresents)
    {
        $this->animauxPresents = $animauxPresents;
    }
    public function getAnimauxPresents()
    {
        return $this->animauxPresents;
    }


    abstract public function ajoutAnimal(Animaux $animal);
    abstract public function entretientEnclos(Animaux $animal);

    public function enleverAnimal(Enclos $animal)
    {
        if ($this->place_disponible < 0) {
            $this->animaux = $animal;
            $this->place_disponible++;
            echo "$animal a été enlever à l'enclos .\n";
        } else {
            echo "L'enclos est vide . Impossible d'enlever un autre .\n";
        }
    }


    public function lesCaracteristiqueDeEnclos()
    {
        echo "<p> le nom de l':" . $this->getNomEnclos();
        echo "<p> le degré de propreté :" . $this->getProprete();
        echo "<p> le nombre d'animaux present :" . $this->getAnimauxPresents();
    }

    public function afficherLesCaracteristique(Animaux $animal)
    {

        echo "le poids : " . $animal->getPoids() . "<br>";
        echo "le taille : " . $animal->getTaille() . "<br>";
        echo "le nom de l'espece : " . $animal->getNomEspece() . "<br>";
        echo "l'age : " . $animal->getAge() . "<br>";
    }
}

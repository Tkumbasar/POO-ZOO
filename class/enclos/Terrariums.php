<?php
require_once('../Enclos.php');
class Terrarium extends Enclos
{


    public function ajoutAnimal(Animaux $terrestre)
    {
        if ($this->getplaceDisponible() > 0) {
            if ($terrestre->getNomEspece() === 'Tigre' || $terrestre->getNomEspece() === 'Ours') {
                echo $terrestre->getNomEspece() . "ajouter";
                $this->place_disponible--;
                $this->animaux[] = $terrestre;
            } else {
                echo $terrestre . "nope un terrestre j'ai dit .\n!";
            }
            echo $terrestre . " a été ajout à l'enclos .\n";
        } else {
            echo "L'enclos est plein . Impossible d'ajouter un autre .\n";
        }
    }

    public function emettreSon(Animaux $terrestre)
    {
        if ($this->$terrestre === 'Tigre') {
            echo "le" . $terrestre . " rugis";
        } else ($this->$terrestre === 'Ours'); {
            echo "le" . $terrestre . " rugis";
        }
    }


    public function entretientEnclos(Animaux $terrestre)
    {
        if ($this->getplaceDisponible() < 0 && $this->getProprete() === 'sale') {
            echo "fermer pour nettoyage";
            if ($this->getplaceDisponible() < 0 && $this->getProprete() === 'correct') {
                echo "il n'y a pas besoin de nettoyer";
            }
        } else ($this->getplaceDisponible() < 0 && $this->getProprete() === 'propre');{
            echo "c'est propre";
        }
    }
}

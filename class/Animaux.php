<?php

class Animaux
{
    // Pour chaque espèce, nous devons pouvoir indiquer leur poids, taille, nom de l'espèce  et âge.
    //  De plus, des booléens seront utilisés pour déterminer si l'animal a faim, s'il dort, s'il est malade.

    private int $poids;
    private int $taille;
    private string $nomEspece;
    private int $age;

    private $faim = false;
    private $dort = false;
    private $malade = false;

    private $manger;
    private $emettreUnSon;
    private $soigne;
    private $sommeil;

   

    public function __construct($poids, $taille, $nomEspece, $age) {

        $this->poids = $poids;
        $this->taille = $taille;
        $this->nomEspece = $nomEspece;
        $this->age = $age;

    }



    // Méthode set (setter) : c'est un mutateurs Cette méthode est utilisée pour définir la valeur d'une propriété privée d'une classe. 
    //Elle permet de contrôler l'accès et de mettre en place des validations avant d'assigner une valeur à une propriété.
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }


    // Méthode get (getter) :c'est un accesseurs Cette méthode est utilisée pour obtenir la valeur d'une propriété privée d'une classe. 
    //Elle permet d'accéder à la valeur d'une propriété sans permettre une modification directe depuis l'extérieur de la classe.
    public function getPoids()
    {
        return $this->poids;
    }

    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    public function getTaille()
    {
        return $this->taille;
    }

    public function setNomEspece($nomEspece)
    {
        $this->nomEspece=$nomEspece;
    }
    public function getNomEspece()
    {
        return $this->nomEspece;
    }

    public function getNom()
    {
        return $this->nomEspece;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setManger($manger){
        $this->manger=$manger;
    }
    public function getManger(){
        return $this->manger;
    }

    public function setEmettreUnSon($emettreUnSon){
        $this->emettreUnSon=$emettreUnSon;
    }
    public function getEmettreUnSon(){
        return $this->emettreUnSon;
    }

    public function setFaim($faim){
        $this->faim=$faim;
    } 

    public function getFaim(){
       return $this->faim;
    } 

    public function setDort($dort){
        $this->dort=$dort;
    } 

    public function getDort(){
       return $this->dort;
    } 
    
    public function setMalade($malade){
        $this->malade=$malade;
    }

    public function getMalade(){
        return $this->malade;
    }

    public function setSoigne($soigne){
        $this->soigne=$soigne;
    }

    public function getSoigne(){
        return $this->soigne;
    }

    public function setSommeil($sommeil){
        $this->sommeil=$sommeil;
    }
    public function getSommeil(){
        return $this->sommeil;
    }

    public function afficherLesCaracteristique(){
    
    echo "le poids : " . $this->getPoids() ."<br>";
    echo "le taille : " . $this->getTaille() ."<br>";
    echo "le nom de l'espece : " . $this->getNomEspece() ."<br>";
    echo "l'age : " . $this->getAge() ."<br>";}
  
}

  
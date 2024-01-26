<?php

 abstract class Animaux
{
    // Pour chaque espèce, nous devons pouvoir indiquer leur poids, taille, nom de l'espèce  et âge.
    //  De plus, des booléens seront utilisés pour déterminer si l'animal a faim, s'il dort, s'il est malade.

    private int $poids;
    private int $taille;
    private string $nomEspece;
    private int $age;

    private bool $faim = false;
    private bool $dort = false;
    private bool $malade = false;
    private bool $soin = false;
    
    private bool $sommeil= false;
    private bool $manger= false;

    
   

    
    abstract protected function emettreSon(); // Méthode abstraite
    abstract public function seDeplacer(); // Méthode abstraite
   

   

    public function __construct($poids, $taille, $nomEspece, $age) {

        $this->poids = $poids;
        $this->taille = $taille;
        $this->nomEspece = $nomEspece;
        $this->age = $age;

    }

    // Méthode set (setter) : c'est un mutateurs Cette méthode est utilisée pour définir la valeur d'une propriété privée d'une classe. 
    //Elle permet de contrôler l'accès et de mettre en place des validations avant d'assigner une valeur à une propriété.
    public function setPoids($poids) :void
    {
        $this->poids = $poids;
    }
    // Méthode get (getter) :c'est un accesseurs Cette méthode est utilisée pour obtenir la valeur d'une propriété privée d'une classe. 
    //Elle permet d'accéder à la valeur d'une propriété sans permettre une modification directe depuis l'extérieur de la classe.
    public function getPoids() :int
    {
        return $this->poids;
    }
    public function setTaille($taille) :void
    {
        $this->taille = $taille;
    }
    public function getTaille():int
    {
        return $this->taille;
    }
    public function setNomEspece($nomEspece):void
    {
        $this->nomEspece=$nomEspece;
    }
    public function getNomEspece():string
    {
        return $this->nomEspece;
    }
    public function setAge($age):void
    {
        $this->age = $age;
    }
    public function getAge():int
    {
        return $this->age;
    }
    public function setFaim($faim):void
    {
        $this->faim=$faim;
    } 
    public function getFaim():bool
    {
       return $this->faim;
    } 
    public function setDort($dort):void
    {
        $this->dort=$dort;
    } 
    public function getDort():bool
    {
       return $this->dort;
    } 
    public function setMalade($malade):void
    {
        $this->malade=$malade;
    }
    public function getMalade():bool
    {
        return $this->malade;
    }
    public function setSoin($soin):void
    {
        $this->soin=$soin;
    }
    public function getSoin()
    {
        $this->soin;
    }
    public function setSommeil($sommeil){
        $this->sommeil=$sommeil;
    }
    public function getSommeil(){
        $this->sommeil;
    }
    public function setManger($manger)
    {
        $this->manger=$manger;
    }
    public function getManger()
    {
        $this->manger;
    }


    public function afficherLesCaracteristique(){
    
    echo "le poids : " . $this->getPoids() ."<br>";
    echo "le taille : " . $this->getTaille() ."<br>";
    echo "le nom de l'espece : " . $this->getNomEspece() ."<br>";
    echo "l'age : " . $this->getAge() ."<br>";}
  

}
  
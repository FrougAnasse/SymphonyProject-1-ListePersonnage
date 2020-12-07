<?php

namespace App\Entity;

class Weapon {

    private $nom;
    private $descri;
    private $degat;

    public function getNom(){return $this->nom;}
    public function getdescri(){return $this->descri;}
    public function getDegat(){return $this->degat;}

    public function setNom($nom){
        $this->nom=$nom;
        return $this;
    }

    public function setdescri($descri){
        $this->descri=$descri;
        return $this;
    }
    public function setDegat($degat){
        $this->degat=$degat;
        return $this;
    }

    public static $armes=[];

    public function __construct($nom,$descri,$degat)
    {
        $this->nom=$nom;
        $this->descri=$descri;
        $this->degat=$degat;
        self::$armes[]=$this;
    }

    public static function creerWeapon(){
        $w1=new Weapon("Épée","une épée tranchante",20);
        $w2=new Weapon("Hache","une hache puissante",30);
        $w3=new Weapon("Arc","un arc précis",10);
    }

    public static function getWeaponParNom($nom){
        foreach( self::$armes as $arme )
        {
            if(strtolower
                (str_replace
                    ("É","e",str_replace
                        ('é',"e",$arme->nom)
                    )
                )===$nom){
                return $arme;
            }
        }
    }
}


?>
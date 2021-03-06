<?php

namespace App\Entity;

class Personnage {

    public $nom;
    public $age;
    public $sexe;
    public $caractéristique=[];

    public static $personnages=[];

    public function __construct($nom,$age,$sexe,$caractéristique)
    {
        $this->nom=$nom;
        $this->age=$age;
        $this->sexe=$sexe;
        $this->caractéristique=$caractéristique;
        self::$personnages[]=$this;
    }

    public static function creerPersonnages(){
        $p1=new Personnage("Marc",25,true,[
            "force"=>3,
            "agilité"=>2,
            "intelligence"=>3
        ]);
        $p2=new Personnage("Milo",30,true,[
            "force"=>5,
            "agilité"=>1,
            "intelligence"=>2
        ]);
        $p3=new Personnage("Tya",22,false,[
            "force"=>1,
            "agilité"=>3,
            "intelligence"=>5
        ]);
    }

    public static function getPersonnageParNom($nom){
        
        foreach( self::$personnages as $perso )
        {
            if(strtolower($perso->nom)===$nom){
                return $perso;
            }
        }
    }
}


?>
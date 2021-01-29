<?php

    class Predateur{

        // ATTRIBUTS

        private $nom;
        public $attaque;

        // CONSTRUCTEUR (pour $var = new Predateur($argt1, $argt2);)

        public function __construct($nom, $attaque){
            $this->nom = $nom;
            $this->attaque = $attaque;
        }
        
        // GETTERS
        
        public function obtenirNom(){
            return $this->nom;
        }
        
        public function obtenirAttaque(){
            return $this->attaque;
        }

        // SETTERS

        public function definirNom($valeur){
            $this->nom = $valeur;
        }

        public function definirAttaque($valeur){
            $this->attaque = $valeur;
        }
        
        // MÉTHODES
        
        public function attaquer($cible){
            $cible->feuilles -= $this->attaque;
        }
    }

?>
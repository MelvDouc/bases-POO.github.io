<?php

    /**
     * Class Escargot
     * Permet de créer un escargot de combat.
     */

    class Escargot{

        /**
         * @var string Nom de l'escargot
         */
        protected $nom;
        /**
         * @var int Attaque de l'escargot
         */
        protected $attaque = 20;
        /**
         * @var int Défense de l'escargot
         */
        protected $defense = 100;

        public function __construct($nom){
            $this->nom = $nom;
        }

        // SETTERS

        /**
         * @param string $nom Nom de l'escargot
         */
        public function setNom($nom){
            $this->nom = $nom;
        }
        
        /**
         * @param string $attaque Attaque de l'escargot
         */
        public function setAttaque($attaque){
            $this->attaque = $attaque;
        }
        
        /**
         * @param string $defense Défense de l'escargot
         */
        public function setDefense($defense){
            $this->defense = $defense;
        }

        // GETTERS

        /**
         * @return string
         */
        public function getNom(){
            return $this->nom;
        }

        /**
         * @return int
         */
        public function getAttaque(){
            return $this->attaque;
        }

        /**
         * @return int
         */
        public function getDefense(){
            return $this->defense;
        }

        // METHODS

        /**
         * @return int
         */
        public function deces(){
            return $this->defense <= 0;
        }

        /**
         * Empêche la défense d'être un nombre inférieur à zéro.
         */
        public function empecherNegatif(){
            if($this->defense < 0){
                $this->defense = 0;
            }
        }

        /**
         * @param  $cible Cible de l'attaque.
         */
        public function attaque($cible){
            $cible->defense -= $this->attaque;
            $cible->empecherNegatif();
            // $cible->deces();
        }


    }
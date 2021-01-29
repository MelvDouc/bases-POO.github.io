<?php

    class Legume {

        public $nom;
        public $taille = 10;
        public $feuilles = 2;
        CONST FEUILLES_MAX = 20;
        public $genre;

        public function __construct($nom){
            $this->nom = $nom;
        }

        public function pousser($nb_de_feuilles = null){
            if(is_null($nb_de_feuilles)){
                $this->feuilles = self::FEUILLES_MAX;
            } else{
                $this->feuilles += $nb_de_feuilles;
            }
        }

        public function estMort() {
            return $this->feuilles <= 0; // Renvoie "true" si nb de feuilles <= 0.
        }
    }

    
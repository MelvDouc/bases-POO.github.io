<?php

    class Legume {

        public $nom;
        public $taille = 10;
        public $feuilles = 2;

        /*public __construct($nom, $taille){
            $this->nom = $nom;
            $this->taille = $taille;
        }*/

        public function pousser($nb_de_feuilles = null){
            if(is_null($nb_de_feuilles)){
                $this->feuilles += 1;
            } else{
                $this->feuilles += $nb_de_feuilles;
            }
        }
    }

    
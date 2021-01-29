<?php

    /**
     * class Form
     * Permet de générer un formulaire rapidement et simplement
     * 
     * 
     * 
     * 
     */
    class Form{

        public $donnees;
        public $balise = 'p';

        public function __construct($donnees = array()){
            $this->donnees = $donnees;
        }

        public function getValue($index){
            if(isset($this->$donnees[$index])){
                return $this->$donnees[$index];
            } else{
                return null;
            }
        }

        public function entourer($html){
            return '<' . $this->balise . '>' . $html .'</'. $this->balise . '>';
        }

        public function input($nom){
            return '<input type="text" name="' . $nom . '" value="' . $this->getValue($nom) . '>';
        }

        public function submit($val){
            return "<button type='submit'>$val<button>";
        }
    }
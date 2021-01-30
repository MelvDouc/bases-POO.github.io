<?php

    class Form {

        private $donnees;
        public $balise = 'p';

        public function __construct($donnees = array()) {
            $this->donnees = $donnees;
        }

        public function getValue($index) {
            if (isset($this->donnees[$index])) {
                echo $this->donnees[$index];
            } else {
                return null;
            }
        }

        public function entourer($contenu) {
            echo '<' . $this->balise . '>' . $contenu . '</' . $this->balise . '>';
        }

        public function input($nom) {
            echo $this->entourer('<input type="text" name="' . $nom . '" value="' . $this->getValue($nom) . '">');
        }

        public function submit($valeur) {
            echo '<button type="submit">' . $valeur . '</button>';
        }

    }
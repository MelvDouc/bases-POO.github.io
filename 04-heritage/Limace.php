<?php

    class Limace extends Escargot {

        // protected $defense = 80; // niveau de protection protected ou public

        public function __construct($nom){
            parent::__construct($nom); // On garde le mm nb de param que le parent.
            $this->defense = $this->defense / 2;
        }

        public function attaque($cible){
            // $cible->defense -= 2 * $this->attaque;
            $cible->defense -= $this->attaque;
            parent::attaque($cible); // utilise la méthode attaque() du parent
        }
    }

    class Ver extends Limace{
        public function __construct($nom){
            parent::__construct($nom);
            $this->attaque = $this->attaque / 10;
            $this->defense = $this->defense / 10;
        }
    }
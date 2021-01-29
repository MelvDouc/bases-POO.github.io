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

        /**
         * @var array Données utilisées par le formulaire.
         */

        private $data;
        /**
         * @var string Tag utilisé pour envelopper les champs.
         */
        public $balise = 'p';
        /**
         * @param array $donnees Données utilisées par le formulaire.
         */

        public function __construct($data = array()){
            $this->data = $data;
        }

        /**
         * @param $index string Index de la valeur à récupérer.
         */
        public function getValue($index){
            if(isset($this->$data[$index])){
                return $this->$data[$index];
            } else{
                return null;
            }
        }

        /**
         * @param string $contenu Contenu HTML à entourer
         * @return string
         */
        public function entourer($html){
            return '<'.$this->balise.'>'.$html.'</'.$this->balise.'>';
        }

        /**
         * @param string $nom
         * @return string
         */
        public function input($nom){
            return '<input type="text" name="' . $nom . '" value="' . $this->getValue($nom) . '>';
        }

        /**
         * @param string $value Value de l'input[type="submit"].
         * @return string
         */
        public function submit($val){
            // return '<button type="submit">'.$val.'<button>';
            return "<button type='submit'>$val<button>";
        }
    }
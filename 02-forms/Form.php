<?php

    class Form{

        private $data;
        public $balise = 'p';

        public function __construct($data = array()){
            $this->data = $data;
        }

        public function getValue($index){
            if(isset($this->$data[$index])){
                return $this->$data[$index];
            } else{
                return null;
            }
        }

        public function entourer($html){
            return '<'.$this->balise.'>'.$html.'</'.$this->balise.'>';
        }

        public function input($nom){
            return '<input type="text" name="' . $nom . '" value="' . $this->getValue($nom) . '>';
        }

        public function submit($val){
            // return '<button type="submit">'.$val.'<button>';
            return "<button type='submit'>$val<button>";
        }
    }
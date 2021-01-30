<?php

	/**
	 * Class FormBootstrap
	 * Permet de créer des inputs avec label correspondant et des boutons de type "submit" comportant des classes Bootstrap.
	 */
	class FormBootstrap{

		/**
		 * @var string Données du formulaire.
		 */
		public $data;
		/**
		 * @var string Balise "div".
		 */
		public $divTag = 'div';
		/**
		 * @var string Balise "input".
		 */
		public $inputTag = 'input';


		public function __construct($data = array()){
			$this->data = $data;
		}

		/**
		 * @param string Affiche une donnée du tableau $data à l'index défini en argument. Si la donnée n'est pas définie, renvoie null.
		 */
		public function getValue($index){
			if(isset($this->data[$index])){
				return $this->data[$index];
			} else{
				return null;
			}
		}

		/**
		 * @param string-string Enveloppe du contenu (2e argument) dans une div avec des classes au choix (1e argument).
		 */
		public function wrapDiv($classes, $content){
			echo '<' . $this->divTag . ' class="' . $classes . '">' . $content . '</' . $this->divTag . '/>';
		}

		/**
		 * @param string-string-string Crée un label et un input. Prend en arguments : 1) le texte du label; 2) le nom de l'input (qui est aussi son id et la valeur de l'attribut "for" du label); 3) le type de l'input (text, password, email ou number).
		 */
		public function label_input($labelText, $name, $type){
			$this->wrapDiv('mb-3', '<label for="' . $name . '" class="form-label">' . $labelText . '</label><' . $this->inputTag . ' type="' . $type . '" class="form-control" name="' . $name . '" id="' . $name . '">');
		}

		/**
		 * @param string-string Crée une checkbox avec un label. Prend en arguments : 1) le texte du label; 2) le nom (et id) de l'input.
		 */
		public function checkbox($labelText, $name){
			$this->wrapDiv('form-check mb-3', '<' . $this->inputTag . ' class="form-check-input" type="checkbox" name="' . $name . '" value ="Yes" id="' . $name . '"><label for="' . $name . '" class="form-check-label">' . $labelText . '</label>');
		}

		/**
		 * @param string Crée un bouton de type "submit" dont le contenu est défini en argument.
		 */
		public function submit($val) {
            echo '<button type="submit" class="btn btn-primary">' . $val . '</button>';
        }

	}
# POO

## bases

* Une classe peut avoir plusieurs attributs (variables)
* ainsi que plusieurs méthodes (fonctions).
* **Instanciation** : création d'une nouvelle version d'un objet.
* -> pour accéder aux propriétés de la classe

## 01-premier-objet

* Visibilité
    * public : propriété accessible partout
    * private : propriété accessible uniquement dans la classe
    * protected : comme private mais accessible depuis d'autres classes qui en héritent
    * $this fait référence à l'instance en cours

## 02-formulaire

* Documentation
    PHP doc : règles permettant d'avoir des compréhensibles par les IDE et les générateurs d'indentation
    /**
    * *@var pour les attributs
    * *@param pour les méthodes
    * *@return pour les valeurs de retour
    */

## 03-propriétés et méthodes statiques

* static : permet d'avoir à la propriété sans avoir à instancier la classe
* MaClasse::maMéthodeStatique();
* self fait référence à soi-même
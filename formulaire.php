<?php

class Formulaire{
    //Méthodes :
    function __construct($nomfic,$method) {
        echo "<form method='".$method."' action='".$nomfic."'>";
    }

    function ajouterZoneTexte($name){
        echo '<input type="text" name='.$name.'/>';
    }

    function ajouterBouton(){
        echo '<input type="submit" value="Envoi"/>';
    }
    function getform() {
        $form = new Formulaire("formulaire.php","post");
        $form->ajouterBouton();
        $form->ajouterZoneTexte("testTexte");
        echo '</form>';
    }
}
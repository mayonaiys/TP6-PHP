<hr>
<h2>Exercice 2 :</h2>

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
        echo '</form>';
    }
}

$form = new Formulaire("formulaire.php","post");
$form->ajouterBouton();
$form->ajouterZoneTexte("testTexte");

?>

<hr>
<h2>Exercice 3 :</h2>

<body>
<form method="post">
    Nom : <input type="text" name="nom" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>"/>
    <br>
    Prénom : <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>" />
    <br>
    Mail: <input type="text" name="mail" value="<?php if (isset($_POST['mail'])){echo $_POST['mail'];} ?>" />
    <br>
    Age :
    <select name="age">
        <option value="">--Age--</option>
        <option value="0-20">0-20</option>
        <option value="20-40">20-40</option>
        <option value="40-60">40-60</option>
        <option value="60+">60+</option>
    </select>
    <br>
    Monsieur : <input type="checkbox" name="sexe" value="Monsieur"/>
    Madame : <input type="checkbox" name="sexe" value="Madame"/>
    <br>
    <input type="submit" value = "Envoyer"/>
</form>

</body>
<?php

class Recuperateur{
    //Attribut :
    private $nom;
    private $prenom;
    private $mail;
    private $age;
    private $sexe;

    //Méthodes :

    //Constructeur V1:
    /*function __construct(){
        if(isset($_POST['nom'])){
            $nom = $_POST['nom'];
            echo $nom;
        }
        if(isset($_POST['prenom'])){
            $prenom = $_POST['prenom'];
            echo $prenom;
        }
        if(isset($_POST['mail'])){
            $mail = $_POST['mail'];
            echo $mail;
        }
        if(isset($_POST['age'])){
            $age = $_POST['age'];
            echo $age;
        }
        if(isset($_POST['sexe'])){
            $sexe = $_POST['sexe']->value;
            echo $sexe;
        }
    }*/

    //Constructeur V2 :
    function __construct()
    {
        $nom = $this->getNom();
        $prenom = $this->getPrenom();
        $age = $this->getAge();
        $sexe = $this->getSexe();
        $mail = $this->getMail();
    }

    function getNom(){
        if(isset($_POST['nom'])){
            return $_POST['nom'];
        }
        return "";
    }
    function getPrenom(){
        if(isset($_POST['prenom'])){
            return $_POST['prenom'];
        }
        return "";
    }
    function getAge(){
        if(isset($_POST['age'])){
            return $_POST['age'];
        }
        return "";
    }
    function getMail(){
        if(isset($_POST['mail'])){
            return $_POST['mail'];
        }
        return "";
    }

    function getSexe(){
        if(isset($_POST['sexe'])){
            return $_POST['sexe'];
        }
        return "";
    }

    function afficherFormulaire(){
        echo "Nom : ".$this->getNom();
        echo '<br>';
        echo "Prénom : ".$this->getPrenom();
        echo '<br>';
        echo "Age :".$this->getAge();
        echo '<br>';
        echo "Mail :".$this->getMail();
        echo '<br>';
        echo "Sexe :".$this->getSexe();
    }
}

$recup = new Recuperateur();
$recup->afficherFormulaire();



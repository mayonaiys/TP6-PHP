<h1>POO</h1>

<hr>
<h2>Exercice 1 :</h2>

<?php
//Partie 1 :
/*class FootballTeam {
    //Attributs
    public $nomTeam;
    public $nbrTitres;

    //Méthodes
    function display(){
        echo "L'équipe ".$this->nomTeam." a ".$this->nbrTitres." titres";
    }
}

$team = new FootballTeam();
$team->nomTeam = "CIR2";
$team->nbrTitres = 12;
$team->display();*/

//Partie 2 :
/*class FootballTeam {
    //Attributs
    private $nomTeam;
    private $nbrTitres;

    //Méthodes
    function display(){
        echo "L'équipe ".$this->nomTeam." a ".$this->nbrTitres." titres";
    }

    function getNom(){
        return $this->name;
    }

    function getNbrTitres(){
        return $this->nbrTitres;
    }

    function setNom($nomTeam){
        $this->nomTeam=$nomTeam;
    }

    function setNbrTitres($nbrTitres){
        $this->nbrTitres=$nbrTitres;
    }
}

$team = new FootballTeam();
$team->setNom("CIR2");
$team->setNbrTitres(12);
$team->display();*/

//Partie 3 :
class FootballTeam {

    const NBREQUIPES = "Nombre d'équipes :";

    //Attributs
    private $nomTeam;
    private $nbrTitres;
    static $nbrTeams=0;

    //Méthodes
    function __construct($nomTeam,$nbrTitres){
        $this->nomTeam=$nomTeam;
        $this->nbrTitres=$nbrTitres;
        ++self::$nbrTeams;
    }

    function __destruct(){
        echo "Destructor";
    }

    static function displayNbrTeams(){
        echo self::NBREQUIPES." ".self::$nbrTeams;
    }

    function display(){
        echo "L'équipe ".$this->nomTeam." a ".$this->nbrTitres." titres";
    }

    function getNom(){
        return $this->nomTeam;
    }

    function getNbrTitres(){
        return $this->nbrTitres;
    }

    function setNom($nomTeam){
        $this->nomTeam=$nomTeam;
    }

    function setNbrTitres($nbrTitres){
        $this->nbrTitres=$nbrTitres;
    }
}

$team = new FootballTeam("CIR1",11);
$team1 = new FootballTeam("CIR2",25);
$team2 = new FootballTeam("CIR3",13);
$team3 = new FootballTeam("CSI2",0);
$team->display();
echo '<br>';
$team1->display();
echo '<br>';
$team2->display();
echo '<br>';
$team3->display();
echo '<br>';
FootballTeam::displayNbrTeams();
echo '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlgoPHP2</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

<p>Ex1</p>

<?php
$text = "Mon texte en paramètre";

function convertirMajRouge($text)
{
    echo '<div>' . mb_strtoupper($text) .'</div>';
}
convertirMajRouge($text);
?>


<p>Ex2</p>

<?php
$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
);

function afficherTableHTML($capitales) {
    ksort($capitales);

    echo '<table class = tableau>';
    echo '<tr><th>Pays</th><th>Capitale</th></tr>';
    foreach ($capitales as $pays => $capitale) {
        echo '<tr>';
        echo '<td>' . strtoupper($pays) . '</td>';
        echo '<td>' . $capitale . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
afficherTableHTML($capitales);

?>

<p>Ex3</p>


<?php
echo '<a href="https://elan-formation.fr/accueil" target="_blank" rel="author">Elan Formation</a>';
?>
<p>Ex4</p>

<?php
$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
);
// $lien = array(
//     "Berlin" =>'<a href="https://fr.wikipedia.org/wiki/Berlin" target="_blank" rel="author">Lien</a>',
//     "Madrid" =>'<a href="https://fr.wikipedia.org/wiki/Madrid" target="_blank" rel="author">Lien</a>',
//     "Paris" =>'<a href="https://fr.wikipedia.org/wiki/Paris" target="_blank" rel="author">Lien</a>',
//     "Rome" =>'<a href="https://fr.wikipedia.org/wiki/Rome" target="_blank" rel="author">Lien</a>',
//     "Washington" =>'<a href="https://fr.wikipedia.org/wiki/Washington_(%C3%89tat)" target="_blank" rel="author">Lien</a>'
// );

// $lien = "https://fr.wikipedia.org/wiki/";



function afficheTableHTML($capitales) {
    ksort($capitales);

    echo '<table class = tableau>';
    echo '<tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>';
    foreach ($capitales as $k => $v) {
        echo '<tr>';
        echo '<td>' . strtoupper($k) . '</td>';
        echo '<td>' . $v . '</td>';
   
        echo '<td><a href="https:/fr.wikipedia.org/wiki/'.$v.'">'.$v.' </a></td>';

        echo '</tr>';
    }
    echo '</table>';
}
afficheTableHTML($capitales);

?>




<p>Ex5</p>

<?php
$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($nomsInput){
    foreach ($nomsInput as $imp){
        echo '<label for="'.$imp.' "> '.$imp. ' </label><br>';
        echo '<input id="' .$imp.' "type="text" /><br>';
    }
}
afficherInput($nomsInput);
?>

<p>Ex6</p>


<?php
$elements = array("Monsieur","Madame","Mademoiselle");
function alimenterListeDeroulante($elements){
    echo '<select>';
    foreach ($elements as $elem){
        echo '<option value="'.$elem.'">'.$elem.'</option>';
    }
    echo '</select>';
}

alimenterListeDeroulante($elements);
?>

<p>Ex7</p>

<?php
$elements = [
    'Choix 1' => true,
    'Choix 2' => true,
    'Choix 3' => false,
];

function genererCheckbox($cases) {
    foreach ($cases as $nom => $checked) {
        $checked = $checked ? 'checked':'';

        echo "<input type='checkbox' name='$nom' value='1' $checked > $nom<br>";
    }
}

genererCheckbox($elements);
?>


<p>Ex8</p>

<?php

function repeterImage($n){
    for($i = 0; $i < $n; $i++)
    {
        echo $url = '<img src="https://my.mobirise.com/data/userpic/764.jpg" alt="Chien">';
    }
}
repeterImage(3);
?>

<p>Ex9</p>


<?php
$nomsRadio = ['Masculin','Féminin','Autre'];

function afficherRadio($genre ){
    foreach ($genre as $type){
        echo "<input type='radio' name='genre' value=''>$type<br>";
    }
}
afficherRadio($nomsRadio);
?>

<p>Ex10</p>

<form action="welcome.php" method="post">
<?php
$nomsInpu = array("Nom","Prénom","E-mail","Ville");

function afficherInpu($nomsInpu){
    foreach ($nomsInpu as $imp){
        echo '<label for="'.$imp.' "> '.$imp. ' </label><br>';
        echo '<input id=' .$imp.' type="text" /><br>';
    }
}
afficherInpu($nomsInpu);

$nomsRad = ['Homme','Femme'];

function afficherRad($genre ){
    foreach ($genre as $type){
        echo "<input type='radio' name='genre' value='$type'>$type";
    }
}
afficherRad($nomsRad);

echo '<br>';

$element = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet ");
function alimenterListeDeroulant($element){
    echo '<select>';
    foreach ($element as $elem){
        echo '<option value="'.$elem.'">'.$elem.'</option>';
    }
    echo '</select>';
}

alimenterListeDeroulant($element);
echo '<br>';
echo '<input type="submit" value="Envoyer" />';

?>
</form>

<p>Ex11</p>

<?php

$day = ['Monday'=>'Lundi', 
    'Tuesday'=>'Mardi',
    'Wednesday'=>'Mercredi',
    'Thursday'=>'Jeudi',
    'Friday'=>'Vendredi',
    'Saturday'=>'Samedi',
    'Sunday'=>'Dimanche'];

$month = ['January'=>'Janvier',
    'February'=>'Février',
    'March'=>'Mars',
    'April'=>'Avril',
    'May'=>'Mai',
    'June'=>'Juin',
    'July'=>'Juillet',
    'August'=>'Août',
    'September'=>'Septembre',
    'October'=>'Octobre',
    'November'=>'Novembre',
    'December'=>'Décembre'];

$date = date_create("2018-02-23");

function formaterDateFr($date, $day, $month)
{
    $date = $date->format("l j F Y");
    $date = strtr($date, $day, );
    echo$date = strtr($date, $month);
}

formaterDateFr($date, $day, $month);
?>
<br>
<?php

$fmt = new IntlDateFormatter(
    "fr_FR",
        IntlDateFormatter::FULL, IntlDateFormatter::NONE,
    'Etc/UTC', IntlDateFormatter::GREGORIAN,
    'EEEE dd MMMM y'
);

$date = new DateTime('06-02-2023');
echo $fmt->format($date);
?>

<p>Ex12</p>

<?php
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

foreach ($tableauValeurs as $k => $v){
    var_dump($v);
    echo '<br>';
}
?>

<p>Ex13</p>

<?php
// classe : ensemble d'états (attributs) et de comportements (méthodes)
// classe = un modèle, un template, un schéma, un moule

    // objet : instance d'une classe
    // objet = concret

// méthode : fonction d'une classe
// une méthode ne peut pas être appelée "comme ça" (ex. demarrer()).
//      elle est déclarée dans une classe.
//      nécessite une instance de la classe pour être appelée (ex. $v1->demarrer()).

class Voiture{

    // --------------propriétés / attributs (ce qui compose/définit la classe)

    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;
    private bool $isDemarree;

    //-----------// constructeur (initialise les attributs de la classe et l'instancie, est appelé grâce au mot-clef "new")

    public function __construct(string $marque, string $modele, int $nbPortes, int $vitesseActuelle = 0, $isDemarree = false) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle;
        $this->isDemarree = $isDemarree;
    }

//--getters permettent d'accéder (récupérer) à la valeur d'une propriété
    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getNbPortes(){
        return $this->nbPortes;
    }

    public function getVitesseActuelle(){
        return $this->vitesseActuelle;
    }

//--setters permettent d'attribuer/modifier une valeur à une propriété
    public function setMarque($marque){
        $this->marque = $marque;
    }

    public function setModele($modele){
        $this->modele = $modele;
    }

    public function setNbPortes($nbPortes){
        $this->nbPortes = $nbPortes;
    }

    public function setVitesseActuelle($vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }

    //---------------méthodes (actions possibles sur les objets (instances de la classe))


    private function getNomComplet() {
        return "$this->marque $this->modele";
    }

    
    public function demarrer() {
        // si le véhicule est déjà démarré
        if ($this->isDemarree) {
            // message comme quoi il est déjà démarré (donc on ne le démarre pas à nouveau)
            echo " Le véhicule {$this->getNomComplet()} est déjà démarré. Inutile de le démarrer encore.<br>";
        } 
        else {
            // sinon (le véhicule n'est pas déjà démarré)
            // on le démarre réellement (changement d'état)
            $this->isDemarree = true;
            // message comme quoi la voiture démarre
            echo " Le véhicule {$this->getNomComplet()} démarre.<br>";
        }
    }

    public function stopper(){
        
        if ($this->vitesseActuelle != 0) {
            echo " Le véhicule {$this->getNomComplet()} est en mouvement. Il faut ralentir jusqu'à 0 km/h afin de pouvoir le stopper.<br>";
        }
        elseif (!$this->isDemarree) {
            echo " Le véhicule {$this->getNomComplet()} est déjà stoppé. Inutile de le stopper encore.<br>";
        }
        else {
            $this->isDemarree = false;
            echo " Le véhicule {$this->getNomComplet()} est stoppé.<br>";
        }
    }

    public function accelerer($differenceVitesse) {
        // si la voiture n'est pas démarrée
        if (!$this->isDemarree) {
            echo "Le véhicule {$this->getNomComplet()} veut accélérer de $differenceVitesse km/h<br>";
            echo " Pour accélérer, il faut démarrer le véhicule {$this->getNomComplet()} !<br>";
        }
        // sinon la voiture est démarrée
        else {
            $this->vitesseActuelle += $differenceVitesse;
            echo " Le véhicule {$this->getNomComplet()} accélère de $differenceVitesse km/h.<br>";
        }
    }

    public function ralentir($differenceVitesse){
        $differenceVitesse = abs($differenceVitesse);
        if ($this->vitesseActuelle - $differenceVitesse < 0) {
            $this->vitesseActuelle = 0;
        } else {
            $this->vitesseActuelle -= $differenceVitesse;
        }
    }

    public function afficherInfo(){
        echo "***********************<br>";
        echo "Nom et modèle du véhicule : {$this->getNomComplet()}<br>
        Nombre de portes : $this->nbPortes<br>";

        echo "Le véhicule $this->marque est " . ($this->isDemarree ? 'démarré' : 'arrêté') . "<br>";

        echo "Sa vitesse actuelle est de : $this->vitesseActuelle km / h<br>"; 
    }

    public function afficherVitesseActuelle() {
        echo "La vitesse du véhicule {$this->getNomComplet()} est de : $this->vitesseActuelle km / h<br>"; 
    }
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);



$v1->demarrer();
// $v1->stopper();
$v1->accelerer(50);

$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);

$v1->afficherVitesseActuelle();
$v2->afficherVitesseActuelle();

echo "Infos véhicule 1<br>";
$v1->afficherInfo();

echo "Infos véhicule 2<br>";
$v2->afficherInfo();

// var_dump($v1);
?>

<p>Ex14</p>

<?php

class Voitures {
    public $marque;
    public $modele;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getInfos() {
        return "Voiture : $this->marque $this->modele";
    }
}


class VoitureElec extends Voitures {
    public $autonomie;

    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    public function getInfos() {
        return parent::getInfos() . " a une autonomie de $this->autonomie km.";
    }
}

//-------- Objets--------------

$v1 = new Voitures("Peugeot", "408");
$v2 = new VoitureElec("BMW", "i3", 100);

//----------------------------

echo $v1->getInfos() . "<br/>";
echo $v2->getInfos() . "<br/>";

?>

<p>Ex15</p>

<?php
$email= ['elan@elan-formation.fr','contact@elan'];
foreach($email as $k){
    if (filter_var($k, FILTER_VALIDATE_EMAIL)){
        echo "L'adresse $k une adresse e-mail valide.";
    }
    else {
        echo NULL;
    }
}
?>

</body>
</html>

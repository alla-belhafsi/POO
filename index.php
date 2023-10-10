<h1>POO Entreprise</h1>

<?php

//require "Entreprise.php";
//require "Employe.php";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
$tf1 = new Entreprise("TF1", "1970-01-01", "13 rue de la Seine", "75000", "PARIS");
$stephane = new Employe("SMAIL", "Stéphane", "stephane@elan-formation.fr", $elanFormation);
$mickael = new Employe("MURMANN", "Mickael", "Mickael@elan-formation.fr", $elanFormation);


echo $elanFormation->getInfos();
//$stephane->setEntreprise($tf1);
//echo $stephane->getInfos();
//var_dump($elanFormation);
echo $elanFormation->afficherEmployes();

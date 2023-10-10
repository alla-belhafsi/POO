<?php

class Entreprise {

    // attributs
    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $cp;
    private string $ville;
    private array $employes;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville) {
        $this->raisonSociale = $raisonSociale;
        $this->dateCreation = new DateTime($dateCreation);
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->employes = [];
    }

    public function getRaisonSociale(): string {
        return $this->raisonSociale;
    }

    public function setRaisonSociale($raisonSociale) {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    public function getDateCreation(): DateTime {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function getAdresse(): string {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    public function getCp(): string {
        return $this->cp;
    }

    public function setCp($cp) {
        $this->cp = $cp;
        return $this;
    }

    public function getVille(): string {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    public function getAdresseComplete() {
        return $this->adresse." ".$this->cp." ".$this->ville;
    }

    public function getInfos() {
        return $this." à été crée le ".$this->getDateCreation()->format("d-m-Y")." et se situe à l'adresse suivante ".$this->getAdresseComplete()."<br><br>";
    }

    

    public function getEmployes() {
        return $this->employes;
    }

    public function setEmployes($employes) {
        $this->employes = $employes;
        return $this;
    }
    
    public function addEmploye(Employe $employe) {
        $this->employes[] = $employe;
    }

    public function afficherEmployes() {
        $result = "<h2>Employés de $this</h2><ul>";
        foreach($this->employes as $employe) {
            $result .= "<li>$employe</li>";
        }
        $result .="</ul>";
        return $result;
    }
    
    public function __tostring() {
        return $this->raisonSociale;
    } 
}
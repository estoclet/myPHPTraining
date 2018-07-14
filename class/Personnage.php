<?php
class Personnage {
    private $_degats = 0;
    private $_experience = 0;
    private $_force = 20;

    public function frapper(Personnage $persoAFrapper) {
        $persoAFrapper->_degats += $this->_force;
    }
    public function deplacer() {

    }
    public function gagnerExperience() {
        $this->_experience = $this->_experience + 1;
    }
    public function afficherExperience() {
        echo $this->_experience;
    }

    //accesseurs (ou getters)
    public function degats() {
        return $this->_degats;
    }
    public function force() {
        return $this->_force;
    }
    public function experience() {
        return $this->_experience;
    }

    //mutateurs (ou setters)
    public function setForce($_force) {
        if (!is_int($force)) // s'ilne s'agit pas d'un entier
        {
            trigger_error('La force d\'un personnage doit etre un nombre entier', E_USER_WARNING);
            return;
        }
        if ($force > 100) // on verifie que la force est inférieure à 100
        {
            trigger_error('La force d\'un personnage ne doit pas exceder 100', E_USER_WARNING);
            return;
        } 
    }
}

$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->frapper($perso2);
$perso1->gagnerExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();

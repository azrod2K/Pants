<?php
class Couleur{
    private $idCouleur;
    private $couleurPantalon;
    

        /**
         * Get the value of idCouleur
         */ 
        public function getIdCouleur()
        {
                return $this->idCouleur;
        }

        /**
         * Set the value of idCouleur
         *
         * @return  self
         */ 
        public function setIdCouleur($idCouleur)
        {
                $this->idCouleur = $idCouleur;

                return $this;
        }

        /**
         * Get the value of couleurPantalon
         */ 
        public function getCouleurPantalon()
        {
                return $this->couleurPantalon;
        }

        /**
         * Set the value of couleurPantalon
         *
         * @return  self
         */ 
        public function setCouleurPantalon($couleurPantalon)
        {
                $this->couleurPantalon = $couleurPantalon;

                return $this;
        }

        public static function GetAllColor(){

        }
}

?>
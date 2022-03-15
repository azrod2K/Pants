<?php
class Commande{

        private $idCommande;
        private $prixCommande;
        private $dateCommande;
        private $dateLivraison;
        private $idUser;

        /**
         * Get the value of idCommande
         */ 
        public function getIdCommande()
        {
                return $this->idCommande;
        }

        /**
         * Set the value of idCommande
         *
         * @return  self
         */ 
        public function setIdCommande($idCommande)
        {
                $this->idCommande = $idCommande;

                return $this;
        }

        /**
         * Get the value of prixCommande
         */ 
        public function getPrixCommande()
        {
                return $this->prixCommande;
        }

        /**
         * Set the value of prixCommande
         *
         * @return  self
         */ 
        public function setPrixCommande($prixCommande)
        {
                $this->prixCommande = $prixCommande;

                return $this;
        }

        /**
         * Get the value of dateCommande
         */ 
        public function getDateCommande()
        {
                return $this->dateCommande;
        }

        /**
         * Set the value of dateCommande
         *
         * @return  self
         */ 
        public function setDateCommande($dateCommande)
        {
                $this->dateCommande = $dateCommande;

                return $this;
        }

        /**
         * Get the value of dateLivraison
         */ 
        public function getDateLivraison()
        {
                return $this->dateLivraison;
        }

        /**
         * Set the value of dateLivraison
         *
         * @return  self
         */ 
        public function setDateLivraison($dateLivraison)
        {
                $this->dateLivraison = $dateLivraison;

                return $this;
        }

        /**
         * Get the value of idUser
         */ 
        public function getIdUser()
        {
                return $this->idUser;
        }

        /**
         * Set the value of idUser
         *
         * @return  self
         */ 
        public function setIdUser($idUser)
        {
                $this->idUser = $idUser;

                return $this;
        }
}
?>
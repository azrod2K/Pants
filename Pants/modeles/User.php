<?php
class User{
    private $idUser;
    private $nomUser;
    private $prenomUser;
    private $email;
    private $motdepasse;

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

    /**
     * Get the value of nomUser
     */ 
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set the value of nomUser
     *
     * @return  self
     */ 
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get the value of prenomUser
     */ 
    public function getPrenomUser()
    {
        return $this->prenomUser;
    }

    /**
     * Set the value of prenomUser
     *
     * @return  self
     */ 
    public function setPrenomUser($prenomUser)
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of motdepasse
     */ 
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set the value of motdepasse
     *
     * @return  self
     */ 
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }
    public static function addUser(){
        $req=MonPdo::getInstance()->prepare('INSERT INTO User(NomUser, PrenomUser, email, motdepasse) Values(:nom, :prenom, :mail, :motpasse)');
    }
}
?>
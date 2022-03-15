<?php
class Sexe{
    private $idSexe;
    private $sexeUser;
    

    /**
     * Get the value of idSexe
     */ 
    public function getIdSexe()
    {
        return $this->idSexe;
    }

    /**
     * Set the value of idSexe
     *
     * @return  self
     */ 
    public function setIdSexe($idSexe)
    {
        $this->idSexe = $idSexe;

        return $this;
    }
        /**
     * Get the value of sexeUser
     */ 
    public function getSexeUser()
    {
        return $this->sexeUser;
    }

    /**
     * Set the value of sexeUser
     *
     * @return  self
     */ 
    public function setSexeUser($sexeUser)
    {
        $this->sexeUser = $sexeUser;

        return $this;
    }


}
?>
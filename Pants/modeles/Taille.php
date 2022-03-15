<?php
class Taille{
    private $idTaille;
    private $taillePantalon;

    /**
     * Get the value of idTaille
     */ 
    public function getIdTaille()
    {
        return $this->idTaille;
    }

    /**
     * Set the value of idTaille
     *
     * @return  self
     */ 
    public function setIdTaille($idTaille)
    {
        $this->idTaille = $idTaille;

        return $this;
    }

    /**
     * Get the value of taillePantalon
     */ 
    public function getTaillePantalon()
    {
        return $this->taillePantalon;
    }

    /**
     * Set the value of taillePantalon
     *
     * @return  self
     */ 
    public function setTaillePantalon($taillePantalon)
    {
        $this->taillePantalon = $taillePantalon;

        return $this;
    }
}
?>
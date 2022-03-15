<?php 
class Quantite{
    private $idQuantite;
    private $quantitePantalon;


    /**
     * Get the value of idQuantite
     */ 
    public function getIdQuantite()
    {
        return $this->idQuantite;
    }

    /**
     * Set the value of idQuantite
     *
     * @return  self
     */ 
    public function setIdQuantite($idQuantite)
    {
        $this->idQuantite = $idQuantite;

        return $this;
    }

    /**
     * Get the value of quantitePantalon
     */ 
    public function getQuantitePantalon()
    {
        return $this->quantitePantalon;
    }

    /**
     * Set the value of quantitePantalon
     *
     * @return  self
     */ 
    public function setQuantitePantalon($quantitePantalon)
    {
        $this->quantitePantalon = $quantitePantalon;

        return $this;
    }
}
?>
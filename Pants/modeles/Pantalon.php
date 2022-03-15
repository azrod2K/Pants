<?php

use Pantalon as GlobalPantalon;

class Pantalon
{
    private $idPantalon;
    private $nomPantalon;
    private $imagePantalon;
    private $descriptionPantalon;
    private $prixPantalon;
    private $idTypePant;
    private $idSexePant;
    private $idCouleurPant;
    private $idQuantitePant;
    private $idTaillePant;

    /**
     * Get the value of idPantalon
     */ 
    public function getIdPantalon()
    {
        return $this->idPantalon;
    }

    /**
     * Set the value of idPantalon
     *
     * @return  self
     */ 
    public function setIdPantalon($idPantalon)
    {
        $this->idPantalon = $idPantalon;

        return $this;
    }

    /**
     * Get the value of nomPantalon
     */ 
    public function getNomPantalon()
    {
        return $this->nomPantalon;
    }

    /**
     * Set the value of nomPantalon
     *
     * @return  self
     */ 
    public function setNomPantalon($nomPantalon)
    {
        $this->nomPantalon = $nomPantalon;

        return $this;
    }

    /**
     * Get the value of imagePantalon
     */ 
    public function getImagePantalon()
    {
        return $this->imagePantalon;
    }

    /**
     * Set the value of imagePantalon
     *
     * @return  self
     */ 
    public function setImagePantalon($imagePantalon)
    {
        $this->imagePantalon = $imagePantalon;

        return $this;
    }
    /**
     * Get the value of descriptionPantalon
     */ 
    public function getDescriptionPantalon()
    {
        return $this->descriptionPantalon;
    }

    /**
     * Set the value of descriptionPantalon
     *
     * @return  self
     */ 
    public function setDescriptionPantalon($descriptionPantalon)
    {
        $this->descriptionPantalon = $descriptionPantalon;

        return $this;
    }

    /**
     * Get the value of prixPantalon
     */ 
    public function getPrixPantalon()
    {
        return $this->prixPantalon;
    }

    /**
     * Set the value of prixPantalon
     *
     * @return  self
     */ 
    public function setPrixPantalon($prixPantalon)
    {
        $this->prixPantalon = $prixPantalon;

        return $this;
    }

    /**
     * Get the value of idTypePant
     */ 
    public function getIdTypePant()
    {
        return $this->idTypePant;
    }
    /**
     * Set the value of idTypePant
     *
     * @return  self
     */ 
    public function setIdTypePant($idTypePant){
        $this->idTypePant = $idTypePant;

        return $this;
    }

    /**
     * Get the value of idSexePant
     */ 
    public function getIdSexePant()
    {
        return $this->idSexePant;
    }
    /**
     * Set the value of idSexePant
     *
     * @return  self
     */ 
    public function setIdSexePant($idSexePant){
        $this->idSexePant = $idSexePant;

        return $this;
    }
    /**
     * Get the value of idCouleurPant
     */ 
    public function getIdCouleurPant()
    {
        return $this->idCouleurPant;
    }
    /**
     * Set the value of idCouleurPant
     *
     * @return  self
     */ 
    public function setIdCouleurPant($idCouleurPant){
        $this->idCouleurPant = $idCouleurPant;

        return $this;
    }
    /**
     * Get the value of idQuantitePant
     */ 
    public function getIdQuantitePant()
    {
        return $this->idQuantitePant;
    }
    /**
     * Set the value of idQuantitePant
     *
     * @return  self
     */ 
    public function setIdQuantitePant($idQuantitePant){
        $this->idQuantitePant = $idQuantitePant;

        return $this;
    }
    /**
     * Get the value of idTaillePant
     */ 
    public function getIdTaillePant()
    {
        return $this->idTaillePant;
    }
    /**
     * Set the value of idTaillePant
     *
     * @return  self
     */ 
    public function setIdTaillePant($idTaillePant){
        $this->idTaillePant = $idTaillePant;

        return $this;
    }
    

    public static function GetAllPant()
    {
      $sql = MonPdo::getInstance()->prepare('SELECT * FROM Pantalon');
      $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Pantalon');
      $sql->excute();
      $returnsql = $sql->fetchAll();

      return $returnsql;
    }
    public static function addPantalon(Pantalon $pantalon){
        $nom = $pantalon->getNomPantalon();
        $img = $pantalon->getImagePantalon();
        $desc = $pantalon->getDescriptionPantalon();
        $prix = $pantalon->getPrixPantalon();
        $req = MonPdo::getInstance()->prepare('INSERT INTO Pantalon(nomPatalon,imagePantalon,descritpionPatanlon,prixPatanlon) VALUES (:NomPatalon,:ImagePatalon,:DescriptionPatalon,:PrixPatalon)');
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Pantalon');
        $req->bindParam(':NomPatalon',$nom);
        $req->bindParam(':ImagePatalon',$img);
        $req->bindParam(':DescriptionPatalon', $desc);
        $req->bindParam(':PrixPatalon',$prix);
        $req->execute();
        return MonPdo::getInstance()->lastInsertId();   
    }
}

?>
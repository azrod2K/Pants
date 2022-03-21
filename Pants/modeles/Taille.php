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
    public static function findAll(): array{
        $sql = MonPdo::getInstance()->prepare('SELECT taillePantalon FROM Taille');
        $sql->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Taille');
        $sql->execute();
        $retourSQL=$sql->fetchAll();

        return $retourSQL;
    }
    public static function ShowAllTaille(){
        foreach (Taille::findAll() as $Taille) {
            echo '<option value=' . $Taille->getIdTaille() . '>';
            echo $Taille->getTaillePantalon();
            echo '</option>';
        }
    }
}
?>
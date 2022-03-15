<?php
class Type{
    private $idType;
    private $typePantalon;

    /**
     * Get the value of idType
     */ 
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set the value of idType
     *
     * @return  self
     */ 
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get the value of typePantalon
     */ 
    public function getTypePantalon()
    {
        return $this->typePantalon;
    }

    /**
     * Set the value of typePantalon
     *
     * @return  self
     */ 
    public function setTypePantalon($typePantalon)
    {
        $this->typePantalon = $typePantalon;

        return $this;
    }
    public static function findAll(): array{
        $sql = MonPdo::getInstance()->prepare('SELECT TypePantalon FROM Type');
        $sql->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Type');
        $sql->execute();
        $retourSQL=$sql->fetchAll();

        return $retourSQL;
    }
    public static function ShowAllType(){
        foreach (Type::findAll() as $Type) {
            echo '<option value=' . $Type->getIdType() . '>';
            echo $Type->getTypePantalon();
            echo '</option>';
        }
    }
}
?>

<?php
/**
*   Classe d'acces aux donnees Utilise les services de la classe PDO
*   Les attributs sont tous statiques, les 4 premiers pour la connexion
*   $monPdo qui contiendra l'unique instance de la classe
*/
class MonPdo
{
private static $serveur = 'mysql:host=sql11.freemysqlhosting.net';
private static $bdd = 'dbname=sql11478997';
private static $user = 'sql11478997';
private static $mdp = 'JUtjkzPXwu';
private static $monPdo;
private static $unPdo = null;

//  Constructeur privé, crée l'instance de PDO qui sera sollicitée
//  pour toutes les méthodes de la classe
private function __construct()
{
    MonPdo::$unPdo = new PDO(MonPdo::$serveur.';'.MonPdo::$bdd, MonPdo::$user, MonPdo::$mdp);
    MonPdo::$unPdo->query("SET CHARACTER SET utf8");
    MonPdo::$unPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
public function __destruct()
{ 
    MonPdo::$unPdo = null;
}
/**
*   Fonction statique qui cree l'unique instance de la classe
*   Appel : $instanceMonPdo = MonPdo::getMonPdo();
*   @return l'unique objet de la classe MonPdo
*/
public static function getInstance()
{
    if(self::$unPdo == null)
    {
        self::$monPdo= new MonPdo();
    }
    return self::$unPdo;
}


/**
 * Get the value of unPdo
 */ 
public function getUnPdo()
{
return $this->unPdo;
}

/**
 * Set the value of unPdo
 *
 * @return  self
 */ 
public function setUnPdo($unPdo)
{
$this->unPdo = $unPdo;

return $this;
}
}
?>
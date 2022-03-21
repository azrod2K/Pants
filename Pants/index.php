<?php
session_start();


require ("modeles/PDO.php");
require ("modeles/Pantalon.php");
require ("modeles/Type.php");
require ("modeles/Taille.php");
require ("modeles/Couleur.php");
require ("modeles/User.php");
require ("modeles/Commande.php");
include "vues/header.php";



                        

$uc=empty($_GET['uc']) ? "home" : $_GET['uc'];
switch ($uc) {
    case 'home':
      include "vues/accueil.php";
        break;
        case 'shop':
          include "controlers/shopControllers.php";
            break;
    case 'shopping-cart':
      include "vues/shopping-cart.html";
      break;
}
include "vues/footer.php";
?>
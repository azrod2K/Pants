<?php
session_start();


require ("modeles/PDO.php");
require ("modeles/Pantalon.php");
include "vues/header.php";



                        

$uc=empty($_GET['uc']) ? "home" : $_GET['uc'];
switch ($uc) {
    case 'home':
      include "vues/index.html";
        break;
        case 'shop':
          include "vues/shop.php";
            break;
    case 'shopping-cart':
      include "vues/shopping-cart.html";
      break;
}
include "vues/footer.php";
?>
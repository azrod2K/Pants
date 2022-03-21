<?php
$action = $_GET['action'];
switch ($action) {
    case 'show':
        $ShowAllType = Type::findAll();
        $ShowAllTaille = Taille::findAll();
        // $GetAllPant = Pantalon::GetAllPant();
        include 'vues/shop.php';
        break;
    
    case 'liste':
        # code...
        break;
}
?>
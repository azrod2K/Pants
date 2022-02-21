<?php
session_start();



include "vues/header.php";
include "vues/nav.php";

$uc=empty($_GET['uc']) ? "home" : $_GET['uc'];
switch ($uc) {
    case 'home':
      include "vues/body.php";
        break;
    case 'post':
        include "controller/post_controller.php";
        break;
}
include "vues/footer.php";
?>
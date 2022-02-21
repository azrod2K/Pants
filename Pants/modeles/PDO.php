<?php
$host = "localhost";
$dbName= "Facebook";
$User = "UserFacebook";
$Mdp = "Superjules";

$dbh = new PDO('mysql:host='.$host.';dbname='.$dbName.','.$User.','.$Mdp);

$sth = $dbh->prepare("SELECT NomDresseur FROM DRESSEUR");
$sth->execute();
?>
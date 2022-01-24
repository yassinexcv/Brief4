<?php

$con = mysqli_connect("localhost", "root", "", "shopNow");

$id = $_GET["id"];

$nom = $_GET["nom"];
$type = $_GET["type"];
$quantite = $_GET["quantite"];
$rayon = $_GET["rayon"];
$dateEx = $_GET["dateEx"];
$prix = $_GET["prix"];
$prixGros = $_GET["prixGros"];
$prixLi = $_GET["prixLi"];
$description = $_GET["description"];


$sql = "UPDATE `produit` SET `nom`='$nom',`type`='$type',`quantite`=$quantite,`rayon`='$rayon',`dateExpiration`='$dateEx',`prixGros`=$prixGros,`prixNormal`=$prix,`prixLiquidation`=$prixLi,`description`='$description' WHERE id = $id";

mysqli_query($con, $sql);

header("Location: dashboard.php");
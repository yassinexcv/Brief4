<?php

$con = mysqli_connect("localhost", "root", "", "shopNow");

$nom = $_GET["nom"];
$type = $_GET["type"];
$quantite = $_GET["quantite"];
$rayon = $_GET["rayon"];
$dateEx = $_GET["dateEx"];
$prix = $_GET["prix"];
$prixGros = $_GET["prixGros"];
$prixLi = $_GET["prixLi"];
$description = $_GET["description"];


$sql = "INSERT INTO produit(`nom`, `type`, `quantite`, `rayon`, `dateExpiration`, `prixGros`, `prixNormal`, `prixLiquidation`, `description`) VALUES ('$nom','$type',$quantite,'$rayon','$dateEx',$prixGros,$prix,$prixLi,'$description')";

mysqli_query($con, $sql);

header("Location: dashboard.php");
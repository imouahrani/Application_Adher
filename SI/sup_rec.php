<?php 
include('connexion.php');
$id=$_GET['id'];
    $bdd->query("delete from contrat where id_adh='$id'");

?> <SCRIPT LANGUAGE="Javascript">alert("Le contrat a \351t\351 Supprim\351 avec succ\351s!");window.location.replace("gerer_contrat.php"); </SCRIPT> <?php


?>

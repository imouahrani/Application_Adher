<?php

$nom_cl=$_POST['nom'];
$tel_cl=$_POST['tel'];
$ville_cl=$_POST['ville'];
$date_app=$_POST['date'];
$heure_app=$_POST['heure'];
$demande_cl=$_POST['demande'];

include('connexion.php');

$requete="insert into appel values('','$nom_cl','$tel_cl','$ville_cl','$date_app','$heure_app','$demande_cl')";
$bdd->query($requete);?>

 <SCRIPT LANGUAGE="Javascript">alert(" Le client a \340 \351t\351 enregist\351 avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> 
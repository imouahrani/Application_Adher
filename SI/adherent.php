<?php

$nom_adh=$_POST['nom'];
$rais_soc=$_POST['rs'];
$adresse_adh=$_POST['adresse'];
$nom_resp=$_POST['nom_r'];
$tel_adh=$_POST['tel_adh'];
$sec_adh=$_POST['sec_adh'];
$act_adh=$_POST['act_adh'];
$date_deb=$_POST['date_deb'];
$duree_cont=$_POST['dc'];
$tarif=$_POST['tarif'];

include('connexion.php');
$nm_act=$act_adh;
$nm_sec=$sec_adh;

$sql1=  $bdd->query("select * from activite");
$base1=$sql1->fetch();

$sql2=  $bdd->query("select * from secteur_geo");
$base2=$sql2->fetch();


if ( $base1['nom_act'] == $nm_act )   
{}
else{
$bdd->query("insert into activite values('','$nm_act')"); 
}
if ( $base2['nom_sec'] == $nm_sec )  
{}
else
{
$bdd->query("insert into secteur_geo values('','$nm_sec')");
}


$requete= $bdd->query("insert into contrat values('','$nom_adh','$rais_soc','$adresse_adh','$nom_resp','$tel_adh','$sec_adh','$act_adh','$date_deb','$duree_cont','$tarif')");
?>
 <SCRIPT LANGUAGE="Javascript">alert(" Le contrat a \340 \351t\351 enregist\351 avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> 
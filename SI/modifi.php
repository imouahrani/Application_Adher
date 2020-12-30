<?php
include('connexion.php');
 $id= $_GET['id'];
 
$nom_adh=$_POST['nom_adh'];
$rais_soc=$_POST['rais_soc'];
$adresse_adh=$_POST['adresse_adh'];
$nom_resp=$_POST['nom_resp'];
$tel_adh=$_POST['tel_adh'];
$sec_adh=$_POST['sec_adh'];
$act_adh=$_POST['act_adh'];
$date_deb=$_POST['date_deb'];
$duree_cont=$_POST['duree_cont'];
$tarif=$_POST['tarif'];
 

  //création de la requête SQL:
  $sql = "UPDATE contrat SET   nom_adh= '$nom_adh',rais_soc= '$rais_soc',adresse_adh= '$adresse_adh',nom_resp= '$nom_resp',tel_adh= '$tel_adh',sec_adh= '$sec_adh',act_adh= '$act_adh',date_deb= '$date_deb',duree_cont= '$duree_cont',tarif= '$tarif' WHERE  id_adh= '$id' " ;
		
          
  //exécution de la requête SQL:
  $requete = $bdd->query($sql) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  { ?>
   <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> 
<?php  }
  else
  { ?>
    '<SCRIPT LANGUAGE="Javascript">alert(" La modification \340  echou\351e! veuillez reesayer.");
	 window.location.replace("accueil.php");
            </SCRIPT> ';
 <?php }
?>
<?php session_start (); 
include('connexion.php');
if (isset($_POST['mdp'])) {
     
        $mdp = $_POST['mdp'];
        $pseudo = $_POST['pseudo'];
        $reponse = $bdd->query("select * from admin where login_adm='$pseudo' and mdp_adm='$mdp'");
        $nb = $reponse->fetch();
    
        if ($pseudo== $nb['login_adm'] && $mdp==$nb['mdp_adm']) {
            $_SESSION['id'] = $nb['id_adm'];
              $_SESSION['admin'] = $nb['login_adm'];
            
               header("location:accueil.php");
        } 
    else {

            ?>
            <SCRIPT LANGUAGE="Javascript">alert("Login ou mot de passe incorrect");window.location.replace("admin.php");
            </SCRIPT>    <?php

        }}
else{
	
	if (isset($_GET['sortir'])) {
    unset($_SESSION);
    session_destroy();
    header("location:admin.php");
}
if (!(isset($_SESSION['admin']))) {
    header('Location:admin.php');
    exit;}
	}

            ?>

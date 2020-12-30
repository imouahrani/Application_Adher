<?php
include('connexion.php');
 session_start(); 
if (!isset($_SESSION['admin'])) {
	header ('Location: admin.php');
	exit();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>accueil</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="css/icons.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    </head>
     <div class=" corps z-depth-5 #80cbc4 teal lighten-3">   
        <form action="reche1.php" method="post">
        <div class="search">
       <div class="input-field s">
       <a class="waves-effect btn bt s #757575 grey darken-1" href="contrat.php">Service des contrats</a>
       </div>
        
        <div class="input-field s">
        <a class="waves-effect btn bt s #757575 grey darken-1" href="appel.php">Services des appels</a>
        </div>
        
        <div class="input-field s">     
        <a class="waves-effect btn bt s #757575 grey darken-1" href="intervention.php">Service d'interventions</a>
        </div>
        
        <div class="input-field s">
        <a class="waves-effect btn bt s #757575 grey darken-1"href="login.php? sortir=1">Déconnexion</a>
        </div>
        
        </div>
        </form> 
        </div>
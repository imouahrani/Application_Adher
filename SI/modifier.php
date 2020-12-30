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
<body>
   
   
	<?php session_start (); 
if(isset($_SESSION['admin'])){

include('connexion.php');
$id=$_GET['id'];
$bd=$bdd->query("select * from contrat WHERE id_adh='$id'");
$base= $bd->fetch();    

$nom_adh=$base['nom_adh'];
$rais_soc=$base['rais_soc'];
$adresse_adh=$base['adresse_adh'];
$nom_resp=$base['nom_resp'];
$tel_adh=$base['tel_adh'];
$sec_adh=$base['sec_adh'];
$act_adh=$base['act_adh'];
$date_deb=$base['date_deb'];
$duree_cont=$base['duree_cont'];
$tarif=$base['tarif'];
 
     
}
 ?>     
    <div class="row">
    <div class=" col s12">
           
    <form action="modifi.php?id=<?php echo $id ?>" method="post" name="formulaire">
            
              <div class="contaa z-depth-5 #ffffff white"> 
                
                
        <div class=" center-align">
         <i class=" medium material-icons " center-align>assignment</i>
        <br><h5> <b class="con">Modifier contrat adhérent</b></h5> 
       </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="nom" type="text" class="validate" name="nom_adh" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $nom_adh; ?>">
          <label for="icon_prefix">Nom adhérent:<span class="red-text text-darken-2">*</span></label>
        </div>
         
          <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="rs" type="text" class="validate" name="rais_soc" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $rais_soc; ?>">
          <label for="icon_prefix">Raison sociale:<span class="red-text text-darken-2">*</span></label>
        </div>
        
               <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="adresse" type="text" class="validate" name="adresse_adh" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $adresse_adh; ?>">
          <label for="icon_prefix">Adresse adhérent:<span class="red-text text-darken-2">*</span></label>
        </div>
        
                 <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="nom_r" type="text" class="validate" name="nom_resp" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $nom_resp; ?>">
          <label for="icon_prefix">Nom responsable :<span class="red-text text-darken-2">*</span></label>
        </div>
        
        
               
                 
                     
        
        <div class="input-field col s12">
          <i class="material-icons prefix ">phone</i>
          <input id="tel_adh" type="text" class="validate" name="tel_adh" pattern="0[5-7]+[0-9]{8,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $tel_adh; ?>">
          <label for="icon_prefix">téléphone adhérent:<span class="red-text text-darken-2">*</span></label>
        </div>
        
        
        
      
     <div class="input-field col s12">
          <i class="material-icons prefix ">supervisor_account</i>
          <input id="sa" type="text" class="validate" name="sec_adh" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $sec_adh; ?>">
          <label for="icon_prefix">Secteur d'activité :<span class="red-text text-darken-2">*</span></label>
        </div>
        
           
     <div class="input-field col s12">
          <i class="material-icons prefix ">supervisor_account</i>
          <input id="act_adh" type="text" class="validate" name="act_adh" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $act_adh; ?>">
          <label for="icon_prefix">Activité adhérent :<span class="red-text text-darken-2">*</span></label>
        </div> 
          
          
          
          
          
      <div class="row">
      <h6>Date début contrat</h6>
     <div class="input-field col s12">
          <i class="material-icons prefix">view_day</i>
          <input id="date_deb" name="date_deb"  type="date_deb" class="datepicker" title="Doit commencer par un Zero et ne doit pas contenir d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $date_deb; ?>">
         
        </div></div>
        
        
           
                  <div class="input-field col s12">
          <i class="material-icons prefix ">query_builder</i>
          <input id="dc" type="text" class="validate" name="duree_cont" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $duree_cont; ?>">
          <label for="icon_prefix">Durée contrat :<span class="red-text text-darken-2">*</span></label>
        </div>
        
  <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="tarif" type="text" class="validate" name="tarif" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $tarif; ?>">
          <label for="icon_prefix">Tarif:<span class="red-text text-darken-2">*</span></label>
        </div>     
           
           
        
                
             
                     <div class="center-align">   
   <button class="btn bt waves-effect #4db6ac teal lighten-2" type="submit"  name="action" >Enregistrer</button>
        
        </div>   
         <br>            
              </div>    
            </form>
              
    </div></div>
    
   
        <script>
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        
    
    </script>
         <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
         <script type="text/javascript" src="js/materialize.min.js"></script>     


</body>
</html>


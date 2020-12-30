<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ajouter contrat</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="css/icons.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
   
   
     

     
    <div class="row">
    <div class=" col s12">
           
    <form action="adherent.php" method="post" name="formulaire">
            
    <div class="contaa z-depth-5 #ffffff white"> 
    <div class=" center-align">
          <i class=" medium material-icons " center-align>assignment</i><br>
          <h5> <b class="con">informations adhérent</b></h5> 
    </div>
       
        <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="nom" type="text" class="validate" name="nom" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre    et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Nom adhérent:<span class="red-text text-darken-2">*</span></label>
        </div>
         
          <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="rs" type="text" class="validate" name="rs" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Raison sociale:<span class="red-text text-darken-2">*</span></label>
        </div>
        
         <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="adresse" type="text" class="validate" name="adresse" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Adresse adhérent:<span class="red-text text-darken-2">*</span></label>
        </div>
        
        <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="nom_r" type="text" class="validate" name="nom_r" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Nom responsable :<span class="red-text text-darken-2">*</span></label>
        </div>
        
       <div class="input-field col s12">
          <i class="material-icons prefix ">phone</i>
          <input id="tel_adh" type="text" class="validate" name="tel_adh" pattern="0[5-7]+[0-9]{8,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">téléphone adhérent:<span class="red-text text-darken-2">*</span></label>
        </div>
        
        
        
      
     <div class="input-field col s12">
       <i class="material-icons prefix ">supervisor_account</i>
      <select name="sec_adh" autofocus required>
        
      <option value="" disabled selected >Choisir un secteur  </option>
      <option value="PARIS">PARIS</option>
      <option value="SEINE-ET-MARNE">SEINE-ET-MARNE</option>
      <option value="YVELINES">YVELINES</option>
      <option value="ESSONNE">ESSONNE</option>
      <option value="HAUTS-DE-SEINE">HAUTS-DE-SEINE</option>
      <option value="SEINE-SAINT-DENIS">SEINE-SAINT-DENIS</option>
      <option value="VAL-DE-MARNE">VAL-DE-MARNE</option>
      <option value="VAL-D-OISE">VAL-D-OISE</option>
      
    </select>
    <label for="icon_prefix">secteur d'activité :<span class="red-text text-darken-2">*</span></label>
     </div>
         
    <div class="input-field col s12">
        <i class="material-icons prefix ">supervisor_account</i>
        <select multiple name="act_adh" autofocus required>
        
      <option value="" disabled selected >Choisir vos activités </option>
      <option value="SERRURERIE">SERRURERIE</option>
      <option value="BLINDAGE">BLINDAGE</option>
      <option value="ELECTRICITE">ELECTRICITE</option>
      <option value="ANTENNE TV">ANTENNE TV</option>
      <option value="PLOMBERIE">PLOMBERIE</option>
      <option value="ALARME">ALARME</option>
      <option value="RAMONAGE">RAMONAGE</option>
      <option value="MAÇONNERIE">MAÇONNERIE</option>
      <option value="PEINTURE">PEINTURE</option>
      <option value="PLATERIE">PLATERIE</option>
      <option value="MENUISERIE">MENUISERIE</option>
      <option value="AMENAGEMENT">AMENAGEMENT</option>
      <option value="JARDINAGE">JARDINAGE</option>
    </select>
    <label for="icon_prefix">Activité adhérent :<span class="red-text text-darken-2">*</span></label>
  </div>
          
          
          
          
          
      <div class="row">
      <h6>Date début contrat</h6>
     <div class="input-field col s12">
          <i class="material-icons prefix">view_day</i>
          <input id="date_deb" name="date_deb"  type="date" class="datepicker" title="Doit commencer par un Zero et ne doit pas contenir d'espaces ou de caractères spéciaux" autofocus required> 
        </div>
        </div>
        
        
           
        <div class="input-field col s12">
          <i class="material-icons prefix ">query_builder</i>
          <input id="dc" type="text" class="validate" name="dc" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Durée contrat :<span class="red-text text-darken-2">*</span></label>
        </div>
        
        <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="tarif" type="text" class="validate" name="tarif" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Tarif:<span class="red-text text-darken-2">*</span></label>
        </div>     
           
     <div class="center-align">   
    <button class="btn bt waves-effect #4db6ac teal lighten-2" type="submit"  name="action" >Enregistrer</button>
        
    </div>   
    <br>            
    </div>    
    </form>
              
    </div>
    </div>
    
   
        <script>
    $('.datepicker').pickadate({
    selectMonths: true, 
    selectYears: 15 
  });
     </script>

         <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
                
        <script>
      $(document).ready(function() {
    $('select').material_select();
  });
            
  $('select').material_select('destroy');  
    </script>
         <script type="text/javascript" src="js/materialize.min.js"></script>     


</body>
</html>

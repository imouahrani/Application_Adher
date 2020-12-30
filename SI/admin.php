<!DOCTYPE html>
 <html>
    <head>
     <title>Espace Admin</title>
     
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="css/icons.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


     <meta charset="utf-8">
     
     <style>
		
		
		body{background-color:#eceff1 ;}
		div.admin{margin:11vh 20vw;padding: 5vh 8vw;background-color:#ffffff;border-radius: 10px}
        .pp{margin-left: 4.5vw}
		
	</style>
	

	
</head>
<body>
	
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


	
	
	





	
	
	
	
	  <form name="formulaire" action="login.php" method=post  >

<div class="admin ">
 
<div class="center">

 <i class="medium material-icons prefix center">lock</i>
 <h5><b>Espace Admin</b></h5>
  
   </div>
      
      <br>

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">person_pin</i>
          <input id="pseudo" name="pseudo" type="text" class="validate"       pattern="[a-zA-Z]+[a-zA-Z ]{2,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
          <label for="icon_prefix">Nom d'utilisateur: <span class="red-text text-darken-2">*</span></label>
        </div>
            </div>
    

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="mdp" name="mdp" type="password" class="validate"       pattern="[a-zA-Z0-9]+[a-zA-Z 0-9]{2,}" title="Ce champ ne doit contenir que des lettres" autofocus required>
          <label for="icon_prefix">Mot de passe: <span class="red-text text-darken-2">*</span></label>
        </div>
            </div>
    


        

        <div class="input-field col s12 center">
      <button class="btn waves-effect waves-light" type="submit"  name="action">Connexion
    <i class="material-icons right">done_all</i></button>


      </div>

      </div>  
      

 </form>


     

      
	
	
	

	
	
	
	
	
	
	
	
	
</body>
</html>



























































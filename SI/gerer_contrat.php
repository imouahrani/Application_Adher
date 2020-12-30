<?php

include('connexion.php');

 session_start(); 
if (!isset($_SESSION['admin'])) {
	header ('Location: admin.php');
	exit();
} 
$table=$bdd->query("select * from contrat")or die (mysql_error());


?>

   
     <!DOCTYPE html>
 <html>
    <head>
     <title>Gérer contrat</title>
     
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="css/icons.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="utf-8">
</head>
<body>
	
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


    
       <div class=" gh z-depth-5 ">

     <table class="responsive-table">

        <thead>
        <tr>
            <th data-fieled="nom_adh">Nom adhérent</th>
            <th data-fieled="rais_soc">Raison sociale</th>
            <th data-fieled="adresse_adh">Nom résponsable</th>
            <th data-fieled="tel_adh">Téléphone adhérent</th>
            <th data-fieled="sec_adh">Secteur d'activité</th>
            <th data-fieled="act_adh">Activité adhérent</th>
            <th data-fieled="date_deb">Date début contrat</th>
            <th data-fieled="duree_cont">Durée contrat</th>
            <th data-fieled="tarif">Tarif</th>
                
        </tr>
        </thead>
        <?php while($b=$table->fetch()){?>
       <tbody>
            <tr>
             
            <td><?php echo $b['nom_adh'] ?></td>
            <td><?php echo $b['rais_soc'] ?></td>
            <td><?php echo $b['adresse_adh'] ?></td>
            <td><?php echo $b['tel_adh'] ?></td>
            <td><?php echo $b['sec_adh'] ?></td>
            <td><?php echo $b['act_adh'] ?></td>
            <td><?php echo $b['date_deb'] ?></td>
            <td><?php echo $b['duree_cont'] ?></td>
            <td><?php echo $b['tarif'] ?></td>
    
            <td><a href="sup_rec.php?id=<?php echo $b['id_adh']?>"><button type="submit" class="btn"  onclick="if(window.confirm('voulez vous vraiment le supprimer?')){return true;}else{return false;}"  name="action">Supprimer</button></a></td>
              <td> <a href="modifier.php?id=<?php echo $b['id_adh']?>" class="btn">Modifier</a> </td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
    </div>
</body>
</html>
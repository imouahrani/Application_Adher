<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link href="fonts/material/material-icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
   <title>Interventions</title>
           <link href="style.css" rel="stylesheet">
      <link href="css/icons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="utf-8">
</head>
<body>
    

              <?php  

 include('connexion.php');
$result = $bdd->query("SELECT * FROM contrat , appel WHERE contrat.sec_adh = appel.ville_cl AND contrat.act_adh= appel.demande_cl"); 
if (!empty($result)){
    ?>
    <div>
    <h4>liste d'interventions en cours:</h4>
    </div>
     <div class="gh">
              <table class="responsive-table">

        <thead>
        <tr>
            <th data-fieled="nom_cl">Nom Client</th>
            <th data-fieled=nom_adh>Nom adhérent</th>
            <th data-fieled="sec_adh">Secteur géographique</th>
            <th data-fieled="act_adh">Activité </th>
         </tr>
        </thead>

        
    <?php
    $nb= $result->rowCount();
    if($nb>0){
        while($donne =$result ->fetch()){ ?> 
        
           <tbody>
            <tr>
             
            <td><?php echo $donne['nom_cl'] ?></td>
            <td><?php echo $donne['nom_adh'] ?></td>
            <td><?php echo $donne['sec_adh']?></td>
            <td><?php echo $donne['act_adh'] ?></td>
    
               </tr>
               </tbody>        
               </table>
               </div>
        
     <?php   }}
    else{ echo "désolé votre recherche nexiste pas";
    }
    }else{
    echo "erreur dans lexecution de la requete";
    
}

?>
</body>
</html>
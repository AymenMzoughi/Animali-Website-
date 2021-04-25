<?php
   require_once '../Controller/veterinaireC.php';
   require_once '../Model/veterinaire.php';
   $error = "";
   $veterinaireC =  new veterinaireC();
   if(
       isset($_POST["id"]) &&
       isset($_POST["nom"]) &&
       isset($_POST["prenom"]) &&
       isset($_POST["adresse"])
   )
   
   {
       if(  
           !empty($_POST["id"])&&
           !empty($_POST["nom"])&&
           !empty($_POST["prenom"])&&
           !empty($_POST["adresse"])
       ) 
       
       {
           $veterinaire = new veterinaire(
               $_POST['id'],
               $_POST['nom'],
               $_POST['prenom'],
               $_POST['adresse']
           );
           $veterinaireC->updateveterinaire($veterinaire, $_GET['id']);
           header('Location:afficherveto.php');
       }
       else
           $error = "Missing information";
   }

?>
<html>
<head>
    <title>Modifier veterinaire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="error">
    <?php echo $error; ?>
</div>

<?php
$veterinaire = $veterinaireC->getvetoById($_GET['id']);
?>
  <form action="" method="post">
      <table border="1" align="center">
          <tr>
              <td><label for="id">id</label></td>
              <td><label for="nom">nom</label></td>
              <td><label for="prenom">prenom</label></td>
              <td><label for="adresse">adresse</label></td>
            
          </tr>
      <tr>
      <td><input type="text" name="id" id="id" value="<?php echo $veterinaire['id'];?>" ></td>
      <td><input type="text" name="nom" id="nom" value="<?php echo $veterinaire['nom'];?>"></td>
      <td><input type="text" name="prenom" id="prenom" value="<?php echo $veterinaire['prenom'];?>"></td>
      <td><input type="text" name="adresse" id="adresse" value="<?php echo $veterinaire['adresse'];?>"></td>
    
      
      </tr>
          <tr>
      <input type="submit" value="envoyer">
          </tr>
      </table>
  </form>

</body>
</html>
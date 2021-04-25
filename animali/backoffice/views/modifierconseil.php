<?php
   require_once '../Controller/conseilC.php';
   require_once '../Model/conseil.php';
   $error = "";
   $conseilC =  new conseilC();
   if(
       isset($_POST["idc"]) &&
       isset($_POST["idv"]) &&
       isset($_POST["description"])
      
   )
   
   {
       if(  
           !empty($_POST["idc"])&&
           !empty($_POST["idv"])&&
           !empty($_POST["description"])
           
       ) 
       
       {
           $conseil = new conseil(
               $_POST['idc'],
               $_POST['idv'],
               $_POST['description']
              
           );
           $conseilC->updateconseil($conseil, $_GET['idc']);
           header('Location:afficherconseil.php');
       }
       else
           $error = "Missing information";
   }

?>
<html>
<head>
    <title>Modifier conseil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="error">
    <?php echo $error; ?>
</div>

<?php
$conseils = $conseilC->getconseilById($_GET['idc']);
?>
  <form action="" method="post">
      <table border="1" align="center">
          <tr>
              <td><label for="idc">idc</label></td>
              <td><label for="idv">idv</label></td>
              <td><label for="description">description</label></td>
            
            
          </tr>
      <tr>
      <td><input type="text" name="idc" id="idc" value="<?php echo $conseils['idc'];?>" ></td>
      <td><input type="text" name="idv" id="idv" value="<?php echo $conseils['idv'];?>"></td>
      <td><input type="text" name="description" id="description" value="<?php echo $conseils['description'];?>"></td>
     
    
      
      </tr>
          <tr>
      <input type="submit" value="envoyer">
          </tr>
      </table>
  </form>

</body>
</html>
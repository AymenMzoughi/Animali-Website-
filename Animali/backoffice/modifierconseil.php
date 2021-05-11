<?php
   require_once '../Controller/conseilC.php';
   require_once '../Entities/conseil.php';
   $error = "";
   $conseilC =  new conseilC();
   $servername="localhost";
$username="root";
$password="";
$bdd="animali";
$con=mysqli_connect($servername,$username,$password,$bdd);
$idvet="SELECT * FROM veterinaire";
$listv=mysqli_query($con,$idvet);
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
$conseils = $conseilC->getconseilById($_GET['id']);
?>
  <form action="" method="post">
      <table border="1" align="center">
          <tr>
              <td><label for="idc">Id_conseil</label></td>
              <td><label for="idv">Nom_veto</label></td>
              <td><label for="description">description</label></td>
            
            
          </tr>
      <tr>
      <td><input type="text" name="idc" id="idc" value="<?php echo $conseils['idc'];?>" ></td>
      <td> 
                   
                        <select name="idv" id="idv">
						<option value="">Faites votre choix </option>
						
						<?php while($row=mysqli_fetch_array($listv)):?>
					
						<option value="<?php echo $row[0];?>" > <?php echo $row[1];?></option>";
						<?php endwhile; ?>
					
					
						</select></td>
      <td><input type="text" name="description" id="description" value="<?php echo $conseils['description'];?>"></td>
     
    
      
      </tr>
          <tr>
      <input type="submit" value="envoyer">
          </tr>
      </table>
  </form>

</body>
</html>
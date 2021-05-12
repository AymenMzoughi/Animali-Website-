<?PHP

session_start();

if(!empty($_SESSION['e']))
{  
    if($_SESSION['e']=="admin")
    {
        echo "<script type='text/javascript'>document.location.replace('ajouteradmine.php');</script>";
    }
    if($_SESSION['e']=="amal")
    {
        echo "<script type='text/javascript'>document.location.replace('afficherprod.php');</script>";
       
    }
    if($_SESSION['e']=="zeineb")
    { echo "<script type='text/javascript'>document.location.replace('AfficherReclamation.php');</script>";
       
    }
    if($_SESSION['e']=="malek")
    { echo "<script type='text/javascript'>document.location.replace('afficherlignecommande.php');</script>";
      
    }
    if($_SESSION['e']=="aymenmz")
    {echo "<script type='text/javascript'>document.location.replace('afficherclient.php');</script>";
       
    }
    if($_SESSION['e']=="oumyma")
    {echo "<script type='text/javascript'>document.location.replace('afficherveto.php');</script>";
       
    }
    
   }




?>
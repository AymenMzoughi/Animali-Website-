<?php
    require_once '../Controller/veterinaireC.php';
    require_once '../Model/veterinaire.php';

    $veterinaireC =  new veterinaireC();

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse'])) {
        $veterinaire = new veterinaire($_POST['nom'], (float)$_POST['prenom'], $_POST['adresse']);
        
        $veterinaireC->addVeterinaire($veterinaire);
        header('Location:afficherveto.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>



</head>
<body>
<h1>Ajouter un nouveau veterinaire</h1>
<form id="form1" method="post">
<table>
<tr>
    <td> id_veto : </td>
    <td>
        <input type="text" id="id_veto" name="id_veto" 
        >
        
    </td>
</tr>
<tr>
    <td>nom  : </td>
    <td>
        <input type="text" id="nom" name="nom" >
        
        
    </td>
</tr>
<tr>
    <td>prenom : </td>
    <td>
        <input type="text" id="prenom" name="prenom" >
        
    
    </td>
</tr>

<tr>
    <td>adresse : </td>
    <td>
        <input type="text" id="adresse" name="adresse" >
        
    
    </td>
</tr>


<tr><td colspan='2'><input type="submit" value="Ajouter" /></td></tr>
</table>
</form>
</body>
</html>
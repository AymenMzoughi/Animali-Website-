<?php

    require_once '../config.php';
    include '../Controller/lignecommandeC.php';
    $idcommande=$_POST['idcommande'];
    $prix = $_POST['prix'];
    $quantite=$_POST['quantite'];
    $tauxTVA=$_POST['tauxTVA'];
    $etat=$_POST['etat'];
    $id_produit=$_POST['id_produit'];
    $idcmd=$_POST['idcmd'];
    $id_client=$_POST['id_client'];
 
    
    $lignecommandeC =  new LignecommandeC();
    $commande= new Lignecommande($prix,$quantite,$tauxTVA, $etat,$id_produit,$idcmd,$id_client);
    $lignecommandeC->modifierlignecommande($commande,$idcommande);
   header('location: afficherlignecommande.php');



  ?>
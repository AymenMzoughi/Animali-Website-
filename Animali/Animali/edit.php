<?php

    require_once '../config.php';
    include '../Controller/commandeC.php';

    $idcommande=$_POST['idcommande'];
    $date_commande = $_POST['date_commande'];
    $produits=$_POST['produits'];
    $prix=$_POST['prix'];
    $id_client=$_POST['id_client'];
   echo $idcommande;
   echo  $prix;
   echo $produits;
    $lignecommandeC =  new commandeC();
    $commande= new commande($date_commande, $produits,$prix,$id_client);
    $lignecommandeC->modifiercommande($commande,$idcommande);
  
   header('location: panier.php');



  ?>
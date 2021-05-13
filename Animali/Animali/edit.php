<?php

    require_once '../config.php';
    include '../Controller/commandeC.php';

    $idcommande=$_POST['idcommande'];
    $date_commande = $_POST['date_commande'];
    $produits=$_POST['produits'];
    $quantite=$_POST['quantite'];
    $id_client=$_POST['id_client'];
   echo $idcommande;
   echo  $quantite;
   echo $produits;
    $lignecommandeC =  new commandeC();
    $commande= new commande($date_commande, $produits,$quantite,$id_client);
    $lignecommandeC->modifiercommande($commande,$idcommande);
  
   header('location: panier.php');



  ?>
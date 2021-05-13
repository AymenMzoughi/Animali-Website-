<?php
    require_once '../config.php';
    require_once '../Entities/lignecommande.php';
      class LignecommandeC {
       public function afficherlignecommande() {
        $sql="SELECT * FROM lignecommande";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }		
        } 


        function calculecommande(){
            $sql="SELECT * FROM lignecommande ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            $nombre=$liste->rowCount();
            return $nombre;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function afficheridcmd(){
          
            $sql="SELECT * from commande ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


    
        function recupererlignecommande($idcommande){
            $sql="SELECT * from lignecommande where idcommande=$idcommande";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function rechercheridcommande($idcommande){
            $sql="SELECT * From lignecommande WHERE idcommande = '$idcommande' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function rechercheridproduit($id_produit){
            $sql="SELECT * From lignecommande WHERE id_produit = '$id_produit' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function rechercheridcmd($idcmd){
            $sql="SELECT * From lignecommande WHERE idcmd = '$idcmd' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
   

        

        
        public function ajouterlignecommande($lignecommande) {
            
            $sql="INSERT INTO lignecommande (idcommande, prix, quantite, tauxTVA, etat, id_produit , idcmd) 
            VALUES (:idcommande, :prix, :quantite, :tauxTVA, :etat, :id_produit, :idcmd)";
            $db = config::getConnexion();
            try {
                $req=$db->prepare($sql);
                $idcommande = $lignecommande->getidcommande();
                $prix = $lignecommande->getprix();
                $quantite = $lignecommande->getquantite();
                $tauxTVA = $lignecommande->gettauxTVA();
                $etat = $lignecommande->getetat();
                $id_produit = $lignecommande->getid_produit();
                $idcmd = $lignecommande->getidcmd();

                $req->bindValue(':idcommande', $idcommande);
                $req->bindValue(':prix', $prix);
                $req->bindValue(':quantite', $quantite);
                $req->bindValue(':tauxTVA', $tauxTVA);
                $req->bindValue(':etat', $etat);
                $req->bindValue(':id_produit', $id_produit);
                $req->bindValue(':idcmd', $idcmd);

                $req->execute(); 
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
       
                        
       

		
		

        public function modifierlignecommande($commande, $idcommande) {
            $sql="UPDATE lignecommande SET prix=:prix, quantite=:quantite, tauxTVA=:tauxTVA, etat=:etat, id_produit=:id_produit , idcmd=:idcmd
            WHERE idcommande=:idcommande ;";
            $db = config::getConnexion();
            try {
                $req=$db->prepare($sql);
                $prix = $commande->getprix();
                $quantite=$commande->getquantite();
                $tauxTVA = $commande->gettauxTVA();
                $etat = $commande->getetat();
                $id_produit= $commande->getid_produit();
                $idcmd = $commande->getidcmd();

                $req->bindValue(':idcommande', $idcommande);
                $req->bindValue(':prix', $prix);
                $req->bindValue(':quantite', $quantite);
                $req->bindValue(':tauxTVA', $tauxTVA);
                $req->bindValue(':etat', $etat);
                $req->bindValue(':id_produit', $id_produit);
                $req->bindValue(':idcmd', $idcmd);

                $req->execute(); 
        } catch (PDOException $e) {
           
            echo  $e->getMessage();
        }
        }

        public function supprimerlignecommande($idcommande) {
            $sql="DELETE FROM lignecommande WHERE idcommande = :idcommande";
            $db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idcommande',$idcommande);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
        }}
        public function supprimercommande($idcommande) {
            $sql="DELETE FROM commande WHERE idcommande = :idcommande";
            $db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idcommande',$idcommande);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
        }}

        public function rechercherlignecommande($idcommande)
        {
            $sql = "SELECT * from lignecommande where idcommande=:idcommande"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'idcommande' => $lignecommande->getidcommande() ,
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getlignecommandeByid($idcommande) {
            $sql = "SELECT * from lignecommande where idcommande=:idcommande"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'idcommande' => $idcommande
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
    }
?>
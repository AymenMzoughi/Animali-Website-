<?php
       require_once '../config.php';
    require_once '../Entities/commande.php';
    class commandeC {
        public function affichercommande() {
            $sql="SELECT * FROM commande";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
        }

        function recuperercommande($idcommande){
            $sql="SELECT * from commande where idcommande=$idcommande";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
   
      


        public function getcommandeById($idcommande) {
            try {
                $pdo =config :: getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM lignecommande WHERE idcommande = :idcommande'
                );
                $query->execute([
                    'idcommande' => $idcommande
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        public function ajoutercommande($commande) {
            
                $sql="INSERT INTO commande (idcommande, date_commande,produits, quantite , id_client) 
                VALUES (:idcommande, :date_commande, :produits, :quantite, :id_client)" ;
              $db = config::getConnexion();
              try {
               $query = $db->prepare($sql);
			
               $query->execute([
                    'idcommande' => $commande->getidcommande(),
                    'date_commande' => $commande->getdate_commande(),
                    'produits' => $commande->getproduits(),
                    'quantite' => $commande->getquantite(),
                    'id_client' => $commande->getid_client()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function modifiercommande($commande, $idcommande) {
            $sql="UPDATE commande SET date_commande=:date_commande,produits=:produits, quantite=:quantite, id_client=:id_client
            WHERE idcommande=:idcommande";
            $db = config::getConnexion();
            try {
                $req=$db->prepare($sql);
                $idcommande = $commande->getidcommande();
                $date_commande = $commande->getdate_commande();
                $produits = $commande->getproduits();
                $quantite = $commande->getquantite();
                $id_client = $commande->getid_client();

                $req->bindValue(':idcommande', $idcommande);
                $req->bindValue(':date_commande', $date_commande);
                $req->bindValue(':produits', $produits);
                $req->bindValue(':quantite', $quantite);
                $req->bindValue(':id_client', $id_client);

                $s=$req->execute();}
            
                catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
                }
        }

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




        
        function rechercheridcommande($idcommande){
            $sql="SELECT * From commande WHERE idcommande = '$idcommande' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function rechercherproduit($produits){
            $sql="SELECT * From commande WHERE produits = '$produits' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }

        function rechercheridclient($id_client){
            $sql="SELECT * From commande WHERE id_client = '$id_client' ";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
    }
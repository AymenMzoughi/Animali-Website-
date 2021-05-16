<?php
require_once '../config.php';
require_once '../Entities/livreur.php';
    class livreurC {
        public function afficherlivreur(){

			try {
                $pdo =config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM livreur'
                );
                $query->execute();
                return $query->fetchAll();
            } 
			catch (PDOException $e) {
                $e->getMessage();
            }
        }
		  public function ajouterlivreur($livreur){
								
			$sql="INSERT INTO livreur (ID, Nom, Prenom, Daten, CIN, Adresse,Email) VALUES (:id, :nom,:prenom,:Daten,:cin,:adresse,:Email);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":id",$livreur->getid());
				$rep->bindValue(":nom",$livreur->getnom());
				$rep->bindValue(":prenom",$livreur->getprenom());
				$rep->bindValue(":Daten",$livreur->getage());
				$rep->bindValue(":cin",$livreur->getcin());
                $rep->bindValue(":adresse",$livreur->getadresse());
                $rep->bindValue(":Email",$livreur->getemail());
                
				
				$rep->execute();

				
			
		}
	
	
	function supprimerlivrer($id){
		$sql="DELETE FROM livreur WHERE ID= :id";
		$db =config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
        function modifierproduit($livreur,$id) {


                 $sql="UPDATE `livreur` SET `nom`=:nom, `prenom` =:prenom, `Daten` =:Daten, `cin`=:cin, `adresse`=:adresse,  WHERE `id`=:id";
       			$connexion=config::getConnexion();
                   try{
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":id",$produit->getid());
				$rep->bindValue(":nom",$produit->getnom());
				$rep->bindValue(":prenom",$produit->getprenom());
				$rep->bindValue(":Daten",$produit->getage());
                $rep->bindValue(":cin",$produit->getcin());
                $rep->bindValue(":adresse",$produit->getadresse());
                $rep->bindValue(":email",$produit->getemail());

				
				$s=$rep->execute();
                   }
                   catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
                }

           
        }
		public function rechercherlivreur($id) {            
            $sql = "SELECT * from livreur where ID=:id "; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'ID' => $livreur->getid(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }

		function recupererlivreur($id){
			$sql="SELECT * from livreur where ID=$id";
			$db = getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		public function getLivById($id) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM livreur WHERE ID=:id'
                );
                $query->execute([
                    'ID' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

		public function getLivByName($nom) {
            try {
                $pdo =config:: getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM livreur WHERE Nom=:nom '
                );
                $query->execute([
                    'Nom' => $nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
      /*  function calculerProduit($descprod)
	{
		$sql="SELECT * FROM produits WHERE descprod='$descprod'";
		$db = getConnexion();
		try{
		$liste=$db->query($sql);
		$nombre=$liste->rowCount();
		return $nombre;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
        */
        
 














    }      

?>
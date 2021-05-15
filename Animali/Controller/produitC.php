<?php
require_once '../config.php';
require_once '../Entities/produit.php';
    class produitC {
        public function afficherProduit(){

			try {
                $pdo =config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produits'
                );
                $query->execute();
                return $query->fetchAll();
            } 
			catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function calculerProduits(){
            $sql="SELECT * FROM produits ";
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
		  public function ajouterProduit($produit){
								
			$sql="INSERT INTO produits (ref, prix, nomprod, descprod, idcat,image) VALUES (:ref, :prix, :nomprod, :descprod, :idcat,:image);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":ref",$produit->getref());
				$rep->bindValue(":prix",$produit->getprix());
				$rep->bindValue(":nomprod",$produit->getnomprod());
				$rep->bindValue(":descprod",$produit->getdescprod());
                $rep->bindValue(":idcat",$produit->getidcat());
                $rep->bindValue(":image",$produit->getimage());
				$rep->execute();

				
			
		}
	
	
	function supprimerProduit($ref){
		$sql="DELETE FROM produits WHERE ref= :ref";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':ref',$ref);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
        function modifierProduit($produit,$ref) {


                 $sql="UPDATE `produits` SET `prix`=:prix, `nomprod` =:nomprod, `descprod` =:descprod, `idcat`=:idcat ,`image`=:image WHERE `ref`=:ref";
       			$connexion=config::getConnexion();
                   try{
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":ref",$produit->getref());
				$rep->bindValue(":prix",$produit->getprix());
				$rep->bindValue(":nomprod",$produit->getnomprod());
				$rep->bindValue(":descprod",$produit->getdescprod());
                $rep->bindValue(":idcat",$produit->getidcat());
                $rep->bindValue(":image",$produit->getimage());
				
				$s=$rep->execute();
                   }
                   catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
                }

           
        }
		public function rechercherProduit($ref) {            
            $sql = "SELECT * from produits where ref=:ref "; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'ref' => $produit->getref(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }

		function recupererProduit($ref){
			$sql="SELECT * from produits where ref=$ref";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		public function getProdByRef($ref) {
            try {
                $pdo =config:: getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produits WHERE ref=:ref'
                );
                $query->execute([
                    'ref' => $ref
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

		public function getProdByName($nomprod) {
            try {
                $pdo = config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM produits WHERE nomprod=:nomprod '
                );
                $query->execute([
                    'nomprod' => $nomprod
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function calculerProduit($descprod)
	{
		$sql="SELECT * FROM produits WHERE descprod='$descprod'";
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
        
        
 














    }      

?>
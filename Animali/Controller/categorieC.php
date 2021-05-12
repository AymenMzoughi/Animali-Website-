<?php 
	include "../config.php";
	require_once "../Entities/categorie.php";
	class categorieC
	{
		public function ajouterCategorie($categorie)
			{
				$sql="INSERT INTO `categories`(`idcat`, `nomcat`) VALUES (:idcat,:nomcat);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":idcat",$categorie->getidcat());
				$rep->bindValue(":nomcat",$categorie->getnomcat());
				
				$rep->execute();

				
			}
		public function afficherCategorie()
			{
				$sql="SELECT * FROM `categories`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
		public function modifierCategorie($categorie,$idcat)
    		{
      			
       			$sql="UPDATE `categories` SET `nomcat`=:nomcat WHERE idcat=:idcat";
       			$connexion=config::getConnexion();
				   try{
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":idcat",$categorie->getidcat());
				$rep->bindValue(":nomcat",$categorie->getnomcat());
				$s=$rep->execute();
                   }
                   catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
                }
				
    		}

			function recupererCategorie($idcat){
				$sql="SELECT * from categories where idcat=$idcat";
				$db =config::getConnexion();
				try{
				$liste=$db->query($sql);
				return $liste;
				}
				catch (Exception $e){
					die('Erreur: '.$e->getMessage());
				}
			}
	

	public function supprimerCategorie($idcat)
	{
		$sql="DELETE FROM categories WHERE idcat= :idcat";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':idcat',$idcat);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
}
?>
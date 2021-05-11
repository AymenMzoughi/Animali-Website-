<?php 
	include "../config.php";
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
		public function modifierCategorie()
    		{
      			
       			$sql="UPDATE `categories` SET `idcat`=:idcat,`nomcat`=:nomcat WHERE idcat=:idcat);";
       			$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":idcat",$cartefid->getidcat());
				$rep->bindValue(":nomcat",$cartefid->getnomcat());
				
				$rep->execute();
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
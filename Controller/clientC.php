<?php 
	include "../config.php";
	class clientC
	{
		public function ajouterclient($client)
			{
				$sql="INSERT INTO `client`(`CIN`, `Nom`, `Prenom`, `NumTel`, `ADR`, `DNS`) VALUES (:CIN,:Nom,:Prenom,:NumTel,:ADR,:DNS);";
				$connexion=getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":CIN",$client->getCIN());
				$rep->bindValue(":Nom",$client->getNom());
				$rep->bindValue(":Prenom",$client->getPrenom());
				$rep->bindValue(":NumTel",$client->getNumTel());
				$rep->bindValue(":ADR",$client->getADR());
				$rep->bindValue(":DNS",$client->getDNS());
				$rep->execute();

				
			}
		public function afficherclient()
			{
				$sql="SELECT * FROM `client`";
				$connexion=getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
		public function modifierClient()
    		{
      			
       			$sql="UPDATE `client` SET `CIN`=:CIN,`Nom`=:Nom,`Prenom`=:Prenom,`NumTel`=:NumTel,`ADR`=:ADR,`DNS`=:DNS WHERE CIN=:CIN);";
       			$connexion=getConnexion();
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":CIN",$client->getCIN());
				$rep->bindValue(":Nom",$client->getNom());
				$rep->bindValue(":Prenom",$client->getPrenom());
				$rep->bindValue(":NumTel",$client->getNumTel());
				$rep->bindValue(":ADR",$client->getADR());
				$rep->bindValue(":DNS",$client->getDNS());
				$rep->execute();
    		}
	

	public function supprimerclient($CIN)
	{
		$sql="DELETE FROM Client WHERE CIN= :CIN";
		$db = getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':CIN',$CIN);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
}
?>
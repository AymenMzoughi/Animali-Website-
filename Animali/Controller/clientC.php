<?php 
	include "../config.php";
	
	class clientC
	{
		public function ajouterclient($client)
			{
				$sql="INSERT INTO `client`(`CIN`, `Sexe`, `Nom`, `Prenom`, `NumTel`, `Email`, `ADR`, `DNS`) VALUES (:CIN,:Sexe,:Nom,:Prenom,:NumTel,:Email,:ADR,:DNS);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":CIN",$client->getCIN());
				$rep->bindValue(":Sexe",$client->getSexe());
				$rep->bindValue(":Nom",$client->getNom());
				$rep->bindValue(":Prenom",$client->getPrenom());
				$rep->bindValue(":NumTel",$client->getNumTel());
				$rep->bindValue(":Email",$client->getEmail());
				$rep->bindValue(":ADR",$client->getADR());
				$rep->bindValue(":DNS",$client->getDNS());
				$rep->execute();

				
			}

		public function afficherclient()
			{
				$sql="SELECT * FROM `client`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
		public function modifierClient($client,$CIN)
    		{
      			
       			$sql="UPDATE `client` SET `Sexe`=:Sexe,`Nom`=:Nom,`Prenom`=:Prenom,`NumTel`=:NumTel,`Email`=:Email,`ADR`=:ADR,`DNS`=:DNS WHERE CIN=:CIN;";
       			$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":CIN",$CIN);
				$rep->bindValue(":Sexe",$client->getSexe());
				$rep->bindValue(":Nom",$client->getNom());
				$rep->bindValue(":Prenom",$client->getPrenom());
				$rep->bindValue(":NumTel",$client->getNumTel());
				$rep->bindValue(":Email",$client->getEmail());
				$rep->bindValue(":ADR",$client->getADR());
				$rep->bindValue(":DNS",$client->getDNS());
				$rep->execute();
    		}
	

		public function supprimerclient($CIN)
			{
				$sql="DELETE FROM Client WHERE CIN= :CIN";
				$db =config::getConnexion();
				$req=$db->prepare($sql);
				$req->bindValue(":CIN",$CIN);
				try{
				$req->execute();
					}
				catch (Exception $e){
				die('Erreur: '.$e->getMessage());
				}
			}	
	

	function calculerClient($Sexe)
	{
		$sql="SELECT * FROM Client WHERE Sexe='$Sexe'";
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


	function recupCIN($CIN){
		$sql="SELECT * from Client where CIN=$CIN";
		$db =config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function recupNumTel($NumTel){
		$sql="SELECT * from Client where NumTel=$NumTel";
		$db =config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function recupNom($Nom){
		$sql="SELECT * from Client where Nom='$Nom'";
		$db =config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}


function recupMail($CIN){
	$sql="SELECT Email FROM Client where CIN=$CIN";
	$db =config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}	
	

	
}
?> 
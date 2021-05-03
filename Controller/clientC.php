<?php 
	include "../config.php";
	class clientC
	{
		public function ajouterclient($client)
			{
				$sql="INSERT INTO `client`(`CIN`, `Sexe`, `Nom`, `Prenom`, `NumTel`, `Email`, `ADR`, `DNS`) VALUES (:CIN,:Sexe,:Nom,:Prenom,:NumTel,:Email,:ADR,:DNS);";
				$connexion=getConnexion();
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
				$connexion=getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
		public function modifierClient()
    		{
      			
       			$sql="UPDATE `client` SET `CIN`=:CIN,`Sexe`=:Sexe,`Nom`=:Nom,`Prenom`=:Prenom,`NumTel`=:NumTel,`Email`=:Email,`ADR`=:ADR,`DNS`=:DNS WHERE CIN=:CIN);";
       			$connexion=getConnexion();
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
	

		public function supprimerclient($CIN)
			{
				$sql="DELETE FROM Client WHERE CIN= :CIN";
				$db = getConnexion();
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


	function recupCIN($CIN){
		$sql="SELECT * from Client where CIN=$CIN";
		$db = getConnexion();
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
		$db = getConnexion();
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
		$db = getConnexion();
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
	$db = getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}	
	

	/*function triCIN(){
		$sql="SELECT * FROM Client ORDER BY CIN DESC";
		$db = getConnexion();
		$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)>0)
 	{
   	$row=mysqli_fetch_assoc($result);
	
	}
	}*/
}
?> 
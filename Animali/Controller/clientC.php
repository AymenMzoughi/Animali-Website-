<?php 
	include "../config.php";
	
	class clientC
	{




		function connexionUser($login,$password){
            $sql="SELECT * FROM client  WHERE email='" . $login . "' and MDP = '". $password."'";
            $db =config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                  
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
					
            }
			return  $message;
        }
		public function ajouterclient($client)
		{
			$sql="INSERT INTO client (CIN, Sexe, Nom, Prenom, NumTel, Email, ADR, DNS,MDP) VALUES (:CIN,:Sexe,:Nom,:Prenom,:NumTel,:Email,:ADR,:DNS,:MDP);";
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
			$rep->bindValue(":MDP",$client->getMDP());
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
      			
       			$sql="UPDATE client SET Sexe`=:Sexe,Nom`=:Nom,`Prenom`=:Prenom,`NumTel`=:NumTel,`Email`=:Email,`ADR`=:ADR,`DNS`=:DNS, `MDP`=:MDP WHERE CIN=:CIN;";
       			$connexion=getConnexion();
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":CIN",$CIN);
				$rep->bindValue(":Sexe",$client->getSexe());
				$rep->bindValue(":Nom",$client->getNom());
				$rep->bindValue(":Prenom",$client->getPrenom());
				$rep->bindValue(":NumTel",$client->getNumTel());
				$rep->bindValue(":Email",$client->getEmail());
				$rep->bindValue(":ADR",$client->getADR());
				$rep->bindValue(":DNS",$client->getDNS());
				$rep->bindValue(":MDP",$client->getMDP());
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

	function afficherid($email){
			
		$sql="SELECT * From client  WHERE email= '$email' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
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
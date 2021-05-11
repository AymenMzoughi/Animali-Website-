<?php 
	include "../config.php";
	class cartefidC
	{
		public function ajoutercartefid($cartefid)
			{
				$sql="INSERT INTO `cartefid`(`IDC`, `DATEC`, `DATEX`, `NbP`, `CINC`) VALUES (:IDC,:DATEC,:DATEX,:NbP,:CINC);";
				$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
				$rep->bindValue(":IDC",$cartefid->getIDC());
				$rep->bindValue(":DATEC",$cartefid->getDATEC());
				$rep->bindValue(":DATEX",$cartefid->getDATEX());
				$rep->bindValue(":NbP",$cartefid->getNbP());
				$rep->bindValue(":CINC",$cartefid->getCINC());
				$rep->execute();

				
			}
		public function affichercartefid()
			{
				$sql="SELECT * FROM `cartefid`";
				$connexion=config::getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
		public function modifiercartefid($cartefid,$IDC)
    		{
      			
       			$sql="UPDATE `cartefid` SET `DATEC`=:DATEC,`DATEX`=:DATEX,`NbP`=:NbP,`CINC`=:CINC WHERE IDC=:IDC";
       			$connexion=config::getConnexion();
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":IDC",$IDC);
				$rep->bindValue(":DATEC",$cartefid->getDATEC());
				$rep->bindValue(":DATEX",$cartefid->getDATEX());
				$rep->bindValue(":NbP",$cartefid->getNbP());
				$rep->bindValue(":CINC",$cartefid->getCINC());
				$rep->execute();
    		}
	

	public function supprimercartefid($IDC)
	{
		$sql="DELETE FROM cartefid WHERE IDC= :IDC";
		$db =config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':IDC',$IDC);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}


	function recupIDC($IDC){
		$sql="SELECT * from cartefid where IDC=$IDC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function recupCIN($CINC){
		$sql="SELECT * from cartefid where CINC=$CINC";
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
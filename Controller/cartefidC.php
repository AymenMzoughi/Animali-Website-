<?php 
	include "../config.php";
	class cartefidC
	{
		public function ajoutercartefid($cartefid)
			{
				$sql="INSERT INTO `cartefid`(`IDC`, `DATEC`, `DATEX`, `NbP`, `CINC`) VALUES (:IDC,:DATEC,:DATEX,:NbP,:CINC);";
				$connexion=getConnexion();
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
				$connexion=getConnexion();
				$rep=$connexion->query($sql);
				return $rep;
			}
		public function modifiercartefid()
    		{
      			
       			$sql="UPDATE `cartefid` SET `IDC`=:IDC,`DATEC`=:DATEC,`DATEX`=:DATEX,`NbP`=:NbP,`CINC`=:CINC WHERE IDC=:IDC);";
       			$connexion=getConnexion();
				$rep=$connexion->prepare($sql);
                $rep->bindValue(":IDC",$cartefid->getIDC());
				$rep->bindValue(":DATEC",$cartefid->getDATEC());
				$rep->bindValue(":DATEX",$cartefid->getDATEX());
				$rep->bindValue(":NbP",$cartefid->getNbP());
				$rep->bindValue(":CINC",$cartefid->getCINC());
				$rep->execute();
    		}
	

	public function supprimercartefid($IDC)
	{
		$sql="DELETE FROM cartefid WHERE IDC= :IDC";
		$db = getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':IDC',$IDC);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
}
?>
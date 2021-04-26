<?php

class client
{
	private $CIN;
	private $Nom;
	private $Prenom;
	private $NumTel;
	private $ADR;
	private $DNS;
	public function __construct($CIN,$Nom,$Prenom,$NumTel,$ADR,$DNS)
	
	{
		$this->CIN=$CIN;
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->NumTel=$NumTel;
		$this->ADR=$ADR;
		$this->DNS=$DNS;
	}
	public function getCIN(){return $this->CIN;}
	public function getNom(){return $this->Nom;}
	public function getPrenom(){return $this->Prenom;}
	public function getNumTel(){return $this->NumTel;}
	public function getADR(){return $this->ADR;}
	public function getDNS(){return $this->DNS;}

	public function setCIN($CIN){$this->CIN=$CIN;}
	public function setNom($Nom){$this->Nom=$Nom;}
	public function setPrenom($Prenom){$this->Prenom=$Prenom;}
	public function setNumTel($NumTel){$this->NumTel=$NumTel;}
	public function setADR($ADR){$this->ADR=$ADR;}
	public function setDNS($DNS){$this->DNS=$DNS;}
}
?>
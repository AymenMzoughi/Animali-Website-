<?php

class client
{
	private $CIN;
	private $Sexe;
	private $Nom;
	private $Prenom;
	private $NumTel;
	private $Email;
	private $ADR;
	private $DNS;
	private $MDP;
	public function __construct($CIN,$Sexe,$Nom,$Prenom,$NumTel,$Email,$ADR,$DNS,$MDP)
	
	{
		$this->CIN=$CIN;
		$this->Sexe=$Sexe;
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->NumTel=$NumTel;
		$this->Email=$Email;
		$this->ADR=$ADR;
		$this->DNS=$DNS;
		$this->MDP=$MDP;
	}
	public function getCIN(){return $this->CIN;}
	public function getSexe(){return $this->Sexe;}
	public function getNom(){return $this->Nom;}
	public function getPrenom(){return $this->Prenom;}
	public function getNumTel(){return $this->NumTel;}
	public function getEmail(){return $this->Email;}
	public function getADR(){return $this->ADR;}
	public function getDNS(){return $this->DNS;}
	public function getMDP(){return $this->MDP;}
	public function setCIN($CIN){$this->CIN=$CIN;}
	public function setSexe($Sexe){$this->$Sexe;}
	public function setNom($Nom){$this->Nom=$Nom;}
	public function setPrenom($Prenom){$this->Prenom=$Prenom;}
	public function setNumTel($NumTel){$this->NumTel=$NumTel;}
	public function setEmail($Email){$this->Email=$Email;}
	public function setADR($ADR){$this->ADR=$ADR;}
	public function setDNS($DNS){$this->DNS=$DNS;}
	public function setMDP($MDP){$this->MDP=$MDP;}
}
?>
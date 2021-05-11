<?php

class cartefid
{
	private $IDC;
	private $DATEC;
	private $DATEX;
	private $NbP;
	private $CINC;
	public function __construct($IDC,$DATEC,$DATEX,$NbP,$CINC)
	
	{
		$this->IDC=$IDC;
		$this->DATEC=$DATEC;
		$this->DATEX=$DATEX;
		$this->NbP=$NbP;
		$this->CINC=$CINC;
	}
	public function getIDC(){return $this->IDC;}
	public function getDATEC(){return $this->DATEC;}
	public function getDATEX(){return $this->DATEX;}
	public function getNbP(){return $this->NbP;}
	public function getCINC(){return $this->CINC;}

	public function setIDC($CIN){$this->IDC=$IDC;}
	public function setDATEC($DATEC){$this->DATEC=$DATEC;}
	public function setDATEX($DATEX){$this->DATEX=$DATEX;}
	public function setNbP($NbP){$this->NbP=$NbP;}
	public function setCINC($CINC){$this->CINC=$CINC;}
}
?>
<?php

class categorie
{
	private $idcat;
	private $nomcat;
	
	public function __construct($idcat,$nomcat)
	
	{
		$this->idcat=$idcat;
		$this->nomcat=$nomcat;
		
	}
	public function getidcat(){return $this->idcat;}
	public function getnomcat(){return $this->nomcat;}
	

	public function setidcat($idcat){$this->idcat=$idcat;}
	public function setnomcat($nomcat){$this->nomcat=$nomcat;}
	
}
?>
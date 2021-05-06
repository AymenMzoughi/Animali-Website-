<?PHP
class Reclamation
{   private $id;
	private $probleme;
	private $date;
	private $etat;
	private $sujet;
	private $idclient;
	function __construct($probleme,$date,$etat,$sujet,$idclient)
	{
		$this->probleme=$probleme;
		$this->date=$date;
		$this->etat=$etat;
		$this->sujet=$sujet;
        $this->idclient=$idclient;
		
	}
	
	function getProbleme()
	{
		return $this->probleme;
	}
	function getid()
	{
		return $this->id;
	}
	function getDate()
	{
		return $this->date;
	}
	function getEtat()
	{
		return $this->etat;
	}


	function getsujet()
	{
		return $this->sujet;
	}
	
	function getidclient()
	{
		return $this->idclient;
	}

	function setProbleme($probleme)
	{
		$this->probleme=$probleme;
	}
	function setid($id)
	{
		$this->id=$id;
	}
	function setDate($date)
	{
		$this->date=$date;
	}
	function setsujet($sujet)
	{
		$this->sujet=$sujet;
	}
	function setidcient($idclient)
	{
		$this->idclient=$idclient;
	}
	
	
}

?>
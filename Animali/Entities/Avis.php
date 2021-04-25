<?PHP
class Avis
{   private $id;
	private $message;
	private $nom;
	private $prenom;
	private $note;
	function __construct($message,$nom,$prenom,$note)
	{
		$this->message=$message;
		$this->nom=$nom;
        $this->prenom=$prenom;
		$this->note=$note;
		
	}
	
	function getmessage()
	{
		return $this->message;
	}
	function getid()
	{
		return $this->id;
	}
	function getnom()
	{
		return $this->nom;
	}
	function getprenom()
	{
		return $this->prenom;
	}


	function getnote()
	{
		return $this->note;
	}
	

	function setmessage($message)
	{
		$this->message=$message;
	}
	function setid($id)
	{
		$this->id=$id;
	}
	function setnom($nom)
	{
		$this->nom=$nom;
	}
	function setprenom($prenom)
	{
		$this->prenom=$prenom;
	}
	function setnote($note)
	{
		$this->note=$note;
	}
	
	
}

?>
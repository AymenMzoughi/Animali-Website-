<?PHP
/*FirstCommitAymen*/
class Avis
{   private $id;
	private $message;
	private $nom;
	private $prenom;
	private $note;
	private $email;
	function __construct($message,$nom,$prenom,$email,$note)
	{
		$this->message=$message;
		$this->nom=$nom;
        $this->prenom=$prenom;
		$this->note=$note;
		$this->email=$email;
		
	}
	
	function getmessage()
	{
		return $this->message;
	}
	function getemail()
	{
		return $this->email;
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
	function setmail($mail)
	{
		$this->email=$mail;
	}
	
}

?>
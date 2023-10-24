<?php

/**
* class Person
* 7 Attribute: 
*/
class Person
{
	private $id;
	private $anrede;
	private $vorname;
	private $nachname;
	private $ort;
	private $email;
	private $passwort;	

	function insert($db)
	{
		$sql = "INSERT INTO personen (anrede, vorname, nachname, ort, email, passwort)
		VALUES ('$this->anrede', '$this->vorname', '$this->nachname', '$this->ort', '$this->email', '$this->passwort')";
  
	  // use exec() because no results are returned
	  $db->exec($sql);
	  $_SESSION['message'] = "Person Daten erfolgreich eingetragen!";
	} 


	function __construct(Array $daten)
	{
		$this->anrede = $daten['anrede'];
		$this->vorname = $daten['vorname'];
		$this->nachname = $daten['nachname'];
		$this->ort = $daten['ort'];
		$this->email = $daten['email'];
		$this->passwort = $daten['passwort'];
	}
	
	
	//Getter/Setter
	public function getId()
	{
		return $this->id;
	}
	
	public function setId($param)
	{
		$this->id = $param;
	}
	
	
	public function getAnrede()
	{
		return $this->anrede;
	}
	
	public function setAnrede($param)
	{
		$this->anrede = $param;
	}
	
	public function getVorname()
	{
		return $this->vorname;
	}
	
	public function setVorname($param)
	{
		$this->vorname = $param;
	}
	
	public function getNachname()
	{
		return $this->nachname;
	}
	
	public function setNachname($param)
	{
		$this->nachname = $param;
	}
	
	public function getOrt()
	{
		return $this->ort;
	}
	
	public function setOrt($param)
	{
		$this->ort = $param;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function setEmail($param)
	{
		$this->email = $param;
	}
	
	public function getPasswort()
	{
		return $this->passwort;
	}
	
	public function setPasswort($param)
	{
		$this->passwort = $param;
	}
	

	
	
}

?>
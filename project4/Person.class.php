<?php

class Person
{
    private $id;

    private $anrede;
    private $vorname;
    private $nachname;
    private $ort;
    private $email;
    private $password;


    function insert($db){
        $sql = "INSERT INTO personen (anrede, vorname, nachname, ort, email, passwort) VALUES ('$this->anrede', '$this->vorname', '$this->nachname', '$this->ort', '$this->email', '$this->password') ";

        $db->exec($sql);
        $_SESSION['message'] = "Person Daten erfolgreich eingetragen!";
    }


    function __construct(array $daten)
    {
        $this->anrede = $daten["anrede"];
        $this->vorname = $daten["vorname"];
        $this->nachname = $daten["nachname"];
        $this->ort = $daten["ort"];
        $this->email = $daten["email"];
        $this->password = $daten["passwort"];

    }
   
    function getAnrede()
    {
        return $this->anrede;
    }
    function setAnrede($anrede)
    {
        $this->anrede = $anrede;
    }
    function getVorname()
    {
        return $this->vorname;
    }
    function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }
    function getNachname(){
        return $this->nachname;
    }
    function setNachname($nachname){
        $this->nachname = $nachname;
    }
    function getort()
    {
        return $this->ort;
    }
    function setort($ort)
    {
        $this->ort = $ort;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function getPassword(){
        return $this->password;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }

    function isLogin(){
        $erg = false;

        if (isset($_SESSION['admin'])) {
            $erg = true;;
        }
        return $erg;
    }

}


// $person = new Person('1','Herr', 'John');
// echo $person->setAnrede('John');
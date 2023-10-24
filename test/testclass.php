<?php 
class Testclass{
    private $anrede;
    public function __construct($wert){

        if(method_exists($this ,"setAnrede")){
            $this->setAnrede = $wert;
           
        }

    }

    public function setAnrede($anrede){
        $this->anrede = $anrede;
    }
    public function getAnrede(){
        return $this->anrede;
    }

}

?>
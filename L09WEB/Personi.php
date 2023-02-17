<?php 
abstract class Personi {
    private $emri;
    private $mbiemri;
    private $dataLindjes;
    private $email;
    private $gjinia;
    function __construct($emri,$mbiemri,$dataLindjes,$email,$gjinia){
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->dataLindjes = $dataLindjes;
        $this->email = $email;
        $this->gjinia = $gjinia;
    }
    public abstract function orariPunes();
    public function setEmri($emri){
        $this->emri = $emri;
    }
    public function setMbiemri($mbiemri){
        $this->mbiemri = $mbiemri;
    }
    public function setDataLindjes($dataLindjes){
        $this->dataLindjes = $dataLindjes;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setGjinia($gjinia){
        $this->gjinia = $gjinia;
    }
    public function getEmri(){
        return $this->emri;
    }
    public function getMbiemri(){
        return $this->mbiemri;
    }
    public function getDataLindjes(){
        return $this->dataLindjes;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getGjinia(){
        return $this->gjinia;
    }

    public function __toString()
    {
        return "Emri: ".$this->emri .", Mbiemri: ".$this->mbiemri.", date lindjes: ".$this->dataLindjes.", email: ".$this->email.", gjinia: ".$this->gjinia;
    }
}


?>
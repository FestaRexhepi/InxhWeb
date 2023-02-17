<?php
class Student{
    private $emri;
    private $mbiemri;
    private $dataLindjes;
    private $email;
    private $gjinia;
    private $vitiAkademik;
    private $niveliStudimeve;
    private $departamenti;
    function __construct($emri,$mbiemri,$dataLindjes,$email,$gjinia,$vitiAkademik,$niveliStudimeve,$departamenti){
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->dataLindjes = $dataLindjes;
        $this->email = $email;
        $this->gjinia = $gjinia;
        $this->vitiAkademik = $vitiAkademik;
        $this->niveliStudimeve = $niveliStudimeve;
        $this->departamenti = $departamenti;
    }
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
    public function setVitiAkademik($vitiAkademik){
        $this->vitiAkademik = $vitiAkademik;
    }
    public function getVitiAkademik(){
        return $this->vitiAkademik;
    }
    public function setNiveliStudimeve($niveliStudimeve){
        $this->niveliStudimeve = $niveliStudimeve;
    }
    public function getNiveliStudimeve(){
        return $this->niveliStudimeve;
    }
    public function setDepartamenti($departamenti){
        $this->departamenti = $departamenti;
    }
    public function getDepartamenti(){
        return $this->departamenti;
    }
}

  
?>
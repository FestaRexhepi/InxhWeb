<?php
include "Personi.php";
class Profesori extends Personi {
    private $gradaAkademike;
    function __construct($emri,$mbiemri,$dataLindjes,$email,$gjinia,$gradaAkademike){
        parent::__construct($emri,$mbiemri,$dataLindjes,$email,$gjinia);
        $this->gradaAkademike = $gradaAkademike;
    }
    public function setGradaAkademike($gradaAkademike){
        $this->gradaAkademike = $gradaAkademike;
    }
    public function getGradaAkademike(){
        return $this->gradaAkademike;
    }
    public function orariPunes(){
        return "Full Time";
    }
   
}



?>
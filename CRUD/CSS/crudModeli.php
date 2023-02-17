<?php
require_once('dbCon.php');

Class crudModeli extends dbCon{

    private $id;
    private $emri;
    private $mbiemri;
    private $departamenti;
    private $adresa;
    private $dbConn;

    public function __construct($id='',$emri='',$mbiemri='',$departamenti='',$adresa='')
    {
        $this->id = $id;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->departamenti = $departamenti;
        $this->adresa = $adresa;

        $this->dbConn = $this->connDB();
    }
    //Seters and geters
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }public function setEmri($emri){
        $this->emri = $emri;
    }
    public function getEmri(){
        return $this->emri;
    }public function setMbiemri($mbiemri){
        $this->mbiemri = $mbiemri;
    }
    public function getMbimeri(){
        return $this->mbiemri;
    }public function setDept($departamenti){
        $this->departamenti = $departamenti;
    }
    public function getDept(){
        return $this->departamenti;
    }public function setAdresa($adresa){
        $this->adresa = $adresa;
    }
    public function getAdresa(){
        return $this->adresa;
    }

}
?>
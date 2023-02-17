<?php
  class dbCon{
    private $conn = null;
    private $host='localhost';
    private $database='Ariana';
    private $username='root';
    private $dbname='Ariana';
    private $password='MJ';
    public function connDB(){
        try {
            $this->conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
            echo "Lidhja me: ($this->dbname) * ($this->host): eshte reaulizur me sukses!";
        }catch(PDOException $pdoe){
            die("Nuk mund te lidhej ne databazen e te dhenave($this->dbname)" .$pdoe->getMessage());
        }
        return $this->conn;

    }
  }
  $testDB = new dbCon();
  $testDB->connDB();
?>
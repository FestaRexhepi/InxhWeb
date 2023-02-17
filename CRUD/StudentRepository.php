<?php
class StudentRepository{
    
    public function insertoDhenat()
    {
        try {
            $sql = "INSERT INTO studenti(emri,mbiemri,dataLindjes,email,gjinia,vitiAkademik,niveliStudimeve,departamenti) value(?,?,?,?,?,?,?,?)";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->emri, $this->mbiemri, $this->dataLindjes,$this->email,$this->gjinia,$this->vitiAkademik, $this->niveliStudimeve, $this->departamenti]);
            echo "<script>
alert('dhenat jane Regjistruar me sukses');
document.location='displayDhenat.php';</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>

<?php 
class Studenti {
    private $emri = "Ariana";
    public $mbiemri = "Rexhepi";
    public $mosha = 19;
    function shfaqEmri($emri){
        echo 'Emri im eshte: ' . $emri;
    }
    function shfaqMbiemri($mbiemri){
        echo 'Mbiemri im eshte: ' . $mbiemri;
    }
    function shfaqMosha($mosha){
        echo 'Mosha ime eshte: ' . $mosha;
    }

}
$studenti = new Studenti();
echo $studenti->shfaqEmri("Ariana") . "<br>";
echo "<br>" . $studenti->shfaqMbiemri("Rexhepi");
echo $studenti->shfaqMosha(19);


?>
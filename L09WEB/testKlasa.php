<?php 
class testKlasa{
    public $brandi = "Iphone";
    public $lloji = "X";
    public $cmimi = 40;
    function getBrandi(){
        return $this->brandi;
    }
    function getLloji(){
        return $this->lloji;
    }
    function getCmimi(){
        return $this->cmimi;
    }

}
    $ob1 = new testKlasa();
    echo "Brandi: ".$ob1->getBrandi();
    echo "<br> Lloji: ". $ob1->getLloji();
    echo "<br> Cmimi: ".$ob1->getCmimi();
?>
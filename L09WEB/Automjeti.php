<?php
abstract class Automjeti{
    private $nrShasise;
    private $prodhuesi;
    private $modeli;

    function __construct($nrShasise,$prodhuesi,$modeli)
    {
        $this->nrShasise = $nrShasise;
        $this->prodhuesi = $prodhuesi;
        $this->modeli = $modeli;
    }
    public function getnrShasise(){
        return $this->nrShasise;
    }
    public function getProdhuesi(){
        return $this->prodhuesi;
    }
    public function getModeli(){
        return $this->modeli;
    }
    public function setnrShasise($nrShasise){
        $this->nrShasise=$nrShasise;
    }
    public function setProdhuesi($prodhuesi){
        $this->prodhuesi=$prodhuesi;
    }
    public function setModeli($modeli){
        $this->modeli=$modeli;
    }

    public abstract function punon();
    function __toString()
    {
        return "Automjeti: Numri i shasise :" . $this->nrShasise . "- Prodhuesi:" . $this->prodhuesi . "modeli" . $this->modeli;
    }
}
?>
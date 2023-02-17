<?php
include "Automjeti.php";

class Vetura extends Automjeti{

    function __construct($nrShasise, $prodhuesi, $modeli)
    {
        parent::__construct($nrShasise, $prodhuesi, $modeli);
    }
    function punon()
    {
        return true;
    }
}
$vetura1 = new Vetura("AAA111","Audi","A8");
$vetura2 = new Vetura("AAA111","Audi","A8");
$vetura3 = new Vetura("AAA111","Audi","A8");
$vetura4 = new Vetura("AAA111","Audi","A8");

$veturat=[$vetura1,$vetura2,$vetura3,$vetura4];

foreach ($veturat as $vetura) {
    echo $vetura;
}
?>
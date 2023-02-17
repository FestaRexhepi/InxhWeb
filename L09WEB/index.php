<?php
include 'product.php';
include 'products.php';
for ($i = 0; $i < count($produktet);$i++){
    printProduct($produktet[$i]['emri'],$produktet[$i]['pershkrimi'],$produktet[$i]['cmimi'],$produktet[$i]['src']);
}
//printProduct($emri,$pershkrimi,$cmimi,$src);
?>
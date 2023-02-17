<?php
// //$laptop = "Lenovo x1 ";
// function testVRloc()
// {
//     $laptop = "DELL";
//    // global $laptop;
//     echo "Kjo eshte hapesira per var lokale: " . $laptop;
// }

// $output1 = testVRloc();

// function meParametra($x){
//     return $x;
// }
// echo "<br>ky rast shfaq rezultatin e parametriit: " .meParametra("Legion laptop");
// //echo $output1;

// //echo $laptop."<br>";
// //testVRloc();


// //echo "<h1>Une kam blere nje laptop te llojit</h1>" .$laptop;

// function VarStatic(){
//     static $a = 0;
//     echo $a;
//     $a = $a = 2;

// }
// for($a=0;$a<0;$a++){
//     VarStatic();
// }

$webSy = array(
    "HTML" => 2,
    "CSS" => 2,
    "JavaScript" => 3,
    "PHP" => 4,

);

echo "<h3>Shfaqja e array te asocuar me foreach";
foreach ($webSy as $index => $vlera) {
    echo $index . ':' . $vlera . '<br>';
}

?>



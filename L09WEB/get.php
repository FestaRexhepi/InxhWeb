<?php
function testGet(){
if(isset($_GET['submit'])){
$perdoruesi= $_GET['user'];
$fjalekalimi=$_GET['psw'];
    echo'Perdoruesi eshte', $perdoruesi,
    '<br> Fjalekalimi eshte' ,$fjalekalimi;
    }
else{
    echo'Ju nuk keni shtypur butonin Sumbit';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main">
        <form method="GET" action="testGet.php">
            <h1>Rasti metodes Get</h1>
            <label>Perdoruesi</label>
            <input type="text" name='user'/><br>
            <label>Fjalekalimi</label>
            <input type="password" name='psw'/><br>
            <input type="reset" name='reset'/><br>
            <input type="submit" name='submit' value="Ruaj"/><br>
        </form>
        <h5><?php // testGet()?></h5>
</div>
</body>
</html>
<?php
session_start();

?>

<ul>
<li>About Us</li>
<li>Contact</li>
    <?php
        if(isset($_SESSION['roli'])&& $_SESSION['roli']==1){

    ?>

<li>Dashboard</li>

<?php
}
?>

</ul>

<h1>Welcome to the main page <?php echo $_SESSION['emri']?></h1>
<a href="logout.php">logout</a>
<a href="dbData.php">Dashboard</a>
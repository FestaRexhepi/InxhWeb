<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOG IN</title>
    <style>
        body{
    background-color: steelblue;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.container{
    background-color: white;
    border-radius: 30px;
    text-align: center;
    width: 360px;
    height: 350px;
    margin-left: 38%;
}

.input{
    background-color: rgb(233, 238, 240);
    width: 280px;
    height: 35px;
    border-radius: 30px;
    font-size: medium;
    border: 1px solid rgb(233, 238, 240);
    padding-left: 15px;
}

.btn{
    background-color: rgb(81, 129, 219);
    width: 300px;
    height: 40px;
    border-radius: 30px;
    font-size: medium;
    color: white;
    border: 1px solid rgb(81, 129, 219);
    font-weight: bolder;
}
li{
    list-style: none;
    display: inline-block;
    margin: 20px;
    font-size: larger;
    color: white;
    font-weight: bold;
}

#titulli >h2{
    border-radius: 30px;
    padding-top: 20px;
    font-size: 40px;
    font-weight: bolder;
}
    </style>
</head>
<body>
    <nav>
        <div class="menu">
            <ul>
                <li>Home</li>
                <li>About us</li>
                <li>Contact</li>
            </ul>
        </div>
    </nav>
    <div class="container">
      <div id="titulli">  <h2>Login Form</h2> </div> <br>

      <form method="POST" action="validation.php" >
        <input type="text" placeholder="Enter Email" class="input"> <br> <br>
        <input type="password" placeholder="Enter Password" class="input">
        <br> <br>
        <input type="submit" class="btn">
      </form>
    </div>
</body>
</html>
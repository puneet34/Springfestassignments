<?php
session_start();

?>

<html>

<head>
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css?family=Barriecito&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="animate.css"><link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Bungee+Shade&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <title>MASHBOOK</title>
</head>

<body>


<div  align="center" class="welcom">
  Welcome To Mashbook
<br></div>
<div align="center">
<b>
Version:6.2.0</b></div>
  <div class="main1 animated rotateInDownLeft">
    <p class="welcome" align="center">Login Here</p>
    <form class="form1" action="login.php" method="POST">
      <input class="username" type="text" align="center"  name="user" placeholder="USERNAME">
      <input class="pass" type="password" align="center" name="pass" placeholder="PASSWORD"><br><br>
      <button class="submit" align="center" type="submit" name="submit">Login</button>
</form>
    </div>

  <div class="main2 animated rotateInUpRight">
    <p class="welcome" align="center"> Register Here</p>
    <form class="form1" action="new.php" method="POST">
      <input class="username" type="text" align="center" name="user" placeholder="USERNAME">
      <input class="pass" type="password" align="center" name="pass" placeholder="PASSWORD">
      <br><br>
      <button class="submit" align="center" type="submit" name="submit">Register</button>
</form>
    </div>   
</body>

</html>
<?php
session_start();

$user = 'root';
$password = 'root';
$db = 'mydb';
$host = 'localhost:8889';

$link = new mysqli(
   $host, 
   $user, 
   $password,$db
);


$name=mysqli_real_escape_string($link, $_POST['user']);
$pass=mysqli_real_escape_string($link, $_POST['pass']);

if (empty($name) || empty($pass)) {
header("location:index.php");
exit();
}


$q="SELECT * FROM myguests WHERE name='$name' && pass='$pass' ";
$result=mysqli_query($link,$q);
$num=mysqli_num_rows($result);
if($num>=1){
$_SESSION['user']=$name;

header('location:home.php');
}
else{

header('location:index.php?passwordnotmatch');
}


?>
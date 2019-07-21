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

$qy="INSERT INTO myguests(name,pass)
VALUES ('$name','$pass')" ;
mysqli_query($link,$qy);
$_SESSION['user']=$name;


if ($link->query($qy) === TRUE) {
    $last_id = $conn->insert_id;
    
}
header("location:signin.php");
?>














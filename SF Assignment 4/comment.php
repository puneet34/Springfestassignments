<style type="text/css">
#topicbox{height:auto;
 	width: 80%;
 	margin: 5px;
 	background: rgba(136, 126, 126, 0.2);
    border: 2px solid rgba(0, 0, 0, 0.08);
   color: black;
    font-size: 200%;
    word-spacing: 4px;
    letter-spacing: 3px;
    padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Sniglet', cursive; 
 }
.b{font-weight: bolder;}
</style>


<?php
$user = 'root';
$password = 'root';
$db = 'mydb';
$host = 'localhost:8889';

$lins = new mysqli(
   $host, 
   $user, 
   $password,$db
);
if (isset($_POST['reply'])) {
$id2=$_POST['id2'];

$user1=$_POST['user1'];

$comment=$_POST['comment'];
$qyd="INSERT INTO mycomment(id,user,comment)
VALUES ('$id2','$user1','$comment')" ;
mysqli_query($lins,$qyd);
	
}

  if (isset($_POST['delete'])) {
$c= mysqli_real_escape_string($lins, $_POST['id4']);
$sqly = "DELETE * FROM 'mytopic' WHERE 'id'='$c'";
$deletey = mysqli_query($lins,"DELETE FROM `mytopic` WHERE `id` = '$c'" );

if ($lins->query($sqly) === TRUE) {
    echo "Record deleted successfully";
} 
}



if (isset($_POST['displaycomment'])) {
$a = mysqli_real_escape_string($lins, $_POST['id3']);

	$b=$_POST['commenty'];

$resulty = mysqli_query($lins,"SELECT * FROM `mycomment` WHERE `id` = '$a'" );
while ($rowy=mysqli_fetch_array($resulty)) {
?>
<link href="https://fonts.googleapis.com/css?family=Sniglet&display=swap" rel="stylesheet">
<p id="topicbox">
	<br>
    <span class="b"><?php echo $rowy['user']; ?></span>
    <br> <?php echo $rowy['comment']; ?>		
	</p>
	<?php
}
die();
}

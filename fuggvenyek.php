<?php 
function bejelentkezes($user, $pass){
	$dbservername="ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$dbusername= "gcp2sm41g9k9mouw";
$dbpassword="cwyawjrh3urrhp0z";
$dbname="xsvvaqgluhw0lups";
$link=mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$querry='SELECT username, password FROM `test` WHERE `username` LIKE "'.$user.'" AND `password` LIKE "'.$pass.'"';
	$result = mysqli_query($link, $querry);
		if(mysqli_num_rows($result)==1){ 
			return true;
			return $user;
		} else {
			return false;
		}
		
mysqli_close($link);
}
function bejelentkezes2($user){
$dbservername="ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$dbusername= "gcp2sm41g9k9mouw";
$dbpassword="cwyawjrh3urrhp0z";
$dbname="xsvvaqgluhw0lups";
$link=mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	$querry='SELECT username, password FROM `test` WHERE `username` LIKE "'.$user.'"';
	$result = mysqli_query($link, $querry);
		if(mysqli_num_rows($result)==1){ 
			return true;  
		} 
		else { 
			return false; 
		}
mysqli_close($link);
}

function regisztracio($user, $pass) {
	if (!bejelentkezes2($user)) {
$dbservername="ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$dbusername= "gcp2sm41g9k9mouw";
$dbpassword="cwyawjrh3urrhp0z";
$dbname="xsvvaqgluhw0lups";
$conn=mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
		$query = 'INSERT INTO `test` SET username="'.$user.'", password="'.$pass.'" ';
		$result = mysqli_query($conn, $query);
	mysqli_close($conn);
	}
}


function torles1($torlendo) {
$dbservername="ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$dbusername= "gcp2sm41g9k9mouw";
$dbpassword="cwyawjrh3urrhp0z";
$dbname="xsvvaqgluhw0lups";
$conn=mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$query = 'DELETE FROM `test` WHERE  username="'.$torlendo.'"';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)==1){ 
	echo 'Felhasználó törölve'; 
	 } else { 
	 	echo 'Nem sikerült törölni.'; 
	 }
mysqli_close($conn);
}
function komment($user, $comment, $dateto) {
	
		$dbservername="ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$dbusername= "gcp2sm41g9k9mouw";
$dbpassword="cwyawjrh3urrhp0z";
$dbname="xsvvaqgluhw0lups";
$conn=mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
		$query = 'INSERT INTO `comment` SET Username="'.$user.'", Comment="'.$comment.'", Datewr="'.$dateto.'" ';
		$result = mysqli_query($conn, $query);
		mysqli_close($conn);
	}

function torles ($username){
$dbservername="ulsq0qqx999wqz84.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$dbusername= "gcp2sm41g9k9mouw";
$dbpassword="cwyawjrh3urrhp0z";
$dbname="xsvvaqgluhw0lups";
$conn=mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
$query = 'DELETE FROM `comment` WHERE  Username="'.$username.'"';
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)==0){ 
	header('Location:adatlap.php');
	exit();  
} else { 
	echo 'Hiba történt!'; 
}
mysqli_close($conn);
}
?>

<?php
$host="188.50.117.104";
$user="root";
$password="";
$database="ProDB";
$connect= mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno()){
	die("cannot connect to database field:". mysqli_connect_error());
	
}
else {
	echo "Database is connected";
}
?>

<?php
 mysqli_close($connect);
 
 ?>
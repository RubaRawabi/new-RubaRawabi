<?php

$Username=$_POST['Username'];
$Password=$_POST['Password'];

mysql_connect("localhost","root","");
mysql_select_db("ProDB");
$select="insert into ProTable(Username,Password) values ('".$Username."' , '".$Password."')";
$sql=mysql_query($select);

print '<script type="text/javascript">';
print 'alert("The data is inserted correctly..")';
print '</script>';

mysql_close();

?>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="seetha";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Couldn't connect mysql".mysqli_connrect_error());
}
else
{
	echo "Database Connected Successfully!!";
}
?>
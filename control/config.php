<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="12345";
$dbname="cv";
$myconn=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
if(mysqli_connect_error())
{
	echo mysqli_connect_error();
	
}
else
{
	echo "connection successful";
}

?>
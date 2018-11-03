<?php
include("../control/config.php");
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$sql="INSERT INTO stdinfo(name,address,mobile) VALUES('$name','$address','$mobile')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo("user information added sucessfull");
}
else
{
	echo("user information added unsucessfull");

}
?>
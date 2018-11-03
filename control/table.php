<?php
include('config.php');
$stdinfo="CREATE TABLE IF NOT EXISTS stdinfo(name VARCHAR(50) NOT NULL,

address VARCHAR(50) NOT NULL,
mobile VARCHAR(50) NOT NULL,
PRIMARY KEY(mobile)
)";
$result=mysqli_query($myconn,$stdinfo);
if($result===TRUE)
{
	echo"student info table created";
}
else
{
		echo"student info table not created";

}

?>

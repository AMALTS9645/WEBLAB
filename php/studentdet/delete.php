<?php
$servername = "localhost";
	$username = "20mca011";
	$password = "2359";
	$dbname = "20mca011";

	$con = mysqli_connect($servername, $username, $password, $dbname);

	$delete = "DELETE FROM studentdet WHERE id=2";
	if (mysqli_query($con, $delete))
	{
	 echo "record deleted successfully";
	}
	else
	{
	 echo "Error: " . $delete . "<br>" . mysqli_error($con);
	}

?>
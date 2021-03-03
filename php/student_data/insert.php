<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "20mca011";
$password = "2359";
$dbname = "20mca011";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
die("connection failed:" . mysqli_connect_error());
}
$a = $_POST["txtname"];
$b = $_POST["txtbranch"];
$c = $_POST["txtmark"];
$sql = "INSERT INTO STUDENT(Name,Branch,Mark) 
VALUES('$a','$b','$c')";
if(mysqli_query($conn, $sql))
{
	echo "New record created successfully";
}
else
{
	echo "error:" .$sql . "<br>" . mysqli_error($conn);
}
?>
</body>
</html>

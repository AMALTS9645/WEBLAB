<html>
<head>
<title>general form</title>
</head>
<body >
<form action = "" method = "POST">
Name:
<input type = "text" name = "txtname">
<br><br>
Roll no:
<input type = "text" name = "txtr_no">
<br><br>
Gender:
<input type = "text" name = "txtgen">
<br><br>

Address:
<textarea name = "add" type = "textarea"></textarea>
<br><br>
<input type = "submit" name = "btnInsert"  value = "Save">
<input name="btnprint" type="submit" id="select" value="print">
<input name="btnupdate" type="submit" id="update" value="Update">

</form>
</body>
</html>

<?php
	$servername = "localhost";
	$username = "20mca011";
	$password = "2359";
	$dbname = "20mca011";

	$con = mysqli_connect($servername, $username, $password, $dbname);
	
	
if(isset($_POST["btnInsert"]))
{
	
	$a =$_POST["txtname"];
	$b = $_POST["txtr_no"];
	$c =$_POST["txtgen"];
	$d = $_POST["add"];
	$insert = "INSERT INTO studentinfo (name,rollno,gender,address) VALUES ('$a',$b,'$c','$d')";

	if (mysqli_query($con, $insert))
	{
	 echo "New record created successfully";
	}
	else
	{
	 echo "Error: " . $insert . "<br>" . mysqli_error($con);
	}
}
if(isset($_POST["btnupdate"]))
{	
	$update = "UPDATE studentinfo SET Name='alex' WHERE id=2";
	if (mysqli_query($con, $update))
	{
	 echo "New record updated successfully";
	}
	else
	{
	 echo "Error: " . $update . "<br>" . mysqli_error($con);
	}
}

if(isset($_POST["btnprint"]))
{
	$select = "SELECT * FROM studentinfo";
    $sldt = mysqli_query($con,$select);

	echo "<table border='1'>
	<tr>
	<th>id</th>
	<th>Name</th>
	<th>RollNo</th>
	<th>Gender</th>
	<th>Address</th>
	</tr>"; 
while($row = mysqli_fetch_assoc($sldt))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['Rollno']."</td>";
echo "<td>".$row['Gender']."</td>";
echo "<td>".$row['Address']."</td>";
echo "</tr>";
}
echo "</table>";
}
?>	



<html>
<head></head>
<title>delete student</title>
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
$qry="select*from studentdet where id='$id'";
$res=mysqli_query($conn, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action="studdelete.php" >
<h1 style="text-align:center"><u>DELETE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>Enter Student ID</td>
<td>:</td>
<td><input type="text" name="id" value="<?php echo $r['id'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="delete" name="delete"></td></tr>
</table>
</form>
</table>
</form>
<?php
if(isset($_POST["delete"]))
{
$id=$_POST["id"];
$qry1="delete from studentdet where id='$id'";
	if(mysqli_query($conn, $qry1))
	{
	echo "Data Removed<br>";
	} 
}
?>
</body>
</html>

<html>
<head></head>
<title>update student</title>
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
<form method="post" action="studupdate.php" >
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="id" value="<?php echo $r['id'];?>"></td></tr>
<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['name'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update" name="update"></td></tr>
</table>
</form>
<?php
if(isset($_POST["update"]))
{
$id=$_POST["id"];
$name=$_POST["name"];
$qry1="update studentdet set name='$name' where id='$id'";
if(mysqli_query($conn, $qry1))
{
echo "Data updated successfully<br>";
}
}
?>
</body>
</html>
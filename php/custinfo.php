<html>
<head>
<title>display data in table format</title>
</head>
<body>
 <?php
 $con = mysqli_connect("localhost","20mca011","2359","20mca011");
if(!$con)
{
 die("not connected".mysqi_error());
}
echo "Connection open"."<br/>";
$query = "SELECT * FROM coust";
$sql = mysqli_query($con,$query);
echo "<table border = '1'>
<tr>
<th>C_No</th>
<th>C_Name</th>
<th>Item_Purchased</th>
<th>Mob_no</th>
</tr>";
while($row = mysqli_fetch_array($sql))
{
 echo "<tr>";
 echo "<td>".$row['C_No']."</td>";
 echo "<td>".$row['C_Name']."</td>";
 echo "<td>".$row['Item_Purchased']."</td>";
 echo "<td>".$row['Mob_no']."</td>";

 echo "</tr>";
}
echo "</table>";
 ?>
</body>
</html>

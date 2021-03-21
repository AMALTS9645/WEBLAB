<html>
<head></head>
<title>Electricity Bill Calculator</title>
<body>
<h1 style="text-align:center;color:red"><u>ELECTRICITY BILL CALCULATOR</u></h1>
<br><br>
<form method="post" >
<div align="center">
<label>Total Unit Consumption:</label>
<input type="text" name="unit"><br><br><br>
<input type="submit" value="calculate" name="calculate" style="background-color:blue;color:white;">
</div>
</form>
<?php
if(isset($_POST["calculate"]))
{
$unit=$_POST["unit"];
if($unit<=300)
{
$price=$unit*5.80;
}
elseif($unit>=301 && $unit<=350)
{
$price=$unit*6.60;
}
elseif($unit>=351 && $unit<=400)
{
$price=$unit*6.90;
}
elseif($unit>=401 && $unit<=500)
{
$price=$unit*7.10;
}
else
{
$price=$unit*7.90;
}

?>
<h1 style="text-align:center;color:red"><u>ELECTRICITY BILL</u></h1>
<table align="center" border="0">
<tr>
<th>Total unit Consuption</th>
<td>:</td>
<td><?php echo $unit; ?></td></tr>
<tr>
<th>Amount to be paid</th>
<td>:</td>
<td><?php echo $price; ?></td>
</tr>
</table>
<?php
}
?>
</body>
</html>

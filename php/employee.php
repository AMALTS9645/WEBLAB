<html>
<head>
<body>
<?php
if(isset($_POST['update']))
{
$conn = mysqli_connect("localhost","20mca011","2359","employee");
if(! $conn)
{
die('could not connect: ' . mysqli_error());
}
$emp_name = $_POST['emp_name'];
$emp_salary = $_POST['emp_salary'];
$sql = "INSERT INTO employee(emp_name,emp_salary)
VALUES('$emp_name','$emp_salary')";
if(mysqli_query($conn,$sql))
{
echo "inserted data successfully\n";
}
else
{
echo "error" .$sql .<br> . mysqli_error($conn)
}
mysqli_close($conn);
?>
<form method = "post">
<table width = "400" border = "0" cellspacing = "1"
cellpadding = "2">
<tr>
<th width = "100">Employee ID</th>
<td><input name = "emp_salary" type = "text" id = "emp_id">
</td>
</tr>
<tr>
<th width = "100">Employee salary</th>
<td><input name = "emp_salary" type = "text" id = "emp_salary"></td>
</tr>
<tr>
<th width = "100">
</body>
</head>
</html>
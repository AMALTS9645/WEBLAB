<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "20mca011";
$password = "2359";
$conn = mysqli_connect($servername, $username, $password);
if($conn){
echo "connected successfully";
}
mysqli_close($conn);
?>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","123","DB2");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$Firstname = mysqli_real_escape_string($con, $_POST['Firstname']);
$Lastname = mysqli_real_escape_string($con, $_POST['Lastname']);
$Gender = mysqli_real_escape_string($con, $_POST['Gender']);
$Age = mysqli_real_escape_string($con, $_POST['Age']);
$id = mysqli_real_escape_string($con, $_POST['id']);

$sql="INSERT INTO info2 ( Firstname,Lastname,Gender,Age,id)
VALUES ('$Firstname', '$Lastname','$Gender', '$Age','$id')";

if (!mysqli_query($con,$sql)) 
{
 
  die('Error: ' . mysqli_error($con));

}
echo "1 record added";

mysqli_close($con);
?> 

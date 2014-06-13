<?php
$con=mysqli_connect("localhost","root","123","DB");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$age = mysqli_real_escape_string($con, $_POST['age']);

$sql="INSERT INTO info(First Name,Last Name,Gender,Age)
VALUES ('$firstname', '$lastname','$gender', '$age')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?> 

<?php
$nameErr = $lnameErr = $genderErr = $ageErr = $idErr= "";
$Firstname = $Lastname = $Gender = $Age = $id = "";
ini_set('display_errors', 'On');
$formdata = json_decode($_POST['formdata'], true);
$arrayData = array();

$arrayData['Firstname'] = $formdata[0]["value"];
$arrayData['Lastname'] = $formdata[1]["value"];
$arrayData['Gender'] = $formdata[2]["value"];
$arrayData['Age'] = $formdata[3]["value"];
$arrayData['id'] = $formdata[4]["value"];

$con=mysqli_connect("localhost","root","123","DB2");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$x = 0;

  if (empty($arrayData['Firstname'])) {
    $nameErr = "First Name is required";
    echo $nameErr;
    $x++;
    
  } else {
    $Firstname = mysqli_real_escape_string($con, $arrayData['Firstname']);
  }
    if (empty($arrayData['Lastname'])) {
    $lnameErr = "Last Name is required";
     echo " ".$lnameErr;
    $x++;
  } else {
    
    $Lastname = mysqli_real_escape_string($con, $arrayData['Lastname']);
  }
	if (empty($arrayData['Gender'])) {
    $genderErr = "Gender is required";
    echo $genderErr;
    $x++;
  } else {
    $Gender = mysqli_real_escape_string($con, $arrayData['Gender']);
  }
	if (empty($arrayData['Age'])) {
    $ageErr = "Age is required";
    echo $ageErr;
    $x++;
  } else {
    $Age = mysqli_real_escape_string($con, $arrayData['Age']);
  }
	if (empty($arrayData['id'])) {
    $idErr = "id is required";
    echo $idErr;
    $x++;
  } else {
    $id = mysqli_real_escape_string($con, $arrayData['id']);
  }

if($x>0)
{
	die();
}
$sql="INSERT INTO info2(Firstname,Lastname,Gender,Age,id)
VALUES ('$Firstname', '$Lastname','$Gender', '$Age','$id')";

if (!mysqli_query($con,$sql)) {
 
  die('Error: ' . mysqli_error($con));

}
echo "1 record added";

mysqli_close($con);
?> 

<?php
$con=mysqli_connect("localhost","root","123","DB2");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM info2");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>Age</th>
<th>id</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Firstname'] . "</td>";
  echo "<td>" . $row['Lastname'] . "</td>";
  echo "<td>" . $row['Gender'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
 echo "<td>" . $row['id'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?> 


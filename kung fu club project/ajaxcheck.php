<!-- This page contains the ajax code to which has been used by search.php.
     This page retrieves the details of the events from the database and send that information as response to search.php-->
<?php

 $v=$_GET['v'];
  $mysqli = new mysqli("us-cdbr-iron-east-03.cleardb.net:3306", "b9bcb4078b7708", "0bf36aaa", "ad_412a134cad239cc");
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

$query="SELECT * FROM Student where Std_Name LIKE '%$v%'";
$result=$mysqli->query($query);
echo "<table>";
echo "<th>studentName</th><th>studentNo</th><th>level</th>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr >";    
    echo "<td>" . $row['Std_Name']."</td>";
    echo "<td>" . $row['Std_No']."</td>";
    echo "<td>" . $row['Mem_Type']."</td>";
    echo "</tr>";
    echo"<hr></hr>";
    
}
echo "</table>"; 
mysqli_close($mysqli);    
?>
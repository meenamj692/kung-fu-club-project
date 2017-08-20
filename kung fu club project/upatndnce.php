<!DOCTYPE html>
<html>
<head>
<title>SKF-Update</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" type="image" href="/images/skfc.png"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<?php

  
  if(isset($_POST['submit']))
  {
    $id=(int) $_POST['Std_ID'];
    //$level=$_POST['level'];
    $status=$_POST['Status'];
    $doc=$_POST['Dat'];
    
    
  
   
     $mysqli = new mysqli("us-cdbr-iron-east-03.cleardb.net:3306", "b9bcb4078b7708", "0bf36aaa", "ad_412a134cad239cc");
     $mysqli1 = new mysqli("us-cdbr-iron-east-03.cleardb.net:3306", "b9bcb4078b7708", "0bf36aaa", "ad_412a134cad239cc");
     $mysqli2 = new mysqli("us-cdbr-iron-east-03.cleardb.net:3306", "b9bcb4078b7708", "0bf36aaa", "ad_412a134cad239cc");
     
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

$query="insert into status values($id,'$doc','$status')";
$query1="select * from attendance where Std_No=$id";
$result=$mysqli->query($query);
$query4="insert into attendance values($id,(select count(stat) from status where  stat='present' and Std_No=$id),(select count(Date_of_class) from status ),(select count(stat) from status where stat='absent' and Std_No=$id))";
$result1=$mysqli1->query($query1);
$query2="update attendance set Std_No=$id,no_of_classes_attended=(select count(stat) from status where  stat='present' and Std_No=$id),Total_no_of_classes=(select count(doc) from status ),no_of_missed_classes=(select count(stat) from status where stat='absent' and Std_No=$id) where Std_No=$id";
if($result1)
{
	$result2=$mysqli2->query($query2);
}
else
{
    
     $mysqli2->query($query4);
}
?>
<?php if($result) 
{?>
<html>
<script>
alert("Attendance Updated");
window.location="admin.php";

</script>

<?php  } ?>
</html>
<?php

}
?>


  

<style>
    body{
        background-image:url("");    
    }
    
    </style>
    <div class="container">
			
			<header>
				<h1><span>Update Here</span> </h1>
            </header>       
      <div  class="form">
    		<form id="contactform" action="upatndnce.php" method="post"> 
            
            <p class="contact"><label for="Std_ID">Student ID</label></p> 
            <input id="phone" name="Std_ID" placeholder="Enter Student_ID" required="" type="text"> <br>
     
            <p class="contact"><label for="Date">Date</label></p> 
            <input id="phone" name="Date" placeholder="Enter Date" required="" type="text"> <br>
     
			<p class="contact"><label for="Parent type">Status</label></p> 
			<input type="radio" name="Status" value="Present">Present
			<input type="radio" name="Status" value="Absent">Absent		
			<input class="buttom" name="submit" id="submit" tabindex="5" value="Update" type="submit">
			 
 </form> 
</div>      
</div>
</body>
</html>

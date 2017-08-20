
<!DOCTYPE html>
<html>
<head>
<title>Update Fee</title>
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
    $level=$_POST['Level'];
    $fees=(int) $_POST['fees'];
    $date=$_POST['Date'];
    
   
 $mysqli = new mysqli("us-cdbr-iron-east-03.cleardb.net:3306", "b9bcb4078b7708", "0bf36aaa", "ad_412a134cad239cc");
     $mysqli1 = new mysqli("us-cdbr-iron-east-03.cleardb.net:3306", "b9bcb4078b7708", "0bf36aaa", "ad_412a134cad239cc");
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }
$query="insert into fee values($id,$fees,'$date','$level')";
$result=$mysqli->query($query);
?>
<?php if($result) 
{?>
<html>
<script>
alert("Fees Updated");
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
				<h1><span>Update Fee Here</span> </h1>
            </header>       
      <div  class="form">
    		<form id="contactform" action="updatefee.php" method="post"> 
            
            <p class="contact"><label for="Std_ID">Student ID</label></p> 
            <input id="phone" name="Std_ID" placeholder="Enter Student_ID" required="" type="text"> <br>
 

            <p class="contact"><label for="Date">Date</label></p> 
            <input id="phone" name="Date" placeholder="Enter Date" required="" type="text"> <br>            
            <p class="contact"><label for="fees">Fee Amount</label></p> 
            <input id="phone" name="fees" placeholder="Enter Fees Amount" required="" type="text"> <br>
			<p class="contact"><label for="Level">Level</label></p> 
			<input type="radio" name="Level" value="Beginner">Beginner
		<input type="radio" name="Level" value="Intermediate">Intermediate		
		<input type="radio" name="Level" value="Advanced">Advanced		
			<input class="buttom" name="submit" id="submit" tabindex="5" value="Update" type="submit">			 
 </form> 
</div>      
</div>
</body>
</html>

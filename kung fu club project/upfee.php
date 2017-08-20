
<?php
  if(isset($_POST['submit']))
  {
    $id=(int) $_POST['id'];
    $level=$_POST['level'];
    $fees=(int) $_POST['fees'];
    $doj=$_POST['doj'];
    
    echo $id;
    echo $level;
    echo $fees;
    echo $doj;
  
   
     $mysqli = new mysqli("us-cdbr-iron-east-03.cleardb.net:3306", "b9bcb4078b7708", "0bf36aaa", "ad_412a134cad239cc");
     $mysqli1 = new mysqli("us-cdbr-iron-east-03.cleardb.net:3306", "b9bcb4078b7708", "0bf36aaa", "ad_412a134cad239cc");
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
     }

$query="Insert into fees values('$level',$fees,'$doj',$id)";
$result=$mysqli->query($query);

?>
<?php if($result) 
{?>
<html>
<script>
alert("Fees Updated");
window.location="adminfp.html";

</script>
<?php  } ?>
</html>
<?php

}
?>


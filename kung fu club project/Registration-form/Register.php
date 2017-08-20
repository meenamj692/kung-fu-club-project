<!DOCTYPE html>
<html>
<head>
<title>SKF-Register</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" type="image" href="/images/skfc.png"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<?php
$connc=new mysqli("us-cdbr-iron-east-03.cleardb.net:3306","b9bcb4078b7708","0bf36aaa","ad_412a134cad239cc");
$con1=new mysqli("us-cdbr-iron-east-03.cleardb.net:3306","b9bcb4078b7708","0bf36aaa","ad_412a134cad239cc");
if(isset($_POST['username'])&& isset($_POST['password'])){
	$username=$_POST['username'];
	$password=$_POST['password'];	
	$email=$_POST['email'];
	$DOB=$_POST['DOB'];
	$Address=$_POST['Address'];
	$DOJ=$_POST['DOJ'];
	$phn=$_POST['phone'];
	$type=$_POST['Mem_type'];
	$clevel=$_POST['class_level'];
	$pname=$_POST['Parent Name'];
	$pemail=$_POST['Parent Email'];
	$padrs=$_POST['Parent Address'];
	$qry=$connc->query("insert into Student(Std_Name,Std_DOB,Std_DOJ,Std_Email,Std_Phno,Std_Address,Instructor_ID,Password,Mem_Type,class_level) values('$username','$DOB','$DOJ','$email','$phn','$Address',0360,'$password','$type','$clevel')");
	$qry2=$con1->query("insert into Parent(Prnt_Name,Prnt_Email,Prnt_Address) values('$pname','$pemail','$padrs')");
if($qry){
	echo "Registered Successfully";
}else{
	echo"Registration Failed..";
}
}
?>
<style>
    body{
        background-image:url( "images/crane-style.jpg");    
    }
    
    </style>
    <div class="container">
			
			<header>
				<h1><span>Register Here</span> </h1>
            </header>       
      <div  class="form">
    		<form id="contactform" action="Register.php" method="post"> 
                
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="emaill"  name="email" placeholder="example@domain.com" required="" type="email"> 
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required=""> 
      
      			<p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""> 
 				
 				<p class="contact"><label for="DOB">Date of Birth</label></p>
 				<input type="text" name="DOB" placeholder="Date of Birth" required="">
       
       		<p class="contact"><label for="Address">Address</label></p>
 				<input type="text" name="Address" placeholder="Address" required="">
       
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            
            <p class="contact"><label for="DOJ">Intended Date of Joining</label></p> 
    			<input type="text"  name="DOJ" placeholder="YYYY-MM-DD" required=""> 
            
			<p class="contact"><label for="Mem_type">Membership Type</label></p> 
			<input type="radio" name="Mem_type" value="Quarterly">Quarterly
			<input type="radio" name="Mem_type" value="Half-Yearly">Half-Yearly
			<input type="radio" name="Mem_type" value="Annually">Annually
		
			<p class="contact"><label for="Parent Name">Parent Name</label></p> 
				<input type="text" name="Parent Name">
			<p class="contact"><label for="class_level">Level</label></p> 
			<input type="radio" name="class_level" value="Beginner">Beginner
			<input type="radio" name="class_level" value="Intermediate">Intermediate
			<input type="radio" name="class_level" value="Advanced">Advanced
		
		
			<p class="contact"><label for="Parent Email">Parent Email</label></p>
			<input type="text" name="Parent Email" placeholder="Parent's Email">
			
			<p class="contact"><label for="Parent Address">Parent Address</label></p>
			<input type="text" name="Parent Address" placeholder="Parent's Addres">
			<input class="buttom" name="submit" id="submit" tabindex="5" value="Sign up!" type="submit">
			 
 </form> 
</div>      
</div>
</body>
</html>

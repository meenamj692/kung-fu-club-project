
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="/images/skfc.png"/>
<title>Stephanos Kung Fu Club</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<script type="text/javascript">

function redirect()
{
	window.location="Loggin.php";
	
}
</script>
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>

<body>
<?php 
$connc=new mysqli("us-cdbr-iron-east-03.cleardb.net:3306","b9bcb4078b7708","0bf36aaa","ad_412a134cad239cc");
?>
<div id="page">
  <div id="header"> 
    <div id="section">
      <div><a href="index.php"><img src="images/skfnew.png" alt="" /></a></div>
      <div id="login"><button type="submit" onclick="redirect()" float="right">LogIn</button>
 <button type="submit" float="right"><a href="/Registration-form/Register.php">Register</a></button>
 </div>
      </div>
       
    <ul>
      <li class="current"><a href="index.html">Home</a></li>
      <li><a href="aboutus.html">About Us</a></li>
      <li><a href="instructor.html">Instructor</a></li>
      <li><a href="classes.html">Classes</a></li>
      <li><a href="Ranks.html">Ranks</a></li>
      <li><a href="contact-us.html">Contact</a></li>
    </ul>
    <div id="tagline">
      <div>
        <h4></h4>
        <p></p>
      </div>
    </div>
  </div>
  <div id="content">
    <div id="home">
      <div>
        <div id="aside">
 
<div>

            <h1>Welcome to <span class="last">Stephanos Kungfu Club</span></h1>
            <a href="#"><img src="images/skfbg2.jpg" alt="" /></a>
            <p>SKF is a martial arts school with hundreds of students.</p>
            <p>Studetns are given training in Kung Fu..</p>
          </div>
          <ul>
            <li>
              <h2><a href="#">Our <span class="last">Mission</span></a></h2>
              <p>Is to train students in Kung Fu and make them attain various ranks like White Belt, Black Belt etc.. </p>
           
            </li>
          </ul>
        </div>
        <div id="calendar">
          <h3>School Calendar</h3>
          <ul>
            <li>
              <div> <span>10<br />
                Jan</span>
                <h2><a href="#">Click here to see the schedule of the events</a></h2>
              </div>
                            <p>Apart from Kung Fu courses, various events will be going on in the Club every month. Check here to see them..</p>
            </li>
                    </div>
      </div>
    </div>
  </div>
  <div id="footer">
    <div>
      <div id="connect"> <a href="#"><img src="images/icon-facebook.gif" alt="" /></a> <a href="#"><img src="images/icon-twitter.gif" alt="" /></a> <a href="#"><img src="images/icon-youtube.gif" alt="" /></a> </div>
      <div class="section">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="admissions.html">Admissions</a></li>
          <li><a href="training-courses.html">Training Courses</a></li>
          <li><a href="career.html">Career</a></li>
          <li class="last"><a href="contact-us.html">Contact us</a></li>
        </ul>
        <p>Copyright &copy; <a href="index.php">SKFC</a> - All Rights Reserved </p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
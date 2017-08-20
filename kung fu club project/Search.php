<!-- This page sends the XMLHttpRequest to ajaxcheck.php to get the information of events. 
      This page prompts the user to enter the event information and using ajax it will retrieve and displays the data.-->

<!DOCTYPE HTML>

<html>
	<head>
		<title>WindsorEvents</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="styles/searchstyle.css" />
		
		<script type="text/javascript">
           var xmlhttp;
           function search(str) {
            if (str=="") {
               document.getElementById("dr").innerHTML="";
               return;
                     } 
            if (window.XMLHttpRequest) {
               
                  xmlhttp=new XMLHttpRequest();
                   } else {  
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                   }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    	
      document.getElementById("dr").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","ajaxcheck.php?v="+str,true);
  xmlhttp.send();
}
		
		</script>
	</head>
	<body>
	<div>
	<h1 >Search  here...</h1>
	</div>
<div>
    <form class="searchbox" action="">
        <input type="search" placeholder="search.." onkeyup="search(this.value)"/>
        </form>
</div>
<div style="margin-right:40px;"><p id="dr" > Hello <p><div>
			
				

			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>
			

	</body>
</html>
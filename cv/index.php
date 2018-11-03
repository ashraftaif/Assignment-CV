<?php
?>
<!DOCTYPE html>
<head>


<title>Index Page</title>

<link rel="stylesheet" href="theme.css">

</head>

<body>
<div id="hed"> 
<ul>
<a href="index.html"><li>Home</li></a>
<a href="personal.html"><li>Personal Details</li></a>
<a href="education.html"><li>Educational Background</li></a>
<a href="skil.html"><li>Skills</li></a>
<a href="referen.html"><li>References</li></a>
</ul>
</div>
<!--<div id="menu">
<ul>
<a href="index.html"><li>Home</li></a>
<a href="contact.html"><li>Contact</li></a>
<a href="signup.html"><li>Signup</li></a>
<a href="login.html"><li>Login</li></a>
</ul>
</div>-->
<div id="sbleft">
 <center>
<img id="src" src="taif.jpg" alt="Smiley face" height="250" width="250">
<h1>Resume of</h1>
<form id="sform" action="indexinsert.php" method="post"onsubmit="return valiform()">
  Name:<br>
  <input type="text" id="name" name="name" value="">
  <br>
  Address:<br>
  <input type="text" id="add"name="address" value="">
  <br>
  Mobile:<br>
  <input type="text" id="mob"name="mobile" value="">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 
</center>
</div>

<script>
function valiform()
{
	var a1=document.forms["sform"]["name"].value;
	var a2=document.forms["sform"]["add"].value;
	var a3=document.forms["sform"]["mob"].value;
	
	if(a1==null ||a1=="")
	{
		window.alert(" Id must be field out");
		return  false;
	}
	else if(a2==null ||a2=="")
	{
		window.alert("Name must be field out");
		return  false;
	}
	else if(a3==null ||a3=="")
	{
		window.alert("User name must be field out");
		return  false;
	}
	
}

</script>

<div id="cont">
<h1>Career Objective:</h1>

  <h2>1.To secure a challenging position in a reputable organization to expand my learnings, knowledge, and skills.</h2>
  <h2>2.Secure a responsible career opportunity to fully utilize my training and skills, while making a significant contribution to the success of the company.</h2>
  <h2>3.Seeking an entry-level position to begin my career in a high-level professional environment.</li>
  <h2>4.To secure employment with a reputable company, where I can utilize my skills and business studies background to the maximum.</h2>
  <h2>5.Seeking a challenging career with an MNC.</h2>
  <!--<h2>A highly organized and hard-working individual looking for a responsible position to gain practical experience.</h2>-->
  <h2>6.To make use of my interpersonal skills to achieve goals of a company that focuses on customer satisfaction and customer experience.</h2>
  

	   
	   
	   
</div>
<div id="footer">



</div>


</body>
</html>

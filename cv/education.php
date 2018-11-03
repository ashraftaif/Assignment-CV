<?php

?>

<!DOCTYPE html>
<head>


<title>Educational Page</title>

<link rel="stylesheet" href="education.css">

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
<form action="/action_page.php" id="sform">
  Name:<br>
  <input type="text" id="name" name="firstname" value="Mickey">
  <br>
  Address:<br>
  <input type="text" id="add" name="lastname" value="Mouse">
  <br>
  Mobile:<br>
  <input type="text" id="mob" name="firstname" value="Mickey">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 
</center>

</div>

<div id="cont">
<center>
<h1>Educational Background:</h1>
<form id="sform" method="post" action="#" onsubmit="return valiform()">
<table border="2px">

<tr><td>Exam Name:</td>
<td><select>
  <option value="volvo">S.S.C</option>
  <option value="saab">H.S.C</option>
  <option value="vw">B.Sc.(Hon's)</option>
  <option value="audi" selected>M.Sc.</option>
  <option value="volvo">P.H.D</option>
</select></td>
</tr>

<tr><td>Result:</td>
<td><input type="text" id="res" name="pass" placeholder="Your Result.." /></td>
</tr>

<tr><td>Institution:</td>
<td><input type="text" id="inst" name="pass" placeholder="Your Institution .." /></td>
</tr>

<tr><td>Passing Year:</td>
<td><input type="date" id="pas" name="bday"></td>
</tr>

<tr><td>Exam Name:</td>
<td><select>
  <option value="volvo">S.S.C</option>
  <option value="saab">H.S.C</option>
  <option value="vw">B.Sc.(Hon's)</option>
  <option value="audi" selected>M.Sc.</option>
  <option value="volvo">P.H.D</option>
</select></td>
</tr>

<tr><td>Result:</td>
<td><input type="text" id="res1" name="pass" placeholder="Your Result.." /></td>
</tr>

<tr><td>Institution:</td>
<td><input type="text" id="inst1" name="pass" placeholder="Your Institution.." /></td>
</tr>

<tr><td>Passing Year:</td>
<td><input type="date" id="pas1" name="bday"></td>
</tr>

<tr><td>Exam Name:</td>
<td><select>
  <option value="volvo">S.S.C</option>
  <option value="saab">H.S.C</option>
  <option value="vw">B.Sc.(Hon's)</option>
  <option value="audi" selected>M.Sc.</option>
  <option value="volvo">P.H.D</option>
</select></td>
</tr>

<tr><td>Result:</td>
<td><input type="text" id="res2" name="pass" placeholder="Your Result.." /></td>
</tr>

<tr><td>Institution:</td>
<td><input type="text" id="inst2" name="pass" placeholder="Your Institution.." /></td>
</tr>

<tr><td>Passing Year:</td>
<td><input type="date" id="pas2" name="bday"></td>
</tr>

<tr> <td> <input type="submit" id="submit" value="Submit"></td></tr>

</table>
</form>
</center>
</div>

<script>
function valiform()
{
	var a1=document.forms["sform"]["res"].value;
	var a2=document.forms["sform"]["inst"].value;
	var a3=document.forms["sform"]["pas"].value;
	var a4=document.forms["sform"]["res1"].value;
	var a5=document.forms["sform"]["inst1"].value;
	var a6=document.forms["sform"]["pas1"].value;
	var a7=document.forms["sform"]["res2"].value;
	var a8=document.forms["sform"]["inst2"].value;
	var a9=document.forms["sform"]["pas2"].value;
	
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
	else if(a4==null ||a4=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
	
	else if(a5==null ||a5=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
	
	else if(a6==null ||a6=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
	
	else if(a7==null ||a7=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
	
	else if(a8==null ||a8=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
	
	else if(a9==null ||a9=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
}

</script>

<div id="footer">
<h2>Find me on social media</h2>

</div>


</body>
</html>

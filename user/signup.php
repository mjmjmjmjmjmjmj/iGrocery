<!DOCTYPE html>
<html>
<head>
<title>
signup
</title>
<link rel="stylesheet" type="text/css" href="signup.css" >
</head>
<style>
h1{
      padding: 20px;
      border-radius: 20px;
      background-color: rgb(80%,80%,80%);
      width: 200px;
      display:block;
      margin-left: 10px;
  }

h1:hover {
      box-shadow: 5px 5px 10px;
      position: relative;
      top: -5px;
      left: -5px;
  }
a{
      padding: 20px;
      border-radius: 20px;
      background-color: rgb(80%,80%,80%);
      width: 200px;
      display:block;
      margin-left: 10px;
  }

a:hover {
      box-shadow: 5px 5px 10px;
      position: relative;
      top: -5px;
      left: -5px;
  }
  </style>
<body>
<script type="text/javascript">
d = new Date();
			
document.writeln("The time is now "+d.toString()+"<br><br>");

function checkdata()
{
	u = document.getElementById("username").value;
      if (u.length==0) {
         alert("User name cannot be empty!");
         return false;
      }
    x = document.getElementById("password").value;
      if (x.length==0) {
         alert("Password cannot be empty!");
         return false;
      }
    y = document.getElementById("confirmpassword").value;
      if (y.length==0) {
         alert("Confirm Password cannot be empty!");
         return false;
      }
		var NOW = new Date();
		if (NOW.getHours()<=12) {
			alert("Good morning "+u+ "Welcome to my website!");
			return true;
		} else if (NOW.getHours()<=18) {
			alert("Good afternoon "+u+"Welcome to my website!");
			return true;
		} else {
			alert("Good night "+u+"Welcome to my website!");
			return true;
		}
}
		
 		function Change(ObjID,Color) {
			obj = document.getElementById(ObjID);
			obj.style.backgroundColor = Color;
		} 
		function alternative(ObjID,ImgName) {
			obj = document.getElementById(ObjID);
			obj.src=ImgName;
		}
    	
</script>
	<div id="signuparea">
		<h1>
		SignUp
		</h1>
		<h2><a href="homepage.html">HomePage</a></h2>
			<div id="logo">
			<img src="logo.png" id="Pic" width="148px" height="148px"
			onmouseover="alternative(this.id,'qrcode.png');" 
		     onmouseout="alternative(this.id,'logo.png');">
			</div>
				<div id="signup">
				<form method="post" action="homepage.html" onsubmit="return checkdata();">
				<p>
				User name &nbsp;&nbsp;
				<input type="text" id="username" value="" name="user" onfocus="Change(this.id,'grey');" onblur="Change(this.id,'white');">
				</p>
				<p>
				Password&nbsp;&nbsp;
				<input type="password" id="password" value="" name="password"onfocus="Change(this.id,'grey');" onblur="Change(this.id,'white');">
				</p>
				<p>
				Confirm Password &nbsp;&nbsp;
				<input type="password" id="confirmpassword" value="" name="confirmpassword" onfocus="Change(this.id,'grey');" onblur="Change(this.id,'white');">
				</p>
				<p>
				Gender:
      			<input type="radio" id="Male" name="gender" value="Male" checked>Male
      			<input type="radio" id="Female" name="gender" value="Female">Female
      			<br />
				</p>
				<p>
	<script>
	document.write("Age:");
	document.write("<select name='year'>");
	year=1;
	while( year<=100)
	{
  	document.write("<option>"+year+"</option>");
  	year=year+1;
	}
	document.write("</select>")
	</script>
				</p>
				<p>
				Occupation:
				<select name="occupation">
        		<option value="0" selected>Student</option>
        		<option value="1">Engineer</option>
        		<option value="2">Others</option>
        		<br>
				</select>
				</p>
				<p>
				How can you know the exitence of oursite?<br><br>
  				<input type="checkbox" id="newspaper" name="AD" value="newspaper" checked>Newspaper &nbsp;
  				<input type="checkbox" id="magazine" name="AD" value="magazine">Magazine
  				<input type="checkbox" id="friends" name="AD" value="friends">Friends<br />
				</p>
			</div>
				<div id="signupbutton">
				<input type="submit" id="submit" value="signup">
				</div>
				</form>
	
	</div>

</body>
</html>
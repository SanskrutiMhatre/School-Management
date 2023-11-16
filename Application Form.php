<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body
{
background-image: url("imageedit_2.jpg");
  background-size:"cover";
background-repeat: yes-repeat;
background-attachment:fixed
 
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 12px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}


.myDiv1 {
  border: 3px outset black;
  background-color:DEB887;
  width: 880px;
  height: 40px;
  float:center;
  padding: 2px 50px 25px 20px;
  text-align: center;
}
.myDiv2 {
  border: 3px outset black;
  background-color:F5DEB3;
  width: 880px;
  height: 700px;
 text-align: justify;
  padding: 2px 50px 25px 20px;
}
</style>
<script>

function validate()
{
with(document.forms.form1)
{
var name=form1.e1.value;
re = /[A-Za-z0-9]+@[a-z]/
if (re.test(name))
{
alert("Correct Email-Id");
}
else
{
alert("Incorrect Email-id");
}
}
} 
</script></head>
<body background="b1.jpg"> 
<br>

<div class="topnav">
  <a class="active" href="Home.php">Home</a>
  <a href="About us.php">About us</a>
  <a href="Facilities.php">Facilties</a>
  <a href="Documentation.php">Documentation</a>
  <a  href="Application Form.php">Registration Form</a>
  <a href="Contact us.php">Contact Us</a>
</div><br>

<center>
<div class="myDiv1">
<center><b><u><h1><font color="Maroon">Student Registration Form</h1></u></b></center></font color><br><br>
</div>
<br><div class="myDiv2">
<br><br>
<form name="form1" action="database.php" method="post">
First Name: <spacer><input type=“text” name="fname" maxlength=20 size=20><br><br>
Last Name: <spacer><input type=“text” name="lname" maxlength=20 size=20 ><br><br>
Email-ID: <input type="text" name="e1" maxlength=50 size=20 > <INPUT name="reg" value="Verify" type="button" onclick="validate()"/><br><br>
Mobile Number: <spacer><input type="text" name="mobile" maxlength=20 size=20><br><br>
Select Gender: <br><br> <input type="radio" name="r1" value="male">Male <input type="radio" name="r1" value="female">Female<br><br>
Address: <spacer><br><textarea name="Address" rows="5" cols="40"></textarea><br><br>
Hobbies: <spacer><input type="checkbox" name="Hobby" value="Drawing">
Drawing
<input type="checkbox" name="Hobby" value="Singing">
Singing
<input type="checkbox" name="Hobby" value="Dancing">
Dancing
<input type="checkbox" name="Hobby" value="sketching">
Sketching
<input type="checkbox" name="Hobby" value="Other">
Others<br><br>
Age: <spacer><input type="text" name="age" maxlength="3" size="10" ><br><br>
Admission in class: <spacer><select name="class" size="5">
                <option value="5">5th standard</option>
         	<option value="6">6th standard</option>
                <option value="7">7th standard</option>
		<option value="8">8th standard</option>
	        <option value="9">9th standard</option>
		<option value="10">10th standard</option></select><br><br>
Enter Password: <spacer><input type="password" name="p1" maxlength="20" size="15"><br><br><br>
<center>
<input type ="submit" name="r1" value="Delete Record">
<input type ="submit" name="u1" value="Update Record">
<input type ="submit" name="s1" value="Submit Form">
</form>
</div></center><br><br>
</body>
</html>
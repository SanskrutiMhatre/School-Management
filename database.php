<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['s1']))
{
$nme= $_POST['fname'];
$lnme= $_POST['lname'];
$email=$_POST['e1'];
$phone=$_POST['mobile'];
$gen=$_POST['r1'];
$add=$_POST['Address'];
$hobb=$_POST['Hobby'];
$age=$_POST['age'];
$class=$_POST['class'];
$pass=$_POST['p1'];
$sql = "INSERT INTO student (name,lname,email,phone,gender,address,hobbies,age,class,pass)VALUES ('$nme','$lnme','$email','$phone','$gen','$add','$hobb','$age','$class','$pass')";
if ($conn->query($sql) === TRUE)
{
	echo '<script type="text/JavaScript">
alert("ADDED SUCESSFULLY");
window.location.replace("Home.html");
</script>';
}
else
{
echo "Error: ".$sql ."<br>" .$conn->error;
}
}
elseif(isset($_POST['u1']))
{
$nme= $_POST['fname'];
$lnme= $_POST['lname'];
$email=$_POST['e1'];
$phone=$_POST['mobile'];
$gen=$_POST['r1'];
$add=$_POST['Address'];
$hobb=$_POST['Hobby'];
$age=$_POST['age'];
$class=$_POST['class'];
$pass=$_POST['p1'];
$sql = "UPDATE student SET lname='$lnme',email='$email',phone='$phone',gender='$gen',address='$add',hobbies='$hobb',age='$age',class='$class',pass='$pass'where name='$nme'";			
if ($conn->query($sql) === TRUE)
{
echo "UPDATED SUCESSFULLY";
}
else
{
echo "Something went wrong please try again" . $conn->error;
}
}

elseif(isset($_POST['r1']))
{
$nme= $_POST['fname'];
$sql = "DELETE FROM student WHERE name='$nme'";
if ($conn->query($sql) === TRUE)
{
echo '<script type="text/JavaScript">
alert("DELETED SUCESSFULLY");
window.location.replace("Home.html");
</script>';
}
else
{
echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>

<html>
<div style="height: 150;">

<h1 style="text-align:center; color: aquamarine;">Gojek assignment &nbsp; &nbsp; &nbsp;<a href="Report.php">Report</a></h1> 

</div>
<h1>Enter username and password</h1>

<form name="loginform" method="POST" action="login.php">

username:<input type="text" name='uname' value=<?php if(isset($_POST["uname"])) echo $_POST["uname"] ; ?>><br><br> 
<!--		username:<input type="text" name='uname'><br><br>-->
	password:<input type=password name=pwd>
<br><br>
	<input type="submit" value="login">

</form>
<br>
<a href="register.html">Register(xml)</a> | 



<?php if(isset($_POST["uname"])) echo ("Wrong username or Passwords"); ?>

</html>


<?php



if(isset($_POST["uname"]))
{
$username=$_POST["uname"];
$password=$_POST["pwd"];
session_start();


$con=mysqli_connect("localhost","root","","testdb");




$query="select * from testtable where username='$username' and password='$password'";

if (str_contains($username, '<') or str_contains($username, '>') or str_contains($username, 'alert(') or  str_contains($username, 'javascript:')) {
    echo "</br>Detection of Reflected XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Reflected Cross-site scripting','$username');");
} 

$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);


if($num>0)
{


session_regenerate_id();
$_SESSION["uname"]=$username;

header("location:profile.php");


}
else
{



echo "<br><br>you are not $username";



}
}



?>

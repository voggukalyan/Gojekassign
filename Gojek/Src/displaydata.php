<html>
<div style="height: 150;">

    <h1 style="text-align:center; color: aquamarine;">Gojek assignment &nbsp; &nbsp; &nbsp;<a href="Report.php">Report</a></h1> 

</div>
<form name="id" method="GET" action="displaydata.php">

Account: <input type="text" name="aid"> <br><br>
<input type="submit" value="getAccount">
</form>

 <a href='profile.php'>profile</a>


<?php
session_start();
if(isset($_GET['aid']) )
{
  	$aid = $_GET['aid'];

 $con = mysqli_connect("localhost","root","","testdb");
echo "hello Wordls";
 if($con->connect_errno)
 	{
	echo $con->connect_error;
   die('Unable to connect to database [' . $con->connect_error . ']');
	} 
 
 //$aid= mysqli_real_escape_string($con,$aid);	

 $result=mysqli_query($con,"select * from testtable where acno=$aid");
 
 $row = mysqli_fetch_row($result);

 
 echo $row[1]." ".$row[2]." ".$row[3];
}
?>

</html>
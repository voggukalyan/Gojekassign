<html>
<div style="height: 150;">

<h1 style="text-align:center; color: aquamarine;">Gojek assignment &nbsp; &nbsp; &nbsp;<a href="Report.php">Report</a></h1> 

</div>

<form name="transfer" action="transfer.php" onsubmit="return checkInp()" method="POST">

To Account : <input type="text" name="tacno"> <br><br>
Transfer Amount: <input type="text" name="tamount"> <br><br>
<input type="submit" value="Transfer">
<br><br> <a href='profile.php'>Profile</a>
<br><br> <a href='logout.php'>Signout</a>
</form>

<script>
function checkInp()
{
	
	var x=document.forms["transfer"]["tacno"].value;

	if(isNaN(x))
	{
		window.alert(x+" is not a number");
		document.write(x+" is not a number");
		return false;
	}
}
</script>

<?php
session_start();
If (isset($_SESSION['uname']))
{
if(isset($_POST['tacno']) )
{
  if(isset($_SESSION['uname']))
	{

	$fuser = $_SESSION['uname'];
	$tacno = $_POST['tacno'];
	$tamount = $_POST['tamount'];	



	#echo $fuser;
	#echo $tacno;
	#echo $tamount;

	$con = mysqli_connect("localhost","root","","testdb");
#---------------------------------------------------------------------------------------#	 
	$fresult = mysqli_query($con,"select * from testtable where username='$fuser'");
                                  
	$frow=mysqli_fetch_row($fresult);

	$fbalance=$frow[3]-$tamount;
	
	#echo $fbalance;
	

	mysqli_query($con,"UPDATE testtable SET balance='$fbalance' where username='$fuser'");

#-----------------------------------------------------------------------------#
	$tresult = mysqli_query($con,"select * from testtable where acno='$tacno'");
                                  
	$trow=mysqli_fetch_row($tresult);

	$tbalance=$trow[3]+$tamount;
	
	#echo $fbalance;
	

	mysqli_query($con,"UPDATE testtable SET balance='$tbalance' where acno='$tacno'");
#-------------------------------------------------------------------------------------#
	
	echo "Transfer Completed...!! your savings account balance : '$fbalance'";
	
	}

	else
	{
		echo "Out of session"; 		
	}

}
}
else
	
	{
		header('Location:login.html');
	}
?>

</html>
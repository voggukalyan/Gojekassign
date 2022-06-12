<html>
<div style="height: 150;">

<h1 style="text-align:center; color: aquamarine;">Gojek assignment &nbsp; &nbsp; &nbsp;<a href="Report.php">Report</a></h1> 

</div>
<br><br> <a href='logout.php'>Signout</a>

<br><br> <a href='transfer.php'>Transfer</a>

<br><br> <a href='profile.php'>Profile</a> <br><br>


<?php

session_start();

 if(isset($_SESSION['uname']))
	{ 
		$user=$_SESSION['uname'];

	if($user=="admin")
		{
			$con = mysqli_connect("localhost","root","","testdb");
	 
		$result=mysqli_query($con,"select * from testtable");
		for($i=1;$i<5;$i++)
			{ 
			$row=mysqli_fetch_row($result);
			$user=$row[1];
			$row[6]=$row[6];
			$fback=$row[6];
			echo "$user : $fback <br><br>";
			}
		}
		else
			
			{
				echo "You are Not Admin..!!!";
			}
	
	}
else
	{
		header('Location:login.html');
		
	}


?>

</html>
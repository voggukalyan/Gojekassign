<div style="height: 150;">

<h1 style="text-align:center; color: aquamarine;">Gojek assignment &nbsp; &nbsp; &nbsp;<a href="Report.php">Report</a></h1> 

</div>

<?php
session_start();
if(isset($_SESSION['uname']))
{
$user=$_SESSION['uname'];

echo "Hello $user";


#connect database
$con=mysqli_connect("localhost","root","","testdb");


 $result=mysqli_query($con,"select * from testtable where username='$user'");
 



 $row = mysqli_fetch_row($result);
 $balance=$row[3];
 
 $row[0]=htmlspecialchars($row[0]);

 if (str_contains($row[0], '<') or str_contains($row[0], '>') or str_contains($row[0], 'alert(')  or str_contains($row[0], 'javascript:')) {
    echo "</br>Detection of Stored XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
 }
if(str_contains($row[4], '<') or str_contains($row[4], '>') or str_contains($row[4], 'alert(') or str_contains($row[4], 'javascript:')){
    echo "</br>Detection of Stored XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
}
if(str_contains($row[3], '<') or str_contains($row[3], '>') or str_contains($row[3], 'alert(') or str_contains($row[3], 'javascript:')){
    echo "\nDetection of Stored XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
}

if(str_contains($row[5], '<') or str_contains($row[5], '>') or str_contains($row[5], 'alert(') or str_contains($row[5], 'javascript:')){
    echo "\nDetection of Stored XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
}

if(str_contains($row[6], '<') or str_contains($row[6], '>') or str_contains($row[6], 'alert(') or str_contains($row[6], 'javascript:')){
    echo "\nDetection of Stored XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
}




echo "<br><br>Your account number $row[0]";
echo "<br><br>Your emilid : $row[4]";
echo "<br><br>Your phone number: $row[5]";
echo "<br><br>Your balance: $row[3]";
echo "<!-- <br><br>Your feedback:$row[6] -->";



//#logout page


}

else
	
{
header('Location:login.php');
}

?>


<br><br> <a href='logout.php'>Signout</a> | <a href='transfer.php'>Transfer</a> | <a href='feedback.php'>Feedback</a>  



<br><br> <a href='displaydata.php'>Show Password</a>

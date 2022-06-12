<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<div style="height: 150;">

<h1 style="text-align:center; color: aquamarine;">Gojek assignment &nbsp; &nbsp; &nbsp;<a href="Report.php">Report</a></h1> 

</div>  
</html>


<?php


#connect database
$con=mysqli_connect("localhost","root","","testdb");


 $result=mysqli_query($con,"select * from attacks");

 $rowcount= mysqli_num_rows($result);

//  $row = mysqli_fetch_row($result);

 

 
//  $balance=$row[3];
 
//  $row[0]=htmlspecialchars($row[0]);

//  if (str_contains($row[0], '<') or str_contains($row[0], '>') or str_contains($row[0], 'alert(')  or str_contains($row[0], 'javascript:')) {
//     echo "</br>Detection of Stored XSS";
// 	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
//  }
// if(str_contains($row[4], '<') or str_contains($row[4], '>') or str_contains($row[4], 'alert(') or str_contains($row[4], 'javascript:')){
//     echo "</br>Detection of Stored XSS";
// 	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
// }
// if(str_contains($row[3], '<') or str_contains($row[3], '>') or str_contains($row[3], 'alert(') or str_contains($row[3], 'javascript:')){
//     echo "\nDetection of Stored XSS";
// 	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
// }

// if(str_contains($row[5], '<') or str_contains($row[5], '>') or str_contains($row[5], 'alert(') or str_contains($row[5], 'javascript:')){
//     echo "\nDetection of Stored XSS";
// 	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
// }

// if(str_contains($row[6], '<') or str_contains($row[6], '>') or str_contains($row[6], 'alert(') or str_contains($row[6], 'javascript:')){
//     echo "\nDetection of Stored XSS";
// 	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Stored Cross-site scripting','$username');");
// }

echo "<table border='1'>

<tr>

<th>Sno</th>

<th>AttackName</th>

<th>AttackPayload</th>


</tr>";
        

            // echo "<tr>";
			// echo "<td>".$row[0]."</td>"; 
            // echo "<td>".$row[1]."</td>"; 
            // echo "<td>".$row[2]."</td>";
            // echo "</tr>";
         
         for($i=0;$i<$rowcount;$i++)
			{ 
			$row=mysqli_fetch_row($result);
			$attackno=$row[0];
			$attcakname=$row[1];
            $attackpayload = $row[2];
            echo "<tr>";
			echo "<td>".$attackno."</td>"; 
            echo "<td>".$attcakname."</td>"; 
            echo "<td>".$attackpayload."</td>";
            echo "</tr>";
			}
            echo "</table>";


// echo "<br><br>Your account number $row[0]";
// echo "<br><br>Your emilid : $row[4]";
// echo "<br><br>Your phone number: $row[5]";
// echo "<br><br>Your balance: $row[3]";
// echo "<!-- <br><br>Your feedback:$row[6] -->";



//#logout page

        




?>



<br><br> <a href='login.php'>Login</a> | <a href='register.html'>Register</a> 
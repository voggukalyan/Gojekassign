<div style="height: 150;">

<h1 style="text-align:center; color: aquamarine;">Gojek assignment &nbsp; &nbsp; &nbsp;<a href="Report.php">Report</a></h1> 

</div>
<?php

#distrory session
session_start();
session_destroy();

//session_regenerate_id();

#redirect login page 
header('Location:login.php');

?>

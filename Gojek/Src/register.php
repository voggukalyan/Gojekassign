<?php

libxml_disable_entity_loader (false);
$xmlfile = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->loadXML($xmlfile, LIBXML_NOWARNING | LIBXML_NOENT | LIBXML_DTDLOAD);
$info = simplexml_import_dom($dom);
$name = $info->name;
$tel = $info->tel;
$email = $info->email;
$password = $info->password;

if (str_contains($name, '<') or str_contains($name, '>') or str_contains($name, 'alert(') or str_contains($name, 'javascript:')) {
    echo "</br>Detection of Reflected XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Reflected Cross-site scripting','$name');");
} 

if (str_contains($tel, '<') or str_contains($tel, '>') or str_contains($tel, 'alert(') or  str_contains($tel, 'javascript:')) {
    echo "</br>Detection of Reflected XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Reflected Cross-site scripting','$tel');");
} 

if (str_contains($email, '<') or str_contains($email, '>') or str_contains($email, 'alert(') or str_contains($email, 'javascript:')) {
    echo "</br>Detection of Reflected XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Reflected Cross-site scripting','$email');");
} 

if (str_contains($password, '<') or str_contains($password, '>') or str_contains($password, 'alert(') or str_contains($password, 'javascript:')) {
    echo "</br>Detection of Reflected XSS";
	mysqli_query($con,"Insert into attacks(attacktype,attackpayload) values('Reflected Cross-site scripting','$password');");
} 




$con = mysqli_connect("localhost","root","","testdb");
$result=mysqli_query($con,"SELECT * FROM testtable where username='$name'");

$num=mysqli_num_rows($result);

if($num>0)
{

echo "Already registered with username <b> $name </b> or email id <b> $email </b> ..!!";

}

else

{
mysqli_query($con,"INSERT INTO testtable(username,password,balance,feedback,mobile,email)VALUES('$name','$password',0,'nofeedback','$tel','$email');");
echo "Registration completed";

}


# Gojekassign

======
Installation:
=======
Downlaod the projects file zip and extract to a folder

install xampp (a local server) with default settings. Downlaod link for Xampp - https://www.apachefriends.org/

after installation open 'XAMPP control panel'

start Apache and MySQL services.

Launch url - localhost in browser there we can see the "phpmyadmin" in the header.

GO to phpMyAdmin and in SQL tab run the scripts that are in testtable.sql file under dbscripts folder in the project.

the required tables are created for the application.

copy the downloaded source code folder  to htdocs folder in xampp installation folder  -> in windows -> C:\xampp\htdocs\

launch the web application with url  ->  http://localhost/Gojek/Src/index.html


=======
Application walkthrough:
========

launch the web application with url  ->  http://localhost/Gojek/Src/index.html

login  - login to application

normal user     --->   username: kalyan | password : happy123$
admin credentials -->  username: admin  | password : kalyan1$

register page - register a new user
Report page   - All the CSS/XSS attcaks are detected on Login page


==================Vulnerabilities :

1. Reflected CSS/XSS       - in login page - Payload  in USERNAME                            -             <script>alert(111)</script>
2. SQLinjection            - in login page  - Payload in USERNAME and Password               -             1' or '1' ='1
3. Stored/ persisted XSS   - If user logged in Using admin credentials  and checks feed back  -             stored XSS alert/attack



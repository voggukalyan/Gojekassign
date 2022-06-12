# Gojekassign

=============================
Installation:
=====================================================
Downlaod the projects file zip and extract to a folder

install xampp (a local server) with default settings

after installation open 'XAMPP control panel'

start Apache and MySQL services.

Launch url - localhost in browser there we can see the "phpmyadmin" in the header.

GO to phpMyAdmin and in SQL tab run the scripts that are in testtable.sql file under dbscripts folder in the project.

the required tables are created for the application.

copy the downloaded source code folder  to htdocs folder in xampp installation folder  -> in windows -> C:\xampp\htdocs\

launch the web application with url  ->  http://localhost/Gojek/Src/index.html


=============================================
Application walkthrough:
===========================================================

launch the web application with url  ->  http://localhost/Gojek/Src/index.html

login  - login to application

normal user     --->   username: kalyan | password : happy123$
admin credentials -->  username: admin  | password : kalyan1$

register page - register a new user
Report page   - All the CSS/XSS attcaks are detected on Login page


Vulnerabilities 

login page :


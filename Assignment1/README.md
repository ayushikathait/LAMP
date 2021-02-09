Sol 2.
   a) mkdir WEB
   b) gedit emfile1.txt
      gedit emfile2.txt
   d) mv emfile1.txt f1.txt ,
      mv emfile2.txt emfile1.txt 
      mv f1.txt emfile2.txt 
   e) cat emfile1.txt emfile2.txt
   f) cat emfile1.txt emfile2.txt > file3.txt
   g) rm Documents/WEB

Sol 3. No, we are not able to excute the file. Its because we need a host server to open a PHP file,which isn't required for a HTML File.

Sol 4. We can execute a file with a PHP extension by installing and starting Apache2 server using the command, "sudo Apache2 start", and then the PHP file will work.
       This is because PHP files are processed by web servers using an interpreter, which executes the code.

Sol 6. PHP file does not run even after installing XAMPP. We have to put it inside XAMPP in a folder named "htdocs" so that it could run (C:/Program Files/XAMPP/htdocs).

Sol 7. LAMP - Linux Apache MySQL PHP
	where,
   1. Linux is an Operating System.
   2. Apache is an open source web-server that handles HTTP requests.
   3. MySQL is a Database server.
   4. PHP (Hypertext Preprocessor) is a programming language that is mostly web-oriented.

   XAMPP - Cross Platform (X), Apache MariaDB PHP Pearl
	where,
   1. X stands for cross platform or the "X".
   2. Apache is an open source web-server that handles HTTP requests.
   3. MariaDB is a community developed more secure version of MySQL.
   4. PHP (Hypertext Preprocessor) is a programming language that is mostly web-oriented.
   5. Pearl is a cross-platform language which works with HTML, XML and other markup languages.

Sol 8. Command to start Apache2 server :"sudo service Apache2 start" 
       Command to stop Apache2 server : "sudo service Apache2 stop"

Sol 9. WKT we can access 142.250.183.14 using domain name "google.com", similarly we can access 127.0.0.1 by typing "localhost" also, as it has been provided domain name as "localhost".

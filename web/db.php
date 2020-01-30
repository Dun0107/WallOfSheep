 <?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'wldbs11';
 $dbName = 'wallofsheep';

 $mysqli = new mysqli($host, $user, $pw, $dbName);

 // $conn = new mysqli($host, $user, $pw, $dbName);

// Check connection
 if ($mysqli->connect_error) {
 	die("Connection failed: " . $mysqli->connect_error);
 }

 ?> 

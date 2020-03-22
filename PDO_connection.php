<?php
// A better method for implentation of this could be to have this file as a class rather than a standard PHP doc. 
// It would be loaded into every page that uses an autoloader, so we wouldn't have to include this page also.
// However, as we're using two different types of connection, this would cause a conflict with Gabby's current work.

//local server information
$pdoHost = "localhost"; //Servername
$pdoUser = "root"; //Username for the server
$pdoPassword = ""; //Password for the server
$pdoDB = "YorkshireFilms"; //Your database name

try {
      $pdoConnect = new PDO("mysql:host=$pdoHost;dbname:$pdoDB",$pdoUser,$pdoPassword);
      
      $pdoConnect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
      
} catch (PDOException $e) {
	echo $e.getMessage();
}
              
<?php
//local server information
$pdoHost = "localhost"; //Servername
$pdoUser = "root"; //Username for the server
$pdoPassword = ""; //Password for the server
$pdoDB = "YorkshireFilms"; //Your database name

try {
      $pdoConnect = new PDO("mysql:host=$pdoHost;dbname:$pdoDB",$pdoUser,$pdoPassword);
      
      $pdoConnect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "connected to server";
      
} catch (PDOException $e) {
	die ($e.getMessage);
}
              
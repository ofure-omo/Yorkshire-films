<?php
/////local server information
//$pdoHost = "localhost"; //Servername
//$pdoUser = "root"; //Username for the server
//$pdoPassword = ""; //Password for the server
//$pdoDB = "filmDatabase"; //Your database name
//
//try {
//     $pdo = new PDO('mysql:host=$pdoHost;dbname:$pdoDB',$pdoUser,$pdoPassword);
//      
//     $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    
//      
//} catch (PDOException $e) {
//	die ($e.getMessage);
//}
              

  const DB_DSN = 'mysql:host=localhost;dbname=filmDatabase';
  const DB_USER = 'root';
   const DB_PASS = '';
  
   try {
       $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       die($e->getMessage());
  }
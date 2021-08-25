<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mail";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
//  if($conn){
//      echo"done";
//  }
//  else{
//      echo"not done";
//  }
 
 return $conn;

 ?>
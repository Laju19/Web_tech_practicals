<?php

    require 'quiz_db_credentials.php';

    $con = mysqli_connect(servername,username,password,dbname) or die ("could not connect database");


if($con) {
    echo 'Connection successful';
 }
 else{
    die('Connection failed: ' . mysql_error());
    

 }
 
 
 ?>
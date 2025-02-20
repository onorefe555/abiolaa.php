<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "patient_reg";
$db_link = "";


  try {
    $db_link = mysqli_connect($db_server,
    $db_username,
    $db_password,
    $db_name); 
  } catch (mysqli_sql_exception) {
     echo "YOU ARE NOT CONNECT TO THE DATABASE PLEASE CHECK YOUR CONNECTION";
  }                         

 if ($db_link) {
    echo " ";
 } 
 
 
?>








<?php
$db_server = "localhost";
$db_user = "root";
$db_password ="";
$db_name = "cpmsdb";
$db_connection = "";



try{
    $db_connection = mysqli_connect($db_server, 
                                $db_user,
                                 $db_password, 
                                 $db_name);
   
}
catch(mysqli_sql_exception){
    echo 'YOU ARE NOT CONNECTED TO THE DABASE';   
}
if ($db_connection) {
    echo " ";
}
?>


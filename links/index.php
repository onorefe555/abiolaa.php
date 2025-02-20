<?php
include("database.php");


  $username = "freshgold214";
  $password = "reproduction";
  $harsh = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO abiola  (user, password)
        VALUES ('gambriel','peter234')";


try {
    mysqli_query($db_connection, $sql); 
    echo "you are now register";
}
 catch (mysqli_sql_exception) {
    echo "could not register user";
}
// mysqli_close($db_connection);


$sql = "SELECT * FROM `abiola` WHERE user = 'Propane555' ";
   $result = mysqli_query($db_connection, $sql);

 mysqli_close($db_connection);

 if (mysqli_num_rows($result) > 0) {
   $row = mysqli_fetch_assoc($result);
   echo "ID " .$row["id"]."<br>";
   echo "UserName " . $row["user"]."<br>";
   echo "Password ". $row["password"]."<br>";
 }
?>




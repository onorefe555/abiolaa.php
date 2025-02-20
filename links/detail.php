<?php

include("database.php");
if (isset($_POST["username"]) && isset($_POST["password"])) {
    function Validate($data)  {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
       };   
    $username = Validate($_POST['username']) ;
    $password = Validate($_POST['password']);
     if (empty($username)) {
        header("Location : login.html?error = Username is required");
        exit();
     }elseif (empty($password)) {
        # code...
     } else {
       echo 'Valid input';
     }

}  
else {
   header("Location : login.html");  
   exit();
}
// ?>

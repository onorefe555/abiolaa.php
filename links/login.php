<?php 
include("database.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN </title>
    <link rel="shortcut icon" href="../img/logo-7038737_1280.png" type="image/png">
    <link rel="stylesheet" href="../style/log.css">
</head>

<body>
    
    <script lang="javascript" type="text/javascript" src="../script/log.js"></script>
    <div class="container">
          <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post"   id="form" onsubmit="return validateInputs();">
    
             <div class="webapp_input-container">
                   <div class="webapp_input" >
                        <label for="username">User Name</label> 
                          <input type="text" class="username"name="username" username="username" id="username"
                    name="username" placeholder="Please Enter your username here">
                   </div>
    
                   <div class="webapp_input" >
                    <label for="password">Password</label>
                    <input type="password" name="password" class="password" id="password"
                    name="password" placeholder="***************">
                   </div>
                   <div class="webapp_input" >
                       <div class="button">
                        <button id="cancel" type="submit" name="submit">Login</button>
                       </div>
                   </div>  
                   
             </div>
          </form>
          
         <small id="message"></small>
         <small id="success"></small>
         <span id="message">
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $_username = filter_input(INPUT_POST, "username" ,FILTER_SANITIZE_SPECIAL_CHARS);
                $_password = filter_input(INPUT_POST, "password" ,FILTER_SANITIZE_SPECIAL_CHARS);

                if (empty($_username)) {
                    echo "Username cannot be blank";
                }
                elseif (empty($_password)) {
                    echo "Password cannot be blank";
                }
                else {
                    $harsh = password_hash($_username, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO abiola (user, password)
                             VALUES('$_username', '$harsh')";
                    mysqli_query($db_connection, $sql);
                    echo "Login Sucessfully";
    
                }
            };
            mysqli_close($db_connection);
            ?>
         </span>
         <script type="text/javascript" lang="javascript" src="./script/log.js"></script>
         
    </div>
</body>
</html>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add patient</title>
</head>
<link rel="shortcut icon" href="../img/logo-7038737_1280.png" type="image/png">
<link rel="stylesheet" href="../style/index.css">
<link rel="stylesheet" href="../style/alldoctor.css">
<link rel="stylesheet" href="../style/adddoc.css">
<body>
    <header>
        <script type="text/javascript" lang="javascript" src="../script/script.js"></script>
       

        <div class="header_container">
              <div id="logo"><img src="../img/logo-7038737_1280.png" alt="Logo"></div>
    
               <div class="slide"><h3 id="slider">Your Health is our Number one priority</h3>
                <div class="section section-a" id="show-one" >
                  <p class="text">  All doctors treat, </p>
                  <p class="text">but a good doctor </p>
                  <p class="text"> lets nature  </p>
                  <p class="text"> heal. </p>
              </div>
          
          
              <div class="section section-b" id="show-two">
                  <p class="text"> “There are only two sorts of doctors:  </p>
                  <p class="text"> those who practice with their brains, </p>
                  <p class="text"> and those who </p>
                  <p class="text">  practice with their tongues.” </p>
              </div>
          
          
               <div class="section section-c" id="show-tree">
                  <p class="text">“The aim of medicine is to </p>
                  <p class="text"> prevent disease and prolong life;</p>
                  <p class="text"> the ideal of medicine is to</p>
                  <p class="text"> eliminate the need of a physician.” </p>
              </div>
              </div>
    
               <div class="doctor">
                    <div>
                        <p>Doctor Abiola </p>
                    </div>
                     <div>
                        <img src="../img/doctor-8447863_1280.png" alt="Doctor">
                     </div>
               </div>
        </div>
       </header> 
    
       <div class="dashbord_container">
             <div class="dashbord">
                  <button><a id="dash" href="../dash.php">Dashboard</a></button> 
                   <button  ><a href="alldoctor.html">All Doctor</a></button>
                   <button class="current"><a href="./addpatient.php" >Add Patient</a></button>
                   <button ><a href="./searchpt.php">Search patiient </a></button>
                   <button ><a href="./login.php">Logout</a></button>
    
                  <img src="../img/doctor.png" alt="doctor">
                  <p>Make An Appointment</p>
                        <?php
                          include("patient_reg.php")
                        ?>
             </div>
    
                      <!-- aside section -->
             
                <div class="doctor-profile" >
                        <h3 class="header_personal_health">Personal Health Record</h3>
                        <p>Kindly input all the patient information here</p>


                        <div class="container">
                            <h3 class="h3" id="header_computerize">Computerized Patient Management System Database Storage</h3>
                            <p>This database is mainly for storing Patient Information</p>
                            <div class="input-cont">
                                
                                <div>
                                <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                                <label id="header_computerize_6">Full Name:</label>
                                <input type ="text" id="name_el"placeholder ="Enter your full name here" name="fullname">
                                </div>
                            
                                <div>
                                    <label id="header_computerize_5">Prefer Name:</label>
                                    <input type ="text" name="prefername" id="address_el"placeholder ="Enter your prefer name">
                                </div>
                                
                                <div>
                                    <label id="header_computerize_4">Phone No :</label>
                                    <input type ="number" name="phone_no" id="patientIdentifier_el"placeholder ="Enter your phone number here">
                                </div>
                            
                            </div>

                            <div class="input-cont">
                                
                                <div>
                                <label id="header_computerize_3">D.O.B:</label>
                                <input type ="text" name="d_o_b" id="dateOfBirth_el" placeholder ="00/00/0000">
                                </div>
                            
                                <div>
                                    <label id="header_computerize_2">Blood type:</label>
                                    <input type ="text" name="bloodtype" id="bloodType_el"placeholder ="Enter your Blood type">
                                </div>
                                
                                <div>
                                    <label id="header_computerize_1">Gender:</label>
                                    <input type ="text" name="gender" id="gender_el" placeholder ="Male or Female">
                                </div>
                                     <small id="error_message"></small>
                            </div>
                            
                            <div class ="li_container">
                                
                                <div id="unorderlist_information">
                                <label>Patient Information</label>
                                <ul id="unorderlist_information">
                                    <span id="li_ID_NO"></span>
                                    <span id="li_name_el"></span>
                                    <span id="li_ad_el"></span>
                                    <span id="li_pho_el"></span>
                                    <span id="dateOfBirth_li"></span>
                                </ul>
                               </div>
                            
                            </div>
                            
                            <div class ="btn_container">
                                <div>
                                <!-- <button id="btn_addInformation">Add Information</button> -->
                                <input type="submit" name="Add_Information" value="add information" class="btn_gen">

                            </div>
                            

                           
                            
                            </div>
 
                            <span class="error_message" style="font-size: 32px; 
                                          color: rgba(0, 0, 255, 0.836);font-weight: 600;
                                          letter-spacing: 3px;">
                                    <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $fullname = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $prefername = filter_input(INPUT_POST, "prefername", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $phone_no = filter_input(INPUT_POST, "phone_no", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $d_o_b = filter_input(INPUT_POST, "d_o_b", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $bloodtype = filter_input(INPUT_POST, "bloodtype", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_SPECIAL_CHARS);
                                        if (empty($fullname)) {
                                            echo"Please enter your Full Name";
                                        }
                                        elseif (empty($prefername)) {
                                            echo "Prefer Name cannot be blank";
                                        }
                                        elseif (empty($phone_no)) {
                                            echo "Please kindly enter your Phone number";
                                        }
                                        elseif (empty($d_o_b)) {
                                            echo "Date of birth field cannot not be blank";
                                        }
                                        elseif (empty($bloodtype)) {
                                            echo "Please enter your blood group";
                                        }
                                        elseif (empty($gender)) {
                                            echo "Please kindly enter your gender ";
                                        }
                                        else {
                                           $sql = "INSERT INTO patient_db(Full_Name, Prefer_Name, Phone_No, DOB,
                                                               Blood_Type, Gender )
                                                               VALUES ('$fullname','$prefername','$phone_no','$d_o_b','$bloodtype','$gender')";
                                           
                                            mysqli_query($db_link, $sql);
                                            echo "Your details has sucessfully been added to our database";
                                        }
                                    }
                                    ?>
                                </span>
                            

                        </form>
                        </div>
                  </div>

                </div>   
                
       </div>
       <script type="text/javascript" lang="javascript" src="../script//patient.js"></script>
       <script>
                let colorArrays =["cycan","blue","green","red","black"]
                function disPlaylight() {
                    let randColors= colorArrays[Math.floor(Math.random()*colorArray.length)]
                    document.getElementById("header_computerize").style.color = randColors
                    document.getElementById("header_computerize_1").style.color = randColors
                    document.getElementById("header_computerize_2").style.color = randColors
                    document.getElementById("header_computerize_3").style.color = randColors
                    document.getElementById("header_computerize_4").style.color = randColors
                    document.getElementById("header_computerize_5").style.color = randColors
                    document.getElementById("header_computerize_6").style.color = randColors
                     }
                  setInterval(disPlaylight, 300)
       </script>

    <style>
   .btn_gen{   
    width: 100%;
    padding: 0.7rem;
    background-color:rgba(0, 0, 0, 0.788);
    border-radius: 2rem;
    font-size: 16px;
    border: none;
    margin: 5px;
    cursor: pointer;   
}
.btn_gen:hover{
  background-color: blueviolet;
  color: black;
  font-size: 20px;
}
    </style>
</body>
</html>
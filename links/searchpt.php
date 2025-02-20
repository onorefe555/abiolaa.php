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
                   <button ><a href="./addpatient.php" >Add Patient</a></button>
                   <button  class="current"><a href="./searchpt.php">Search patiient</a></button>
                   <button ><a href="./login.php">Logout</a></button>
    
                  <img src="../img/doctor.png" alt="doctor">
                  <p>Make An Appointment</p>
             </div>
    
                      <!-- aside section -->
             
                <div class="doctor-profile" >

                       <h3 class="header_personal_health">Personal Health Record</h3>
                        <!-- <p>Kindly input all the patient information here</p> -->
                        <div>
                            <h2>Search for patient detail</h2>
                                 <form action="searchpt.php" method="post">

                                 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter Patient fullname" name="search" title="Type in a name">
                                <input type="submit" value="SEARCH" name="view" class="pt_btn">
                                 </form>

                         </div>

                         <div>
                            <span class="patient_details">
                            <?php 
                             include("patient_reg.php");
                             
                               if(isset($_POST["view"])) {
                                $search = filter_input(INPUT_POST, "search", FILTER_SANITIZE_SPECIAL_CHARS);
                                  if (empty($search)) {
                                    echo "Pleas enter FullName to get patient information ";
                                  }
                                  else {
                                    $sql ="SELECT * FROM `patient_db` WHERE Full_Name ='$search'";
                                    $result = mysqli_query($db_link, $sql );
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        echo "<b>ID :</b>      ". $row["id"]."<br>" ;
                                        echo "<b>FULL NAME :</b>      ".$row["Full_Name"]."<br>" ;
                                        echo "<b>PREFER NAME :</b>      ".$row["Prefer_Name"]."<br>" ;
                                        echo "<b>PHONE NUMBER :</b>      ".$row["Phone_No"]."<br>" ;
                                        echo "<b>D.O.B :</b>      ".$row["DOB"]."<br>" ;
                                        echo "<b>BLOOD TYPE :</b>      ".$row["Blood_Type"]."<br>" ;
                                        echo "<b>GENDER :</b>      ".$row["Gender"]."<br>" ;
                                        echo "<b>DATE AND TIME :</b>      ".$row["Registration_Date"]."<br>" ;

                                    }
                                    else {
                                      echo "This name cannot not be found on our database ";
                                    }
                                  }
                               }
                            ?>                                
                            </span>
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
  #myInput {
  background-position: 10px 12px;
  width: 100%;
  font-size: 20px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  border-radius: 1rem;
}



#myUL li a:hover:not(.header) {
  background-color: #eee;
}
.doctor-profile{
    width: 100%;
}
.pt_btn{
  width: 30%;
  padding: 1rem;
  background-color:rgba(0, 0, 0, 0.788);
  border-radius: 2rem;
  font-size: 18px;
  border: none;
  margin: 5px;
  cursor: pointer;
}
.pt_btn:hover{
  background-color: blueviolet;
  color: black;
  font-size: 20px;
}
.patient_details{
  font-size: 25px;
  line-height: 35px;
  letter-spacing: 2px;
  font-style: italic;
  padding: 2rem;
}

       </style>
</body>
</html>
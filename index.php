<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design and implementation of computerise patient management system</title>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="shortcut icon" href="./img/logo-7038737_1280.png" type="image/png">
    <link rel="stylesheet" href="./style/adddoc.css">
</head>
<body>
  <?php
   
  ?>
   <header>
    <script type="text/javascript" lang="javascript" src="./script/script.js"></script>
    <div class="header_container">
          <div id="logo"><img src="img/logo-7038737_1280.png" alt="Logo"></div>

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
                    <img src="img/doctor-8447863_1280.png" alt="Doctor">
                 </div>
           </div>
    </div>
   </header> 

   <div class="dashbord_container">
         <div class="dashbord">
               <button class="current" ><a id="dash"  href="./dash.php">Dashboard</a></button> 
               <button ><a href="./links/alldoctor.html">All Doctor</a></button>
               <button ><a href="./links/addpatient.php">Add Patient</a></button>
               <button ><a href="./links/searchpt.php">Search patiient </a></button>
               <button ><a href="./links/login.php">Logout</a></button>

              <img src="./img/doctor.png" alt="doctor">
              <p>Make An Appointment</p>
         </div>

                  <!-- aside section -->
         <div class="app_content">
              <h3  id="sliders" class="app_content_header" >Good Morning Doctor Abiola Yusuf</h3>
              <P>Yusuf Patient Management System | Admin dashboard</P>
              <div class="app_earning_activity">
                       <div class="app_earning-content">
                                <div>
                                  <p>Earning</p>
                                  <h3>7699</h3>
                                </div>

                                <div id="patient">
                                  <p>Patient</p>
                                  <h3>400</h3>
                                </div>

                                <div>
                                  <p>Appointment</p>
                                  <h3>1360</h3>
                                </div>

                                <div>
                                  <p>Total Ravenue</p>
                                  <h3>$6500</h3>
                                </div>
                       </div>

                       <div class="patient_wepapp_histogram">

                            <div class="web-app-histogram">
                              <h3>ACTIVITY</h3>
                              <img src="./img/histogram.png" alt="">
                            </div>

                             <div class="patient_people">
                                  <img src="./img/girl-3023831_1280.jpg" alt="name">
                                  <h4>Adelita</h4>

                                  <img src="./img/rashford.jpg" alt="name">
                                  <h4>Rasford</h4>

                                  <img src="./img/lady1.jpg" alt="name">
                                  <h4>Medora</h4>

                                  <img src="./img/lady2.jpg" alt="name">
                                  <h4>Leilani</h4>
                             </div>
                       </div>

                       <div class="patient_diseases_piechart">
                              
                              <div class="piechart_stroke">
                                      <h2 id="diseases">Top Dieseases</h2>
                                      <img src="./img/piechart.png" alt="">
                                    <div class="piechart_figure">
                                          <div>
                                            <p>Stroke</p>
                                            <h3>8952</h3>
                                          </div>
      
                                          <div>
                                            <p>Diabetes</p>
                                            <h3>7458</h3>
                                          </div>
      
                                          <div>
                                            <p>Cirrhosis</p>
                                            <h3>3254</h3>
                                          </div>
      
                                          <div>
                                            <p>Tuberculosis</p>
                                            <h3>3254</h3>
                                          </div>
                                    </div>
                              </div>
                              
                              <div class="histogram">
                                <h2 id="paient">Total Patient per Day</h2>
                                     <img src="./img/download.png" alt="">
                              </div>
                       </div>
                       
              </div>
         </div>
   </div>
</body>
</html>

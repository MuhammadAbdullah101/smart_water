  <?php require_once 'helper/header.php';?> 
  <body class="loader-active">
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="">
            </div>
        </div>
    </div>
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <div class="logo">
        <a href="Home.php" class="simple-text logo-normal">
     <img src="assets/img/logo3.png">
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="Home.php">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="map.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="table_view.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table view</p>
            </a>
          </li>
           <li class="active ">
            <a href="Faq.php">
              <i class="now-ui-icons education_atom"></i>
              <p>FAQ</p>
            </a>
          </li>
             <li>
            <a href="contact_us.php">
              <i class="now-ui-icons business_bank"></i>
              <p>Contact Us</p>
            </a>
          </li>
            <?php 
             if(isset($_SESSION['is_logged_in']) == TRUE):
                 ?>  
            <li style="margin-top:400px;">
            <a href="source_files/logout.php">
              <i class="now-ui-icons arrows-1_minimal-left"></i>
              <p> Logout</p>

            </a></li>
              <?php endif; ?>  
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#"><h3>Water Quality Status</h3></a>
          </div>
            <!-- Select Box -->
  		  <div class="select-style theme-rounded" style="width:250px;">
        <select name='options' id="department" onchange="javascript:handleSelect(this)">
          <optgroup>
            <option value="Home">CS Department</option>
            <option value="index1">IT Department</option>
          </optgroup>
        </select>
      </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <div class="wrapperr" style="margin:0; padding: 0; width:100%;" >
         <video autoplay loop muted class="wrapper__video">
            <source src="vid1.mp4" type="video/mp4">
         </video>
        </div>
    </div>
       <h3 style="padding-left:20px;padding-top:15px;color: #01426C;text-align:center;">Frequently Asked Questions </h3>
    <div class="container py-3">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="faslse" aria-controls="collapseOne">
                              Q: How does this work?
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            Answer:We have some sensors placed into Water resource to check  different water quality pararmeters like PH sensor , Turbidity Sensor,TDS Sensor ,Temperature Sensor .These sensors getting data in real-time and trasffering data to a Microcontroller which sends water quality data to database via Wifi.<br>
                            <img src="assets/img/system.png" class="img-fluid ">
                    </div>
                </div>
              </div>

                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Q: What is  PH of drinking  Water?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                              <b>Answer:</b> Freshwater pH varies across the world depending on weather patterns, human activity, and natural processes.The pH of most drinking-water lies within the range 6.5–8.5.
                              <br>
                              <br>
                            <img src="assets/img/ph.jfif"  class="img-fluid">
                 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Q. What is meant Turbidity?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                             <b>Answer:</b> Turbidity is the measure of relative clarity of a liquid. It is an optical characteristic of water and is a measurement of the amount of light that is scattered by material in the water when a light is shined through the water sample. The higher the intensity of scattered light, the higher the turbidity. Material that causes water to be turbid include clay, silt, very tiny inorganic and organic matter, algae, dissolved colored organic compounds, and plankton and other microscopic organisms.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Q. What is TDS ?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                             <b>Answer:</b> TDS stands for <b>Total Dissolved Dolids</b>, and represents the total concentration of dissolved substances in water. TDS is made up of inorganic salts, as well as a small amount of organic matter. Common inorganic salts that can be found in water include calcium, magnesium, potassium and sodium, which are all cations, and carbonates, nitrates, bicarbonates, chlorides and sulfates, which are all anions. Cations are positively charged ions and anions are negatively charged ions.
                            <br>
                              <img src="assets/img/tds.jfif"  class="img-fluid">
                        </div>
                    </div>
                </div>
                   <div class="card">
                    <div class="card-header p-2" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Q.Why is it important to monitor TDS,PH,Turbidity and other water quality parameters?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> It is important to monitor the TDS level and the pH of drinking water for several reasons. When a water source has a high level of TDS or a low pH, it is likely that there are other harmful contaminants in the water. Both TDS and pH are also easy to measure and if something is happening to a water, such as pollution, chances are both TDS and pH levels will change so keeping track of those changes can act as an early warning signal that something is happening to the water. For these reasons, it is important to monitor the TDS and pH levels, so that if they change, action can be taken immediately.
                        </div>
                    </div>
                </div>
                   <div class="card">
                    <div class="card-header p-2" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Q. What is the next question?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                        </div>
                    </div>
                </div>
                   <div class="card">
                    <div class="card-header p-2" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              Q. What is the next question?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container-->

<?php require_once 'helper/footer.php';?>

</body>

</html>
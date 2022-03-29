<?php require_once 'helper/header.php';?> 
<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <div class="logo">
       
        <a href="Home.php" class="simple-text logo-normal">
     <img src="assets/img/logo3.png">
       
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="Home.php">
              <i class="now-ui-icons design_app"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="active ">
            <a href="map.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="table_view.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table View</p>
            </a>
          </li>
           <li>
            <a href="Faq.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Faq</p>
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
            <a class="navbar-brand" href="#pablo">Locations</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-md">
         <center>  <h1 style="color: white;"><b>System Locations</b></h1></center> 
      </div>
      <div class="content" >
        <div class="row">
          <div class="col-md-12" >
            <div class="card ">
              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body">
                <div id="map" class="map" ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="assets/js/core/jquery.min.js"></script>
    <?php require_once 'helper/footer.php';?> 
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATEinM8Wt2eQBb4DjgwsJuXNKrKXBml3I&callback=initMap">
    </script>
    <script src="assets/js/mapContent.js"></script>
 
 
</body>

</html>
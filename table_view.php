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
          <li class="active ">
            <a href="table_view.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table View</p>
            </a>
          </li>
           <li>
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
            <li style="margin-top: 400px;">
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
            <a class="navbar-brand" href="#pablo"><h3>Water Quality Status</h3></a>
          </div>
            
  		      <div class="dropdown">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                   <span class="spinner-grow spinner-grow-sm"></span>
                  Departments
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="Home.php">Cs Department</a>
                  <a class="dropdown-item" href="index1.php">IT Department</a>
                </div>
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
 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> PH Value Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive" >
                  <table id='phTable' class='display dataTable'>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>PH Value</th>
                          <th>Water Temperature</th>
                          <th>Reading Time</th>
                        </tr>
                      </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Turbidity & TDS  Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive" >
                 <table id='trbtdsTable' class='display dataTable' >
                    <thead >
                      <th> ID</th>
                      <th> Turbidity Value</th>
                       <th> Total Dissolve solids(TDS)</th>
                      <th> Reading Time</th>
                    </thead>
                  </table> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php require_once 'helper/footer.php';?> 
 <script src="assets/js/tableContent.js"></script>

</body>

</html>
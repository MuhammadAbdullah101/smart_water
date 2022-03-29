<?php
  
require_once "source_files/connection.php";

$sql = "SELECT * FROM departments where department_id=2 order by reading_time";

$result = $conn->query($sql);

while ($data = $result->fetch_assoc()){
    $sensor_data[] = $data;
}

$readings_time = array_column($sensor_data, 'reading_time');

$i = 0;
foreach ($readings_time as $reading){
 
    $readings_time[$i] = date("Y-m-d H:i:s", strtotime("$reading - 1 hours"));
   
    $i += 1;
}

$ph = json_encode(array_reverse(array_column($sensor_data, 'phvalue')), JSON_NUMERIC_CHECK);
$tds = json_encode(array_reverse(array_column($sensor_data, 'tdsvalue')), JSON_NUMERIC_CHECK);
$turbidity = json_encode(array_reverse(array_column($sensor_data, 'turbidityvalue')), JSON_NUMERIC_CHECK);
$reading_time = json_encode(array_reverse($readings_time), JSON_NUMERIC_CHECK);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Smart Water Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/select-style.css">
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="Home.php" class="simple-text logo-mini">
          SW
        </a>
        <a href="Home.php" class="simple-text logo-normal">
       Smart Water Inc.
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="highcharts-more.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="map.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
          <li>
            <a href="tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
           <li>
            <a href="#about">
              <i class="now-ui-icons education_atom"></i>
              <p>About us</p>
            </a>
          </li>
             <li>
            <a href="contact_us.php">
              <i class="now-ui-icons business_bank"></i>
              <p>Contact Us</p>
            </a>
          </li>
         
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
            <!-- Select Box -->
  		  <div class="select-style theme-rounded" style="width:250px;">
        <select name='options' id="department" onchange="javascript:handleSelect(this)">
          <optgroup>
            <option value="index1">IT Department</option>
            <option value="Home">Cs Department</option>
          </optgroup>
        </select>
      </div>
            <!-- Select Box End -->
        
      <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>

          </button>  -->
         
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
      
      <div class="wrapperr" style="margin:0; padding: 0;" >

   <video autoplay loop muted class="wrapper__video">
      <source src="vid1.mp4" type="video/mp4">
   </video>
  
</div>

      </div>

      <div class="content">
        <div class="row">


            <div class="col-lg-12 col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">PH Value</h5>
              </div>
              <div class="card-body">
                <div id="chart-ph" class="container"></div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Turbidity </h5>
              </div>
              <div class="card-body">
                  <div  id="chart-turbidity" class="container" ></div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Dissolved Solids</h5>
              </div>
              <div class="card-body">
             <div id="chart-tds" class="container" ></div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          
        </div>
       </div>


         <?php 
            $Query = $conn->query("SELECT * FROM departments where department_id=2 order by id limit 5");
        
            $CountRow = mysqli_num_rows($Query);
        
            if($CountRow > 0):
          
            ?>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">All Sensor List</h5>
                <h4 class="card-title"> Water Status</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class=" text-primary">
                      <th> ID</th>
                      <th> pH</th>
                      <th>Total Dissolved Solids (mg/liter)</th>
                      <th>Turbidity (NTU)</th>
                      <th class="text-right"> Reading Time</th>
                    </thead>

                     <?php
                        while($row = mysqli_fetch_assoc($Query)):
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["phvalue"]; ?></td>
                        <td><?php echo $row["tdsvalue"]; ?></td>
                        <td><?php echo $row["turbidityvalue"]; ?></td>
                        <td class="text-right"><?php echo $row["reading_time"]; ?></td>
                      </tr>
                        <?php
                        endwhile;
                         ?>    
                    </tbody>
                  </table>

                      
                 <?php
                   else:
                    echo "No Result Found";
                   endif;
                     $result->free();
                     $conn->close();
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav style="margin-left: 250px;">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATEinM8Wt2eQBb4DjgwsJuXNKrKXBml3I"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
function handleSelect(elm)
{
window.location = elm.value+".php";
}
</script>
<script >
var ph = <?php echo $ph; ?>;
var tds = <?php echo $tds; ?>;
var turbidity = <?php echo $turbidity; ?>;
var reading_time = <?php echo $reading_time; ?>;

var chart_ph = new Highcharts.Chart({
  chart:{ renderTo : 'chart-ph' },
  title: { text: 'PH value' },
  series: [{
    showInLegend: false,
    data: ph
  }],
  plotOptions: {
    line: { animation: true,
      dataLabels: { enabled: true }
    },
    series: { color: '#059e8a' }
  },
  xAxis: { 
    type: 'datetime',
    categories: reading_time
  },
  yAxis: {
    title: { text: 'PH' }
   
  },
  credits: { enabled: false }
});

var chart_tds = new Highcharts.Chart({
  chart:{ renderTo:'chart-tds' },
  title: { text: 'Total Dissolved Solids' },
  series: [{
    showInLegend: false,
    data: tds
  }],
  plotOptions: {
    line: { animation: true,
      dataLabels: { enabled: true }
    }
  },
  xAxis: {
    type: 'datetime',
    //dateTimeLabelFormats: { second: '%H:%M:%S' },
    categories: reading_time
  },
  yAxis: {
    title: { text: 'TDS (mg/liter)' }
  },
  credits: { enabled: false }
});


var chart_turbidity = new Highcharts.Chart({
  chart:{ renderTo:'chart-turbidity' },
  title: { text: 'Turbidity' },
  series: [{
    showInLegend: false,
    data: turbidity
  }],
  plotOptions: {
    line: { animation: true,
      dataLabels: { enabled: true }
    },
    series: { color: '#18009c' }
  },
  xAxis: {
    type: 'datetime',
    categories: reading_time
  },
  yAxis: {
    title: { text: 'Turbidity (NTU)' }
  },
  credits: { enabled: false }
});

</script>

 <script type="text/javascript">
   notification = {
  misc: {
    navbar_menu_visible: 0
  },

  showNotification: function(from, align) {
    color = 'danger';

    $.notify({
      icon: "now-ui-icons ui-1_bell-53",
      message: "Ph > <b>8.5</b> Alert sms sent to Authority"

    }, {
      type: color,
      timer: 8000,
      placement: {
        from: from,
        align: align
      }
    });
  }


};

 </script>
</body>

</html>
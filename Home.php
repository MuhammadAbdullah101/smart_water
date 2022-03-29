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
          <li class="active ">
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
            <a class="navbar-brand" href="#pablo"><h3>Water Quality Status</h3></a>
          </div>
        
  		  <div class="dropdown">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
               <span class="spinner-grow spinner-grow-sm"></span>
              Departments
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="Home.php">Cs Department</a>
              <a class="dropdown-item" href="IT.php">IT Department</a>
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
            <div class="col-lg-9 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">PH Chart
                 <a href="#" data-toggle="tooltip" data-placement="right" title="Freshwater pH varies across the world depending on weather patterns, human activity, and natural processes.The pH of most drinking-water lies within the range 6.5–8.5"> &#128712;</a></h5>

              </div>
              <div class="card-body">
              <div id="phcontainer"></div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
              	 <h5 class="card-category">Water Temperature</h5>
              </div>
              <div class="card-body">
              	<canvas style="padding-left: 70px;" data-type="linear-gauge" data-width="280"data-height="410"data-border-radius="30"data-borders="5" data-bar-stroke-width="0" data-tick-side="left" data-number-side="left"data-needle-side="left"data-units="°C"data-animation-rule="bounce"data-color-plate="#ffffff">  
                </canvas>
             
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
      </div>
        <div class="row">
          <div class="col-lg-9 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Turbidity Chart
                <a href="#" data-toggle="tooltip" data-placement="top" title="Turbidity is the measure of relative clarity of a liquid. It is a measurement of the amount of light that is scattered by material in the water when a light is shined through the water sample. The higher the intensity of scattered light, the higher the turbidity. Material that causes water to be turbid include clay, silt, very tiny inorganic and organic matter, algae, dissolved colored organic compounds, and plankton and other microscopic organisms."> &#128712;</a></h5>
              </div>
              <div class="card-body">
              <div id="trbcontainer" style="height: 400px; min-width: 310px"></div>  
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Water Color </h5>
              </div>
              <div class="card-body" style="max-width:100%;height:auto;">
			<div class="cylinder" style=" max-width:100%;height: 400px;">
				<div class="water" id="watercolor"></div>
			</div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
      </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">TDS Chart
                  <a href="#" data-toggle="tooltip" data-placement="right" title="Total Dissolved Solids represents the total concentration of dissolved substances in water. TDS is made up of inorganic salts, as well as a small amount of organic matter"> &#128712;</a></h5>
              </div>
             
              <div class="card-body">
              <div id="tdscontainer" style="height: 400px; min-width: 310px"></div>
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


<?php require_once 'helper/footer.php';?>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
 <script type="text/javascript">
  
   var chart_ph; // global
   var isphFirst=true;
            function request_ph_Data() {
             $.ajax({
            url: 'getPhdata.php',
            data: {
                data_to_server:isphFirst, 
            },
                success: function(point) {
                  // console.log(point);

                  isphFirst=false;
                   var series = chart_ph.series[0],
                      shift = series.data.length = 0; // shift if the series is longer than 20
       
                  
          			point.forEach(function(element, index){
          				var phvalues = eval(element);
          				chart_ph.series[0].addPoint(phvalues, true, shift);
          				//console.log("element on index :"+ element);
          			});
            
                   setTimeout(request_ph_Data, 4000);   
                },
                cache: false
             });

          }

	$(document).ready(function() {

  
  		Highcharts.setOptions({
       		 global : {
            useUTC : false
        	}
    	});
		

    chart_ph = new Highcharts.StockChart({
				chart: {
					renderTo: 'phcontainer',
					defaultSeriesType: 'line',
					events: {
						load: request_ph_Data
					}
				},

    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        },{
            
            type: 'all',
            text: 'All'
        }],
        inputEnabled: true,
        selected: 2
    },

    title: {
        text: 'Real Time Ph Value'
    },

    exporting: {
        enabled: true
    },

	xAxis: {
			 type: 'datetime',				
			},
	yAxis: {
		
			title: {
					text: 'PH value',
					margin: 30
					}
				},

   series: [{

					name: 'Ph',
					data:  []
					       

				}]
 
});

});
 </script>
  <script type="text/javascript">
   var charttrb; 
   var istrbFirst=true;
   var trbvalues;
            function request_trb_Data() {
             $.ajax({
            url: 'gettrbData.php',
             data: {
                data_to_server:istrbFirst, // retrieve from $_POST in php
            },
           
                success: function(point) {
                  //console.log(point);
 					istrbFirst=false;
                   var series = charttrb.series[0],
                      shift = series.data.length =0; // shift if the series is longer than 20
                 point.forEach(function(element, index){
          				 trbvalues = eval(element);
          				charttrb.series[0].addPoint(trbvalues, true, shift);
          				//console.log("element on index :"+ element);
          			});
                   setTimeout(request_trb_Data, 5000); 
                   
                  if (trbvalues[1]=='5') {
                  $("#watercolor").css("background-color", "rgb(134, 87, 33)");
  
                   }
                  else if (trbvalues[1]=='4') {
  				        $("#watercolor").css("background-color", "rgb(182, 129, 73)");

                   }
                  else if (trbvalues[1]=='3') {
  				        $("#watercolor").css("background-color", "rgb(255, 211, 135)");

                   }
                  else if (trbvalues[1]=='2') {
  				        $("#watercolor").css("background-color", "rgb(235, 231, 224)");

                   }
                  else
                   {
                   	$("#watercolor").css("background-color", "rgb(0, 160, 160, 0.2)");
                   }

                },
                cache: false
             });

          }

	$(document).ready(function() {
  
  		Highcharts.setOptions({
       		 global : {
            useUTC : true
        	}
    	});

    charttrb = new Highcharts.StockChart({
				chart: {
					renderTo: 'trbcontainer',
					defaultSeriesType: 'line',
					events: {
						load: request_trb_Data
					}
				},

    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        },{
            
            type: 'all',
            text: 'All'
        }],
        inputEnabled: true,
        selected: 2
    },

    title: {
        text: 'Real Time Turbidity Value'
    },

    exporting: {
        enabled: true
    },

	xAxis: {
			 type: 'datetime',	
					
			},
	yAxis: {
	
			title: {
					text: 'Turbidity value',
					margin: 30
					}
				},
   series: [{
					name: 'Turbidity',
					data: [  ]

				}]
});

});
 </script>

 <script type="text/javascript">
   var charttds; 
   var istdsFirst=true;
            function request_tds_Data() {
             $.ajax({
            url: 'gettdsData.php',
            data: {
                data_to_server:istdsFirst, // retrieve from $_POST in php
            },
                success: function(point) {
                 //console.log(point);
                 istdsFirst=false;
                   var series = charttds.series[0],
                      shift = series.data.length =0; // shift if the series is longer than 20
           point.forEach(function(element, index){
          				var tdsvalues = eval(element);
          				charttds.series[0].addPoint(tdsvalues, true, shift);
          				//console.log("element on index :"+ element);
          			});
                   setTimeout(request_tds_Data, 6000);   
                },
                cache: false
             });

          }

	$(document).ready(function() {
  
  		Highcharts.setOptions({
       		 global : {
            useUTC : true
        	}
    	});

    charttds = new Highcharts.StockChart({
				chart: {
					renderTo: 'tdscontainer',
					defaultSeriesType: 'line',
					events: {
						load: request_tds_Data
					}
				},

    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        },{
            
            type: 'all',
            text: 'All'
        }],
        inputEnabled: true,
        selected: 2
    },

    title: {
        text: 'Real Time TDS Value'
    },

    exporting: {
        enabled: true
    },

	xAxis: {
			 type: 'datetime',	
					
			},
	yAxis: {

			title: {
					text: 'TDS value',
					margin: 30
					}
				},
   series: [{
					name: 'TDS',
					data: [ ]

				}]
});

});
 </script>

 <script type="text/javascript">
	 function request_temp_Data() {
             $.ajax({
            url: 'getTempData.php',
                success: function(data) {
                   document.gauges.forEach(function(gauge) {
         		       gauge.value = data;
    				});
                   setTimeout(request_temp_Data, 4000);   
                },
                cache: false
             });
          }
   request_temp_Data();
  </script>
 <script src="assets/js/alerts.js"></script>
</body>

</html>
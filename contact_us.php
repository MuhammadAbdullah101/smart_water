<?php require_once 'helper/header.php';?> 
<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
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
       
          
          <li>
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
             <li class="active">
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
            <?php
            else: 
              ?>
              <li style="margin-top: 400px;">
            <a href="index.php">
              <i class="now-ui-icons arrows-1_minimal-left"></i>
              <p> Login</p>
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
            <a class="navbar-brand" href="contact_us.php">Locations</a>
          </div>     
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-md " >
        <img  class=" img-fluid  "src="assets/img/con2.jpg" style="background-repeat: no-repeat;">
      </div>
      <div class="content" >
        <div class="row">
          <div class="col-md-12" >
            <div class="card ">
              <div class="card-header ">
                Location
              </div>
              <div class="card-body">
           <div id="map" class="map">
              </div>
            </div>
          </div>
        </div>
      </div>
                  <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form  method="post" enctype="multipart/form-data" action="sendMail.php"  class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                       <label for="fname">First Name</label>
                                        <input type="text"  class="form-control"id="fname" name="fname" pattern="[a-zA-Z]+" placeholder="Your First name.." required>
                                        
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                       <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" pattern="[a-zA-Z]+" placeholder="Your Last name.." required>
                                         
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div> 
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                       <label for="email">Email</label>
                                        <input type="email" class="form-control" placeholder="Email Address" id="email" name="email"required>
                                         <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                       <label for="mobile">Mobile No</label>
                                        <input type="text" class="form-control" placeholder="Mobile No." id="mobile" name="mobile" required>
                                         <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="subject-input">
                                       <label for="subject">Subject</label>
                                        <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject" >
                                         
                                    </div>
                                </div>
                            </div>

                            <div class="message-input">
                               <label for="message">Message</label>
                                 <textarea cols="30" rows="10" id="message" name="message" placeholder="Write something.." ></textarea>
                            </div>
                                <button type="submit" class="btn btn-info btn-block"  onclick="notify();" name="sendmail">Submit Message</button>
                        </form>
                    </div>
                </div>
      </div>
       <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                Muhammad Abdullah
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>W
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script src="assets/js/preloader.js"></script>

  <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

  <!-- <script type="text/javascript">
    
    function notify() {
      $.confirm({
         type:'dark',
          theme: 'Modern',
          icon: 'fa fa-spinner fa-spin',
          title: 'THANK YOU',
          content: 'Thank You For Contacting Us! <br> Our Representative will  Contact You In a Moment',
          animation: 'RotateXR',
          closeAnimation: 'RotateXR',
          animationBounce: 1.5, 
          autoClose: 'Close|5000',
          buttons: {
              Close: {
                  text: 'Close',
                  Close: function () {}
                  }
                }
                });

                }
  </script> -->
     <script>
      var marker;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: {lat: 33.747159, lng: 73.137412}
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation:google.maps.Animation.BOUNCE,
          position: {lat: 33.747159, lng: 73.137412}
        });
        marker.addListener('click', toggleBounce);
       
      }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATEinM8Wt2eQBb4DjgwsJuXNKrKXBml3I&callback=initMap">
    </script>
 
 
</body>

</html>
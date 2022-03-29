
<?php  
   require_once 'source_files/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> Smart Water </title>
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="assets/img/favicon.ico"/>
<!--===============================================================================================-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assets/css/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="assets/css/background_effect.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style type="text/css">
	
	.logincard{

		border:1px solid #eee;
		box-shadow: 0px 10px 10px #ccc;
        margin:-2px auto;
        width:45%;
        height:710px;
        color:white;
        font:inherit;
        background-color: #247EC3;
        text-align: center;

	}


</style>

</head>
    <body>
   <div class="limiter">
    <div class="container-login100">
      <div class="mydiv">
        <a href="index.php">
          <img src="assets/img/logo3.png">
        </a>
     
        
      </div>

      <div class="logincard">
      	      <h1>WELCOME BACK!</h1>
      <div class="wrap-login100">

        <div class="login100-pic js-tilt" data-tilt>
          <img src="assets/img/img-01.png" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="source_files/login.php" method="post" autocomplete="off" enctype="multipart/form-data" >
          <span class="login100-form-title">
            Member Login
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="email" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn"><i class="fa fa-sign-in">Login</i></button></div>
      <?php
      if(isset($_GET['error'])==true){
      echo'<font color="#FF0000"><p align="center">Invalid username  Or Password</p></font>';
       }
      ?>
          <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#myModal" class="trigger-btn" data-toggle="modal">
              Username / Password?
            </a>
          </div>
        </form>
      </div>
      </div>
    </div>
  </div>

  <div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">whatshot</i>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body text-center">
        <h4>Don't Worry !</h4> 
        <p>We Will help you get your password </p>
        <form action="source_files/forget.php" method="post" autocomplete="off" enctype="multipart/form-data">
    
          <div class="wrap-input100 validate-input" data-validate = "Mobile number is required">
            <input class="input100" type="text" name="mobile"  placeholder="Enter Your Mobile Number">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
          </div>
     <button class="btn btn-success"><span>Submit</span> <i class="material-icons">&#xE5C8;</i></button>
        </form>
      </div>
    </div>
  </div>
</div>
  
<!--===============================================================================================-->  
  <script src="assets/js/core/jquery.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/core/popper.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/core/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="assets/js/main.js"></script>
    </body>
</html>
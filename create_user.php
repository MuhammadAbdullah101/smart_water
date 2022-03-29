
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
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="assets/css/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="assets/css/signup.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!--===============================================================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    <body>
      <div class="mydiv">
        <a href="index.php">
          <img src="assets/img/logo3.png">
        </a>
      </div>
     <form action="source_files/Signup.php" method="post" autocomplete="off" enctype="multipart/form-data" > 
  <div class="container register">
                <div class="row">
               
                    <div class="col-md-3 register-left">
                            <img src="assets/img/img-01.png" alt="IMG">
                 
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from Website Access!</p>
                           <p>Already Have an account?<strong> <a style="color:black; font-size: 12; " href="index.php">Log In</a></strong></p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create New Account</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value=""  name="firstname" autofocus="1" />
                                        </div>
                                       <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" name="email"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password"/>
                                           
                                        </div>
                                        <?php
                                         if(isset($_GET['error'])==1){
                                            echo'<font color="#FF0000"><p align="center">Email already Registered</p></font>';
                                              }
                                         elseif(isset($_GET['error'])==2){
                                            echo'<font color="#FF0000"><p align="center">Password and confirm Password not match</p></font>';
                                                                    }
                                            else{}
                                        
                                           ?>
                                      
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="lastname" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" class="form-control" placeholder="Your Mobile *" value="" name="mobilenumber" />
                                        </div>
                                          <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value=""name="confirmpassword" />
                                        </div>
                                        <button type="submit" class="btnRegister" >Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>

            </div>
          </form>
               
<!--===============================================================================================-->  
  <script src="assets/js/core/jquery.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/core/popper.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="assets/js/select2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--===========================================================================================-->
</body>
    </body>

 

</html>
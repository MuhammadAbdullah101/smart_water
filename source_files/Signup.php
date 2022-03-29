<?php 

    require_once 'connection.php';
    $firstname = trim(strip_tags($_POST['firstname']));
    $lastname = trim(strip_tags($_POST['lastname']));
    $password = trim(strip_tags($_POST['password']));
    $confirm = trim(strip_tags($_POST['confirmpassword']));
    $mobile = trim(strip_tags($_POST['mobilenumber']));
    $email = trim(strip_tags($_POST['email']));
   
    if($password == $confirm):
        $crossCheck =$conn->query("SELECT * FROM user WHERE email='$email' ORDER BY id DESC Limit 1");
        $countRow = mysqli_num_rows($crossCheck);
        if($countRow === 0):

            $query = "INSERT INTO `user` (`id`,`firstname`,`lastname`,`email`,`mobile`,`password`,`registerdate`) 
            VALUES ('NULL','$firstname','$lastname','$email','$mobile','$password','$date')";
            if($conn->query($query) == TRUE):
             header('Location: ../index.php');
            else:        
                echo "<b>Error&nbsp;&nbsp;</b>: " . $query . "<br>" . $conn->error;

            endif;
        else:
       
             header('Location: ../create_user.php?error=1');

        endif;
    else:
      
         header('Location: ../create_user.php?error=2');
    endif;
    
    
    
?> 


<?php 
    
    require_once 'connection.php';
    session_start();
    $email = trim(strip_tags($_POST['email']));
    $password = trim(strip_tags($_POST['password']));
   
    $crossCheck =$conn->query("SELECT * FROM user WHERE email='$email' AND password='$password'");
    $countRow = mysqli_num_rows($crossCheck);
    if($countRow > 0):
        while($row = mysqli_fetch_assoc($crossCheck)):
             $_SESSION['is_logged_in'] = TRUE;
            $_SESSION['user_id'] = $row['id'];
        endwhile;
        header('Location: ../Home.php');
    else:
    session_destroy();
     header('Location: ../index.php?error=1');

    endif;
?> 


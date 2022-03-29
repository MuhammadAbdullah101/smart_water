<?php 
    require('C:/Users/Abdul/vendor/autoload.php') ;
    require_once 'connection.php';
    $mobile = trim(strip_tags($_POST['mobile']));
    $Query =$conn->query("SELECT * FROM user WHERE mobile='$mobile'");
    $countRow = mysqli_num_rows($Query);
    $pass="";
    $email="";
    if($countRow > 0):
        while($row = mysqli_fetch_assoc($Query)):
           
             $pass =$row['password'];
             $email=$row['email'];
        endwhile;

        //Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'AC322a874684978d7d70c9ea1ed82931fc';
        $auth_token = 'c54caf19154a5be5e26ec2b54d6cac55';
        $twilio_number = "+12052936017";
        $client = new Twilio\Rest\Client($account_sid, $auth_token);
        $client->messages->create('+923134773487',
                            array(
                                'from' => $twilio_number,
                                'body' => 'Email is :'.$email.' Password is :'.$pass
                            )
                        );
                header('Location: ../index.php');
      else:
        echo "Record not found";

    endif;


?> 


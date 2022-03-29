 <?php
  session_start();    
 date_default_timezone_set("Asia/Karachi");
 $date = date('m/d/Y h:i:s a', time());

$servername = "localhost";
$dbname = "esp_data";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
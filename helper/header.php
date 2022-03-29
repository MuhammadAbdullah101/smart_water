<?php 
    require_once 'source_files/connection.php';
    if(isset($_SESSION['is_logged_in']) == FALSE):
      echo '<script type="text/javascript">';
      echo 'alert("Oops you need a login to access the Website");';
      echo 'window.location.href= "index.php";';
      echo '</script>';
   endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
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
  <link href="assets/css/smartwater.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/select-style.css">
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link href="assets/css/watertank.css" rel="stylesheet" />
  <link href="assets/css/preloader.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <!-- <script src="https://code.highcharts.com/highcharts-more.js"></script> -->
  <script src="https://code.highcharts.com/stock/highstock.js"></script>
  <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script src="//cdn.rawgit.com/Mikhus/canvas-gauges/gh-pages/download/2.1.7/linear/gauge.min.js"></script>
</head>


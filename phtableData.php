<?php
## Database configuration
require_once 'source_files/connection.php';
## Read value

$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Search 
$searchQuery = " ";
if($searchValue != ''){
   $searchQuery = " and (id like '%".$searchValue."%' or 
        phvalue like '%".$searchValue."%'  or tempvalue like '%".$searchValue."%' ) ";
}

## Total number of records without filtering
$sel = mysqli_query($conn,"select count(*) as allcount from departments");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of record with filtering
$sel = mysqli_query($conn,"select count(*) as allcount from departments WHERE department_id=1  ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$phQuery = "select id,phvalue,tempvalue,reading_time from departments WHERE department_id=1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$phRecords = mysqli_query($conn, $phQuery);
$data = array();

while ($row = mysqli_fetch_assoc($phRecords)) {
   $data[] = array( 
      "id"=>$row['id'],
      "phvalue"=>$row['phvalue'],
      "tempvalue"=>$row['tempvalue'],
      "reading_time"=>$row['reading_time']
    
   );
}

## Response
$response = array(

  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);

echo json_encode($response);
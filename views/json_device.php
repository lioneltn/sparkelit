<?php
chdir(__DIR__);
require_once "../core/VisitC.php";


//setting header to json
header('Content-Type: application/json');







//query to get data from the table
$visitC = new VisitC();

//execute query
$result = $visitC->get_visits_by_device();

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}




//now print the data
print json_encode($data);
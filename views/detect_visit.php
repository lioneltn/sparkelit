<?php 

chdir(__DIR__);
include "../entities/Visit.php";
include "../core/VisitC.php";

$visit = new Visit(0,0,0,0,0,0,0);
$visit->detect_visit();
$visitC= new VisitC();
$visitC->insert_new_visit($visit);

 ?>
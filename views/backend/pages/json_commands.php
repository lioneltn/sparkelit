<?php

include "../../../core/statsC.php";


//setting header to json

header('Content-Type: application/json');







//query to get data from the table
$statsC = new statsC();
$current_date = date("Y-m-d");
$current_week = date("Y-m-d", strtotime($current_date." - 7 days + 0 months + 0 year"));
$last_week = date("Y-m-d", strtotime($current_date." - 14 days + 0 months + 0 year"));
//execute query
$result1 = $statsC->get_command_by_week($last_week,$current_week);
$result2 = $statsC->get_command_by_week($current_week,$current_date);

$this_month = date ("m");
$last_month = date ("m", strtotime($current_date." - 1 month"));

$result3 = $statsC->get_visits_by_month($last_month);
$result4 = $statsC->get_visits_by_month($this_month);

$this_day = date ("d");
$last_seven_days = date ("d", strtotime($current_date." - 7 days"));
$last_two_weeks = date ("d", strtotime($current_date." - 14 days"));


$result5 = $statsC->get_visits_by_week($last_seven_days,$this_day);
$result6 = $statsC->get_visits_by_week($last_two_weeks,$last_seven_days);




//loop through the returned data



$increase = $result2 - $result1; 
$increase_percentage = ($increase/$result1)*100;

$increase2 = $result4 - $result3; 
if ($result3>0){
$increase_percentage2 = ($increase2/$result3)*100;
}
else{
$increase_percentage2 = $result4 * 100;
}


$increase3 = $result4 - $result3; 

if ($result3>0 && $result5>0){
$increase_percentage3 = ($increase3/$result5)*100;
}
else{
$increase_percentage3 = $result6 * 100;
}


$posts = $statsC->get_posts_number();

$data = array ($increase_percentage,$result2,$increase_percentage2,$result4,$increase_percentage3,$result6,$posts);

//now print the data
print json_encode($data);


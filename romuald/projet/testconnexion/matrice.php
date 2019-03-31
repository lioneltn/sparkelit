<?php
$details=array(
	array("Blue",8,2,10,15,"chemin"),
	array("Red",11,12,20,14,"chemin"),
	array("vert",16,14,50,11,"chemin")
);
for ($i = 0; $i<3; $i++)
{
	for ( $j = 0; $j < 6; $j++ )
	{
		echo $details[$i][$j]."    ";
	}
	echo "<br>";
}
/*for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 6; $col++) {
    echo "<li>".$details[$row][$col]."</li>";
  }
  echo "</ul>";
}*/
?>
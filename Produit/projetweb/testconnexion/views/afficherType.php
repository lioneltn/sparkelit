
<select class="form-control" name="type" id="typeSelect" onchange="typechange()">
<?php
	if(($_COOKIE['type']=="Homme") || (isset($_COOKIE['type'])==false))
	{
?>
		<option value="Homme" selected="selected">Homme</option>
	<?php	
	}
	else
	{
	?>
		<option value="Homme">Homme</option>	
	<?php		
	}
	?>

<?php
	if($_COOKIE['type']=="Femme")
	{
?>
		<option value="Femme" selected="selected">Femme</option>
	<?php	
	}
	else
	{
	?>
		<option value="Femme">Femme</option>	
	<?php		
	}
	?>


<?php
	if($_COOKIE['type']=="Accesoire")
	{
?>
		<option value="Accesoire" selected="selected">Accesoire</option>
	<?php	
	}
	else
	{
	?>
		<option value="Accesoire">Accesoire</option>	
	<?php		
	}
	?>


</select>
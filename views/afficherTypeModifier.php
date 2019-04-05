
<?php
if(isset($_COOKIE["type"])==false)
{
  ?>
<select class="form-control" name="type" id="typeSelect" onchange="typechange()">
 <?php 
   if($liste['type']=="Homme")
   {
 ?>
     <option value="Homme" selected="selected"> Homme
     <option value="Femme"> Femme
     <option value="Accesoire"> Accesoire
     <?php  
   }
  elseif ($liste['type']=="Femme") 
   {
     ?>
     <option value="Homme"> Homme
     <option value="Femme" selected="selected"> Femme
     <option value="Accesoire"> Accesoire
    <?php
   }
   elseif ($liste['type']=="Accesoire")
   {
     ?>
     <option value="Homme"> Homme
     <option value="Femme"> Femme
     <option value="Accesoire" selected="selected"> Accesoire
     <?php
   }
     ?>
</select>
<?php 

//$_COOKIE["type"]=$liste["type"];
}

else
{
 ?>

<select class="form-control" name="type" id="typeSelect" onchange="typechange()">
<?php
	if(($_COOKIE['type']=="Homme"))
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

<?php 
}
 ?>
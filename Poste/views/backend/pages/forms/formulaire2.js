function controle()
{
	var input2=document.getElementById('Titre').value;
	var input3=document.getElementById('Discription').value;

	/*if(input1 == '' || input2 == '' || input3 == '')
	{
		alert('attention champs vide!');
	}*/
 
   if (input2.charAt(0) == " " || input3.charAt(0) == " " )
   {
   	alert('verifier vos champs !!(espace en premier charactere)');
   }

  if (input2.length > 50)
  {
  	alert('titre depasse 50 caractere');
  }
  
  if (input3.length > 400)
  {
  	alert('description depasse 200 caractere');
  }
  


   /*for(var i=0;i<10;i++)
   {
   		if (input1.indexOf(i) != -1)
   		{
   			alert ("nn num");
   		}
   }*/
}
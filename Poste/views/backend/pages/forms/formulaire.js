function controle()
{   
  alert("hello");
	/*var input1=document.getElementById('Id-poste').value;
	var input2=document.getElementById('Titre').value;
	var input3=document.getElementById('Discription').value;*/

	/*if(input1 == '' || input2 == '' || input3 == '')
	{
		alert('attention champs vide!');
	}*/
 
  /* if (input1.charAt(0) == " " || input2.charAt(0) == " " || input3.charAt(0) == " " )
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

function controle2 ()
{
	var input1=document.getElementById('MTitre').value;
	var input2=document.getElementById('MDiscription').value;

	/*if(input1 == '' || input2 == '')
	{
		alert('attention champs vide!');
	}*/
 
   if (input1.charAt(0) == " " || input2.charAt(0) == " ")
   {
   	alert('verifier vos champs !!(espace en premier charactere)');
   }

  if (input1.length > 50)
  {
  	alert('titre depasse 50 caractere');
  }
  
  if (input2.length > 300)
  {
  	alert('description depasse 200 caractere');
  }

}

function controle3 ()
{
	
	var input1=document.getElementById('login').value;
    var input2=document.getElementById('nom').value;
    var input3=document.getElementById('prenom').value;
    var input4=document.getElementById('email').value;
    var input5=document.getElementById('numero').value;
    var input6=document.getElementById('mdp').value;
    var input7=document.getElementById('confirmer_mpd').value;



   /*if(input1 == '' || input2 == '' || input3 == '' || input5 == '' || input6 == '' || input7 == '')
	{
		alert('champs vide');
	}*/
	
   if (input1.charAt(0) == " " || input2.charAt(0) == " " || input3.charAt(0) == " " || input4.charAt(0) == " " || input5.charAt(0) == " " || input6.charAt(0) == " " || input7.charAt(0) == " ")
   {
   	alert('verifier vos champs (espace premier charactere)');
   }


  if (input2.length > 20)
  {  
  	alert('nom depasse 20 caractere');
  }
  
  if (input3.length > 20)
  { 
  	alert(' prenom depasse 20 caractere');
  }

  
var chaine=input2.toUpperCase();
	var i;
	var test=0;

	for (i=0;i<chaine.length;i++)
	{
		if(chaine.charCodeAt(i)<65 || chaine.charCodeAt(i)> 90)
		{
			if(chaine.charAt(i) != " ")
			{
				test=1;
			}
		}
	}
	if(test==1)
	{
		alert("problem dans nom");
	}


	var chaine2=input3.toUpperCase();
	var j;
	var t=0;
	
	for (j=0;j<chaine2.length;j++)
	{
		if(chaine2.charCodeAt(j)<65 || chaine2.charCodeAt(j)> 90)
		{
			if(chaine2.charAt(j) != " ")
			{
				t=1;
			}
		}
	}
	if(t==1)
	{
		alert("problem dans prenom");
	}

   if(input6 != input7)
    {
    	alert("probleme dans cofirmer mot de passe");
    }


   /*if(input5.length > 8)
   {
   	alert("numero incorrecte");
   }*/

    /*if(input5. > 8)
    {
    	alert("numero saisie superieur a 8 chiffre")
    }
   var numbers = /^[0-9]+$/;
    var numbers = [0,1,2,3,4,5,6,7,8,9];

   if(!(input5.search(numbers)))
   {
   	alert("ok");
   }
   else
      {
      alert('Please input numeric characters only');
    }*/
    


    /*if(input6.value <7)
    {  
    	alert("mot de passe inferieur a 7 caractere");
    }
*/

    

}

function controle4 ()
{
	
    var input2=document.getElementById('nom').value;
    var input3=document.getElementById('prenom').value;
    var input4=document.getElementById('email').value;
    var input5=document.getElementById('numero').value;
    var input6=document.getElementById('mdp').value;
    var input7=document.getElementById('confirmer_mpd').value;



   /*if(input2 == '' || input3 == '' || input5 == '' || input6 == '' || input7 == '')
	{
		alert('champs vide');
	}*/
	
   if (input2.charAt(0) == " " || input3.charAt(0) == " " || input4.charAt(0) == " " || input5.charAt(0) == " " || input6.charAt(0) == " " || input7.charAt(0) == " ")
   {
   	alert('verifier vos champs (espace premier charactere)');
   }


  if (input2.length > 20)
  {  
  	alert('nom depasse 20 caractere');
  }
  
  if (input3.length > 20)
  { 
  	alert(' prenom depasse 20 caractere');
  }

  
var chaine=input2.toUpperCase();
	var i;
	var test=0;

	for (i=0;i<chaine.length;i++)
	{
		if(chaine.charCodeAt(i)<65 || chaine.charCodeAt(i)> 90)
		{
			if(chaine.charAt(i) != " ")
			{
				test=1;
			}
		}
	}
	if(test==1)
	{
		alert("problem dans nom");
	}


	var chaine2=input3.toUpperCase();
	var j;
	var t=0;
	
	for (j=0;j<chaine2.length;j++)
	{
		if(chaine2.charCodeAt(j)<65 || chaine2.charCodeAt(j)> 90)
		{
			if(chaine2.charAt(j) != " ")
			{
				t=1;
			}
		}
	}
	if(t==1)
	{
		alert("problem dans prenom");
	}

   if(input6 != input7)
    {
    	alert("probleme dans cofirmer mot de passe");
    }



   /*if(input5.length > 8)
   {
   	alert("numero incorrecte");
   }*/

    /*if(input5. > 8)
    {
    	alert("numero saisie superieur a 8 chiffre")
    }
   var numbers = /^[0-9]+$/;
    var numbers = [0,1,2,3,4,5,6,7,8,9];

   if(!(input5.search(numbers)))
   {
   	alert("ok");
   }
   else
      {
      alert('Please input numeric characters only');
    }*/
    


    /*if(input6.value <7)
    {  
    	alert("mot de passe inferieur a 7 caractere");
    }
*/

    
}


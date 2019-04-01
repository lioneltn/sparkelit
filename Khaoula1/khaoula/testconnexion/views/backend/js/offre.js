//input fields

const id=document.getElementById("exampleInputID");
const idSlider=document.getElementById("exampleInputIDSlider");
const nom=document.getElementById("exampleInputNom");
const desc=document.getElementById("exampleInputDescripition");
const prix=document.getElementById("exampleInputPrix");
const prix_anc=document.getElementById("exampleInputPrix_anc");
//form

const forms=document.getElementById("MyForms");

//validation colors


const red ='#F44336';

function confirmersupp()
{
	confirm("Etes vous sur de supprimer cet offre?");
}

function validerID()
{
//si il est vide
if(checkIfEmpty(id))
	return;
//si il ya seulement des nombres
if(checkIfOnlyNumbers(id))
    return true;
}


function validerNom()
{
//si il est vide
if(checkIfEmpty(nom))
	return;
//si il ya seulement des nombres
if(checkIfOnlyLetters(nom))
    return true;
}

function valideridSlider()
{
//si il est vide
if(checkIfEmpty(idSlider))
	return;
//si il ya seulement des nombres
if(checkIfOnlyNumbers(idSlider))
    return;
}

function validerPrix()
{
//si il est vide
if(checkIfEmpty(prix))
	return;
//si il ya seulement des nombres
if(checkIfOnlyNumbers(prix))
    return;
}

function validerPrix_anc()
{
//si il est vide
if(checkIfEmpty(prix_anc))
	return;
//si il ya seulement des nombres
if(checkIfOnlyNumbers(prix_anc))
    return;
}

function checkIfEmpty(field)
{
	if(isEmpty(field.value.trim()))
	{
		setInvalid(field,`${field.value} Ne laissez pas les champs vide!`)
		return true;
	}
	else 
	{
		setValid(field)
		return false;
	}
}


function isEmpty(value)
{
	if(value === "")
		return true;
	    return false;
}


function setInvalid(field,message)
{

field.nextElementSibling.innerHTML = message;
field.nextElementSibling.style.color = red;
}

function setValid(field)
{

field.nextElementSibling.innerHTML = "";
//field.nextElementSibling.style.color = green;
}

function checkIfOnlyNumbers(field)
{
	if(/^[0-9]+$/.test(field.value))
	{
		setValid(field);
		return true;
	}
	else 
	{
        setInvalid(field, `${field.name} must contain only numbers`)
        return false;
	}
}

function checkIfOnlyLetters(field)
{
	if(/^[A-Za-z]+$/.test(field.value))
	{
		setValid(field);
		return true;
	}
	else 
	{
        setInvalid(field, `${field.name} must contain only letters and 8 caracters `);
        return false;
	}
}

/*function checkIfdesc(field)
{
	if(/^[%]+$/.test(field.value) )
	{
		setValid(field);
		return true;
	}
	else 
	{
        setInvalid(field, `${field.name} Description trop longue `);
        return false;
    }
}

*/

/*function annuler()
{
	
	 if(prix!="" )
	 {
	 	 prix=document.getElementById("exampleInputPrix").value="";
	 }


	 if(nom!="" ) 
	 {
		nom=document.getElementById("exampleInputNom").value="";
	 }


	 if( desc!="")
	 {
	 	 desc=document.getElementById("exampleInputDescripition").value="";	
	 }
	
	 if (prix_anc!="")
	 {
         prix_anc=document.getElementById("exampleInputPrix_anc").value="";
     }
}
*/

    function confirmerajouterOffre()
{
	if(id=="" && nom=="" && desc=="" && prix=="" && prix_anc=="")
	{
swal({
    //swal("Hello world!");
  title: "Opps! Erreur!",
  //text: "You clicked the button!",
  icon: "warning",

     });
	}
	else
	{
  swal({
    //swal("Hello world!");
  title: "Offre ajoutée!",
  //text: "You clicked the button!",
  icon: "success",

     });
   }

}
function validerSuppOffre()
{
swal({
    //swal("Hello world!");
  title: "Offre supprimée!",
  //text: "You clicked the button!",
  icon: "success",

     });
 }
								
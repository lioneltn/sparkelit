//input fields

const id=document.getElementById("exampleInputID");
const nom=document.getElementById("exampleInputNom");
const desc=document.getElementById("exampleInputDescripition");
const prix=document.getElementById("exampleInputPrix");
const prix_anc=document.getElementById("exampleInputPrix_anc");
//form

const forms=document.getElementById("MyForms");

//validation colors

const green ='#ACAF50';
const red ='#F44336';


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

function validerDesc()
{
//si il est vide
if(checkIfEmpty(desc))
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
        setInvalid(field, `${field.name} contient seulement des nombres`)
        return false;
	}
}

function checkIfOnlyLetters(field)
{
	if(/^[A-Za-z0-9]+$/.test(field.value))
	{
		setValid(field);
		return true;
	}
	else 
	{
        setInvalid(field, `${field.value} seulement nombres , caracteres et % `);
        return false;
	}
}


